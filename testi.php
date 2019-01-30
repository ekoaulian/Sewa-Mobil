<?php
include('header.php');
?>

<div class="container">
  <h2>Testimoni</h2>

<?php
  include('koneksi.php');
  ?>
  <div class="container">
    <h3><u>Isi Form</u></h3><br>
    <form action="htesti.php" method="post">
        <div class="col-lg-10">
            <div class="col-md-offset-1">
                        <div class="form-group">
                            <label><b>Nama Lengkap</b></label>
                            <input type="text" name="txtnama"class="form-control">
                        </div>
                        <div class="form-group">
                            <label><b>Email</b></label>
                            <input type="email" name="txtemail"class="form-control">
                        </div>
                        <div class="form-group">
                            <label><b>Website</b></label>
                            <input type="text" name="txtweb"class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Komentar</label>
                            <textarea name="txtkomentar" class="form-control" rows="3"></textarea>
                        </div>
            </div>
                           
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <button type="submit" class="btn btn-info">Simpan</a></button>
                                <a href="index.php" class="btn btn-danger">Batal</a>
                        </div><br>
        </div>
        </form> 
        </div>
        <div class="container">
        <div class="container">
                                  <?php
                                      while ($row = mysql_fetch_array($qry)) 
                                      {
                                              echo "<div class='media'>
                                              <div class='media-left media-top'>
                                              <img src='img/user.jpg' class='media-object' style='width:60px'>
                                              </div>
                                              <div class='media-body'>";
                                              echo "<h4 class='media-heading'><b>".$row["nama"]."</b></h4>";
                                              echo "<p>".$row["website"]."</p>";
                                              echo "<p>".$row["komentar"]."</p>";
                                              echo "</div>";
                                         
                                      }
                                  ?>
        </div>
        </div>


<?php
include('footer.php');
?>