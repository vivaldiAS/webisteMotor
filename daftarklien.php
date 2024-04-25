<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Motor</title>
  <?php include 'bootstrap.html'; ?>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <?php include 'navbar.php'; ?>
  <center>
    <h1 class="mt-2">Daftar Klien</h1>
  </center>
  <div class="container">
    <table class="table" style="width:80%;">
      <thead>
        <tr>
          <th scope="col" style="width:20%;">Gambar</th>
          <th scope="col">Nama Perusahaan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="images/logo1.jpg" class="gambarKlien rounded-circle" alt="klien.jpg"></td>
          <td>Yamaha</td>
        </tr>
        <tr>
          <td><img src="images/logo2.jpg" class="gambarKlien rounded-circle" alt="klien.jpg"></td>
          <td>Honda</td>
        </tr>

        <tr>
          <td><img src="images/logo3.jpg" class="gambarKlien rounded-circle" alt="klien.jpg"></td>
          <td>Ninja</td>
        </tr>

        <tr>
          <td><img src="images/logo4.jpg" class="gambarKlien rounded-circle" alt="klien.jpg"></td>
          <td>Vespa</td>
        </tr>
        <tr>
          <td><img src="images/logo5.jpg" class="gambarKlien rounded-circle" alt="klien.jpg"></td>
          <td>Ducati </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
<?php include('footer.php'); ?>

</html>

<style>
  .gambarKlien {
    width: 5rem;
    box-shadow: 4px 4px 4px rgba(0.2, 0.5, 0.3, 0.4);
  }

  .container {
    display: flex;
  }

  .border {
    padding: 1rem;
    border-radius: 8px;
  }

  .sidebar {
    border: 1px solid black;
  }
</style>