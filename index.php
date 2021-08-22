<?php

include 'koneksi.php';

session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Web Portofolio Sheva</title>
    
    <!-- css custom -->
    <link rel="stylesheet" href="css/style.css">

    <!-- font quicksand -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <!-- font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- font lobster -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- font josefin -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

        <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><p>Hello! its Me</p></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    </li>
                    <div class="nav-link">
                        <div class="pe-4"><a href="https://github.com/Shevaputrasinatrya"><i class="fab fa-github fa-2x fa-spin fa-fw"></i></a></div>
                        <div class="pe-4"><a href="about.php">About Us</a></div>
                        <div class="sign"><a href="contact.php">Contact Us</a></div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->


    <div class="container">
        <!-- view -->
        <div class="main-view">
            <h3>Welcome To My Web</h3>
            <p class="mt-5 mb-1">Hello, my name is Sheva Putra Sinatrya just call me Sheva.  <br> I am 17 years old and live in Depok, 
                and I love dancing, singing and designs.</p>

            <a href="about.php"><button class="btn-here">Read more here</button></a>
        </div>

        <img src="img/sheva.png" alt="" class="gambar1">

        <!-- detail -->
        <h2 class="find">Find out more details about the profit strategy</h2>

        <div class="detail">
            <h3>Business Website</h3>
            <p class="mt-4 mb-2">Reach More Customers.
                Internet Usage Continues to Increase.
                Get Customers <br>
                Faster. Promote Your Brand Continuously.
                Gaining Customer Confidence.</p>

            <a href="https://www.niagahoster.co.id/blog/website-adalah-kunci-sukses-bisnis-online/#:~:text=Banyak%20media%20yang%20bisa%20digunakan,dan%20website%20adalah%20salah%20satunya.&text=Bisnis%20online%20sendiri%20adalah%20segala,oleh%20perusahaan%2Dperusahaan%20besar%20saja."><button class="btn-here">Check in full here</button></a>
        </div>

        <img src="img/gambar2.png" alt="" class="gambar2 ms-5">

        <div class="detail1">
            <h3>Web Security</h3>
            <p class="mt-4">Protection, one way that can be done is to be more</p>       
            <p>selective in choosing a web hosting service provider trusted.</p>

            <a href="https://blog.estuwebdesign.com/2015/11/pengertian-web-security/"><button class="btn-check1">Check in full here</button></a>
        </div>

        <img src="img/gambar3.svg" alt="" class="gambar3">

        <!-- app -->
        <div class="app mt-5">
            <h1>Your Website</h1>
            <h5 class="mt-4">Excellence</h5>
            <p class="mt-4"> Another advantage of using a web application is that it is  <br>
                multiplatform or can be used from all gadgets. Starting from  <br>
                computers, tablets, to smartphones. This of course makes it easier for  <br>
                users to have flexible access so that work productivity is not compromised.</p>

            <a href="https://www.sekawanmedia.co.id/pengertian-web-portal/"><button class="btn-here1">Read more here</button></a>
        </div>

        <img src="img/gambar4.png" alt="" class="gambar4">

        <!-- pop -->
        <h2 class="popular">Join Our Team</h2>

        <div class="card-popular">
            <div class="moba">
                <h4>Games Mobile</h4>
                <p>compact and supportive</p>
                <p>Moba</p>
                <p class="req1">Recommendation</p>

                <ul>
                    <li style='list-style-type:none;'><i class="fas fa-gamepad"></i>Mobile Legends</li>
                    <li style='list-style-type:none;'><i class="fas fa-gamepad"></i>League of Legends</li>
                    <li style='list-style-type:none;'><i class="fas fa-gamepad"></i>PUBG Mobile</li>
                    <li style='list-style-type:none;'><i class="fas fa-gamepad"></i>Arena of Valor</li>
                    <li style='list-style-type:none;'><i class="fas fa-gamepad"></i>Vain Glory</li>
                </ul>

                <a href="https://play.google.com/store/apps"><button>Download Now</button></a>
            </div>

            <div class="garena">
                <h4>Design Video</h4>
                <p>criteria</p>
                <p>Video</p>
                <p class="req2">Recommendation</p>

                <ul>
                    <li style='list-style-type:none;'><i class="fas fa-video"></i>Animated videos</li>
                    <li style='list-style-type:none;'><i class="fas fa-video"></i>Short Videos</li>
                    <li style='list-style-type:none;'><i class="fas fa-video"></i>Basic Videos</li>
                    <li style='list-style-type:none;'><i class="fas fa-video"></i>Voice Recording</li>
                    <li style='list-style-type:none;'><i class="fas fa-video"></i>Filmmaking</li>
                </ul>

                <button>Cooperation</button>
            </div>

            <div class="mix">
                <h4>Design Web</h4>
                <p>the best choice</p>
                <p>Web</p>
                <p class="req3">Hot</p>

                <ul>
                    <li style='list-style-type:none;'><i class="fas fa-images"></i>Figma</li>
                    <li style='list-style-type:none;'><i class="fas fa-images"></i>Adobe XD</li>
                    <li style='list-style-type:none;'><i class="fas fa-images"></i>Adobe Photoshop</li>
                    <li style='list-style-type:none;'><i class="fas fa-images"></i>HTML & CSS</li>
                    <li style='list-style-type:none;'><i class="fas fa-images"></i>Bootstrap</li>
                </ul>

                <button>Cooperation</button>
            </div>
        </div>

        <h2 class="projek text-center" style="color: #FA8231">My Project ( Star Book )</h2>
        <hr style="color: #FA8231">

        <div class="card-header bg-primary text-white text-center fs-1">
            <b>*10*</b> Popular Books today !
        </div>
    </div>

    <div class="container overflow">
            <?php $ambil = $connect->query("SELECT * FROM produk")?>
            <?php while($perproduk = $ambil->fetch_assoc()):?>
            <div class="card m-3 float-start" style="width: 11rem; height: 380px;">
                <div class="card-body  text-center ">
                    <img src="<?= $perproduk['gambar'] ?>" class="card-img-top" style="height: 170px;" alt="...">
                    <div class="card-body mt-3">
                        <h6 class="card-title"><small><?= $perproduk['nama_produk'] ?></small></h6>
                        <p class="card-text">Rp. <?= number_format($perproduk['harga'])?></p>
                        <!-- Button trigger modal -->
                        <a href="details.php?id_produk=<?= $perproduk["id_produk"] ?>"  class="btn mt-2 text-light bg-primary">Detail </a>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
    </div>


    <!-- footer -->
    <div class="footer">
       <a href="login.php" style="text-decoration:none"><p>*Admin</p></a>
            <p>Caption*</p>
            <p> In the need for a web to be very good, it is very </p>
            <p> necessary to be profitable with the principle of  <br>
                collaboration, communication, and doing business. <br>
                In this detail we can all understand how someone  <br>
                can see the cover and inside to respect each  <br>
                other between collaborations. </p>

            <div id="help">
                <P>Whatsapp/HP</P>
                    <p><u>089662404723 ( + Tri ) <br>
                        085771606605 ( + Indosat )</u></p>
            </div>

            <div id="info">
                <P>Web Company</P>
                <a href="Company Profile Sendiri/index.html">
                    <p><u>My website design <br>
                        Company Profile</u></p>
                </a>
            </div>

            <div id="contact">
                <P>Admin Page</P>
                <a href="login.php">
                    <p><u>Go to Admin <br>
                        page, click here</u></p>
                </a>
            </div>

            <div id="service">
                <P>Email</P>
                    <p>
                        <u>shevaputrasinatrya5@gmail.com <br>
                       Indonesia - Depok</u></p>
            </div>
    </div>

       <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>

</html>