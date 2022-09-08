<form action="rumus-balok.php" method="POST">
    <h1> Rumus Luas dan Volume Balok </h1>
    <p>Panjang Balok (p) :</p>
    <input type="number" name="p" placeholder="Ex. 5" />
    <p>Lebar Balok (l) :</p>
    <input type="number" name="l" placeholder="Ex. 4" />
    <p>Tinggi Balok (t) :</p>
    <input type="number" name="t" placeholder="Ex. 3" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $panjang = $_POST["p"];
        $lebar = $_POST["l"];
        $tinggi = $_POST["t"];
        $luas = 2 * (($panjang*$lebar) + ($panjang*$tinggi) + ($lebar*$tinggi));
        $volume = $panjang * $lebar * $tinggi;

        echo "Panjang : $panjang <br>";
        echo "Lebar  : $lebar <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Luas Balok : $luas <br>";
        echo "Volume Balok  : $volume <br>";
        echo "<hr>";

        echo "Rumus : <br>";
        echo "Luas : 2 x (( p x l) + (p x t) + (l x t)) <br>"; 
        echo "Volume : p x l x t <br>";
    }
?>