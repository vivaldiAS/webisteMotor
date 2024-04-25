<?php
session_start();
include 'bootstrap.html';

// Periksa apakah ada pesan error dalam session
if (isset($_SESSION['error'])) {
    // Simpan pesan error ke dalam variabel JavaScript
    echo "<script>var errorMessage = '" . $_SESSION['error'] . "';</script>";
    // Hapus pesan error dari session agar tidak ditampilkan lagi
    unset($_SESSION['error']);
} else {
    // Jika tidak ada pesan error, inisialisasi variabel JavaScript dengan string kosong
    echo "<script>var errorMessage = '';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <div class="form-container">
    <form method="POST" action="proses/daftarproses.php">
      <center>
        <h1>Daftar</h1>
      </center>
      <center><img src="images/logo.jpg" alt="" class='logo'></center>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
        <small>Sudah punya akun? <a href="formlogin.php" style="text-decoration:none;">Silahkan Login</a></small>
      </div>
      <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
  </div>

  <script>
    // Tampilkan pesan error jika ada
    if (errorMessage) {
      alert(errorMessage);
    }
  </script>
</body>

</html>

<style>
  .logo {
    width: 40%;
  }

  .btn-primary{
    width: 100%;
  }

  .form-container {
    border: 1px solid grey;
    width: 30%;
    justify-content: center;
    align-items: center;
    height: fit-content;
    padding: 2rem;
    margin-top: 2%;
    border-radius: 7px;
    box-shadow: 2px 2px 4px rgba(0, 0.5, 0.3, 0.4);
    background-color: white;
  }

  body {
    display: flex;
    justify-content: center;
    background-color:#E6E6E6 ;
  }
</style>