<?php
session_start();
include '../koneksi.php';

// Mengecek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai dari form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Melindungi dari SQL injection
    $username = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);

    // Query untuk memeriksa kredensial pengguna
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $koneksi->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username; // Simpan username ke dalam session
        header("location: ../index.php"); // Alihkan ke halaman selamat datang atau halaman selanjutnya
    } else {
        $_SESSION['pwsalah'] = true;
        header('location: ../formlogin.php');
    }
}

?>
