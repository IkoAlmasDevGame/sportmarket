<?php 
include "header.php";
include "../../../database/Migrations/koneksi.php";
?>

<link rel="stylesheet" href="../../../css/barang.css">

<h3 class="d-flex justify-content-center text-medium"><a href="barang.php" class="text-medium fw-normal">Data Barang Kaset Playstation GAME</a></h3>
<button type='button' data-bs-toggle='modal' data-bs-target='#data' class='btn btn-info'><span class="glyphicon glyphicon-plus"></span>  Tambah Data Barang</button>

<div class='container'> 
    <?php 
        if(isset($_GET["pesan"])){
            if($_GET["pesan"] == "penambahan"){
                echo "<p class='text-center text-small-3 fw-normal'><span class='glyphicon glyphicon-check'></span> Berhasil nambah data</p>";
            }else if($_GET["pesan"] == "pengeditan"){
                echo "<p class='text-center text-small-3 fw-normal'><span class='glyphicon glyphicon-edit'></span> Berhasil Edit Data</p>";
            }else if($_GET["pesan"] == "penghapus"){
                echo "<p class='text-center text-small-3 fw-normal'><span class='glyphicon glyphicon-trash'></span> Berhasil Delete Data</p>";
            }else if($_GET["pesan"] == "failed"){
                echo "<p class='text-center text-small-3 fw-normal'><span class='far fa-window-close'></span> Uploud Gagal Ke Database</p>";
            }            
            echo "<script type='text/javascript'>window.setTimeout(() => {location.href='barang.php'}, 3000);</script>";
        }
    ?>
</div>

<?php 
$per_hal=5;
$jumlah_record=mysqli_query($con,"SELECT * from databarang");
$jum=mysqli_num_rows($jumlah_record);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<div id="wraps">
	<span>
		<span>Jumlah Record :</span>		
		<span><?php echo $jum; ?></span>
    </span>
    <span>
		<span>Jumlah Halaman :</span>	
		<span><?php echo $halaman; ?></span>
    </span>
</div>

<ul class="pagination">			
	<?php 
	    for($x=1;$x<=$halaman;$x++){
	?>
	<li><a href="?page=<?php echo $x ?>" style="margin-right: 2px;"><?php echo $x ?></a></li>
	<?php
		}
	?>						
</ul>

<form method="GET">
    <div class="input-group col-md-3 col-md-offset-0">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari barang ..." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<form method="GET">
<div class="input-group col-md-3 col-md-offset-0">
        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
        <select name="cari" class="form-control input" onchange="this.form.submit()">
                <option>Pilih Jenis Kaset Game</option>
            <?php 
                $queryPs = mysqli_query($con, "SELECT * FROM cd_ps");
                while($ps = mysqli_fetch_array($queryPs)){
                    $row = $ps["kaset_ps"];
                    ?>
                        <option><?php echo $row;?></option>
                    <?php
                }
            ?>
        </select>
    </div>
</form>

<table class="table table-bordered mt-1">
    <tr>
        <th class="text-center text-small-3">No</th>
        <th class="text-center text-small-3">Nama Barang</th>
        <th class="text-center text-small-3">Kaset PS</th>
        <th class="text-center text-small-3">Harga Satuan</th>
        <th class="text-center text-small-3">Jumlah Barang</th>
        <th class="text-center text-small-3">Sisa Barang</th>
        <th class="text-center text-small-3">Opsional</th>
    </tr>
    <?php 
        if(isset($_GET["cari"])){
            $caribarang = mysqli_real_escape_string($con, $_GET["cari"]);
            $scaribarang = mysqli_query($con, "SELECT * FROM databarang WHERE namabarang like '$caribarang' or game like '$caribarang'");
        }else{
            $scaribarang = mysqli_query($con, "SELECT * FROM databarang limit $start, $per_hal"); 
        }
        $no=1;
        while($sc = mysqli_fetch_array($scaribarang)){
            ?>
            <tr>
                <td class="text-start text-small-3"><?php echo $no++; ?></td>
                <td class="text-start text-small-3"><?php echo $sc["namabarang"]; ?></td>
                <td class="text-start text-small-3"><?php echo $sc["game"]; ?></td>
                <td class="text-start text-small-3"><?php echo "Rp. ".number_format($sc["harga"]); ?></td>
                <td class="text-start text-small-3"><?php echo $sc["jumlah"]; ?></td>
                <td class="text-start text-small-3"><?php echo $sc["sisa"]; ?></td>
                <td id="wrap">
                    <a href="detail_barang.php?id_barang=<?php echo $sc["id_barang"];?>" class="btn text-small-2"><span class="glyphicon glyphicon-folder-open"></span></a>
                    <a onclick="if(confirm('Apakah anda ingin edit data ini iya atau tidak ?')){location.href='edit_barang.php?id_barang=<?php echo $sc['id_barang'];?>'}" class="btn text-small-2"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a onclick="if(confirm('Apakah anda ingin hapus data ini iya atau tidak ?')){location.href='../../action/shop/act_hapus_barang.php?id_barang=<?php echo $sc['id_barang'];?>'}" class="btn text-small-2"><span class="glyphicon glyphicon-trash"></span></a>
                    <a href="barang_laku.php?id_barang=<?php echo $sc["id_barang"];?>" class="text-small-3 btn"><span class="glyphicon glyphicon-shopping-cart"></span></a>
                </td>
            </tr>
            <?php
        }
    ?>
</table>	
	
<div class="modal" id="data">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pemasukan Data Barang</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="../../action/shop/act_barang.php" class="form-group" method="post">
                    <div class="mb-1">
                        <div class="input-group">	
                            <span class="input-group-addon"><span class="fa fa-briefcase"></span></span>
                            <input type="text" name="namabarang" id="inputBarang" class="form-control input" placeholder="masukkan nama barang ..." required>
                        </div>
                    </div>
                    <div class="mb-1">
                        <div class="input-group">	
                            <span class="input-group-addon"><span class="fas fa-gamepad"></span></span>
                            <section>
                                <select name="game" class="form-control select">
                                    <option>Pilih Kaset Game ...</option>
                                    <?php 
                                        $base = "SELECT * FROM cd_ps";
                                        $query = mysqli_query($con, $base);
                                        while($q = mysqli_fetch_array($query)){
                                            ?>
                                                <option value="<?php echo $q["kaset_ps"];?>"><?php echo $q["kaset_ps"];?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </section>
                        </div>
                    </div>
                    <div class="mb-1">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fas fa-cash-register"></span></span>
                            <input type="text" name="harga" id="inputHarga" class="form-control input" placeholder="masukkan harga satuan barang ..." required>
                        </div>
                    </div>
                    <div class="mb-1">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-briefcase"></span></span>
                            <input type="text" name="jumlah" id="inputJumlah" class="form-control input" placeholder="masukkan jumlah barang ..." required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
include "footer.php";
?>