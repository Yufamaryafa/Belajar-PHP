<form action="rumus-lingkaran.php" method="POST">
    <h1> Rumus Luas dan Keliling Lingkaran </h1>
    <p>Jari-Jari (r) :</p>
    <input type="number" name="r" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $jari = $_POST["r"];
        $Pi = 22/7;
        $luas = $Pi * $jari * $jari;
        $keliling = 2 * $Pi * $jari;

        echo "Jari-Jari : $jari <br>";
        echo "Luas Lingkaran : $luas <br>";
        echo "Keliling Lingkaran : $keliling <br>";
        echo "<hr>";

        echo "Rumus : <br>";
        echo "Luas : 22/7 x r x r  <br>"; 
        echo "Keliling : 2 x 22/7 x r <br>";
    }
?>