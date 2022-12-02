<?php 
include "header.php";
include "../../../database/Migrations/koneksi.php";
?>

<?php 
$id_barang = $_GET["id_barang"];
$sql = mysqli_query($con, "SELECT * FROM databarang where id_barang='$id_barang'");
while($sc = mysqli_fetch_array($sql)){
    ?>
    
    <script type="text/javascript">
	$(function(){
        $("#datepicker").datepicker();
	});
    </script>

    <h3 class="d-flex justify-content-center text-medium"><a href="barang_laku.php?id_barang=<?php echo $sc["id_barang"];?>" class="text-medium fw-normal">Pembelian CD Playstation</a></h3>

    <div class="col-md-4 col-md-offset-4 mt-5 pt-5 position-relative d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-5">Product CD PS</h3>
            </div>
                <div class="card-body">
                    <p class="card-text">Nama Barang : <?php echo $sc['namabarang'];?></p>
                    <p class="card-text">Harga Barang : <?php echo "Rp. ".number_format($sc['harga']);?></p>
                </div>
            <div class="card-footer">
                <button type="submit" class="btn text-small-3" data-bs-toggle="modal" data-bs-target="#buy"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                <a href="barang.php" class="btn text-small-3"><span class="glyphicon glyphicon-arrow-left"></span></a>
            </div>
        </div>
    </div>
    <div class="modal" id="buy">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Pembelian Barang Jenis Kaset <?php echo $sc["game"];?></h4>
                </div>
                <div class="modal-body">
                    <form action="../../action/shop/act_barang_laku.php" method="post" class="form-group">
                        <div class="input-group mb-1">
                            <div class="input-group-addon"><span class="far fa-calendar-alt"></span></div>
                            <input type="text" name="tanggal" id="datepicker" class="form-control input">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-addon"><span class="fa fa-briefcase"></span></div>
                            <input type="text" name="namabarang" class="form-control input" value="<?php echo $sc["namabarang"];?>" readonly>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-addon"><span class="fa fa-briefcase"></span></div>
                            <input type="text" name="harga" class="form-control input" value="<?php echo $sc["harga"];?>" readonly>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-addon"><span class="fa fa-briefcase"></span></div>
                            <input type="text" name="jumlahbeli" class="form-control input" placeholder="Jumlah Beli Barang ...">
                        </div>
                        <div class="modal-footer">
                            <div class="input-group">
                                <button type="button" class="btn btn-default" data-bs-dismiss="modal" style="left: 5px;">Batal</button>
                                <button type="submit" class="btn btn-default" name="buy" style="right: 5px;"><span class="fas fa-cart-arrow-down"></span> Beli</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

<?php 
include "footer.php";
?>