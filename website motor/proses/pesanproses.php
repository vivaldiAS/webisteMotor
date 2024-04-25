<?php

include '../koneksi.php';
$pesan = $_POST['pesan'];
$pengirim = $_POST['username'];

// Query untuk menyimpan pesan ke dalam tabel pesan
$sql = "INSERT INTO pesan (pengirim, pesan) VALUES ('$pengirim', '$pesan')";

if ($koneksi->query($sql) === TRUE) {
    echo "Pesan berhasil ditambahkan";
    header('location:../kontakkami.php');
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

?>
