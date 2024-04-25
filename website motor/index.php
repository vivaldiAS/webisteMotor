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
  <div id="carouselExampleCaptions" class="carousel slide" style="height:80vh;">
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/carousel3.jpg" class="d-block w-100" alt="images/carousel1.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h5>Jadilah yang terdepan</h5>
          <p>Bagi beberapa orang yang terdepan adalah yang yang terbaik</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/carousel1.jpg" class="d-block w-100" alt="images/carousel1.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h5>Jangan menyerah</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/carousel2.jpg" class="d-block w-100" alt="images/carousel1.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h5>Jangan putus asa</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</body>
<?php include('footer.php'); ?>

</html>

<style>
  .d-block {
    max-height: 9%0vh;
  }

  h1 {
    font-family: 'Montserrat', sans-serif;
    font-family: 'Satisfy', cursive;
  }

  ::selection {
    background-color: rgb(255, 181, 43);
    /* warna latar belakang */
    color: #333;
    /* warna teks */
  }

  .navbar{
    position: fixed;
    z-index: 10;
    width: 100%;
  }
</style>