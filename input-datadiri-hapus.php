<?php 
include ('./input-config.php');
$data=mysqli_query($mysqli,"DELETE FROM datadiri WHERE nis='".$_GET["nis"]."'");
header("location:input-datadiri.php")
?>
