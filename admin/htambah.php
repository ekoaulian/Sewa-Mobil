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
		<title>Tambah</title>
	</head>
	<body>

<?php
					
					$vnopol = $_POST ['txtnopol'];
					$vfoto = $_POST ['txtfoto'];
					$vmobil = $_POST ['txtmobil'];
					$vharga = $_POST ['txtharga'];
					$vstatus = $_POST ['txtstatus'];

				$conn = mysql_connect("localhost","root","") or die ("koneksi gagal");
				mysql_select_db("tugas_php",$conn);
				$strSQL = "insert into mobil (nopol,foto,namamobil,harga,status) values ('$vnopol','$vfoto','$vmobil','$vharga','$vstatus')";
				$qry = mysql_query($strSQL,$conn) or die ("Query salah");
?>

			<!-- Data Sudah Diinput
			<a href="index.php"> Kembali </a> -->
			<script type="text/javascript">
			window.location = "index.php";
			</script>

	</body>
	</html>
<?php
include('../footer.php');
?>