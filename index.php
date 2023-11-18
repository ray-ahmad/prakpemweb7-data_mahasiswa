<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tambahdata.php" method="post">
        <label for="kode">Kode:</label>
        <input type="text" name="kode" required>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <label for="harga">Harga:</label>
        <input type="text" name="harga" required>
        <input type="submit" value="Tambahkan">
    </form>
    <form action="hapusdata.php" method="get">
        <label for="del">Kode Barang atau nama :</label>
        <input type="text" name="del" required>
        <input type="submit" value="Hapus">
    </form>
</body>
</html>