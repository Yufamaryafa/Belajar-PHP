<?php
if(isset($_GET["kodebarang"])){
    $kodebarang = $_GET["kodebarang"];
    $check_kodebarang = "SELECT * FROM transaksi WHERE kodebarang = '$kodebarang';";
    include('./kwu-config.php');
    $query = mysqli_query($mysqli, $check_kodebarang);
    $row = mysqli_fetch_array($query);
}
?>

<h1>Edit Data</h1>
<form action="kwu-edit.php" method="POST">
<label for="kodebarang">Kode Barang :</label>
<input value="<?php echo $row["kodebarang"]; ?>" type="number" name="kodebarang" placeholder="Ex. 00365" readonly /><br>

<label for="tanggal">Tanggal :</label>
<input value="<?php echo $row["tanggal"]; ?>" type="date" name="tanggal" placeholder="Ex. 27102006" /><br>

<label for="pembeli">Pembeli :</label>
<input value="<?php echo $row["pembeli"]; ?>" type="text" name="pembeli" /><br>

<label for="namabarang">Nama Barang : </label>
<input value="<?php echo $row["namabarang"]; ?>" type="text" name="namabarang" placeholer="Ex. Pepsodent " /><br>

<label for="qty">QTY : </label>
<input value="<?php echo $row["qty"]; ?>" type="number" name="qty" placeholer="Ex. 1 " /><br>

<label for="hargabeli">Harga Beli  : </label>
<input value="<?php echo $row["hargabeli"]; ?>" type="number" name="hargabeli" placeholer="Ex. 15000" /><br>

<label for="hargajual">Harga Jual : </label><br>
<input value="<?php echo $row["hargajual"]; ?>" type="number" name="hargajual" placeholer="Ex. 20000 " />

<input type="submit" name="edit" value="Edit Data" />
<a href="kwu.php">Kembali</a>
</form>

<?php

if(isset($_POST["edit"])){
     $kodebarang = $_POST["kodebarang"];
     $tanggal = $_POST["tanggal"];
     $pembeli = $_POST["pembeli"];
     $namabarang = $_POST["namabarang"];
     $qty = $_POST["qty"];
     $hargabeli = $_POST["hargabeli"];
     $hargajual = $_POST["hargajual"];

    // EDIT - Memperbaharui Data
    $query = "
        UPDATE transaksi SET tanggal = '$tanggal',
        pembeli = '$pembeli',
        namabarang = '$namabarang',
        qty = '$qty',
        hargabeli = '$hargabeli',
        hargajual = '$hargajual'
        WHERE kodebarang = '$kodebarang';
    ";
     include ('./kwu-config.php');
     $update = mysqli_query($mysqli, $query);

     if($update){
        echo "
        <script>
        alert('Data berhasil diperbaharui');
        window.location='kwu.php';
        </script>
        
        ";
     }else{
        echo "
        <script>
        alert('Data berhasil diperbaharui');
        window.location='kwu-edit.php?kodebarang=$kodebarang';
        </script>
        ";  
     }
}