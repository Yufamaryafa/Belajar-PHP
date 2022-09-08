<form action="rumus-kubus.php" method="POST">
    <h1> Rumus Luas dan Volume Kubus </h1>
    <p>Sisi (s) :</p>
    <input type="number" name="s" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $sisi = $_POST["s"];
        $luas = 6 * $sisi;
        $volume = $sisi * $sisi * $sisi;

        echo "Sisi  : $sisi <br>";
        echo "Luas Kubus : $luas <br>";
        echo "volume Kubus  : $volume <br>";
        echo "<hr>";

        echo "Rumus : <br>";
        echo "Luas : 6 x s <br>"; 
        echo "Volume : s x s x s<br>";
    }
?>