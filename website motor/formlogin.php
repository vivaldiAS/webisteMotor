<?php 
session_start();
include 'bootstrap.html';

if(isset($_SESSION['pwsalah'])){
  $pesan = true;
}

session_destroy();
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
    <form method="POST" action="proses/loginproses.php">
      <center>
        <h1>Login</h1>
      </center>
     
      <center><img src="images/logo.jpg" alt="" class='logo'></center>
      <?php if(isset($pesan)) {?>
        <div style="text-align:center; color:#6E211E; background-color:#F6D9D8; padding:0.4rem;" >
          Username atau password anda salah
        </div>
      <?php } ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        <small>Belum punya akun? <a href="formdaftar.php" style="text-decoration:none;">Silahkan daftar</a></small>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</body>
<?php include('footer.php'); ?>

</html>

<style>
  .form-container {
    border: 1px solid grey;
    width: 30%;
    justify-content: center;
    align-items: center;
    height: fit-content;
    padding: 2rem;
    margin-top: 5%;
    border-radius: 7px;
    box-shadow: 2px 2px 4px rgba(0, 0.5, 0.3, 0.4);
    background-color: white;
  }

  .btn-primary{
    width: 100%;
  }

  body {
    display: flex;
    justify-content: center;
    background-color:#E6E6E6 ;
  }

  .logo {
    width: 40%;
  }
</style>