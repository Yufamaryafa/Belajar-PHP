<form action="rumus-layang-layang.php" method="POST">
    <h1> Rumus Luas dan Keliling Layang-Layang </h1>
    <p>Diagonal 1 :</p>
    <input type="number" name="d1" placeholder="Ex. 5" />
    <p>Diagonal 2 :</p>
    <input type="number" name="d2" placeholder="Ex. 5" />
    <p>AB :</p>
    <input type="number" name="ab" placeholder="Ex. 5" />
    <p>AD :</p>
    <input type="number" name="ad" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $D1 = $_POST["d1"];
        $D2 = $_POST["d2"];
        $AB = $_POST["ab"];
        $AD = $_POST["ad"];
        $x = 1/2;
        $luas = $x * $D1 * $D2;
        $keliling = 2 * ($AB + $AD);

        echo "Diagonal 1 : $D1 <br>";
        echo "Diagonal 2 : $D2 <br>";
        echo "AB : $D2 <br>";
        echo "AD : $D2 <br>";
        echo "Luas Layang-Layang : $luas <br>";
        echo "Keliling Layang-Layang  : $keliling <br>";
        echo "<hr>";

        echo "Rumus : <br>";
        echo "Luas : 1/2 x d1 x d2 <br>"; 
        echo "Keliling : 2 x (ab + ad) <br>";
    }
?>