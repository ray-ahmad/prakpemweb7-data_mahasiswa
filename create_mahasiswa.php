<?php
    include "koneksi_pdo.php";

    if(isset($_POST["nim"]) AND isset($_POST["nama"]) AND isset($_POST["kode_prodi"])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kode_prodi = $_POST['kode_prodi'];
        $query = $conn->prepare("INSERT INTO mahasiswa (nim, nama, kode_prodi) VALUES ('$nim', '$nama', '$kode_prodi')");
        $query->execute();
        $conn = null;
        header('Location: ./read_mahasiswa.php');
        exit();
    }

    $kode_prodi = [
        "IF" => "Teknik Informatika",
        "EL" => "Teknik Elektro",
        "TI" => "Teknik Industri",
        "SD" => "Sains Data",
        "SA" => "Sains Aktuaria",
        "GL" => "Teknik Geologi",
        "AR" => "Arsitektur",
        "MA" => "Matematika",
    ];
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <!-- Meta Tag Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rayhan Ahmad | Tambah Data Mahasiswa</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <img class="header-img" src="https://uploads.codesandbox.io/uploads/user/df846677-75e8-48fb-bcbc-15f93eff48a7/-oVn-image.jpg" alt="wilif wilof wilai">
            <div class="header-text">
                <h1>Rayhan Ahmad Rizalullah</h1>
                <p>NIM: 121140002</p>
                <p>Praktikum PemWeb Kelas RA</p>
            </div>
        </header>
        <nav>
            <ul>
                <li><a href="https://www.itera.ac.id" target="_blank">Kampus Saya</a></li>
                <li><a href="https://github.com/ray-ahmad" target="_blank">Github Saya</a></li>
                <li><a href="https://www.instagram.com/rayhanahmadr/" target="_blank">Instagram Saya</a></li>
            </ul>
        </nav>
        <div class="wrap">
            <main class="content">
                <section class="container">
                    <h2>Tambah Data Mahasiswa</h2>
                    <form method="POST">
                        <input type="hidden" name="action" value="create">
                        <div class="row">
                            <label for="nim">NIM</label>
                            <input type="number" id="nim" name="nim" placeholder="Masukkan NIM...">
                        </div>
                        <div class="row">
                            <label for="nama">Nama</label>
                            <input type="text" required id="nama" name="nama" placeholder="Masukkan Nama...">
                        </div>
                        <div class="row">
                            <label for="kode_prodi">Kode Program Studi</label>
                            <select required id="kode_prodi" name="kode_prodi">
                                <option value="">=== PILIH KODE PRODI ===</option>
                                <?php
                                    foreach($kode_prodi as $kode => $prodi) {
                                ?>
                                <option value="<?php echo $kode ?>"><?php echo "$kode: $prodi" ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </section>
            </main>
            <aside class="sidebar">
                <section class="container menu">
                    <h2>Link</h2>
                    <ul>
                    <li><a href="./index.html">Home</a></li>
                        <li><a href="./form.html">Form</a></li>
                        <li><a href="./table.html">Tabel</a></li>
                        <li><a href="./odd_even.html">Hitung Bilangan Ganjil Genap</a></li>
                        <li><a href="./crud_lite.html">Manajemen Buku</a></li>
                        <li><a href="./dom_profile.html">DOM Profile</a></li>
                        <li><a href="./decimal_roman.php">Desimal ke Romawi</a></li>
                        <li><a href="./read_mahasiswa.php">Lihat Semua Data Mahasiswa</a></li>
                    </ul>
                </section>
            </aside>
        </div>
        <footer>
            <p>&copy; 2023 Rayhan Ahmad Rizalullah</p>
        </footer>
    </body>
</html>