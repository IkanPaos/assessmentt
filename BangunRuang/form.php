<html>
    <head>
        <title>Hitung Volume</title>
    </head>
    <body>
        <h2>Menghitung Volume Kubus dan Lingkaran</h2>
        <form action="form.php" method="post">
            <input type="number" name="bil1" placeholder="r">
            <br />
            <select name="operasi">
                <option value="kubus">Kubus</option>
                <option value="bola">Bola</option>
            </select>
            <input type="submit" name="jumlah" value="Jumlah">
        </form>
        <?php
        if (isset($_POST['jumlah'])) {
            include "proses.php";
            $x = $_POST['bil1'];
            $operasi = $_POST['operasi'];

            $volume = new operasi($x, $y);
            switch ($operasi) {
                case 'kubus':
                    echo "<input type='text' value=".$volume->vkubus($x).">";
                    break;
                
                case 'bola':
                    echo "<input type='text' value=".$volume->vbola($x).">";
                    break;
                default:
                    # code...
                    break;
            }
            
        }
        ?>

        <h2>Menghitung Volume Prisma</h2>
        <form action="form.php" method="post">
            <input type="number" name="bil1" placeholder="luas alas">
            <br>
            <input type="number" name="bil2" placeholder="tinggi">
            <br />
            
            <input type="submit" name="jumlah" value="Jumlah">
        </form>
        <?php
        if(isset($_POST['jumlah'])){
            // include "proses.php";
            $x = $_POST['bil1'];
            $y = $_POST['bil2'];
            
            $volume = $x*$y;
            echo "volume prisma adalah $volume";
            // $volume = new operasi($x, $y);
            // echo "<input type='text' value=".$volume->vprisma().">";
        }
        ?>
    </body>
</html>