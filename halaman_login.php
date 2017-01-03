<?php
  session_start();
  if(!isset($_SESSION['email'])){
    header("location:index.php");
  }
  $nisn = "";
  $email = "";
  if(isset($_GET['email'])){
    $email = $_GET["email"];

    include "koneksi.php";

    $sql = "select nama from datalogin where email = '$email'";
    $tampilkan = mysqli_query($kon,$sql) ;
    $hasil = mysqli_fetch_assoc($tampilkan);
    $nama = $hasil['nama'];
  } 
  if(isset($_GET['nisn'])){
    $nisn = $_GET['nisn'];

    include "koneksi.php";

    $sql = "select nama from formdaftar where nisn = '$nisn'";
    $tampilkan = mysqli_query($kon,$sql) ;
    $hasil = mysqli_fetch_assoc($tampilkan);
    $nama = $hasil['nama'];
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HALAMAN MASUK</title>
    
    
	<!--- CSS BOOTSTRAP ---->
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
  	<div class="row">
      	<div class="logo-form text-center">
            <h2> SELAMAT DATANG </h2>
            <h2> <?php echo $nama; ?></h2>
            <?php
              if ($nisn=="") {
                ?>  
                <h3> SILAHKAN LENGKAPI DATA DIRI ANDA </h3>
                <form action="form_daftar.php" method="post" >
                    <input type="hidden" class="form-control" name="email" value="<?php echo $email;?>"/>
                    <input type="submit" class="btn btn-default" value="Klik disini"/>
                </form>
              <?php
              } else{ ?>
                <br/>
                <a href="daftar_siswa.php?nisn=<?php echo $nisn; ?>"><button type="button" class="btn btn-primary">Daftar Siswa</button></a>
                <a href="edit_data.php"><button type="button" class="btn btn-primary">Ubah Data Diri</button></a>
                <br>
              <?php
              }
              ?>
            <br> 
            <a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
        </div>
    </div>
  </body>
 </html>