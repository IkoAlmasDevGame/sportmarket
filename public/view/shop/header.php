<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playstation Game</title>
    <link rel="stylesheet" href="../../../bootstraps/css/bootstrapv5221.css">
    <link rel="stylesheet" href="../../../bootstraps/css/glyphicon.css">
    <link rel="stylesheet" href="../../../bootstraps/css/text-bootstrap.css">
    <link rel="stylesheet" href="../../../bootstraps/css/card-bootstrap.css">
    <link rel="stylesheet" href="../../../css/header.css">
    <link rel="stylesheet" href="../../../bootstraps/css/font-awesome4.min.css">

    <link rel="icon" href="../../../image/logo/images.png" type="png">
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <script src="../../../bootstraps/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <?php 
    session_start();
    include "../../../database/Migrations/koneksi.php";
    include "../../log/log.php";

    if(isset($_GET['aksi'])){
        $aksi = $_GET['aksi'];
        if($aksi == "keluar"){
            if(isset($_SESSION['status'])){
                unset($_SESSION['status']);
                session_unset();
                session_destroy();
                $_SESSION = array();
            }
            header("location:../index.php?pesan=keluar");
            exit;
        }
    }
    ?>
</head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <img src="../../../image/logo/images.png" class="navbar-brand"><a href="index.php" class="navbar-brand">CD Playstation</a>
                                <button type="button" class="navbar-toggle collapsed" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                    <span class="sr-only">Toggle Navigation</span>
                                    <span class="icon-bar"></span>
					                <span class="icon-bar"></span>
					                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#" id="pesan_sedia" data-bs-toggle="modal" data-bs-target="#modalpesan">
                                        <span class='glyphicon glyphicon-comment'></span>  Pesan</a></li>
                                    <li><a href="#" class="dropdown-toggle text-default" data-bs-toggle="dropdown" role="button">Hi, 
                                        <?php echo $_SESSION['nama']; ?>&nbsp&nbsp<img src="../../../image/profile/images.jfif" class="img-thumbnail" style="width:25px; border-radius:10px;"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal" id="modalpesan">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Pesan Notification</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    $periksa = mysqli_query($con, "SELECT * FROM databarang WHERE jumlah <= 0 and sisa <= 0");
                                    if($x = mysqli_fetch_array($periksa)){
                                        if($x['jumlah']<=0){
                                            if($x['sisa']<=0){
                                                echo "<div style='padding:5px' class='alert alert-warning'><span class='glyphicon glyphicon-info-sign'></span> Stok  
                                                <a style='color:red'>". $x['namabarang']."</a> sudah habis. silahkan di isi kembali product !!</div>";	
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
					                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Batal</button>						
				                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 box">
                        <div class="row">
                            <div class="col-xs-8">
                                <a class="img-thumbnail">
                                    <img src="../../../image/profile/images.jfif" class="img-responsive">
                                </a>
                            </div>
                            <div class="row"></div>
                            <ul class="nav nav-pills nav-stacked">
                                <li class="text-small-2"><a href="index.php" class="text-small-2 text-start" id="active"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>
                                <li class="text-small-2"><a href="barang.php" class="text-small-2 text-start" id="active"><span class="glyphicon glyphicon-briefcase"></span>  Data Barang</a></li>
                                <li class="text-small-2"><a href="rekapitulasi_barang.php" class="text-small-2 text-start" id="active"><span class="glyphicon glyphicon-book"></span>  Rekapitulasi</a></li>
                                <li class="text-small-2"><a href="profile.php?id=<?php echo $_SESSION["id"];?>" class="text-small-2 text-start" id="active"><span class="glyphicon glyphicon-user"></span>  Dashboard Profile</a></li>
                                <li class="text-small-2"><a href="changepass.php?id=<?php echo $_SESSION["id"];?>" class="text-small-2 text-start" id="active"><span class="glyphicon glyphicon-lock"></span>  Change Passsword</a></li>
                                <li class="text-small-2"><a href="header.php?aksi=keluar" class="text-small-2 text-start" id="active"><span class="glyphicon glyphicon-log-out"></span>  Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    <div class="col-md-10">
        