<?php
$nisn = $_GET['nisn'];

include "koneksi.php";

$sql = "select nama from formdaftar where nisn = '$nisn'";
$ekseskusi = mysqli_query($kon,$sql);
$hasil = mysqli_fetch_assoc($ekseskusi);
$nama = $hasil['nama'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FORM NILAI</title>
    
    
	<!--- CSS BOOTSTRAP ---->
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
      <div class="row">
      	<div class="logo-form text-center">
            <h2> PENGISIAN DATA NILAI DAN JURUSAN </h2>
        </div>
        <div class="col-md-6 col-md-offset-3" id="form-data-diri">
            <h4> NILAI UJIAN SMP : <?php echo $nama; ?></h4>
          	<form class="form-horizontal" action="simpannilai.php" method="post">
              <input type="hidden" name="nisn" value="<?php echo $nisn; ?>">
              	<div class="form-group">
                    <label class="control-label col-sm-4">Matematika</label>
                    <div class="col-sm-2">
                      	<input name="mtk" type="text" class="form-control">
                    </div>
                </div>
              	<div class="form-group">
                    <label class="control-label col-sm-4" for="nama">IPA</label>
                    <div class="col-sm-2">
                      	<input name="ipa" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tempatlahir">Bahasa Inggris</label>
                    <div class="col-sm-2">
                      	<input name="bing" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tempatlahir">Bahasa Indonesia</label>
                    <div class="col-sm-2">
                        <input name="bind" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4">Jurusan yang diambil</label>
                  <div class="col-sm-5">
                    <select name="jurusan" class="form-control">
                      <option value="">Pilih Jurusan</option>
                      <option value="TKJ">Teknik Komputer Jaringan</option>
                      <option value="TPM">Teknik Permesinan</option>
                      <option value="TAV">Teknik Audio Visual</option>
                      <option value="TKR">Teknik Kendaraan Ringan</option>
                      <option value="TTL">Teknik Tenaga Listrik</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3 col-sm-offset-8">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>          
            </form>
        </div>
      </div>
    </div>
  </body>
</html>