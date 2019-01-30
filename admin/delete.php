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
	<!DOCTYPE html>
	<html>
	<head>
		<title>delete</title>
	</head>
	<body>
	<?php
                $conn = mysql_connect("localhost","root","") or die ("koneksi gagal");
                mysql_select_db("tugas_php",$conn);
                $strSQL = "select * from mobil where nopol='$_GET[vnopol]'"; //vnip ini adalah variable
                $qry = mysql_query($strSQL,$conn) or die ("query salah");
                $row=mysql_fetch_array($qry);
    ?>
	<div class="container">
		<h3><u>Delete Data</u></h3><br>
		<form action="hdelete.php" method="post">
        <div class="col-lg-10">
            <div class="col-md-offset-1">
                        <div class="form-group">
                            <label><b>No polisi</b></label>
                            <input type="text" name="txtnopol"class="form-control" value="<?php echo $row['nopol'];?>" readonly />
                        </div>
                        <div class="form-group">
                            <label><b>Nama Mobil</b></label>
                            <input type="text" name="txtmobil"class="form-control" value="<?php echo $row['namamobil'];?>" readonly />
                        </div>
                        <div class="form-group">
                            <label><b>Foto</b></label>
                            <input type="text" name="txtfoto"class="form-control" value="<?php echo $row['foto'];?>" readonly />
                        </div>
                        <div class="form-group">
                            <label><b>Harga</b></label>
                            <input type="text" name="txtharga"class="form-control" value="<?php echo $row['harga'];?>" readonly />
                        </div>
                        <div class="form-group">
                            <label><b>Status</b></label>
                            <input type="text" name="txtstatus"class="form-control" value="<?php echo $row['status'];?>" readonly />
                        </div>
            </div>
                           
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <button type="submit" class="btn btn-info">Delete</a></button>
                                <a href="index.php" class="btn btn-danger">Batal</a>
                        </div>
        </div>
        </form> 
        </div>
                            
	</body>
	</html>
<?php
include('../footer.php');
?>
