<?php 
include "../../../database/Migrations/koneksi.php";
if(isset($_POST["finish"])){
    $id_barang = mysqli_real_escape_string($con, $_POST["id_barang"]);
    $namabarang = $_POST["namabarang"];
    $jenis = $_POST["game"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];
    $sisa = $_POST["sisa"];

    mysqli_query($con, "UPDATE databarang SET namabarang='$namabarang', game='$jenis', harga='$harga', jumlah='$jumlah', sisa='$sisa' where id_barang='$id_barang'");
    header("location:../../view/shop/barang.php?pesan=pengeditan");
}
?>