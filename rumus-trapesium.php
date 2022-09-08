<form action="rumus-trapesium.php" method="POST">
    <h1> Rumus Luas dan Keliling Trapesium </h1>
    <p>Panjang Sisi Atas (a) :</p>
    <input type="number" name="a" placeholder="Ex. 5" />
    <p>Panjang Sisi Bawah (b) :</p>
    <input type="number" name="b" placeholder="Ex. 5" />
    <p>Tinggi (t) :</p>
    <input type="number" name="t" placeholder="Ex. 5" />
    <p>AB :</p>
    <input type="number" name="ab" placeholder="Ex. 5" />
    <td>BC :</td>
    <input type="number" name="bc" placeholder="Ex. 5" />
    <td>CD :</td>
    <input type="number" name="cd" placeholder="Ex. 5" />
    <td>AD :</td>
    <input type="number" name="ad" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $a = $_POST["a"];
        $b = $_POST["b"];
        $t = $_POST["t"];
        $ab = $_POST["ab"];
        $bc = $_POST["bc"];
        $cd = $_POST["cd"];
        $ad = $_POST["ad"];
        $x = 1/2;
        $luas = $x * ($a + $b) * $t;
        $keliling = $ab + $bc + $cd + $ad;

        echo "Panjang Sisi Atas : $a <br>";
        echo "Panjang Sisi Bawah : $b <br>";
        echo "Tinggi : $t <br>";
        echo "AB : $ab <br>";
        echo "BC : $bc <br>";
        echo "CD : $cd <br>";
        echo "AD : $ad <br>";
        echo "Luas Trapesium : $luas <br>";
        echo "Keliling Trapesium : $keliling <br>";
        echo "<hr>";

        echo "Rumus : <br>";
        echo "Luas : 1/2 x (a +b) x t <br>"; 
        echo "Keliling : ab + bc + cd + ad <br>";
    }
?>