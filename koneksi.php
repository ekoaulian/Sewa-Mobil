<?php
                $conn = mysql_connect("localhost","root","") or die ("koneksi gagal");
                mysql_select_db("tugas_php",$conn);
                $strSQL = "select * from testi";
                $qry = mysql_query($strSQL,$conn) or die ("query salah");
?>