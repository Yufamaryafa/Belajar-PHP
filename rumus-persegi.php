<form action="rumus-persegi.php" method="POST">
    <h1>rumus luas dan keliling persegi</h1>
    <p>sisi</p>
    <input type="number" name="sisi" placeholder="Ex. s">
    <input type="submit" name="proses" value="hitung luas & keliling persegi">
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";
        $sisi = $_POST["sisi"];
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "sisi = $sisi <br>"; 
        echo "luas persegi = $luas <br>"; 
        echo "keliling persegi = $keliling <br>"; 
    }
?>
