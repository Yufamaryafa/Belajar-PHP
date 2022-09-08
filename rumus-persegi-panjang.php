<form action="rumus-persegi-panjang.php" method="POST">
    <h1> Rumus Luas dan Keliling Persegi Panjang </h1>
    <p>Panjang (P) :</p>
    <input type="number" name="P" placeholder="Ex. 5" />
    <p>Lebar (L) :</p>
    <input type="number" name="L" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $Panjang = $_POST["P"];
        $Lebar = $_POST["L"];
        $luas = $Panjang * $Lebar;
        $keliling = 2 * ($Panjang + $Lebar);

        echo "Panjang : $Panjang <br>";
        echo "Lebar : $Lebar <br>";
        echo "Luas Persegi Panjang : $luas <br>";
        echo "Keliling Persegi Panjang : $keliling <br>";
        echo "<hr>";

        echo "Rumus : <br>";
        echo "Luas : P x L  <br>"; 
        echo "Keliling : 2 x (P + L) <br>";
    }
?>