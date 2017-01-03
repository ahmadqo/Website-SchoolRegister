<?php
$nisn = $_POST["nisn"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$tempatlahir = $_POST["tempatlahir"];

$tanggal = $_POST["tanggal"];
$bulan = $_POST["bulan"];
$tahun = $_POST["tahun"];
$tanggalkem = mktime(0,0,0,$bulan,$tanggal,$tahun);
$kembali = date("Y-m-j",$tanggalkem);

$kelamin = $_POST["jk"];
$alamat = $_POST["alamat"];
$agama = $_POST["agama"];
$asalsekolah = $_POST["asalsekolah"];

$dataValid="YA";
if(strlen(trim($nisn))==0){
	echo "nisn Harus Diisi..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($nama))==0){
	echo "Nama Harus Diisi..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($tanggal))==0){
	echo "Tanggal Lahir Harus Diisi..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($bulan))==0){
	echo "Bulan Lahir Harus Diisi..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($tahun))==0){
	echo "Tahun Lahir Harus Diisi..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($kelamin))==0){
	echo "Jenis Kelamin Harus Diisi..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($alamat))==0){
	echo "Alamat Harus Diisi..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($agama))==0){
	echo "Agama Harus Diisi..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($asalsekolah))==0){
	echo "Asal Sekolah Harus Diisi..!<br/>";
	$dataValid = "TIDAK";
}
if($dataValid == "TIDAK"){
	echo "Masih Ada Kesalahan, silahkan perbaiki..!<br/>";
	echo "<input type='button' value='Kembali'
		onClick='self.history.back()'>";
	exit;
}
include "koneksi.php";
$sql = "insert into formdaftar (nisn,nama,tempatlahir,tanggal,kelamin,alamat,agama,asalsekolah,email)
		values ('$nisn','$nama','$tempatlahir','$kembali','$kelamin','$alamat','$agama','$asalsekolah','$email')";
$hasil = mysqli_query($kon,$sql);

if(!$hasil){
	echo "Gagal simpan, silahkan diulangi..!<br/>";
	echo mysqli_error($kon);
	echo "<br/> <input type='button' value='Kembali' 
		onClick='self.history.back()'>";
	exit;
}
else{
	header ("location:form_nilai.php?nisn=$nisn");
}
?>