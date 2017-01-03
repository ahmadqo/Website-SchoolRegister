<?php
$email = $_POST["email"];

 include "koneksi.php";
 
 $sql ="select nama from datalogin where email='$email'";
 $tampilkan = mysqli_query($kon,$sql) ;
 $hasil = mysqli_fetch_assoc($tampilkan);
 $nama = $hasil['nama'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FORM DAFTAR</title>
    
    
	<!--- CSS BOOTSTRAP ---->
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
      <div class="row">
      	<div class="logo-form text-center">
            <h2> PENGISIAN DATA DIRI CALON PENDAFTAR </h2>
        </div>
        <div class="col-md-6 col-md-offset-3" id="form-data-diri">
          	<form class="form-horizontal" action="simpanformdaftar.php" method="post">
              	<div class="form-group">
                    <label class="control-label col-sm-3" for="nsin">NISN</label>
                    <div class="col-sm-9">
                      	<input name="nisn" type="text" class="form-control" id="nisn" placeholder="Masukkan NISN anda">
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-sm-3" for="nsin">email</label>
                    <div class="col-sm-9">
                      	<input name="email" type="text" class="form-control" value="<?php echo $email; ?>" />
                    </div>
                </div>
              	<div class="form-group">
                    <label class="control-label col-sm-3" for="nama">Nama</label>
                    <div class="col-sm-9">
                      	<input name="nama" type="text" class="form-control" value="<?php echo $nama; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="tempatlahir">Tempat Lahir</label>
                    <div class="col-sm-9">
                      	<input name="tempatlahir" type="text" class="form-control" id="nama" placeholder="Masukkan Tempat Lahir">
                    </div>
                </div>
                <div class="form-group">
                  	<label class="control-label col-sm-3" for="tanggallahir">Tanggal Lahir</label>
                    <div class="col-sm-3"> 
                      <select name="tanggal" class="form-control">
                        <option value="">Tanggal</option>
                        <?php
                        for ($i=1; $i<=31 ; $i++) { 
                         echo"<option value='$i'>$i</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <div class="col-sm-3"> 
                      <select name="bulan" class="form-control">
                        <option value="">Bulan</option>
                        <?php
                        for ($i=1; $i<=12 ; $i++) { 
                         echo"<option value='$i'>$i</option>";
                        }
                        ?>
                      </select>
                    </div>
                     <div class="col-sm-3"> 
                      <select name="tahun" class="form-control">
                        <option value="">Tahun</option>
                        <?php
                        for ($i=1990; $i<=2016 ; $i++) { 
                         echo"<option value='$i'>$i</option>";
                        }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">Jenis Kelamin</label>
                  <div class="col-sm-9">
                    <input type="radio" name="jk" value="L">Laki-Laki
                    <input type="radio" name="jk" value="P">Perempuan   
                  </div>              
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">Alamat</label>
                  <div class="col-sm-9">
                    <textarea name="alamat" class="form-control" row="5"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">Agama</label>
                  <div class="col-sm-5">
                    <select name="agama" class="form-control">
                      <option values="">Agama</option>
                      <option values="Islam">Islam</option>
                      <option values="Kristen">Kristen</option>
                      <option values="Katholik">Katholik</option>
                      <option values="Hindu">Hindu</option>
                      <option values="Budha">Budha</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">Asal Sekolah</label>
                  <div class="col-sm-9">
                    <input type="text" name="asalsekolah" class="form-control" placeholder="Masukkan Asal Sekolah">
                  </div>
                </div>
                <div class="col-sm-3 col-sm-offset-10">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>         
            </form>
        </div>
      </div>
    </div>
  </body>
</html>