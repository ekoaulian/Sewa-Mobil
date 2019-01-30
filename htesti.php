<?php

					$vnama = $_POST ['txtnama'];
					$vemail = $_POST ['txtemail'];
					$vweb = $_POST ['txtweb'];
					$vkomentar = $_POST ['txtkomentar'];

				$conn = mysql_connect("localhost","root","") or die ("koneksi gagal");
				mysql_select_db("tugas_php",$conn);
				$strSQL = "insert into testi (nama,email,website,komentar) values ('$vnama','$vemail','$vweb','$vkomentar')";
				$qry = mysql_query($strSQL,$conn) or die ("Query salah");
?>
			Data Sudah Diinput
			<a href="index.php"> Kembali </a>