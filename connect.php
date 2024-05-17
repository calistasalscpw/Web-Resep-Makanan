<?php
    $hostname = "localhost";
    $userDataBase = "root";
    $passwordUser = "";
    $databaseName = "masakuy";

    $connection = mysqli_connect($hostname, $userDataBase, $passwordUser, $databaseName) or die(mysqli_error());

    //if ($connection){
        //echo "Berhasil Koneksi";
    //} else echo "Gagal koneksi";
?>