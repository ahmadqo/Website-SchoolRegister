<?php
$name=$_POST["name"];
$email=$_POST["email"];
$pswd=$_POST["pswd"];
$ulangpswd=$_POST["ulangpswd"];

$dataValid="YA";
if(strlen(trim($name))==0){
	echo "Nama Harus Diisi..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($email))==0){
	echo "Email Harus Diisi..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($pswd))==0){
	echo "Lengkapi Pasword Anda<br/>";
	$dataValid = "TIDAK";
}
if($dataValid == "TIDAK"){
	echo "Masih Ada Kesalahan, silahkan perbaiki..!<br/>";
	echo "<input type='button' value='Kembali'
		onClick='self.history.back()'>";
	exit;
}
include "koneksi.php";
$sql = "insert into datalogin (nama,email,pswd,ulangpswd)
		values ('$name','$email','$pswd','$ulangpswd')";
$hasil = mysqli_query($kon,$sql);

if(!$hasil){
	echo "Gagal simpan, silahkan diulangi..!<br/>";
	echo mysqli_error($kon);
	echo "<br/> <input type='button' value='Kembali' 
		onClick='self.history.back()'>";
	exit;
}
else{
	include "daftar.php";
}
?>