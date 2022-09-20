<?php 
include ('./input-config.php');
$data=mysqli_query($mysqli,"DELETE FROM siswa_nilai WHERE nis='".$_GET["nis"]."'");
header("location:input-nilaisiswa.php")
?>