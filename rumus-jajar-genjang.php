<form action="rumus-jajar-genjang.php" method="POST">
    <h1> Rumus Luas dan Keliling Jajar Genjnag </h1>
    <p>Alas (a) :</p>
    <input type="number" name="a" placeholder="Ex. 5" />
    <p>Tinggi (t) :</p>
    <input type="number" name="t" placeholder="Ex. 5" />
    <p>Sisi Miring (b) :</p>
    <input type="number" name="b" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas dan Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $alas = $_POST["a"];
        $tinggi = $_POST["t"];
        $b = $_POST["b"];
        $luas = $alas * $tinggi;
        $keliling = 2 * ($alas + $b);

        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Sisi Miring : $b <br>";
        echo "Luas Jajar Genjang : $luas <br>";
        echo "Keliling Jajar Genjang : $keliling <br>";
        echo "<hr>";

        echo "Rumus : <br>";
        echo "Luas : a x t <br>"; 
        echo "Keliiling : 2 x (a + b) <br>";
    }
?>