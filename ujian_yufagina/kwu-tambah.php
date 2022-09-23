<h1>Tambah Data</h1>
<form action="kwu-tambah.php" method="POST">
<label for="kodebarang">Kode Barang :</label>
<input type="number" name="kodebarang" placeholder="Ex. 00365" /><br>

<label for="tanggal">Tanggal :</label>
<input type="date" name="tanggal" placeholder="Ex. 27102006 " /><br>

<label for="pembeli">Pembeli :</label>
<input type="text" name="pembeli" /><br>

<label for="namabarang">Nama Barang : </label>
<input type="text" name="namabarang" placeholer="Ex. pepsodent" /><br>

<label for="qty">QTY : </label>
<input type="number" name="qty" placeholer="Ex. 1" /><br>

<label for="hargabeli">Harga Beli : </label>
<input type="number" name="hargabeli" placeholer="Ex. 15000 " /><br>

<label for="hargajual">Harga Jual : </label>
<input type="number" name="hargajual" placeholer="Ex. 20000" />

<input type="submit" name="simpan" value="Simpan Data" />
<a href="kwu.php">Kembali</a>
</form>

<?php
 if(isset($_POST["simpan"])){
     $kodebarang = $_POST["kodebarang"];
     $tanggal = $_POST["tanggal"];
     $pembeli = $_POST["pembeli"];
     $namabarang = $_POST["namabarang"];
     $qty = $_POST["qty"];
     $hargabeli = $_POST["hargabeli"];
     $hargajual = $_POST["hargajual"];

    echo $kodebarang . "<br>";
    echo $tanggal . "<br>";
    echo $pembeli . "<br>";
    echo $namabarang . "<br>";
    echo $qty . "<br>";
    echo $hargabeli . "<br>";
    echo $hargajual . "<br>";

    // CREATE - Menambahkan Data ke Database
    $query = "
        INSERT INTO transaksi VALUES
        ('$kodebarang', '$tanggal', '$pembeli', '$namabarang', '$qty', '$hargabeli', '$hargajual');
    ";
    echo $query;
    include ('./kwu-config.php');
    $insert = mysqli_query($mysqli, $query);

    if ($insert){
        echo "
        <script>
         alert('Data berhasil ditambahkan');
         window.location='kwu.php';
         </script>
        ";
    }
 }
 ?>