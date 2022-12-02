<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Market</title>
    <link rel="stylesheet" href="../../bootstraps/css/bootstrapv5221.css">
    <link rel="stylesheet" href="../../bootstraps/css/glyphicon.css">
    <link rel="stylesheet" href="../../bootstraps/css/text-bootstrap.css">
    <link rel="stylesheet" href="../..//css/card-bootstrap.css">
    <link rel="stylesheet" href="../../bootstraps/js/jquery-ui/jquery-ui.css">

    <link rel="icon" href="../../image/logo/images.png" type="png">


    <script src="../../bootstraps/js/bootstrap.min.js"></script>
    <script src="../../bootstraps/js/jquery-ui/jquery-ui.min.js"></script>
    <style type="text/css">
        body {
            background: linear-gradient(120deg, rgba(127, 80, 177, 0.22), rgba(121, 100, 144, 0.5));
        }
        .form-group{
            width: 100%;
        }
        .kotak {
            margin-top: 150px;
        }
        .kotak .input-group {
            margin-bottom: 20px;
        }
    </style>
    <script src="../../script/password.js" type="text/javascript"></script>
</head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <?php
                            if(isset($_GET["pesan"])){
                                if($_GET["pesan"] == "keluar"){
                                    echo "<div class='text-center'>Anda telah keluar Website</div>";
                                }else if ($_GET["pesan"] == "kosong"){
                                    echo "<div class='text-center'>Anda telah mengkosongkan form</div>";
                                }else if ($_GET["pesan"] == "gagal"){
                                    echo "<div class='text-center'>Anda telah gagal masuk ke dalam website</div>";
                                }
                                echo "<script>window.setTimeout(() => {window.location.href='index.php'}, 5000);</script>";
                            }
                        ?>
                    </div>
                    <div class="kotak">
                        <form action="../action/act_login.php" method="post" class="form-group">
                            <div class="panel panel-default col-md-3 col-md-offset-4">
                                <div class="text-center">
                                    <h3>Login Website Shop Market</h3>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" name="userEmail" class="form-control input" placeholder="Masukkan Email ...">
                                </div>
                                <div class="mb-3"></div>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input type="password" name="password" id="inputPass" class="form-control input" placeholder="Masukkan Password ...">
                                </div>
                                <label class="glyphicon glyphicon-lock"> Show Password dibawah ini <input type="checkbox" onclick="myFunction()" class="input-group"></label>
                                <div class="mb-1"></div>
                                <div class="">
                                    <div class="input-group">
                                        <input type="submit" value="Login" class="btn btn-primary" name="login">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>