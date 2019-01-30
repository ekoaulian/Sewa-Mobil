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
    include('koneksi.php');
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
        <div class="col-lg-10">
            <div class="col-md-offset-1">
                        <div class="panel-heading"> 
                            <a href="tambah.php" class="btn btn-success" align="center"><span class="fa fa-pencil"></span>Add</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No Polisi</th>
                                            <th>Nama Mobil</th>
                                            <th>Foto</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        while ($row = mysql_fetch_array($qry)) 
                                        {
                                            echo "<tr>";
                                            "<div>";
                                                echo "<td>".$row["nopol"]."</td>";
                                                echo "<td>".$row["namamobil"]."</td>";
                                                echo "<td>".$row["foto"]."</td>";
                                                echo "<td>".$row["harga"]."</td>";
                                                echo "<td>".$row["status"]."</td>";
                                                echo "<td><a href=read.php?vnopol=".$row["nopol"]." class='btn btn-primary'><span class='fa fa-file-o'></span>Read</td>";
                                                echo "<td><a href=edit.php?vnopol=".$row["nopol"]." class='btn btn-warning'><span class='fa fa-edit'></span>Edit</td>";
                                                echo "<td><a href=delete.php?vnopol=".$row["nopol"]." class='btn btn-danger'><span class='fa fa-trash-o'></span>Delete</td>";  
                                            echo "</tr>";
                                        }
                                    ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
include('../footer.php');
?>