<?php

    include('./kwu-config.php');
echo "<a href='kwu-tambah.php'>Tambah Data</a>";
echo "<hr>";
// READ - Menampilkan data dari database
    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli, "SELECT * FROM transaksi ");
    while($row =mysqli_fetch_array($data)){

        $totalhargabeli = ($row ["qty"] * $row["hargabeli"]);
        $totalhargajual = ($row ["qty"] * $row["hargajual"]);
        $laba = ($totalhargajual - $totalhargabeli);

        $persentase= (
            $laba /
            $totalhargabeli) * 100;

        $tabledata .= "
        <tr>
            <td>".$row["kodebarang"]."</td>
            <td>".$row["tanggal"]."</td>
            <td>".$row["pembeli"]."</td>
            <td>".$row["namabarang"]."</td>
            <td>".$row["qty"]."</td>
            <td>".$row["hargabeli"]."</td>
            <td>".$row["hargajual"]."</td>
            <td>".$totalhargabeli."</td>
            <td>".$totalhargajual."</td>
            <td>".$laba."</td>
            <td>$persentase %</td>

            <td>
                <a href='kwu-edit.php?kodebarang=".$row["kodebarang"]."' >Edit</a>
                &nbsp;-&nbsp;
                <a href='kwu-hapus.php?kodebarang=".$row["kodebarang"]."' 
                 onclick='return confirm(\"Anda Yakin ?\");'>Hapus</a>
            </td>
        </tr>
        ";
        $no++;
     }
    
        echo "
        <table cellpadding=5 border=1 cellspacing=0>
        <tr>
            <th>Kode Barang</th>
            <th>Tanggal</th>
            <th>Pembeli</th>
            <th>Nama Barang</th>
            <th>QTY</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Total Harga Beli</th>
            <th>Total Harga Jual</th>
            <th>Laba</th>
            <th>Persentase</th>
            <th>Aksi</th>

        </tr>
        $tabledata
        </table>
        ";
?>