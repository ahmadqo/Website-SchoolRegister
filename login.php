<?php
	session_start();
	include "koneksi.php";
	$gagal = "wrong";
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$sql = "select *
		    from datalogin
		    where email = '$email'
		    and pswd = '$password'";
	$eksukusi = mysqli_query($kon,$sql);
	$hasil = mysqli_num_rows($eksukusi);

	if ($hasil==1) {	
		$_SESSION['email'] = $email;		
		$sqlnisn = "select fd.nisn 
			        from formdaftar fd, datalogin dl
			        where dl.email='$email' and fd.email=dl.email";
	    $eksekusinim = mysqli_query($kon,$sqlnisn);
	    $hasilnim = mysqli_fetch_assoc($eksekusinim);
	    $nisn = $hasilnim['nisn'];

	    if (!$nisn=="") {
	    	header("location:halaman_login.php?nisn=$nisn");
	    } else{
	    	header("location:halaman_login.php?email=$email");
	    }
	} else {
		header("location:daftar.php?error=$gagal");
	}
?>