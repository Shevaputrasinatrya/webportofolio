<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "portofolio";

    $connect    = mysqli_connect($host,$user,$password,$database) or die("Gagal Menghubungkan");

    if (!$connect) {
        echo 'Gagal Menghubungkan';
     }else{
        // echo  'Connect successfully!';
     }

?>