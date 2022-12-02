<?php 
include "header.php";
include "../../../database/Migrations/koneksi.php";
?>
<script src="../../../script/change.js" type="text/javascript"></script>
<?php 
$id = mysqli_real_escape_string($con, $_GET["id"]);
$sql = "SELECT * FROM admin WHERE id=".$id;
$result = mysqli_query($con, $sql);
while($bio = mysqli_fetch_assoc($result)){
    $b = $bio["userEmail"];
    $bi = $bio["password"];
    $boi = $bio["nama"];
    ?>
        <div class="col-md-4 col-md-offset-3">
            <h1 class="text-def">Data Pribadi</h1>
                <div class="card">
                    <div class="card-header">
                        <div class="col-xs-8">
                            <a class="img-thumbnail">
                                <img src="../../../image/profile/images.jfif" class="img-responsive" style="width:45px; border-radius:3px;">
                            </a>
                        </div>
                            <div class="text-small-3 text-center"><?php echo $boi;?></div>
                            <a href="index.php" class="btn"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
                        </div>
                        <div class="card-body">
                        <form action="../../action/shop/act_change.php" method="post">
                        <div class="mb-1">
                            <label for="inputUserID" class="text-medium">ID Admin : </label>
                            <input type="text" name="id" class="form-control input" value="<?php echo $bio["id"];?>" readonly>                        
                        </div>
                        <div class="mb-1">
                            <label for="inputUserEmail" class="text-medium">UserEmail : </label>
                            <label class="text-small-3 mb-0"><input type="checkbox" onclick="myFunctEmail()"></label>
                            <input type="email" name="userEmail" id="inputEmail" class="form-control input" value="<?php echo $b;?>" readonly>
                        </div>
                        <div class="mb-1">
                            <label for="inputPassword" class="text-medium">Password : </label>
                            <label class="text-small-3 mb-0"><input type="checkbox" onclick="myFunctPassword()"></label>
                            <input type="password" name="password" id="inputPass" class="form-control input" value="<?php echo $bi;?>" readonly>
                        </div>
                        <div class="mb-1">
                            <label for="inputNama" class="text-medium">Nama Lengkap : </label>
                            <label class="text-small-3 mb-0"><input type="checkbox" onclick="myFunctNama()"></label>
                            <input type="text" name="nama" id="inputnama" class="form-control input" value="<?php echo $boi;?>" readonly>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" name="data" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
}
?>

<?php 
include "footer.php";
?>