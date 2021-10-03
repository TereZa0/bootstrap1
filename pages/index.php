<?php
require_once('../temp/source.php');
if (!isset($TPL)) {
    $TPL = new source();
    $TPL->title = "Home";
    $TPL->bodycontent = __FILE__;
    include "../layout/layout.php";
    exit;
}

?>

<script>
    function python() {
        window.location.href = "https://en.wikipedia.org/wiki/Python_(programming_language)";
    }

    function php() {
        window.location.href = "https://id.wikipedia.org/wiki/PHP";
    }

    function css() {
        window.location.href = "https://en.wikipedia.org/wiki/CSS";
    }

    function html() {
        window.location.href = "https://id.wikipedia.org/wiki/HTML";
    }

    function mysql() {
        window.location.href = "https://id.wikipedia.org/wiki/MySQL";
    }

    function js() {
        window.location.href = "https://id.wikipedia.org/wiki/JavaScript";
    }
    function stck() {
        window.location.href = "https://stackoverflow.com/";
    }
    function skk() {
        window.location.href = "https://sekolahkoding.com/";
    }
    function w3() {
        window.location.href = "https://www.w3schools.com/";
    }
</script>

<style>
    /* .container {
        background-color: rgb(0, 0, 0);
        Fallback color
        background-color: rgba(0, 0, 0, 0.4);
        Black w/opacity/see-through
        z-index: 2;
        padding: 20px;
        text-align: center;
        border-radius: 9px;
    } */

    #ctn {
        margin-top: 100px;
        z-index: 2;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 9px;
    }

    .rounded {
        max-height: 65%;
        max-width: 65%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    #jb1 {
        background-image: url(../file/img/wallpaperflare.com_wallpaper.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        color: black;
        -webkit-text-stroke: 0.5px white;
        border-radius: 9px;
    }

    #jbt1 p {
        font-weight: 200;
    }
</style>

