<?php

include 'koneksi.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="contact.css">

    <title>Contact View</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
</head>

<body>

<section class="contact">
    <div class="content">
        <h2>Contact Us</h2>
        <p>Please send your feedback or suggestions that are wise and standard, here I as the owner of the website will likely read the responses from all of you (80%), want it to be a suggestion / criticism I am ready to accept unless it triggers a negative nature. Thank you:)</p>
    </div>
    <div class="container">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Palsigunung, jln. Persatuan Rt. 05 Rw. 001,<br>Mekarsari, Cimanggis, Depok<br>Indonesia</p>
                    </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>089662404723</p>
                    </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>shevaputrasinatrya5@gmail.com</p>
                    </div>
            </div>
        </div>
        <div class="contactForm">

                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="card">
                            <div class="card-title">
                                <h2 class="py-2"> Send Message </h2>
                                <hr>
                            </div>

        <div class="card-body">
        <form action="simpandata.php" method="post">
            <div class="inputBox">
                <input type="text" name="uname" required="required">
                <span>Full Name</span>
            </div>
            <div class="inputBox">
                <input type="text" name="email" required="required">
                <span>Email</span>
            </div>
            <div class="inputBox">
                <input type="text" name="judul" required="required">
                <span>Subject</span>
            </div>
            <div class="inputBox">
                <textarea name="msg" required="required"></textarea>
                <span>Type your message...</span>
            </div>
            <div class="inputBox">
                <a href="index.php"><input type="back" name="" value="Back"></a>
            </div>
            <div class="inputBox">
                <a href="#"><input type="submit" name="simpan" value="Send" onclick = "return confirm('Yakin anda ingin Mengirim ?');"></a>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
</body>
</html>

