<link href="css/bootstrap.css" rel="stylesheet">
	<div class="col-lg-12">
	<h1 style="text-align: center;">Daftar Siswa Pendaftar</h1>
	<?php

	$nisn = $_GET['nisn'];
	include "koneksi.php";
	 
	$sql ="select fd.nisn,dl.nama,fn.mtk,fn.ipa,fn.bing,fn.bind,dl.email,jur.kodejur
			from datalogin dl, formdaftar fd, formnilai fn, jurusan jur 
			where dl.email = fd.email 
			AND fn.kodejur = jur.kodejur 
			AND fd.nisn = fn.nisn";
			
	$tampilkan = mysqli_query($kon,$sql) ;
		echo "<center>";
		echo"<table class='table table-striped'>
		<thead>
			<tr>
				<th>NISN</th>
				<th>NAMA</th>
				<th>MATEKMATIKA</th>
				<th>IPA</th>
				<th>BAHASA INGGRIS</th>
				<th>BAHAS INDONESIA</th>
				<th>EMAIL</th>
				<th>JURUSAN</th>
			</tr>
		</thead>";
			
	while ($row=mysqli_fetch_array($tampilkan))  {
		echo "<tbody>";
		echo "<tr>";
		echo "<td>".$row["nisn"];
		echo "<td>".$row["nama"];
		echo "<td>".$row["mtk"];
		echo "<td>".$row["ipa"];
		echo "<td>".$row["bing"];
		echo "<td>".$row["bind"];
		echo "<td>".$row["email"];
		echo "<td>".$row["kodejur"];
		echo "</tr>";
		echo "</tbody>";
	}
	echo "</table>";
	  

	?>
	<a href="halaman_login.php?nisn=<?php echo $nisn; ?>"><button class="btn btn-default">Back</button></a>  
</div>