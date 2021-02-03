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
    <link rel="icon" href="<?= base_url() ?>assets/base/img/icon.png">
    <link href="<?= base_url() ?>assets/themes/prettyflower/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/themes/prettyflower/css/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/themes/prettyflower/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/themes/prettyflower/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/themes/prettyflower/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/themes/prettyflower/mdi/css/materialdesignicons.css">

</head>

<body>

    <!-- ============== HALAMAN AWAL =============== -->
    <div class="thebegining">
        <div class="content-thebegining">
            <img src="<?= base_url() ?>assets/base/img/logo2.png" style="width:100px;height: 100px;"> <br>
        </div>

        <div class="salam wow zoomIn" data-wow-duration="0" data-wow-delay="0s">
            <a style=" font-weight: bold;font-size: 30px;color: #2f3640;">Hello!</a><br>
            <a style="font-weight: normal;font-size:18px;"></a><br>
            <a style="font-weight: normal;font-size:18px;color: #2f3640;font-family: sans-serif;">You are invited to our wedding party!</a>
        </div>
        <a style="font-weight: bold;font-size: 12px;color: #2f3640;position: absolute;bottom: 20px;right: 0;left: 0;">klik untuk membuka undangan</a>
    </div>

    <div class="dekorasi-all">
        <img src="<?= base_url() ?>assets/themes/prettyflower/img/kanan-atas.png" class="imgatas-kanan">
    </div>

    <div class="dekorasi-sampul">
    </div>

    <div id="konten" style="z-index: 1;">


        <!-- ============== MUSIK =============== -->
        <audio loop src="<?= base_url() ?>assets/audio/audio.mp3" id="audio"></audio>

        <!-- ============== SAMPUL =============== -->
        <div id="sampul-konten" class="konten">
            <table style="width: 100%;margin-top:-50px">
                <tbody>
                    <tr>
                        <th style="text-align: center;">
                            <span class="the-wedding wow fadeIn" data-wow-duration="0" data-wow-delay="0.2s">- THE WEDDING OF -</span>
                        </th>
                    </tr>
                    <tr>
                        <th style="position: relative;text-align: center;display:block;margin-top:50px">


                            <!-- image border cover -->
                            <img src="<?= base_url() ?>assets/themes/prettyflower/img/bg-flower.png" class="cover-border" /><br>
                            <!-- image border cover -->

                            <img src="<?= base_url() ?>assets/users/mIjh78y8ge13b89d99c1a29132e57d2ca/kita.png" class="cover-foto" />
                        </th>
                    </tr>
                    <tr>
                        <th style="text-align: center;margin-top:60px;margin-bottom:15px;display: block;">
                            <span class="nama-mempelai wow zoomInUp" data-wow-duration="0.3" data-wow-delay="0.6s">Ibnu & Vera</span>
                        </th>
                    </tr>
                    <tr>
                        <th style=" text-align: center;" class="wow bounce" data-wow-duration="0.1" data-wow-delay="1s">
                            <span class="tanggal-weddingnya"></span>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ============== MEMPELAI =============== -->
        <div id="mempelai-konten" class="konten" style="display: none;">
            <img src="<?= base_url() ?>assets/base/img/bismillah.png" class="mempelai-salam-pembuka" /><br>
            <p class="mempelai-intermezzo wow zoomIn" data-wow-duration="0.3" data-wow-delay="0.1s">Assalamu'alaikum warahmatullahi wabarakatuh

                Dengan memohon rahmat dan ridho Allah SWT, Kami akan menyelenggarakan resepsi pernikahan Putra-Putri kami :</p>

            <img src="<?= base_url() ?>assets/users/mIjh78y8ge13b89d99c1a29132e57d2ca/ibnu.jpg" class="mempelai-img wow slideInLeft" data-wow-duration="0.3" data-wow-delay="0.1s" />

            <h1 class="mempelai-pria-nama wow zoomIn" data-wow-duration="0.3" data-wow-delay="0.1s">Muhammad Ibnu Wardana, S.Kom</h1>
            <p class="mempelai-pria-ortu wow zoomIn" data-wow-duration="0.3" data-wow-delay="0.1s">Putra Amir dan Sri Wartini</p>
            <h1 class="dengan wow zoomIn" data-wow-duration="0.3" data-wow-delay="0.1s">dengan</h1>

            <img src="<?= base_url() ?>assets/users/mIjh78y8ge13b89d99c1a29132e57d2ca/bride.png" class="mempelai-img wow slideInLeft" data-wow-duration="0.3" data-wow-delay="0.1s" />

            <h1 class="mempelai-wanita-nama wow zoomIn" data-wow-duration="0.3" data-wow-delay="0.1s">Gusti Vera Hutriani, S.Pd</h1>
            <p class="mempelai-wanita-ortu wow zoomIn" data-wow-duration="0.3" data-wow-delay="0.1s">Putri Hanafi dan Waslati (Alm)</p>

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
                            <th class="tb-ic-acara"><i class="mdi mdi-calendar-heart icon-acara"></th>
                            <th class="tb-ket-acara"> Tanggal</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara" id="tanggal-acara-akad">2021/02/19</th>
                        </tr>

                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-clock-time-eight-outline icon-acara"></th>
                            <th class="tb-ket-acara"> Jam</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara">09.00 Pagi</th>
                        </tr>

                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-map-marker-outline icon-acara"></th>
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
                            <th class="tb-ic-acara"><i class="mdi mdi-calendar-heart icon-acara"></th>
                            <th class="tb-ket-acara"> Tanggal</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara " id="tanggal-acara-resepsi">2021/02/27</th>
                        </tr>

                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-clock-time-eight-outline icon-acara"></th>
                            <th class="tb-ket-acara"> Jam</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara">10.00 Pagi</th>
                        </tr>

                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-map-marker-outline icon-acara"></th>
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
                <!-- <form action="<?= base_url('welcome/postPesan') ?>" method="post"> -->
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input id="nama" type="text" name="nama" class="form-control mt-2" placeholder="Nama Anda" value="" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea id="komentar" class="form-control" name="pesan" placeholder="Pesan anda.." rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button id="submitKomen" type="submit" class="btn btn-primary btn-block">Kirim</button>
                        <img src="<?= base_url() ?>assets/base/img/tail-spin.svg" height="30px" style="display:none;" id="loading_">
                    </div>
                </div>
                <!-- </form> -->
            </div>
            <div class="komen-netizen">
                <div class="layout-komen">
                    <?php foreach ($data as $value) : ?>
                        <div class='komen' style='display:block'>
                            <div class='col-12 komen-nama'><?= ucwords($value->nama) ?></div>
                            <div class='col-12 komen-isi'><?= ucfirst($value->pesan) ?></div>
                        </div>
                    <?php endforeach; ?>
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
                            <i class="navbar-icon fas fa-home"></i>
                            Sampul
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="mempelai">
                        <div class="mobile-bottom-nav__item-content">
                            <i class="navbar-icon fas fa-heart"></i>
                            Mempelai
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="acara">
                        <div class="mobile-bottom-nav__item-content">
                            <i class="navbar-icon fas fa-calendar-alt"></i>
                            Acara
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="lokasi">
                        <div class="mobile-bottom-nav__item-content">
                            <i class="navbar-icon fas fa-map-marker-alt"></i>
                            Lokasi
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="ucapan">
                        <div class="mobile-bottom-nav__item-content">
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
    <img class="imgbawah-kiri" src="<?= base_url() ?>assets/themes/prettyflower/img/kiri-bawah.png">
</div>

<div class="dekorasi-sampul dekorasi-sampul-bawah">

    <script>
        var base_url = '<?= base_url('welcome') ?>';
        var tanggal_akad = '2021/02/19';
        var tanggal_resepsi = '2021/02/27';
    </script>
    <!-- JS AREA -->
    <script src="<?= base_url() ?>assets/themes/prettyflower/js/moment-with-locales.js"></script>
    <script src="<?= base_url() ?>assets/themes/prettyflower/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/themes/prettyflower/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/themes/prettyflower/js/jquery-plugin-collection.js"></script>
    <script src="<?= base_url() ?>assets/themes/prettyflower/js/script.js"></script>
    <script src="<?= base_url() ?>assets/themes/prettyflower/js/wow.min.js"></script>
    <script>
        new WOW().init();
        $(document).ready(function() {
            $('#nama').val('');
            $('#komentar').val('');
        })
    </script>

</html>