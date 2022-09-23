<?php 
include ('./kwu-config.php');
$data=mysqli_query($mysqli,"DELETE FROM transaksi WHERE kodebarang='".$_GET["kodebarang"]."'");
header("location:kwu.php")
?>