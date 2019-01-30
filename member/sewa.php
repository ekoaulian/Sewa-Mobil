<?php
include 'koneksi.php';
$query="select * from mobil";
$hasil=mysql_query ($query); 
?>
<table border="2">
<tr><td>NOPOL</td><td>MOBIL</td><td>Foto</td><td>Harga</td><td>Status</td><td>Aksi</td></tr>
<?php
while($baris=mysql_fetch_array($hasil))
{
echo "<tr>";
echo "<td>".$baris["nopol"]."</td>";
echo "<td>".$baris["namamobil"]."</td>";
echo "<td><img width=50 height=50 src=".$baris["foto"]."></td>";
echo "<td>".$baris["harga"]."</td>";
echo "<td>".$baris["status"]."</td>";
echo "<td><a href=sewaproses.php?vnopol=".$baris["nopol"].">Sewa</td>";
echo "</tr>";
}   ?> </table> 

      