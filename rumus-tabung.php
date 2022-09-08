<form action="rumus-tabung.php" method="POST">
    <h1> Rumus Luas dan Volume Tabung </h1>
    <p>Jari-Jari :</p>
    <input type="number" name="r" placeholder="Ex. 5" />
    <p>Tinggi :</p>
    <input type="number" name="t" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $jari = $_POST["r"];
        $tinggi = $_POST["t"];
        $Pi = 22/7;
        $luas = 2 * $Pi * $jari * ($jari + $tinggi);
        $volume = $Pi * $jari * $jari * $tinggi;

        echo "Jari-Jari  : $jari <br>";
        echo "Tinggi  : $tinggi <br>";
        echo "Luas Tabung : $luas <br>";
        echo "Volume Tabung  : $volume <br>";
        echo "<hr>";

        echo "Rumus : <br>";
        echo "Luas : 2 x 22/7 x r x (r + t) <br>"; 
        echo "Volume : 22/7 x r x r x t <br>";
    }
?>