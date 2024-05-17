<?php

$servername = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

//buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

//periksi koneksi
if($conn->connect_error){
    die("Koneksi gagal: ". $conn->connect_error);
}

/*$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
$connection = mysqli_connect($host, $username, $password, $dbname) or die(mysqli_error());

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;*/

?>