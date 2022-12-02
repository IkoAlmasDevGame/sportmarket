<?php 
include "../../../database/Migrations/koneksi.php";
$id_barang = mysqli_real_escape_string($con, $_POST["id_barang"]);
mysqli_query($con, "DELETE FROM databarang WHERE id_barang='$id_barang'");
header("location:../../view/shop/barang.php?pesan=penghapus");
?>