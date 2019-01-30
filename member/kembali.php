<?php
include('header.php');
session_start();
 
if( !isset($_SESSION['nama_user']) )
{
    header('location:./../'.$_SESSION['akses']);
    exit();
}else{
    $nama = $_SESSION['nama_user'];
}
 
?>

<div class="container">
      <div class="col-sm-9">  
         <h2>Halaman Member</h2>
         <h5><span class="glyphicon glyphicon-time"></span> Dibuat pada, 01 Januari 2019.</h5>
         <h5><span class="label label-success">#Stmik insan pembangunan</span></h5><br>
       </div>
       </div>
<div class="container">
	<div class="col-sm-6">
<h2>Transaksi Pengembalian</h2>
<form action="kembaliproses.php" method="post">
<h4>Nomor Polisi :</h4><select class="form-control" name="cbmobil">
<?php
include 'koneksi.php';
$query="select * from mobil";
$hasil=mysql_query ($query);
while($baris=mysql_fetch_array($hasil))
{
 echo "<option value='$baris[0]'>$baris[0]</option>" ;
} 
?>
</select><br>
<input class="btn btn-warning" type="submit" value="submit">
<a href="index.php" class="btn btn-outline btn-default">Kembali</a>
</form>
</div>
</div><br>

<?php
include('../footer.php');
?>
      