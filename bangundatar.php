<html>
    <head>
        <title>Menghitung bangun Datar</title>
    </head>
    <body>
        <h2>Menghitung Luas dan Keliling Persegi Panjang</h2>
        <h3>isi data</h3>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <table>
                <tr>
                    <td>Sisi</td>
                    <td>:</td>
                    <td><input type="text" name="sisi" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Hitung"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $sisi = $_POST['sisi'];

            $luas = $sisi * $sisi;
            $keliling = 4 * $sisi;

            echo "Hasil:<br />";
            echo "Luas = $luas<br />";
            echo "Keliling = $keliling";
        }
        ?>

        <h2>Menghitung Luas dan Keliling Segitiga</h2>
        <h3>Luas Segitiga</h3>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <table>
                <tr>
                    <td>Alas</td>
                    <td>:</td>
                    <td><input type="text" name="alas" required></td>
                </tr>
                <tr>
                    <td>Tinggi</td>
                    <td>:</td>
                    <td><input type="text" name="tinggi" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Hitung"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];

            $luas = 1/2 * $alas * $tinggi;
            
            echo "Hasil:<br />";
            echo "Luas = $luas";
        }
        ?>
        <br>
        <br>
        <h3>Keliling Segitiga</h3>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <table>
                <tr>
                    <td>Sisi 1</td>
                    <td>:</td>
                    <td><input type="text" name="sisi1" required></td>
                </tr>
                <tr>
                    <td>Sisi 2</td>
                    <td>:</td>
                    <td><input type="text" name="sisi2" required></td>
                </tr>
                <tr>
                    <td>Sisi 3</td>
                    <td>:</td>
                    <td><input type="text" name="sisi3" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Hitung"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $sisi1 = $_POST['sisi1'];
            $sisi2 = $_POST['sisi2'];
            $sisi3 = $_POST['sisi3'];

            $keliling = $sisi1+$sisi2+$sisi3;
            
            echo "Hasil:<br />";
            echo "Keliling = $keliling";
        }
        ?>

        <h2>Menghitung Luas dan Keliling Lingkaran</h2>
        <h3>Luas Lingkaran</h3>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <table>
                <tr>
                    <td>Jari Jari Lingkaran</td>
                    <td>:</td>
                    <td><input type="text" name="jari" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Hitung"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $jari = $_POST['jari'];
            $pi = 22/7;

            $luas = $pi*($jari*$jari);
            $keliling = 2 * $pi * $jari;

            echo "Hasil:<br />";
            echo "Luas = $luas<br />";
            echo "Keliling = $keliling";
        }
        ?>
    </body>
</html>