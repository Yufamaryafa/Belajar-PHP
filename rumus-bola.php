<form action="rumus-bola.php" method="POST">
    <h1> Rumus Luas dan Volume Bola </h1>
    <p>Jari-Jari :</p>
    <input type="number" name="r" placeholder="Ex. 7" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $jari = $_POST["r"];
        $Pi = 22/7;
        $x = 4/3;
        $luas = 4 * $Pi * $jari * $jari;
        $volume = $x * $Pi * $jari * $jari * $jari;

        echo "Jari-Jari  : $jari <br>";
        echo "Luas Bola : $luas <br>";
        echo "Volume Bola  : $volume <br>";
        echo "<hr>";

        echo "Rumus : <br>";
        echo "Luas : 4 x 22/7 x r x r <br>"; 
        echo "Volume : 4/3 x 22/7 x r x r x r <br>";
    }
?>