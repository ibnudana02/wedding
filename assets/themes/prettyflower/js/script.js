(function ($) {

    "use strict";
    /*------------------------------------------
        = ACTIVE POPUP IMAGE
    -------------------------------------------*/
    if ($(".fancybox").length) {
        $(".fancybox").fancybox({
            openEffect: "elastic",
            closeEffect: "elastic",
            wrapCSS: "project-fancybox-title-style"
        });
    }


    /*------------------------------------------
        = POPUP VIDEO
    -------------------------------------------*/
    if ($(".video-play-btn").length) {
        $(".video-play-btn").on("click", function () {
            $.fancybox({
                href: this.href,
                type: $(this).data("type"),
                'title': this.title,
                helpers: {
                    title: {
                        type: 'inside'
                    },
                    media: {}
                },

                beforeShow: function () {
                    $(".fancybox-wrap").addClass("gallery-fancybox");
                }
            });
            return false
        });
    }


    /* =================
        sampul awal THE BEGINING
    =================*/

    $('#konten').hide(); //hided konten scr deafult
    $(".thebegining").click(function () {
        $(this).hide(); //hide the begining
        $('#konten').show() //show konten
        $("#audio").get(0).play(); //play musik
        document.documentElement.requestFullscreen(); //fullscreen

    });

    /*------------------------------------------
        = NAV BOTTOM BAR
    -------------------------------------------*/

    var navItems = document.querySelectorAll(".mobile-bottom-nav__item");
    navItems.forEach(function (e, i) {
        e.addEventListener("click", function (e) {
            navItems.forEach(function (e2, i2) {
                e2.classList.remove("mobile-bottom-nav__item--active");
            })
            this.classList.add("mobile-bottom-nav__item--active");
        });
    });


    $(".icons").click(function () {

        $("#nav2").animate({
            height: "toggle",
            opacity: "toggle",
        }, 100, 'linear');

        $("#lain").animate({
            height: "toggle",
            opacity: "toggle",
        }, 200, 'linear');

        $("#tutup").toggleClass('rotate');

    });

    $("#lain").click(function () {

        $("#nav2").animate({
            height: "toggle",
            opacity: "toggle",
        }, 100, 'linear');

        $("#lain").animate({
            height: "toggle",
            opacity: "toggle",
        }, 200, 'linear');

        $("#tutup").toggleClass('rotate');

    });

    var $allContentDivs = $('#sampul-konten, #mempelai-konten, #acara-konten, #album-konten, #ucapan-konten, #lokasi-konten, #cerita-konten').hide(); // Hide All Content Divs

    $("#sampul-konten").show();
    $(".dekorasi-sampul").show();
    $(".dekorasi-all").hide();


    $('#sampul, #mempelai, #acara, #album, #ucapan, #lokasi, #cerita').click(function () {
        var $contentDiv = $("#" + this.id + "-konten");

        if (this.id == "sampul") {

            $("#imgbawah").hide();
            $(".dekorasi-sampul").show();
            $(".dekorasi-all").hide();
            // $("#imgatas").hide();

        } else {

            $("#imgbawah").show();
            $(".dekorasi-sampul").hide();
            $(".dekorasi-all").show();


        }
        if ($contentDiv.is(":visible")) {} else {
            $allContentDivs.hide(); // Hide All Divs
            $contentDiv.show(); // Show Div
        }

        $('body,html').animate({
            scrollTop: 0
        }, 600);

    });

    /*=======================================
        Load more content with jQuery - May 21, 2013
        (c) 2013 @ElmahdiMahmoud
    ================================*/

    $(".komen").slice(0, 4).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".komen:hidden").slice(0, 4).slideDown();
        if ($(".komen:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
            $("#loadMore").fadeIn('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });


    /*=================
     FORMAT TANGGAL
    ======================= */
    moment.locale('id'); //set indonesian format

    //output = Senin, 17 Agustus 2020
    var date_resepsi = moment(tanggal_resepsi).format('dddd, Do MMMM YYYY');
    var date_akad = moment(tanggal_akad).format('dddd, Do MMMM YYYY');

    //output = 17 / 08 / 2020
    var date_pernikahan = moment(tanggal_akad).format('DD / MM / YYYY'); //untuk sampul


    $('#tanggal-acara-resepsi').html(date_resepsi);
    $('#tanggal-acara-akad').html(date_akad);
    $('.tanggal-weddingnya').html(date_pernikahan); //untuk sampul

    /*=================
     ADD KOMENTAR
    ======================= */
    $('#submitKomen').on('click', function (event) {

        var nama = $('#nama').val();
        var komentar = $('#komentar').val();

        if (nama != null && komentar != null) {
            $('#loading_').hide();
            $('#submitKomen').show();
        }
        $.ajax({
            url: base_url + '/postPesan',
            method: "POST",
            data: {
                nama: nama.trim(),
                pesan: komentar.trim()
            },
            async: true,
            dataType: 'JSON',
            beforeSend: function () {
                // Show image container
                // $("#loading_").show();
                // $('#submitKomen').hide();
                if (nama != null && komentar != null) {
                    $('#loading_').show();
                    $('#submitKomen').show();
                } else {
                    $('#loading_').show();
                    $('#submitKomen').hide();
                }
            },
            success: function (hasil) {
                var json = hasil;
                // console.log(json);
                var status = json.status;
                var nama = json.nama;
                var komentar = json.pesan;

                if (status == 'sukses') {

                    $('.layout-komen').append("<div class='komen' style='display:block'><div class='col-12 komen-nama'>" + nama + "</div><div class='col-12 komen-isi'>" + komentar + "</div></div>");
                    $('#nama').val('');
                    $('#komentar').val('');
                    $(".komen:hidden").slice(0, 100).slideDown();
                    $("html, body").animate({
                        scrollTop: $(document).height()
                    }, 1000);
                    $("#loadMore").fadeOut('slow');
                    $('#loading_').hide();
                    // $('#loading_').css('display', 'none');
                    $('#submitKomen').css('display', 'block');
                    // $('#submitKomen').prop('disabled', true);
                }
            },
            complete: function () {
                $('#loading_').hide();
            }
        });
    });

    // Load More
    $('#loadMore').on('click', function (event) {
        $.ajax({
            url: base_url + '/loadmore',
            data: {
                offset: $('#offset').val(),
                limit: $('#limit').val()
            },
            dataType: 'json',
            success: function (data) {
                var net = data.view;
                console.log(net);
                var html = '';
                var i;
                for (i = 0; i < net.length; i++) {
                    html += "<div class='komen' style='display:block'><div class='col-12 komen-nama'>" + net[i].nama + "</div><div class='col-12 komen-isi'>" + net[i].pesan + "</div></div>";
                    // console.log(html);
                }
                $('.layout-komen').append(html);
                $('#offset').val(data.offset);
                $('#limit').val(data.limit);
                $('#loadMore').show();
            },
            complete: function () {
                $('#loadMore').css("display", "block");
            }
        });
    });

})(window.jQuery);