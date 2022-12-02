<?php 
include "../../../database/Migrations/koneksi.php";
if(isset($_POST["simpan"])){
    $namabarang = trim($_POST["namabarang"]);
    $jenisgame = trim($_POST["game"]);
    $hargabarang = trim($_POST["harga"]);
    $jumlahbarang = trim($_POST["jumlah"]);
    $sisabarang = $_POST["sisa"];

    $query = "INSERT INTO databarang VALUES ('', '$namabarang','$jenisgame','$hargabarang','$jumlahbarang','$sisabarang')";
    mysqli_query($con, $query);
    header("location:../../view/shop/barang.php?pesan=penambahan");
}else{
    header("location:../../view/shop/barang.php?pesan=failed");
}
?>