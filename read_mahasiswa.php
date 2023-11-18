<?php
    include "koneksi_pdo.php";

    if ((!empty($_GET["kode_prodi"])) AND (isset($_GET["action"]) AND $_GET["action"] == "search")) {
        $hitRow = $conn->prepare("SELECT COUNT(*) FROM mahasiswa WHERE kode_prodi = ?");
        $hitRow->execute([$_GET["kode_prodi"]]);
    }
    else{
        $hitRow = $conn->prepare("SELECT COUNT(*) FROM mahasiswa");
        $hitRow->execute();
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
        <title>Rayhan Ahmad | Semua Data Mahasiswa</title>
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
                    <h2>Semua Data Mahasiswa</h2>
                    <h3>Institut Teknologi Sumatera</h3>
                    <p>Praktikum PemWeb RA Pertemuan 7</p>
                    <a class="btn-primary" href="./create_mahasiswa.php">Tambah Data</a>
                    <form method="GET">
                        <input type="hidden" name="action" value="search">
                        <div class="row">
                            <label for="kode_prodi">Cari Berdasarkan Kode Program Studi</label>
                            <select id="kode_prodi" name="kode_prodi">
                                <option value="">Lihat semuanya...</option>
                                <?php
                                    foreach($kode_prodi as $kode => $prodi) {
                                ?>
                                <option value="<?php echo $kode ?>"><?php echo "$kode: $prodi" ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="row">
                            <input type="submit" value="Cari">
                        </div>
                    </form>
                    <?php
                        if($hitRow->fetchColumn() > 0) {
                            if ((!empty($_GET["kode_prodi"])) AND (isset($_GET["action"]) AND $_GET["action"] == "search")) {
                                $kode_prodi = $_GET["kode_prodi"];
                                $query = $conn->prepare("SELECT * FROM mahasiswa WHERE kode_prodi = ?");
                                $query->execute([$_GET["kode_prodi"]]);
                            }
                            else{
                                $query = $conn->prepare("SELECT * FROM mahasiswa");
                                $query->execute();
                            }

                            $students = $query->fetchAll(PDO::FETCH_OBJ);
                    ?>
                    <div class="table-overlay">
                        <table id="data-pemweb7">
                            <tr class="header-table">
                                <th>No.</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Kode Prodi</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                                $i = 1;
                                foreach($students as $mhs){
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $mhs->nim; ?></td>
                                <td><?php echo $mhs->nama; ?></td>
                                <td><?php echo $mhs->kode_prodi; ?></td>
                                <td>
                                    <a class="btn-primary" href="./update_mahasiswa.php?action=form&nim=<?php echo $mhs->nim; ?>">Ubah</a>
                                    <a class="btn-primary" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" href="./delete_mahasiswa.php?nim=<?php echo $mhs->nim;?>">Hapus</a>
                                </td>
                            </tr>
                            <?php
                                    $i++;
                                }
                            ?>
                        </table>
                    </div>
                    <?php
                        } else {
                            echo "<p>Belum ada data.</p>";
                        }
                    ?>
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
                        <li><a href="#" class="active">Lihat Semua Data Mahasiswa</a></li>
                    </ul>
                </section>
            </aside>
        </div>
        <footer>
            <p>&copy; 2023 Rayhan Ahmad Rizalullah</p>
        </footer>
    </body>
</html>
<?php $conn = null ?>