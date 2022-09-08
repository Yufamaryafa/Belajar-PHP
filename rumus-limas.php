<form action="rumus-limas.php" method="POST">
    <h1> Rumus Volume Limas </h1>
    <p>Luas (a) :</p>
    <input type="number" name="a" placeholder="Ex. 39" />
    <p>Tinggi (t) :</p>
    <input type="number" name="t" placeholder="Ex. 7" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $luas = $_POST["a"];
        $tinggi = $_POST["t"];
        $v = 1/3;
        $volume = $v * $luas * $tinggi ;

        echo "Alas  : $luas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Volume Limas  : $volume <br>";
        echo "<hr>";

        echo "Rumus : <br>";
        echo "Volume : 1/3 x a x t  <br>";
    }
?>