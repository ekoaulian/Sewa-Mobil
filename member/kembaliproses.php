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
<h3>Pengembalian</h3>
<?php
include 'koneksi.php';
$vnopol=$_POST['cbmobil'];
$query = "SELECT * FROM mobil WHERE nopol='$vnopol'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>

   <form method="post" action="kembaliproses2.php">
    <div class="col-lg-4">
    <div class="table-responsive">
    <table class="table">
    <tr>
    <td>Nopol :</td> <td><?php echo $vnopol ?> </td>
    </tr>
    <tr>
    <td>Mobil :</td> <td><?php echo $data['namamobil']; ?> </td>
    </tr>
    <tr>
    <td>Denda :</td> <td><input type="text"name="txtdenda"> </td>
    </tr>
    </table>
   <input type="hidden" name="hiddennopol" value="<?php echo $vnopol?>">  
   <input class="btn btn-danger" type="submit" value="Submit">
   </form>
   </div>
   </div>


</div><br>

<?php
include('../footer.php');
?>
     