<!-- <div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
<div class="bg-image img6"></div> -->

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" id="jb1">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Discover a New Jurney</h1>
        <p class="lead font-weight-bold">Discover your new jurney in programing with every people in the world.</p>
        <!-- <a class="btn btn-outline-secondary" href="#">Coming soon</a> -->
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<div class="container mt-5 mb-2" id="ctn">
    <div class="row mt-2" id="row1">
        <div class="col mt-2">
            <!-- <div class="p-5 mb-4 bg-light rounded-3" id="jumbotron">
                <div class="container-fluid py-5" style="color: black;">
                    <h1 class="display-5 fw-bold">Discover a New Jurney</h1>
                    <p class="col-md-8 fs-4" align="left">
                        Discover your new jurney in programing with every people <strong style="color: white;">in</strong> the world.
                    </p>
                    <button class="btn btn-primary btn-lg" type="button" href="">See Detail</button>
                </div>
            </div> -->
        </div>
    </div>
    <div class="row g-1 mt-2" id="row2">
        <div class="h4" align="center">
            <code style="color: white;">The New Jurney has Begun</code>
            <hr id="mn-ln" align="center" style="width: 40%; border: 2px solid white;">
        </div>

        <div class="col-6" id="rgt" style="font-family: 'Segoe UI'; width: 100%;">
            <img src="../file/img/wallpaperflare.com_wallpaper__7_-removebg-preview-removebg-preview.png" class="rounded float-start" alt="" id="py-img">
            <h2 class="d-flex ms-1" id="Python"><code style="color: white;">
                    Python
                </code>
            </h2>
            <p class="h6 d-flex">
                Python adalah bahasa pemrograman tujuan umum yang ditafsirkan, tingkat tinggi. Dibuat oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991, filosofi desain Python menekankan keterbacaan kode dengan penggunaan spasi putih yang signifikan.
            </p>
            <button class="btn btn-primary btn-lg float-start" type="button" onclick="python()">See Detail</button>
        </div>

        <!-- <hr style="width: 80%;"> -->
        <div align="right">
            <hr style="max-width: 900px;">
        </div>

        <div class="col mt-2" id="lft">
            <img src="../file/img/php.png" id="php-img" class="rounded float-end" alt="">
            <h2 class="h2" id="php" align="right"><code style="color: white;">
                    PHP
                </code>
            </h2>
            <p class="h6 text-wrap" align="right">
                Hypertext Preprocessor Bahasa Pemrograman yg di perlukan untuk menghubungkan website dengan server ataupun Database.
            </p>
            <button class="btn btn-primary btn-lg float-end" type="button" onclick="php()">See Detail</button>
        </div>

        <div align="left">
            <hr style="max-width: 900px;">
        </div>

        <div class="col-6" id="rgt" style="font-family: 'Segoe UI'; width: 100%;">
            <img src="../file/img/css-removebg-preview.png" class="rounded float-start" alt="">
            <h2 class="d-flex ms-1" id="css" align="left"><code style="color: white;">
                    CSS
                </code>
            </h2>
            <p class="h6 d-flex text-wrap" align="left">
                Cascading Style Sheets (CSS) merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemograman.
            </p>
            <button class="btn btn-primary btn-lg float-start" type="button" onclick="css();">See Detail</button>
        </div>

        <div align="right">
            <hr style="max-width: 900px;">
        </div>

        <div class="col mt-2" id="lft">
            <img src="../file/img/html-removebg-preview.png" class="rounded float-end" alt="">
            <h2 class="h2" id="html" align="right"><code style="color: white;">
                    HTML
                </code>
            </h2>
            <p class="h6 text-wrap" align="right">
                Hypertext Markup Language adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. Ini dapat dibantu oleh teknologi seperti Cascading Style Sheets dan bahasa scripting seperti JavaScript dan VBScript.
            </p>
            <button class="btn btn-primary btn-lg float-end" type="button" onclick="html()">See Detail</button>
        </div>

        <div align="left">
            <hr style="max-width: 900px;">
        </div>

        <div class="col-6" id="rgt" style="font-family: 'Segoe UI'; width: 100%;">
            <img src="../file/img/mysql-removebg-preview.png" class="rounded float-start" alt="">
            <h2 class="d-flex ms-1" id="mysql" align="left"><code style="color: white;">
                    MYSQL
                </code>
            </h2>
            <p class="h6 d-flex text-wrap" align="left">
                MySQL adalah sebuah perangkat lunak sistem manajemen basis data SQL atau DBMS yang multialur, multipengguna, dengan sekitar 6 juta instalasi di seluruh dunia.
            </p>
            <button class="btn btn-primary btn-lg float-start" type="button" onclick="mysql();">See Detail</button>
        </div>

        <div align="right">
            <hr style="max-width: 900px;">
        </div>

        <div class="col mt-2" id="lft">
            <img src="../file/img/js-removebg-preview.png" class="rounded float-end" alt="">
            <h2 class="h2" id="js" align="right"><code style="color: white;">
                    JavaScript
                </code>
            </h2>
            <p class="h6 text-wrap" align="right">
                JavaScript adalah bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome, Internet Explorer, Mozilla Firefox, Netscape dan Opera. Kode JavaScript dapat disisipkan dalam halaman web menggunakan tag SCRIPT.
            </p>
            <button class="btn btn-primary btn-lg float-end" type="button" onclick="js()">See Detail</button>
        </div>
    </div>
    <hr id="spiltter" class="mb-4" style="max-width: 1000px; margin-left: auto; margin-right: auto; border: 2px solid white;">
    <div class="row g-1">
        <div class="col">
            <div class="p-5 mb-4 bg-light rounded-3" id="jumbotron2">
                <div class="container-fluid py-5" style="color: black;">
                    <h1 class="display-5 fw-bold">Confuse Already?</h1>
                    <p class="col-md-8 fs-4" align="left">
                        That would be happen to anyone who learn how to coding correcly so, dont worry i has solution for that.
                    </p>
                    <!-- <button class="btn btn-primary btn-lg" type="button" href="">See Detail</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="row g-1">
        <div class="co6">
            <div class="h3" align="center">
                <code style="color: white;">Need Place To Learn or Ask❔</code>
                <hr id="mn-ln" align="center" style="width: 40%; border: 2px solid white;">
            </div>
        </div>
        <div class="col mb-3">
            <div class="card-group">
                <div class="card ms-2 me-2">
                    <img src="../file/img/stckov.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">StackOverflow</h5>
                        <p class="card-text">
                            Stack Overflow adalah situs tanya jawab untuk programmer profesional dan antusias. Ini adalah situs unggulan dari Stack Exchange Network, dibuat pada tahun 2008 oleh Jeff Atwood dan Joel Spolsky. Ini fitur pertanyaan dan jawaban pada berbagai topik dalam pemrograman komputer. 
                        </p>
                    </div>
                    <button type="button" onclick="stck()" id="btn-crd" class="btn btn-outline-secondary">
                        StackOverflow
                    </button>
                    <!-- <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div> -->
                </div>
                <div class="card ms-2 me-2">
                    <img src="../file/img/schcd.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sekolah Koding</h5>
                        <p class="card-text">
                            Tempat belajar programming mulai dari dasar untuk membuat website atau aplikasi dalam bahasa indonesia melalui tulisan dan video tutorial.
                        </p>
                    </div>
                    <button type="button" onclick="skk()" id="btn-crd" class="btn btn-outline-secondary">
                        Sekolah Koding
                    </button>
                    <!-- <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div> -->
                </div>
                <div class="card ms-2 me-2">
                    <img src="../file/img/w3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">W3Schools</h5>
                        <p class="card-text">
                        W3Schools adalah situs web developer informasi, dengan tutorial dan referensi yang berkaitan dengan topik pengembangan web seperti HTML, CSS, JavaScript, PHP, SQL, dan JQuery. Situs ini mendapatkan namanya dari singkatan untuk World Wide Web; W3 adalah numeronym dari WWW. W3Schools tidak berafiliasi dengan W3C.
                        </p>
                    </div>
                    <button type="button" onclick="w3()" id="btn-crd" class="btn btn-outline-secondary">
                        W3Schools
                    </button>
                    <!-- <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>