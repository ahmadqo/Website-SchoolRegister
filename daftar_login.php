<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMK N NASIONAL BERBAH</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
  	<div class="container">
      <div class="row">
      	<div class="logo-form text-center">
          	<h1> SMK NASIONAL BERBAH </h1>
            <h2> DAFTAR AKUN </h2>
        </div>
        <div class="col-md-4 col-md-offset-4">
          	<form action="simpandaftarlogin.php" method="post">
            	<div class="form-group">
                	<label for="name">Nama:</label>
                	<input name="name" type="text" class="form-control" id="nama">
              	</div>
              	<div class="form-group">
                	<label for="email">Email address:</label>
                	<input name="email" type="email" class="form-control" id="email">
              	</div>
              	<div class="form-group">
                	<label for="pwd">Password:</label>
                	<input type="password" name="pswd" class="form-control" id="pwd">
              	</div>
                <div class="form-group">
                	<label for="pwd">Ulangi Password:</label>
                	<input name="ulangpswd" type="password" class="form-control" id="k_pwd">
              	</div>
              	<div class="button_div">
              		<button name="repeat_pwd" type="submit" class="btn btn-primary btn-block">Submit</button>
           		</div>
                <div class="link-text" align="left">
                	Sudah Punya akun?&nbsp; 
                    <a href="index.php"> Silahkan Login </a>
                </div>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>