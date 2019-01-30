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
			<title>delete proses</title>
		</head>
		<body>

<?php

				$vnopol = $_POST ['txtnopol'];

				$conn = mysql_connect("localhost","root","") or die ("koneksi gagal");
				mysql_select_db("tugas_php",$conn);
				$strSQL = "delete from mobil where nopol='$vnopol'";
				$qry = mysql_query($strSQL,$conn) or die ("query salah");
							
			?>

			<!-- Data sudah di dihapus
			<a href="index.php">Oke</a> -->
			<script type="text/javascript">
			window.location = "index.php";
			</script>

		</body>
</html>
<?php
include('../footer.php');
?>