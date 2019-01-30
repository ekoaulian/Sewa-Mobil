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
        </div>


<?php
include 'koneksi.php';
$query="select * from mobil";
$hasil=mysql_query ($query); 
?>
<div class="container">
<table class="table table-bordered">
    <thead>
    <tr>
        <th width="300">Gambar Mobil</th>
        <th width="125">Spesifikasi</th>
        <th>Detail</th>
        <th width="100"><center>Status</center></th>
        <th width="115">Aksi</th>
    </tr>
    </thead>
<?php
while($baris=mysql_fetch_array($hasil))
{
echo "<tr>";

echo "<td><img width=300 height=200 src=".$baris["foto"]."></td>";
echo "<td>"."<b>Nomor Polisi</b> <br> <b>Nama Mobil</b> <br> <b>Harga Sewa</b>"."</td>"."<td>".$baris["nopol"]."<br>";
echo $baris["namamobil"]."<br>";
echo "Rp : ".$baris["harga"]."</td>";
echo "<td><center>".$baris["status"]."</center></td>";
echo "<td><center><b> <a href=sewaproses.php?vnopol=".$baris["nopol"]." class='btn btn-info' role='button'>Sewa Mobil</a></b></center></td>";
echo "</tr>";
}   ?> </table> 

</div>      

<?php
include('../footer.php');
?>