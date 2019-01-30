<?php
    include 'koneksi.php';
    $query=mysql_query("
        SELECT trankembali.idtransaksi, trankembali.nopol, mobil.namamobil,trankembali.denda 
        FROM trankembali
        JOIN mobil ON trankembali.nopol = mobil.nopol
    ");
?> 
   <table border="1">
      <tr>
         <td>Id Transaksi</td>
         <td>Nopol</td>
         <td>Mobil</td>
         <td>Denda</td>
       </tr>
       <?php
          while($data=mysql_fetch_array($query)){
       ?>
       <tr>
         <td><?php echo $data['idtransaksi'];?></td>
         <td><?php echo $data['nopol'];?></td>
         <td><?php echo $data['namamobil'];?></td>
         <td><?php echo $data['denda'];?></td>
       </tr>
       <?php } 
?>
    </table>







