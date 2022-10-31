<?php
include("conexion.php");

?>
<?php
	session_start();

	if(!isset($_SESSION['usr_id'])) {
		header("Location:../login/login.php");
	}

	include_once '../login/dbconnect.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	  <title>PANEL DE GRAFICA</title>

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index0.php"> <img src="../login/image/logo-HA.png" alt="DHL" width="110px"  >   </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	<ul class="nav navbar-nav navbar-left">
					<li><a href="ping.php">Panel Ping</a></li>
	</ul>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

  </div>

    <ul class="nav navbar-nav navbar-right">
      <?php if (isset($_SESSION['usr_id'])) { ?>
      <li><p class="navbar-text"><i class="btn btn-danger btn-xs" ><b><?php echo $_SESSION['usr_name']; ?></b></i></p></li>
      <a class="nav-item nav-link" href="../login/logout.php">Log Out</a>
      <!--<li><a href="../login/logout.php">Log Out</a></li> -->
      <?php } else { ?>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Registro</a></li>
      <?php } ?>
    </ul>



</nav>
<br><br>

<br><br>
  <div class="container">
    <div class="row">

<br><br><br><br>

		 </div>
   </div>
<br><br>
<!---gRAFICA DE HOSPITALES NO LLEGA EL PING---->

<?php require("datas/data.php"); ?>

<br>

<?php require("datas/data2.php"); ?>
