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
 
<!-- <h1>Halaman Member <span style="color:red"><?php echo $nama;?></span></h1>
<a href="./../logout.php">Logout</a> -->

<div class="container">
      <div class="col-sm-9">  
         <h2>Halaman Member</h2>
         <h5><span class="glyphicon glyphicon-time"></span> Dibuat pada, 01 Januari 2019.</h5>
         <h5><span class="label label-success">#Stmik insan pembangunan</span></h5><br>
       </div>
        </div><br>

<?php
include 'koneksi.php';
$query = "SELECT * FROM mobil WHERE nopol='$_GET[vnopol]'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$vstatus=$data['status'];
if ($vstatus=='disewa')
{ echo "<h3><center><b> Mobil tidak ada </b> <a href='index.php'>Pilih Lagi</a></center></h3>"; }
else
{
?>
  <div class="container">
  <form method="post" action="sewaproses2.php">
  <h3>Transaksi Sewa</h3>
  <div class="container">
  <div class="col-lg-4">
  <div class="table-responsive">
  <table class="table">
  <tr>
   <td>Nomor polisi :</td>  <td><?php echo $data['nopol']; ?></td>
  </tr>
  <tr>
   <td>Mobil :</td>  <td><?php echo $data['namamobil']; ?></td>
  </tr>
  <tr>
   <td>Harga per Hari :</td>  <td><?php echo $data['harga']; ?></td>
  </tr>
  <tr>
   <td>Lama Sewa(hari):</td>  <td><input type="text"name="txtjumlah"></td>
  </tr>
  </table>
   <?php $vnopol=$data['nopol']; ?>
   <?php $vharga=$data['harga']; ?>
   <input type="hidden" name="hiddennopol" value="<?php echo $vnopol?>">
   <input type="hidden" name="hiddenharga" value="<?php echo $vharga?>"> 
   

   <button class="btn btn-success" type="submit" value="Submit">Oke</button>
   <a href="index.php" class="btn btn-outline btn-default">Kembali</a>
   </form>
   </div>
   </div>
   </div>
<?php
}
?>
<br>
<?php
include('../footer.php');
?>