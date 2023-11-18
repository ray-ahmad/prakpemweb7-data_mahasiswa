<?php
    include "koneksi.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];

        $query = "INSERT INTO barang (kode, nama, harga) VALUES ('$kode','$nama','$harga')";

        if (mysqli_query($conn, $query)) {
            echo "Data berhasil ditambahkan.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
?>