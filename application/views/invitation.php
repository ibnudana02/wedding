<!DOCTYPE html>
<html lang="id">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Ibnu & Vera </title>

    <!-- REQUIRED META AREA	 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#f5f6fa" />
    <meta property="og:title" content="Ibnu & Vera">
    <meta property="og:description" content="Hai! Kamu Di Undang..">
    <meta property="og:url" content="<?= base_url() ?>">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />

    <!-- CSS STYLE AREA	 -->
    <link rel="icon" href="<?= base_url() ?>/assets/base/img/icon.png">
    <link href="<?= base_url() ?>/assets/themes/prettyflower/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/themes/prettyflower/css/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/themes/prettyflower/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/themes/prettyflower/css/all.css">


</head>

<body>

    <!-- ============== HALAMAN AWAL =============== -->
    <div class="thebegining">
        <div class="content-thebegining">
            <img src="<?= base_url() ?>/assets/base/img/logo2.png" style="width:100px;height: 100px;"> <br>
        </div>

        <div class="salam">
            <a style="font-weight: bold;font-size: 30px;color: #2f3640;">Hello!</a><br>
            <a style="font-weight: normal;font-size:18px;"></a><br>
            <a style="font-weight: normal;font-size:18px;color: #2f3640;font-family: sans-serif;">You are invited to our wedding party!</a>
        </div>
        <a style="font-weight: bold;font-size: 12px;color: #2f3640;position: absolute;bottom: 20px;right: 0;left: 0;">klik untuk membuka undangan</a>
    </div>

    <div class="dekorasi-all">
        <img src="<?= base_url() ?>/assets/themes/prettyflower/img/kanan-atas.png" class="imgatas-kanan">
    </div>

    <div class="dekorasi-sampul">
    </div>

    <div id="konten" style="z-index: 1;">


        <!-- ============== MUSIK =============== -->
        <audio loop src="<?= base_url() ?>/assets/audio/audio.mp3" id="audio"></audio>

        <!-- ============== SAMPUL =============== -->
        <div id="sampul-konten" class="konten">
            <table style="width: 100%;margin-top:-50px">
                <tbody>
                    <tr>
                        <th style="text-align: center;">
                            <span class="the-wedding">- THE WEDDING OF -</span>
                        </th>
                    </tr>
                    <tr>
                        <th style="position: relative;text-align: center;display:block;margin-top:50px">


                            <!-- image border cover -->
                            <img src="<?= base_url() ?>/assets/themes/prettyflower/img/bg-flower.png" class="cover-border" /><br>
                            <!-- image border cover -->

                            <img src="<?= base_url() ?>/assets/users/mIjh78y8ge13b89d99c1a29132e57d2ca/kita.png" class="cover-foto" />
                        </th>
                    </tr>
                    <tr>
                        <th style="text-align: center;margin-top:60px;margin-bottom:15px;display: block;">
                            <span class="nama-mempelai">Ibnu & Vera</span>
                        </th>
                    </tr>
                    <tr>
                        <th style="text-align: center;">
                            <span class="tanggal-weddingnya"></span>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ============== MEMPELAI =============== -->
        <div id="mempelai-konten" class="konten" style="display: none;">
            <img src="<?= base_url() ?>/assets/base/img/bismillah.png" class="mempelai-salam-pembuka" /><br>
            <p class="mempelai-intermezzo">Assalamu'alaikum warahmatullahi wabarakatuh

                Dengan memohon rahmat dan ridho Allah SWT, Kami akan menyelenggarakan resepsi pernikahan Putra-Putri kami :</p>

            <img src="<?= base_url() ?>/assets/users/mIjh78y8ge13b89d99c1a29132e57d2ca/groom.png" class="mempelai-img" />

            <h1 class="mempelai-pria-nama">Muhammad Ibnu Wardana</h1>
            <p class="mempelai-pria-ortu">Putra Amir dan Sri Wartini</p>
            <h1 class="dengan">dengan</h1>

            <img src="<?= base_url() ?>/assets/users/mIjh78y8ge13b89d99c1a29132e57d2ca/bride.png" class="mempelai-img" />

            <h1 class="mempelai-wanita-nama">Gusti Vera Hutriani</h1>
            <p class="mempelai-wanita-ortu">Putri Hanafi dan Waslati (Alm)</p>

        </div>


        <!-- ============== ACARA =============== -->
        <div id="acara-konten" style="display: none;" class="konten">

            <div class="section-title">
                <h2> Acara </h2>
            </div>

            <div class="acaranya">
                <table class="tb-acara">
                    <thead>
                        <th colspan="4" class="acara-title">
                            - AKAD NIKAH -
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-calendar icon-acara"></th>
                            <th class="tb-ket-acara"> Tanggal</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara" id="tanggal-acara-akad">2021/02/19</th>
                        </tr>

                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-timer icon-acara"></th>
                            <th class="tb-ket-acara"> Jam</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara">09.00 Pagi</th>
                        </tr>

                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-map-marker icon-acara"></th>
                            <th class="tb-ket-acara"> Tempat</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara">Kediaman Mempelai Wanita<br>Jl. Medan Merdeka Utara No.3 RT.02/RW.03. Gambir, Jakarta Pusat.</th>
                        </tr>


                    </tbody>
                </table>

                <table class="tb-acara">
                    <thead>
                        <th colspan="4" class="acara-title">
                            - WALIMATUL 'URS -
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-calendar icon-acara"></th>
                            <th class="tb-ket-acara"> Tanggal</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara " id="tanggal-acara-resepsi">2021/02/27</th>
                        </tr>

                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-timer icon-acara"></th>
                            <th class="tb-ket-acara"> Jam</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara">10.00 Pagi</th>
                        </tr>

                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-map-marker icon-acara"></th>
                            <th class="tb-ket-acara"> Tempat</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara">Kediaman Mempelai Pria<br>Jl. Sukajadi I Gg. Lele No. 20, Duri - Riau.</th>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

        <!-- ============== UACAPAN/KOMENTAR =============== -->
        <div id="ucapan-konten" style="display: none;" class="konten">

            <div class="col-12 ucapan-field">
                <div class="section-title">
                    <h2>Beri Ucapan</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input id="nama" type="text" class="form-control mt-2" placeholder="Nama Anda" value="" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea id="komentar" class="form-control" id="exampleFormControlTextarea1" placeholder="Pesan anda.." rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button id="submitKomen" class="btn btn-primary btn-block">Kirim</button>
                        <img src="http://undangancnk.online/assets/base/img/loadinga.svg" height="30px" style="display:none;" id="loading_">
                    </div>
                </div>
            </div>
            <div class="komen-netizen">

                <div class="layout-komen">
                    <div class="komen">
                        <div class="col-12 komen-nama">
                            Aninda Safira </div>
                        <div class="col-12 komen-isi">
                            Alhamdulilah, selamat atas pernikahan kalian. Semoga pernikahan kalian dilimpahi oleh cinta, kebaikan dan kebahagiaan. Jazakallahu khairan khatira.. 😊😊😇 </div>
                    </div>
                    <div class="komen">
                        <div class="col-12 komen-nama">
                            Raisa Andriana </div>
                        <div class="col-12 komen-isi">
                            Selamat menikah sahabatku, ‘Barakallahu lakum wa baraka alaikum’ </div>
                    </div>
                    <div class="komen">
                        <div class="col-12 komen-nama">
                            Anisa Rahma </div>
                        <div class="col-12 komen-isi">
                            Alhamdulillah.. Selamat ya. Semoga Allah Swt selalu melimpahkan rahmatNya untuk pernikahan kalian. </div>
                    </div>
                    <div class="komen">
                        <div class="col-12 komen-nama">
                            Maudy Ayunda </div>
                        <div class="col-12 komen-isi">
                            MasyaAllah.. Selamat buat kalian berdua 🥰😘 Barakallah </div>
                    </div>
                    <div class="komen">
                        <div class="col-12 komen-nama">
                            Citra Kirana </div>
                        <div class="col-12 komen-isi">
                            Baarakallahu laka wa baaraka ‘alaika wa jama’a bainakumaa fii khaiir.

                            Semoga Allah memberikan keberkahan untukmu dan atasmu, serta semoga Dia mengumpulkan di antara kalian berdua dalam kebaikan.

                            🤲🤲🤗🤗 </div>
                    </div>
                    <div class="komen">
                        <div class="col-12 komen-nama">
                            Nissya Sabyan </div>
                        <div class="col-12 komen-isi">
                            Semoga pernikahan kalian langgeng dan selalu dinaungi petunjuk Allah dalam setiap langkah.. Aamiin 😘😘 </div>
                    </div>

                </div>

                <a href="#" id="loadMore" class="btn btn-primary btn-block" role="button">Lebih Banyak.</a>
            </div>


        </div>

        <!-- ============== LOKASI =============== -->
        <div id="lokasi-konten" style="display: none;" class="konten">

            <div class="section-title">
                <h2>Denah Lokasi</h2>
            </div>
            <div class="col-12 maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.705836876672!2d106.82198811476884!3d-6.170129095532956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d6aa94d477%3A0xebf3b9d252c86a26!2sMerdeka%20Palace!5e0!3m2!1sen!2sid!4v1595773648767!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>

        </div>

    </div>


    <!-- ============== BOTTOM NAVIGATION =============== -->
    <nav class="mobile-bottom-nav2" id="nav">

        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-12" style="display: flex;margin-bottom: 5px;margin-top: 5px;" id="hehe">

                    <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active" id="sampul">
                        <div class="mobile-bottom-nav__item-content">
                            <!-- <i class="navbar-icon mdi mdi-home"></i> -->
                            <i class="navbar-icon fas fa-home"></i>
                            Sampul
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="mempelai">
                        <div class="mobile-bottom-nav__item-content">
                            <!-- <i class="navbar-icon mdi mdi-heart"></i> -->
                            <i class="navbar-icon fas fa-heart"></i>
                            Mempelai
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="acara">
                        <div class="mobile-bottom-nav__item-content">
                            <!-- <i class="navbar-icon mdi mdi-calendar-text"></i> -->
                            <i class="navbar-icon fas fa-calendar-alt"></i>
                            Acara
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="lokasi">
                        <div class="mobile-bottom-nav__item-content">
                            <!-- <i class="navbar-icon mdi mdi-map-marker"></i> -->
                            <i class="navbar-icon fas fa-map-marker-alt"></i>
                            Lokasi
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="ucapan">
                        <div class="mobile-bottom-nav__item-content">
                            <!-- <i class="navbar-icon mdi mdi-message-bulleted"></i> -->
                            <i class="navbar-icon fas fa-comment-dots"></i>
                            Ucapan
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>

