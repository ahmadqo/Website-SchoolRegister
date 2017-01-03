<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
		<?php
			include("sidebar.html");
		?>
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    	<a href="#menu-toggle" id="menu-toggle"><img src="img/showmenu.png" width="50px"></a>
                        <div class="logo-form text-center">
                            <h1> SMK NASIONAL BERBAH </h1>
                            <h2> WEBSITE PENDAFTARAN SISWA BARU </h2>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input name="email" type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input name="pwd" type="password" class="form-control" id="pwd">
                                </div>
                                <?php
                                    if(isset($_GET['error'])){
                                        ?>
                                        <div class="alert alert-danger">
                                          <strong>Kesalahan!</strong> Email atau password salah
                                        </div>
                                        <?php
                                    }
                                ?>
                                <div class="checkbox">
                                    <label><input type="checkbox"> Remember me</label>
                                </div>
                                <div class="button_div">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    <a href="daftar_login.php" class="btn btn-primary btn-block">Daftar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
