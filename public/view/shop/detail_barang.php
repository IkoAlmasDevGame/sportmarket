<?php 
include "header.php";
include "../../../database/Migrations/koneksi.php";
?>

<?php 
$id_barang = mysqli_real_escape_string($con, $_GET["id_barang"]);
$sql = mysqli_query($con, "SELECT * FROM databarang WHERE id_barang='$id_barang'");
while($sq = mysqli_fetch_array($sql)){
?>
<div class="col-md-4 col-md-offset-3 mt-5 pt-5">
    <h3 class="modal-title text-medium fw-normal text-center"><span class="glyphicon glyphicon-folder-open" style="right:5px;"></span> -- Detail Kaset <?php echo $sq["game"] ?> -- </h3>
        <div class="card mt-2">
            <div class="card-header">
                <h3 class="mb-4 text-medium text-center">Detail Kaset</h3>
            </div>
                <div class="card-body">
                    <p class="card-text">Nama Barang : <?php echo $sq['namabarang'];?></p>
                    <p class="card-text">Jenis Kaset : <?php echo $sq["game"]; ?></p>
                    <p class="card-text">Harga Barang : <?php echo "Rp. ".number_format($sq['harga']);?></p>
                    <p class="card-text">Jumlah Barang : <?php echo $sq["jumlah"]; ?></p>
                    <p class="card-text">Sisa Barang : <?php echo $sq["sisa"]; ?></p>
                </div>
            <div class="card-footer text-center">
                <a href="barang.php" class="glyphicon glyphicon-folder-close" style="color:inherit; text-decoration:none;"> Kembali</a>
         </div>
    </div>
</div>
<?php
}
?>

<?php 
include "footer.php";
?>