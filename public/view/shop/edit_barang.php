<?php 
include "header.php";
include "../../../database/Migrations/koneksi.php";
?>
<script src="../../../script/barang.js" type="text/javascript"></script>
<?php 
$id_barang = mysqli_real_escape_string($con, $_GET["id_barang"]);
$sql = mysqli_query($con, "SELECT * FROM databarang WHERE id_barang='$id_barang'");
while($sq = mysqli_fetch_array($sql)){
?>
<div class="col-md-4 col-md-offset-3">
    <h3 class="modal-title text-medium fw-normal text-center"> Detail Kaset <?php echo $sq["namabarang"] ?> </h3>
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0 text-medium text-center">Edit Detail Kaset</h3>
            </div>
                <div class="card-body">
                    <form action="../../action/shop/act_edit_barang.php" method="post">
                    <div class="">
                            <label for="inputBarang">ID Barang : </label>
                            <input type="text" name="id_barang" class="form-control input" value="<?php echo $sq["id_barang"]?>" readonly>
                        </div>
                        <div class="">
                            <label for="inputBarang">Nama Barang : </label>
                            <input type="text" name="namabarang" class="form-control input" value="<?php echo $sq["namabarang"]?>" readonly>
                        </div>
                        <div class="">
                            <label for="inputBarang">Jenis Kaset : </label>
                            <input type="text" name="game" class="form-control input" value="<?php echo $sq["game"]?>" readonly>
                        </div>
                        <div class="">
                            <label for="inputBarang">Jumlah Kaset : </label><div class="mb-0"></div>
                            <label><input type="checkbox" onclick="myFunctHarga()"> Read Harga</label>
                            <input type="text" name="harga" id="inputHarga" class="form-control input" value="<?php echo $sq["harga"]?>" readonly>
                        </div>
                        <div class="">
                            <label for="inputBarang">Jumlah Kaset : </label><div class="mb-0"></div>
                            <label><input type="checkbox" onclick="myFunctJumlah()"> Read Jumlah Kaset</label>
                            <input type="text" name="jumlah" id="inputJumlah" class="form-control input" value="<?php echo $sq["jumlah"]?>" readonly>
                        </div>
                        <div class="">
                            <label for="inputBarang">Sisa Kaset : </label><br>
                            <input type="text" name="sisa" class="form-control input" value="<?php echo $sq["sisa"]?>" readonly>
                        </div>
                        <div class="card-footer text-end">
                            <a href="barang.php" class="btn"><span class="far fa-times-circle" style="font-size:24px;"></span></a>
                            <button type="submit" class="btn btn-primary" name="finish"><span class="glyphicon glyphicon-save"></span></button>
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