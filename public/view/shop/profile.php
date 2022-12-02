<?php 
include "header.php";
include "../../../database/Migrations/koneksi.php";
?>
<script src="../../../script/readOnly.js" type="text/javascript"></script>
<?php 
$id = mysqli_real_escape_string($con, $_GET["id"]);
$sql = mysqli_query($con, "SELECT * FROM admin WHERE id='$id'");
while($sp = mysqli_fetch_array($sql)){
    $dp = mysqli_query($con, "SELECT * FROM datapribadi where id_pribadi='$id'");
    if($sn = mysqli_fetch_assoc($dp)){
        $row_nama = $sn["namapanggilan"];
        $row_umur = $sn["umur"];
        $row_alamat = $sn["alamat"];
        $row_salary = $sn["salary"];
    ?>
        <div class="col-md-4 col-md-offset-3">
            <div class="modal-header">
                <h1 class="text-def">Data Pribadi</h1>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="col-xs-8">
                        <a class="img-thumbnail">
                            <img src="../../../image/profile/images.jfif" class="img-responsive" style="width:45px; border-radius:3px;">
                        </a>
                    </div>
                    <div class="text-small-3 text-center"><?php echo $sp["nama"];?></div>
                    <a href="index.php" class="btn"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
                </div>
                <div class="card-body">
                    <form action="../../action/shop/act_data.php" method="post">
                        <div class="">
                            <label for="inputIDPribadi" class="text-small-3">ID Card Pribadi 1 :</label>
                            <input type="text" name="id_pribadi" class="form-control input-sm" value="<?php echo $sp["id"];?>" readonly>
                        </div>
                        <div class="">
                            <label for="inputIDPribadi" class="text-small-3">ID Card Pribadi 2 :</label>
                            <input type="text" name="id" class="form-control input-sm" value="<?php echo $sp["id"];?>" readonly>
                        </div>
                        <div class="">
                            <label for="inputIDPribadi" class="text-small-3">Nama Lengkap :</label>
                            <input type="text" name="namalengkap" class="form-control input-sm" value="<?php echo $sp["nama"];?>" readonly>
                        </div>
                        <div class="">
                            <label for="inputIDPribadi" class="text-small-3 mb-0">Nama Panggilan : </label>
                            <label class="text-small-3"><input type="checkbox" onclick="myFunctnamapanggilan()"></label>
                            <input type="text" name="namapanggilan" id="inputPanggilan" class="form-control input-sm" value="<?php echo $row_nama;?>" readonly>
                        </div>
                        <div class="">
                            <label for="inputIDPribadi" class="text-small-3 mb-0">Umur Pribadi : </label>
                            <label class="text-small-3"><input type="checkbox" onclick="myFunctumur()"></label>
                            <input type="text" name="umur" id="inputUmur" class="form-control input-sm" value="<?php echo $row_umur;?>" readonly>
                        </div>
                        <div class="">
                            <label for="inputIDPribadi" class="text-small-3 mb-0">Alamat Pribadi : </label>
                            <label class="text-small-3 mb-0"><input type="checkbox" onclick="myFunctalamat()"></label>
                            <input type="text" name="alamat" id="inputAlamat" class="form-control input-sm" value="<?php echo $row_alamat;?>" readonly>
                        </div>
                        <div class="mb-1">
                            <label for="inputIDPribadi" class="text-small-3 mb-0">Salary Pribadi : </label>
                            <label class="text-small-3 mb-0"><input type="checkbox" onclick="myFunctsalary()"></label>
                            <input type="text" name="salary" id="inputSalary" class="form-control input-sm" value="<?php echo $row_salary;?>" readonly>
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
}
?>

<?php 
include "footer.php";
?>