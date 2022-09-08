<form action="rumus-belah-ketupat.php" method="POST">
    <h1> Rumus Luas dan Keliling Belah Ketupat </h1>
    <p>Sisi (s) :</p>
    <input type="number" name="s" placeholder="Ex. 5" />
    <p>Diagonal 1 :</p>
    <input type="number" name="d1" placeholder="Ex. 5" />
    <p>Diagonal 2 :</p>
    <input type="number" name="d2" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $sisi = $_POST["s"];
        $D1 = $_POST["d1"];
        $D2 = $_POST["d2"];
        $y = 1/2;
        $luas = $y * $D1 * $D2;
        $keliling = 4 * $sisi;

        echo "Sisi : $sisi <br>";
        echo "D1 : $D1 <br>";
        echo "D2 : $D2 <br>";
        echo "Luas Belah Ketupat : $luas <br>";
        echo "Keliling Belah Ketupat  : $keliling <br>";
        echo "<hr>";

        echo "Rumus : <br>";
        echo "Luas : 1/2 x d1 x d2 <br>"; 
        echo "Keliling : 4 x s <br>";
    }
?>