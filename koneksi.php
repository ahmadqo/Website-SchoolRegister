<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "103.28.12.215 ";
	$user  = "aqomarud_qomar";
	$pass = "kowe4asu";
	$dbName = "aqomarud_tugas_proyek";

	$kon = mysqli_connect($host, $user, $pass);
	if(!$kon)
		die("Gagal Koneksi...");
	$hasil =mysqli_select_db($kon, $dbName);
	if(!$hasil){
		$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
		if (!$hasil)
			die("Gagal Buat Database");
		else
			$hasil = mysqli_select_db($kon, $dbName);
			if (!$hasil) die ("Gagal Konek Database");
	}
	
	$sqlTableDataLogin = "create table if not exists datalogin(
					nama varchar(50) not null default '',
					email varchar(50) not null default '' primary key,
					pswd varchar(20) not null default '',
					ulangpswd varchar(20) not null default '')";
	mysqli_query($kon, $sqlTableDataLogin) or die("Gagal Buat Table Barang");
	
	$sqlTableDaftar = "	create table if not exists formdaftar(
						nisn varchar(10) not null default '' primary key,
						nama varchar(50) not null default '',
						tempatlahir varchar(20) not null default '',
						tanggal date,
						kelamin char(1) not null default '',
						alamat varchar(100) not null default '',
						agama varchar(20) not null default '',
						asalsekolah varchar(30) not null default '', 
						email varchar(50) not null default '')";
	mysqli_query($kon, $sqlTableDaftar) or die("Gagal Buat Table Barang");
	
	$sqlTableNilai = "	create table if not exists formnilai (
						id int auto_increment not null primary key,
						nisn varchar(10) not null default'',
						mtk float ,
						ipa float,
						bing float,
						bind float,
						kodejur char(3) not null default '')";
	mysqli_query($kon, $sqlTableNilai) or die("Gagal Buat Table Barang");
	
	$sqlTableJurusan = "create table if not exists jurusan(
						kodejur char(3) not null primary key,
						namajur varchar(30) not null default '')";
	mysqli_query($kon, $sqlTableJurusan) or die("Gagal Buat Table Barang");
?>