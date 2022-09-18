<?php
    if ( isset($_GET["nis"]) ){
        $nis = $_GET["nis"];
        $check_nis = "SELECT * FROM datadiri WHERE nis = '$nis';";
        include('./input-config.php');
        $querry = mysqli_query($mysqli, $check_nis);
        $row = mysqli_fetch_array($querry);
    }
?>

<h1>Edit Data</h1>
<form action="input-datadiri-edit.php" method="POST">
    <label for="nis"> Nomor Induk siswa :</label>
    <input value="<?php echo $row["nis"]; ?>" readonly type="number" name="nis" placeholder="Ex. 120033102" /><br>

    <label for="nama"> Nama Lengkap :</label>
    <input value="<?php echo $row["namalengkap"]; ?>" type="text" name="nama" placeholder="Ex. Yufa" /><br>

    <label for="tanggal_lahir"> Tanggal Lahir :</label>
    <input value="<?php echo $row["tanggal_lahir"]; ?>" type="date" name="tanggal_lahir" /><br>

    <label for="nilai"> Nilai :</label>
    <input value="<?php echo $row["nilai"]; ?>" type="number" name="nilai" placeholder="Ex. 80.56" /><br>

    <input type="submit" name="simpan" value="Simpan Data" />
    <a href="input-datadiri.php">kembali</a>
</form>
<?php
    if ( isset($_POST["simpan"])) {
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $nilai = $_POST["nilai"];

        //Edit - Memperbarui Data 
        $query ="
            UPDATE datadiri SET namalengkap = '$nama',
            tanggal_lahir = '$tanggal_lahir',
            nilai = '$nilai'
            WHERE nis = '$nis';
        ";
        include ('./input-config.php');
        $update = mysqli_query($mysqli, $query);

        if($update){
            echo "
                <script>
                    alert('Data Berhasil Diperbaharui');
                    window.location='input-datadiri.php';
                </script>
            ";
        }else{
            echo "
            <script>
                alert('Data Gagal diperbaharui');
                window.location='input-datadiri-edit.php?nis=$nis';
            </script>
            ";
        }
    }
?>