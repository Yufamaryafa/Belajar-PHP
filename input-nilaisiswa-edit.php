<?php
    if ( isset($_GET["nis"]) ){
        $nis = $_GET["nis"];
        $check_nis = "SELECT * FROM siswa_nilai WHERE nis = '$nis';";
        include('./input-config.php');
        $querry = mysqli_query($mysqli, $check_nis);
        $row = mysqli_fetch_array($querry);
    }
?>

<h1>Edit Data</h1>
<form action="input-nilaisiswa-edit.php" method="POST">
    <label for="nis"> Nomor Induk siswa :</label>
    <input value="<?php echo $row["nis"]; ?>" readonly type="number" name="nis" placeholder="Ex. 12100848" /><br>

    <label for="namalengkap"> Nama Lengkap :</label>
    <input value="<?php echo $row["namalengkap"]; ?>" type="text" name="namalengkap" placeholder="Ex. Yufa" /><br>

    <label for="kelas"> Kelas :</label>
    <input value="<?php echo $row["kelas"]; ?>" type="text" name="kelas" placeholder="Ex. XI RPL 1" /><br>

    <label for="kehadiran"> Kehadiran :</label>
    <input value="<?php echo $row["kehadiran"]; ?>" type="number" name="kehadiran" /><br>

    <label for="tugas"> Tugas :</label>
    <input value="<?php echo $row["tugas"]; ?>" type="number" name="tugas" placeholder="Ex. 80.56" /><br>

    <label for="uts"> UTS :</label>
    <input value="<?php echo $row["uts"]; ?>" type="number" name="uts" placeholder="Ex. 80.56" /><br>

    <label for="nilai"> UAS :</label>
    <input value="<?php echo $row["uas"]; ?>" type="number" name="uas" placeholder="Ex. 80.56" /><br>


    <input type="submit" name="simpan" value="Simpan Data" />
    <a href="input-nilaisiswa.php">kembali</a>
</form>
<?php
    if ( isset($_POST["simpan"])) {
        $nis = $_POST["nis"];
        $namalengkap = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];

        //Edit - Memperbarui Data 
        $query ="
            UPDATE siswa_nilai SET 
                namalengkap = '$namalengkap',
                kelas = '$kelas',
                kehadiran = '$kehadiran',
                tugas = '$tugas',
                uts = '$uts',
                uas = '$uas'
            WHERE nis = '$nis';
        ";
        include ('./input-config.php');
        $update = mysqli_query($mysqli, $query);

        if($update){
            echo "
                <script>
                    alert('Data Berhasil Diperbaharui');
                    window.location='input-nilaisiswa.php';
                </script>
            ";
        }else{
            echo "
            <script>
                alert('Data Gagal diperbaharui');
                window.location='input-nilaisiswa-edit.php?nis=$nis';
            </script>
            ";
        }
    }
?>