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
    <h1 class="p-3">Produk</h1>
  </center>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="images/motor3.jpg" class="card-img-top" alt="images/motor1.jpg">
          <div class="card-body">
            <h5 class="card-title">DUCATI</h5>
            <p class="card-text text-success">
              <b>$120</b>
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <div class="card-body">
              <button class="btn btn-primary">Lihat Detail</button>
              <button class="btn btn-success px-4">Beli</button>
            </div>
          </ul>

        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="images/motor5.jpg" class="card-img-top" alt="images/motor1.jpg">
          <div class="card-body">
            <h5 class="card-title">VERZA 120</h5>
            <p class="card-text text-success">
              <b>$200</b>
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <div class="card-body">
              <button class="btn btn-primary">Lihat Detail</button>
              <button class="btn btn-success px-4">Beli</button>
            </div>
          </ul>

        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="images/motor6.jpg" class="card-img-top" alt="images/motor1.jpg">
          <div class="card-body">
            <h5 class="card-title">MIO</h5>
            <p class="card-text text-success">
              <b>$180</b>
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <div class="card-body">
              <button class="btn btn-primary">Lihat Detail</button>
              <button class="btn btn-success px-4">Beli</button>
            </div>
          </ul>

        </div>
      </div>
    </div>
  </div>
</body>
<?php include('footer.php'); ?>

</html>

<style>
  .card-link {
    text-decoration: none;
    font-size: large;
  }

  .card {
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
  }

  .card-text {
    text-align: justify;
  }


  .col {
    display: flex;
    justify-content: center;
    text-align: left;
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
    margin-inline: 0.2rem;
    padding: 0.2rem;
    transition: transform 0.3s ease;
    /* Menambahkan transisi untuk transformasi */
  }

  .col:hover {
    transform: scale(1.05);
    /* Membesarkan elemen saat dihover */
  }
</style>