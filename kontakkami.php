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
        <center>
            <h1 class="mt-5 mb-4">Kontak Kami</h1>
        </center>
        <div class="row" style="border-radius:7px;">
            <div class="col-md-6">
                <h2>Informasi Kontak</h2>
                <p><strong>Alamat:</strong> Jalan Kartini No. 123, Kota Balige, 12345</p>
                <p><strong>No. Telepon:</strong> (0123) 456-789</p>
                <p><strong>Fax:</strong> (0123) 456-789</p>
                <p><strong>Email:</strong> info@motorkami.com</p>
            </div>
            <div class="col-md-6">
                <h2>Formulir Kontak</h2>
                <form method="post" action="proses/pesanproses.php"
                    <?php if(!isset($_SESSION['username'])) echo 'onsubmit="return false;"'; ?>>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">
                            <h6>Pesan</h6>
                        </label>
                        <textarea class="form-control" id="pesan" rows="5" placeholder="Tulis pesan Anda"
                            name="pesan"></textarea>
                    </div>
                    <?php 
                    if(isset($_SESSION['username'])){?>
                    <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
                    <?php } ?>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include('footer.php'); ?>

</html>

<style>
    .col-md-6{
        padding: 1rem;
    }
    .row
    {
        background-color: white;
        box-shadow: 2px 2px 4px rgba(0, 0.5, 0.3, 0.4);
    }
</style>