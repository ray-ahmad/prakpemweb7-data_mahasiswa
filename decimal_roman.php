<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <!-- Meta Tag Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rayhan Ahmad | Konversi bilangan desimal ke romawi</title>
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
                    <h2>Konversi bilangan desimal ke romawi</h2>
                    <p>Praktikum PemWeb RA Pertemuan 6</p>
                    <form action="" method="post">
                        <div class="row">
                            <label for="number">Masukkan bilangan desimal</label>
                            <input type="number" id="number" name="decimal" min="1" placeholder="Masukkan bilangan bulat positif...">
                        </div>
                        <div class="row">
                            <input type="submit" value="Hasilkan">
                        </div>
                    </form>
                    <span id="hasil" style="margin-top: 10px;">
                    <?php
                    if (isset($_POST["decimal"])) {
                        $decimal = $_POST["decimal"];
                        
                        $roman = convertToRoman($decimal);

                        echo "Angka Desimal = " . $decimal . ", bentuk romawinya adalah " . $roman;
                    }

                    function convertToRoman($num) {
                        $n = intval($num);
                        $result = '';

                        $lookup = array('M' => 1000,
                                        'CM' => 900,
                                        'D' => 500,
                                        'CD' => 400,
                                        'C' => 100,
                                        'XC' => 90,
                                        'L' => 50,
                                        'XL' => 40,
                                        'X' => 10,
                                        'IX' => 9,
                                        'V' => 5,
                                        'IV' => 4,
                                        'I' => 1);
                        
                        foreach ($lookup as $roman => $value) {
                            $matches = intval($n / $value);
                            $result .= str_repeat($roman, $matches);
                            $n = $n % $value;
                        }
                        
                        return $result;
                    }
                    ?>
                    </span>
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
                        <li><a href="#" class="active">Desimal ke Romawi</a></li>
                    </ul>
                </section>
            </aside>
        </div>
        <footer>
            <p>&copy; 2023 Rayhan Ahmad Rizalullah</p>
        </footer>
    </body>
</html>