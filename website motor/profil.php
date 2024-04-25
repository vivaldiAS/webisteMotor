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

    <div class="container mt-3">

        <div class="border border-secondary-subtle p-2 m-2">
            <center>
                <h1>Produk dan Jasa Kami:</h1>
            </center>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <p class="fs-6" style="text-align:justify;">
                            1. Penjualan Sepeda Motor Baru: Kami menawarkan berbagai jenis sepeda motor baru dari
                            merek-merek terkemuka dalam industri otomotif. Dari sepeda motor harian yang ekonomis hingga
                            motor sport yang berperforma tinggi, kami memiliki pilihan yang sesuai dengan kebutuhan dan
                            preferensi Anda.
                            <br><br>
                            2. Penjualan Sepeda Motor Bekas: Selain sepeda motor baru, kami juga menyediakan sepeda
                            motor bekas yang telah melalui proses pengecekan dan perawatan menyeluruh. Kami menawarkan
                            sepeda motor bekas berkualitas dengan harga yang terjangkau, memberikan Anda kesempatan
                            untuk memiliki kendaraan berkualitas tanpa harus membayar harga baru.
                            <br><br>
                            3. Suku Cadang dan Aksesoris: Kami menyediakan berbagai suku cadang asli dan aksesoris untuk
                            sepeda motor Anda. Dari suku cadang mesin hingga aksesoris styling, kami memiliki semua yang
                            Anda butuhkan untuk memperbaiki, memperindah, dan mempersonalisasi sepeda motor Anda.
                            <br><br>
                            4. Layanan Perawatan dan Perbaikan: Tim kami yang terlatih dan berkualitas siap memberikan
                            layanan perawatan dan perbaikan yang profesional untuk sepeda motor Anda. Dari perawatan
                            rutin hingga perbaikan besar, kami menjamin bahwa kendaraan Anda akan mendapatkan perawatan
                            terbaik dan kembali dalam kondisi optimal.
                            <br><br>
                            5. Layanan Purna Jual: Kami memahami bahwa hubungan dengan pelanggan tidak berakhir saat
                            penjualan selesai. Oleh karena itu, kami memberikan layanan purna jual yang komprehensif,
                            termasuk layanan garansi, layanan darurat 24 jam, dan bantuan teknis yang ramah.
                            <br><br>
                            Dengan berbagai produk dan layanan kami, kami bertujuan untuk memberikan pengalaman
                            berkendara yang aman, menyenangkan, dan memuaskan bagi setiap pelanggan kami. Segera
                            kunjungi showroom kami atau hubungi kami untuk informasi lebih lanjut tentang produk dan
                            layanan kami.
                        </p>
                    </div>
                    <div class="col">
                        <img src="images/profil.jpg" alt="" style="border-radius:8px;">
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>
<?php include('footer.php'); ?>

</html>

<style>
    .container {
        display: flex;
    }

    h1 {
        font-family: 'Montserrat', sans-serif;
        font-family: 'Satisfy', cursive;
    }

    .border {
        padding: 1rem;
        border-radius: 8px;
    }

    .sidebar {
        border: 1px solid black;
    }

    .border {
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }
</style>