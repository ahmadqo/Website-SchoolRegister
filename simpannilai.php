<?php
$nisn = $_POST["nisn"];
$mtk=$_POST["mtk"];
$ipa=$_POST["ipa"];
$bing=$_POST["bing"];
$bind=$_POST["bind"];
$jurusan=$_POST["jurusan"];

$dataValid="YA";
if(strlen(trim($mtk))==0){
	echo "Isi Nilai Matematika..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($ipa))==0){
	echo "Isi Nilai IPA..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($bing))==0){
	echo "Isi Nilai Bahasa Inggris..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($bind))==0){
	echo "Isi Nilai Bahasa Indonesia..!<br/>";
	$dataValid = "TIDAK";
}
if(strlen(trim($jurusan))==0){
	echo "Pilih Jurusan Anda..!<br/>";
	$dataValid = "TIDAK";
}
if($dataValid == "TIDAK"){
	echo "Masih Ada Kesalahan, silahkan perbaiki..!<br/>";
	echo "<input type='button' value='Kembali'
		onClick='self.history.back()'>";
	exit;
}
include "koneksi.php";
$sql = "insert into formnilai (nisn,mtk,ipa,bing,bind,kodejur)
		values ('$nisn','$mtk','$ipa','$bing','$bind','$jurusan')";
$hasil = mysqli_query($kon,$sql);


if(!$hasil){
	echo "Gagal simpan, silahkan diulangi..!<br/>";
	echo mysqli_error($kon);
	echo "<br/> <input type='button' value='Kembali' 
		onClick='self.history.back()'>";
	exit;
}
else{
	header ("location:halaman_login.php?nisn=$nisn");
}
?>