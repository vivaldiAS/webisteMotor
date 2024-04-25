<?php 
session_start();
?>
<link rel="icon" type="image/png" href="images/logo.jpg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand namaNavbar" href="index.php"
            style="text-decoration: underline;font-family: 'Montserrat', sans-serif;font-family: 'Satisfy', cursive;">
            <img src="images/logo.jpg" alt="logoPerusahaan.jpg" class="logo"> MotorKami
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="profil.php">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="visimisi.php">Visi & Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produk.php">Produk Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakkami.php">Kontak Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">Tentang Kami</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Lainnya</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="artikel.php">Artikel</a></li>
                        <li><a class="dropdown-item" href="galeri.php">Galeri Foto</a></li>
                        <li><a class="dropdown-item" href="daftarklien.php">Daftar Klien</a></li>
                        <li><a class="dropdown-item" href="event.php">Event</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <?php
    // Periksa apakah session 'username' sudah ada
    if (isset($_SESSION['username'])) {
        // Jika sudah login, tampilkan menu dengan nama dan dropdown logout
        echo '<li class="nav-item dropdown nobulat">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">' . $_SESSION['username'] . '</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>';
    } else {
        // Jika belum login, tampilkan menu dengan dropdown sign in dan sign up
        echo '<li class="nav-item dropdown nobulat">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="formlogin.php">Sign in</a></li>
                    <li><a class="dropdown-item" href="formdaftar.php">Sign up</a></li>
                </ul>
              </li>';
    }
    ?>
            </ul>

        </div>
    </div>
</nav>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Satisfy&display=swap');

    .navbar {
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        background-color: white;
    }

    body {
        background-color: #F8F9FA;
    }

    .border {
        background-color: white;
    }

    .nav-link {
        color: black;
        font-family: 'Montserrat', sans-serif;
        margin-left: 0, 5rem;
    }

    h1 {
        color: #333;
        text-decoration: underline;
        font-family: 'Montserrat', sans-serif;
        font-family: 'Satisfy', cursive;
    }
</style>