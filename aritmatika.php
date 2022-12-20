<html>
    <head>
        <title>Aritmatika PHP</title>
    </head>
<body>
    <h2>Menentukan Bilangan</h2>
    
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Bilangan: <input type="text" name="bil">
    <br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    <br>
    <?php
    $tampil = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bil = $_POST["bil"];
        $hasil = true;

        if ($bil % 2 == 0) {
            echo "$bil Merupakan Biangan Genap";
        } else {
            echo "$bil merupakan Bilangan Ganjil";
        }
        
        for ($i=2; $i<$bil; $i++) { 
            if ($bil % $i == 0) {
                $hasil = false;
            }
        }
        echo '<br>dan ';
        echo $hasil ? 'termasuk bilangan prima':'bukan bilangan prima';
    }
    ?>
</body>
</html>