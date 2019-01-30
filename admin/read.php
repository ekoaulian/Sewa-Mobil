<?php
include('header.php');
session_start();
 
if( !isset($_SESSION['saya_admin']) )
{
    header('location:./../'.$_SESSION['akses']);
    exit();
}
 
$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
?>
<?php
                $conn = mysql_connect("localhost","root","") or die ("koneksi gagal");
                mysql_select_db("tugas_php",$conn);
                $strSQL = "select * from mobil where nopol='$_GET[vnopol]' ";
                $qry = mysql_query($strSQL,$conn) or die ("query salah");
                $row=mysql_fetch_array($qry);
?>
<!-- <h1>Halaman Admin <span style="color:red"><?php echo $nama;?></span></h1> -->
<!-- <a href="./../logout.php">Logout</a> -->

<div class="container">
		<div class="col-sm-9">  
	      <h2>Halaman Admin</h2>
	      <h5><span class="glyphicon glyphicon-time"></span> Dibuat pada, 01 Januari 2019.</h5>
	      <h5><span class="label label-success">#Stmik insan pembangunan</span></h5><br>
	    </div>
</div>
<div class="container">
    <h3><u>Lihat Disini</u></h3><br>
    <form action="" method="post">
        <div class="col-lg-10">
            <div class="col-md-offset-1">
            			<div class="form-group">
                            <label><b>Foto Mobil</b></label>
                            <input type="text" name="txtfoto"class="form-control" value="<?php echo $row['foto'];?>" readonly />
                        </div>
                        <div class="form-group">
                            <label><b>Nomor Polisi</b></label>
                            <input type="text" name="txtnomor"class="form-control" value="<?php echo $row['nopol'];?>" readonly />
                        </div>
                        <div class="form-group">
                            <label><b>Nama Mobil</b></label>
                            <input type="text" name="txtmobil"class="form-control" value="<?php echo $row['namamobil'];?>" readonly />
                        </div>
                        <div class="form-group">
                            <label><b>Harga Sewa</b></label>
                            <input type="text" name="txtharga"class="form-control" value="<?php echo $row['harga'];?>" readonly />
                        </div>
                        <div class="form-group">
                            <label><b>Status</b></label>
                            <input type="text" name="txtstatus"class="form-control" value="<?php echo $row['status'];?>" readonly />
                        </div>
                           
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <a href="index.php" class="btn btn-danger">Kembali</a>
                        </div><br>
        </div>
        </form> 
        </div>

			
            


<?php
include('../footer.php');
?>