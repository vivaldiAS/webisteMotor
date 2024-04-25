<?php 
include 'koneksi.php';
$sql = "SELECT * FROM artikel";
$result = $koneksi->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <?php
    include('bootstrap.html');
    ?>
</head>
<body>
    <?php
    include('navbar.php');
    ?>
    <div class="container">

    <center><h1>Artikel</h1></center>

    <?php if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>
    <div class="card">
  <div class="card-header">
    <?= $row['judul']; ?>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>
      <?= $row['isi']; ?>
      </p>
      <footer class="blockquote-footer">Ditulis oleh<cite title="Source Title">
      <?= $row['author']; ?>
</cite></footer>
    </blockquote>
  </div>
</div>
<br>
<?php }}else{
    echo 'Tidak ada artikel';
} ?>

    </div>
</body>
<?php include('footer.php'); ?>
</html>

<style>
    .container{
        margin-top: 3rem;
    }
    .card{
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
</style>