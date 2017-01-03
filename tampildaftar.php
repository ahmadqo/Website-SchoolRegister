<?php
 include "koneksi.php";
 
 $sql ="select fd.nisn,dl.nama,fn.mtk,fn.ipa,fn.bing,fn.bind,dl.email,jur.kodejur
		from datalogin dl, formdaftar fd, formnilai fn, jurusan jur 
		where dl.email = fd.email and 
		fn.kodejur = jur.kodejur";
		
 $tampilkan = mysqli_query($kon,$sql) ;
	echo "<center>";
	echo"<table border='1'>
	<tr>
		<th>NID
		<th>NAMA
		<th>JENIS KELAMIN
		<th>TEMPAT LAHIR
		<th>TANGGAL LAHIR
		<th>ALAMAT
		<th>TELP
		<th>STATUS
		<th colspan=2>Proses";
		
  while ($row=mysqli_fetch_array($tampilkan))  {
	echo "<tr>";
	echo "<td>".$row["nid"];
	echo "<td>".$row["nama"];
	echo "<td>".$row["jk"];
	echo "<td>".$row["tempat"];
	echo "<td>".$row["tgl"];
	echo "<td>".$row["alamat"];
	echo "<td>".$row["telp"];
	echo "<td>".$row["status"];
	echo "<td><a href='dosen_edit.php?nim=$row[nid]'>Edit</a>
		      <a href='dosen_hapus.php?nim=$row[nid]'>Hapus</a>";
  }
  echo "</table>";
  
?>  