</body>

<div class="dekorasi-all dekorasi-all-bawah">
    <!-- GAMBAR DEKORASI TENGAH -->
    <!-- <img class="imgbawah" src="http://undangancnk.online/assets/themes/prettyflower/img/bottom_flower.png" >  -->
    <!-- GAMBAR DEKORASI KIRI -->
    <!-- <img class="imgbawah-kanan" src="http://undangancnk.online/assets/themes/prettyflower/img/kanan-bawah.png" >  -->
    <!-- GAMBAR DEKORASI KIRI -->
    <img class="imgbawah-kiri" src="<?= base_url() ?>/assets/themes/prettyflower/img/kiri-bawah.png">
</div>

<div class="dekorasi-sampul dekorasi-sampul-bawah">
    <!-- GAMBAR DEKORASI TENGAH -->
    <!-- <img class="imgbawah" src="http://undangancnk.online/assets/themes/prettyflower/img/bottom_flower.png"> -->
    <!-- GAMBAR DEKORASI KIRI -->
    <!-- <img class="imgbawah-kanan" src="http://undangancnk.online/assets/themes/prettyflower/img/kanan-bawah.png"> -->
    <!-- GAMBAR DEKORASI KIRI -->
    <!-- <img class="imgbawah-kiri" src="http://undangancnk.online/assets/themes/prettyflower/img/kiri-bawah.png" > -->
</div>



<!-- mengirimkan data php ke javascript -->
<script>
    // var base_url = 'http://undangancnk.online/';
</script>
<script>
    var tanggal_akad = '2021/02/19';
</script>
<script>
    var tanggal_resepsi = '2021/02/27';
</script>
<!-- mengirimkan data php ke javascript -->

<!-- JS AREA -->
<script src="<?= base_url() ?>/assets/themes/prettyflower/js/moment-with-locales.js"></script>
<script src="<?= base_url() ?>/assets/themes/prettyflower/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/assets/themes/prettyflower/js/jquery.min.js"></script>
<script src="<?= base_url() ?>/assets/themes/prettyflower/js/jquery-plugin-collection.js"></script>
<script src="<?= base_url() ?>/assets/themes/prettyflower/js/script.js"></script>

</html>