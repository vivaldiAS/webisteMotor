<?php
session_start();
include '../koneksi.php'; // Menggunakan koneksi.php yang telah Anda buat sebelumnya

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai dari form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Melindungi dari SQL injection
    $username = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);
    $email = mysqli_real_escape_string($koneksi, $email);

    // Query untuk memeriksa apakah username sudah digunakan
    $checkUsernameQuery = "SELECT * FROM users WHERE username='$username'";
    $result = $koneksi->query($checkUsernameQuery);

    // Jika username sudah ada, tampilkan pesan error
    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Username sudah digunakan";
        header("location: ../formdaftar.php"); // Redirect kembali ke halaman pendaftaran
        exit();
    }

    // Query untuk menyimpan data pendaftaran ke dalam database
    $insertQuery = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    if ($koneksi->query($insertQuery) === TRUE) {
        $_SESSION['success'] = "Pendaftaran berhasil";
        header("location: index.php"); // Redirect ke halaman login
        exit();
    } else {
        $_SESSION['error'] = "Gagal melakukan pendaftaran: " . $koneksi->error;
        header("location: formdaftar.php"); // Redirect kembali ke halaman pendaftaran
        exit();
    }
} else {
    // Jika form tidak disubmit, redirect ke halaman pendaftaran
    header("location: formdaftar.php");
    exit();
}

// Menutup koneksi
$koneksi->close();
?>
