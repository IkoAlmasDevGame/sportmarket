<?php 
include "../../../database/Migrations/koneksi.php";
if(isset($_POST["data"])){
    $id_pribadi = $_POST["id_pribadi"];
    $id = $_POST["id"];
    $namalengkap = $_POST["namalengkap"];
    $namapanggilan = $_POST["namapanggilan"];
    $umur = $_POST["umur"];
    $alamat = $_POST["alamat"];
    $salary = $_POST["salary"];

    mysqli_query($con, "UPDATE datapribadi SET namalengkap='$namalengkap', namapanggilan='$namapanggilan', umur='$umur', alamat='$alamat', salary='$salary' where id_pribadi='$id_pribadi' and id='$id'");
    header("location:../../view/shop/index.php");
}
?>