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
    <h1 class="p-3">Event</h1>
  </center>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="images/motor3.jpg" class="card-img-top" alt="images/motor1.jpg">
          <div class="card-body">
            <h5 class="card-title">Peluncuran Produk Baru</h5>
            <p class="card-text">Kami dengan bangga mengundang Anda untuk hadir dalam acara peluncuran produk terbaru
              kami. Bergabunglah dengan kami untuk melihat produk inovatif kami yang akan mengubah pengalaman berkendara
              A..</p>
          </div>
          <ul class="list-group list-group-flush">
            <div class="card-body">
              <a href="#" class="card-link">Baca Selengkapnya</a>
            </div>
          </ul>

        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="images/motor5.jpg" class="card-img-top" alt="images/motor1.jpg">
          <div class="card-body">
            <h5 class="card-title">Test Ride Motor Terbaru</h5>
            <p class="card-text">
              Anda ingin merasakan sensasi berkendara dengan motor terbaru kami? Segera daftarkan diri Anda untuk
              mengikuti acara Test Ride Motor Terbaru kami yang akan diadakan pada tanggal 25 Juni 2024 di Surabaya.
              Ni..
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <div class="card-body">
              <a href="#" class="card-link">Baca Selengkapnya</a>
            </div>
          </ul>

        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="images/motor1.jpg" class="card-img-top" alt="images/motor1.jpg">
          <div class="card-body">
            <h5 class="card-title">Workshop Teknik Berkendara</h5>
            <p class="card-text">
              Ingin meningkatkan keterampilan berkendara Anda? Bergabunglah dalam Workshop Teknik Berkendara kami yang
              akan diadakan pada tanggal 10 Juli 2024 di Bandung.
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <div class="card-body">
              <a href="#" class="card-link">Baca Selengkapnya</a>
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

  .container {
    padding: 4rem;
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