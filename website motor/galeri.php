<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Motor</title>
  <?php include 'bootstrap.html'; ?>
</head>

<body>
  <?php include 'navbar.php'; ?>
  <center>
    <h1 class="p-3">Galery Foto</h1>
  </center>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <img src="images/motor1.jpg" class="gambarMotor img-fluid" alt="">
      </div>
      <div class="col">
        <img src="images/motor2.jpg" class="gambarMotor img-fluid" alt="">
      </div>
      <div class="col">
        <img src="images/motor3.jpg" class="gambarMotor img-fluid" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <img src="images/motor4.jpg" class="gambarMotor img-fluid" alt="">
      </div>
      <div class="col">
        <img src="images/motor5.jpg" class="gambarMotor img-fluid" alt="">
      </div>
      <div class="col">
        <img src="images/motor6.jpg" class="gambarMotor img-fluid" alt="">
      </div>
    </div>
  </div>
</body>
<?php include('footer.php'); ?>

</html>

<style>
  .container {
    padding: 4rem;
  }

  .border {
    padding: 1rem;
    border-radius: 8px;
  }

  .row {
    margin-top: 1rem;
  }

  .gambarMotor {
    border-radius: 7px;
  }

  .col {
    border-radius: 7px;
    border: 2px solid grey;
    margin-inline: 0.2rem;
    padding: 0.2rem;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    transition: transform 0.3s ease;
    /* Menambahkan transisi untuk transformasi */
  }

  .col:hover {
    transform: scale(1.05);
    /* Membesarkan elemen saat dihover */
  }
</style>