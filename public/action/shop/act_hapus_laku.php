<?php 
include "../../../database/Migrations/koneksi.php";
$id_buy = mysqli_real_escape_string($con, $_POST["id_buy"]);
mysqli_query($con, "DELETE FROM buy WHERE id_buy='$id_buy'");
header("location:../../view/shop/rekapitulasi_barang.php");
?>