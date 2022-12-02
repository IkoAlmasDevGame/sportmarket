<?php 
include "header.php";
include "../../../database/Migrations/koneksi.php";
?>

<?php 
$id_buy = mysqli_real_escape_string($con, $_GET["id_buy"]);
$sql = mysqli_query($con, "SELECT * FROM buy WHERE id_buy='$id_buy'");
while($sq = mysqli_fetch_array($sql)){
?>
<div class="col-md-4 col-md-offset-3 mt-5 pt-5">
        <div class="card mt-2">
            <div class="card-header">
                <h3 class="mb-4 text-medium text-center">Detail Kaset</h3>
            </div>
                <div class="card-body">
                    <p class="card-text">Nama Barang : <?php echo $sq['namabarang'];?></p>
                    <p class="card-text">Harga Barang : <?php echo "Rp. ".number_format($sq['hargabarang']);?></p>
                    <p class="card-text">Jumlah Beli : <?php echo $sq["jumlahbeli"]; ?></p>
                    <p class="card-text">Laba Terjual : <?php echo "Rp. ".number_format($sq["laba"]); ?></p>
                    <p class="card-text">Total Harga : <?php echo "Rp. ".number_format($sq["total_harga"]); ?></p>
                </div>
            <div class="card-footer text-center">
                <a href="rekapitulasi_barang.php" class="glyphicon glyphicon-folder-close" style="color:inherit; text-decoration:none;"> Kembali</a>
         </div>
    </div>
</div>
<?php
}
?>

<?php 
include "footer.php";
?>