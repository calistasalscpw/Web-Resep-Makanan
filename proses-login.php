<?php
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $email_or_username = $_POST['email-or-username'];
    $password = $_POST['password'];

    // Lakukan query untuk mencari pengguna dengan email atau username yang cocok
    $query = "SELECT * FROM Users WHERE (email = '$email_or_username' OR username = '$email_or_username') AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        // Jika ditemukan pengguna dengan kombinasi yang sesuai, redirect ke halaman sukses
        header("Location: login_success.php");
        exit();
    } else {
        // Jika tidak ditemukan, tampilkan pesan kesalahan
        echo "<script>alert('Email/Username atau Password salah. Silakan coba lagi.');</script>";
        echo "<script>window.location='login.php';</script>";
        exit();
    }
} else {
    // Jika pengguna mencoba mengakses langsung skrip ini, redirect ke halaman login
    header("Location: login.php");
    exit();
}
?>
