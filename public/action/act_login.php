<?php
session_start();
include "../../database/Migrations/koneksi.php";
if(isset($_POST["login"])){
    $email = trim($_POST["userEmail"]);
    $pass = trim($_POST["password"]);

    if($email == "" || $pass == ""){
        header("location:../view/index.php?pesan=kosong");
        exit;
    }

    $query = mysqli_query($con, "SELECT * FROM admin WHERE userEmail='$email' and password='$pass'");

    if(mysqli_num_rows($query) > 0){
        session_start();
        $_SESSION["status"] = "login";       
        if($row = mysqli_fetch_assoc($query)){
            $_SESSION["id"] = $row["id"];
            $_SESSION["nama"] = $row["nama"];
        }
        header("location:../view/shop/index.php");
        exit;
    }else{
        header("location:../view/index.php?pesan=gagal");
        exit;
    }

}
?>