<?php 
include "../../../database/Migrations/koneksi.php";
if(isset($_POST["data"])){
    $id = mysqli_real_escape_string($con, $_POST["id"]);
    $email = $_POST["userEmail"];
    $pass = $_POST["password"];
    $nama = $_POST["nama"];

    $sql = "UPDATE admin SET userEmail='$email', password='$pass', nama='$nama' where id=".$id;
    mysqli_query($con, $sql);
    header("location:../../view/shop/index.php");
}
?>