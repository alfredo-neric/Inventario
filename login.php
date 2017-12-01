<!DOCTYPE HTML>
<html>
<head>
<title>SIPCA</title><link rel="shortcut icon" href="images/favicon.ico">
<link rel="icon" type="images/favicon.ico" href="images/favicon.ico">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/style_nu.css" />
  <link rel="stylesheet" type="text/css" href="css/redon.css" />
<!-- javascript at the bottom for fast page loading --> 
 <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>

  		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.dropotron-1.0.js"></script>
		<script type="text/javascript" src="js/init.js"></script>
		
		<script type="text/javascript">
			document.oncontextmenu = function(){return false;}
		</script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
		<table border='0'>
		<tr><td><img src="images/sipca2.png" width="250" height="150" alt="seascape_one" /></td><td><font size=6 face='centaur' ><center><b>Secretaría de Comunicaciones y Transportes</b></center></font></td>
		  <td><img src="images/logo2.png" width="250" height="150" alt="seascape_one" /></td>
		</tr>
		  </table>
        </div>
      </div>
	  <div class='cleaner h60'></div>
      <nav>
	  	<?php include('menu/menu_principal.php'); ?>
      </nav>
    </header>	<div class='cleaner h10'></div>
    <div id="site_content">
	<div id="sidebar_container">
        <div class="sidebar">
        <center>
			<h2><b>Secretaría de Comunicaciones y Transporte</b></h2>
			<img src='images/sct-e.jpg' width="200" title='SCT' rel="#prompt2" class="modalInput" />
		<div class='cleaner h10'></div>
		<img src='images/utvt.jpg' width="200" title='UTVT' rel="#prompt2" class="modalInput" />
		</center>
		</div>
      </div>
      <div class="contenido3">
	  <div class='cleaner h10'></div>
<form id='frmdo' name='frmdo' method='POST' action="validar.php">
	<center><table width='350' border='0'>
	<tr><td colspan='2'><center><h4>Ingresar al Sistema</h4></center></td></tr>
	<tr>
	<td align="left" class="textos0"><strong>Usuario:</strong></td>
	<td><input type='text' name='usuario' size='30' id='usuario' class='redon7' required=''></td>
	</tr>
	<tr>
	<td align="left" class="textos0"><strong>Password</strong></td>
	<td><input type='password' name='psw' size='30' id='psw' class='redon7' required></td>
	</tr>
	<tr>
	<td colspan='2'>
	<p>
	<center>
	<input type='submit' name='button' class='boton' value='Accesar' />
	</center>
	</p></td>
	</tr>
	</table> <?php error_reporting(0); $msg=$_GET['msg']; echo"$msg";?>
	<p><a href='recuperar_password.php'>¿Olvidaste tu contraseña?</a><br>
	<a href='recuperar_usuario.php'>¿Olvidaste tu usuario?</a></p>
	</center>
</form>

      </div>
    </div>
    <footer>
<a href="">Sistema Presupuestal Calendarizado, Centro SCT Mexico, 2014.</a>
<br>
<a href="http://www.utvtol.edu.mx/" target="_blank">www.utvtol.edu.mx</a>
  </div>
  </footer>
</body>
</html>
