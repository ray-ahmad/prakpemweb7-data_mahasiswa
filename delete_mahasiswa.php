<?php
    include "koneksi_pdo.php";
    if (isset($_GET["nim"])) {
        $nim = $_GET['nim'];
        $hitRow = $conn->prepare("SELECT COUNT(*) FROM mahasiswa WHERE nim = ?");
        $hitRow->execute([$nim]);
        if($hitRow->fetchColumn() == 1){
            $query = $conn->prepare("DELETE FROM mahasiswa WHERE nim = ?");
            $query->execute([$nim]);
        }
    }

    $conn = null;
    header('Location: ./read_mahasiswa.php');
    exit();