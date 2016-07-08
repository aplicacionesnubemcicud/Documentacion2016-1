

<?php
include 'conexion.php';
echo '<link href="css/materialize.css"  type="text/css" rel="stylesheet">';


function alert ($text,$func){
	echo "<script type='text/javascript'>alert('$text');$func();</script>";

	
}




 //echo "valor1:"$row['valor2'];


?>


<!DOCTYPE html>
<head>
	<script type='text/javascript' src='js/materialize.js'></script>
</head>

<body>

 <ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<div class="navbar-fixed">
<nav>
  <div class="nav-wrapper">
    <a href="index.php" class="brand-logo"> Inicio</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
    
    </ul>
  </div>
</nav>
 </div>

<section class="clean" id="Registroejercicio1">
<div class="container">

<center><h4 class="Frase"> Capítulo 2 </h4></center>
<center><h5 class="Frase"> Resistencias en paralelo</h5></center>


<div class="container">
<blockquote>
      <strong>1.</strong> Ingrese los valores de las resistencias en paralelo para hallar la resistencia equivalente mediante R:
    </blockquote>
    <center><img   src="imagenes/cap2_ej1_res_paral.png"></center>
<br>

	<form method="post" >
		<div class="row">
	
<div class="input-field col s2">
				 <input  id="valoruno" type="text" name="valoruno" class="validate">
				<label class="active" for="valoruno"><strong>Valor R1</strong></label>
			</div>
<div class="input-field col s2">
				<input  id="valordos" type="text" name="valordos" class="validate">
				<label class="active" for="valordos"><strong>Valor R2</strong></label>
			</div>

<br><br><br><br>

		<center><button type="submit" name="registraruno" class="btn cyan darken-3 left" ">Registrar nuevos datos</button></center>
		
	</form>
</div>

<?php
if (isset($_POST['registraruno'])) {
	
	$valoruno=$_POST['valoruno'];
	$valordos=$_POST['valordos'];


	$sqlsumaparaluno = "UPDATE capitulodos SET  c2valor1='$valoruno', c2valor2 ='$valordos'where id_capdos='1'"; #actualizar datos
	
if ($valoruno!=''&& $valordos!='') {
	

mysqli_query($conexion, $sqlsumaparaluno);
$iniEj1 = mysqli_query($conexion,"select c2valor1, c2valor2 from capitulodos where id_capdos='1'");

while ($row = mysqli_fetch_array($iniEj1)) {
$valoruno= $row['c2valor1'];
$valordos= $row['c2valor2'];

  
}

	echo "<strong>Valores enviados:</strong> R1:$valoruno -  R2:$valordos";
//     echo '<script type="text/javascript">
// window.location.assign("capitulo1.php");
// </script>';
} else
alert("Hay algunos campos vacios", "Registro");
mysqli_close($conexion);
}
	
?>

	</section>

	<section class="clean" id="Registroejercicio2">
<div class="container">


<div class="container">
<blockquote>
      <strong>2.</strong> Ingrese los valores en ohmios de las 3 resistencias de la figura para evaluar la resistencia total entre a y b  con R:
    </blockquote>
 <center><img  src="imagenes/cap2_ej2_res_paral.png"></center>
	<br>
	<form method="post">
		<div class="row">
<div class="input-field col s2">
				<input  id="valoruno" type="text" name="valoruno" class="validate">
				<label class="active" for="valoruno"><strong>Valor R1</strong></label>
			</div>
<div class="input-field col s2">
				<input  id="valordos" type="text" name="valordos" class="validate">
				<label class="active" for="valordos"><strong>Valor R2</strong></label>
			</div>
<div class="input-field col s2">
				<input  id="valortres" type="text" name="valortres" class="validate">
				<label class="active" for="valortres"><strong>Valor R3</strong></label>
			</div>


<br><br><br><br>
		<center><button type="submit" name="registrardos" class="btn cyan darken-3 left" ">Registrar nuevos datos</button></center>
	</form>
</div>


<?php
if (isset($_POST['registrardos'])) {
	
	$valoruno=$_POST['valoruno'];
	$valordos=$_POST['valordos'];
	$valortres=$_POST['valortres'];


	$sqlsumaparaldos = "UPDATE capitulodos SET  c2valor1='$valoruno', c2valor2 ='$valordos', c2valor3 ='$valortres'where id_capdos='2'"; #actualizar datos
	
if ($valoruno!=''&& $valordos!='') {
	

mysqli_query($conexion, $sqlsumaparaldos);
$iniEj2 = mysqli_query($conexion,"select c2valor1, c2valor2, c2valor3 from capitulodos where id='2'");

while ($row = mysqli_fetch_array($iniEj2)) {
$valoruno= $row['c2valor1'];
$valordos= $row['c2valor2'];
$valortres= $row['c2valor3'];
}

	echo "<strong>Valores enviados:</strong> R1:$valoruno -  R2:$valordos  -  R3:$valortres ";
//     echo '<script type="text/javascript">
// window.location.assign("capitulo1.php");
// </script>';
} else
alert("Hay algunos campos vacios", "Registro");
mysqli_close($conexion);
}
	
?>

	</section>

<section class="clean" id="Registro">
<div class="container">

<div class="container">
<blockquote>
      <strong>3.</strong> Ingrese los valores de las resistencias en kiloohmios para evaluar con R:
    </blockquote>

	<center><img   src="imagenes/cap2_ej3_res_paral.png"></center>
	<br>
	<form method="post">
		<div class="row">
<div class="input-field col s2">
				<input  id="valoruno" type="text" name="valoruno" class="validate">
				<label class="active" for="valoruno"><strong>Valor R1</strong></label>
			</div>
<div class="input-field col s2">
				<input  id="valordos" type="text" name="valordos" class="validate">
				<label class="active" for="valordos"><strong>Valor R2</strong></label>
			</div>
<div class="input-field col s2">
				<input  id="valortres" type="text" name="valortres" class="validate">
				<label class="active" for="valortres"><strong>Valor R3</strong></label>
			</div>
<div class="input-field col s2">
				<input  id="valorcuatro" type="text" name="valorcuatro" class="validate">
				<label class="active" for="valorcuatro"><strong>Valor R4</strong></label>
			</div>
<div class="input-field col s2">
				<input  id="valorcinco" type="text" name="valorcinco" class="validate">
				<label class="active" for="valorcinco"><strong>Valor R5</strong></label>
			</div>
<div class="input-field col s2">
				<input  id="valorseis" type="text" name="valorseis" class="validate">
				<label class="active" for="valorseis"><strong>Valor R6</strong></label>
			</div>
<div class="input-field col s2">
				<input  id="valorsiete" type="text" name="valorsiete" class="validate">
				<label class="active" for="valorsiete"><strong>Valor R7</strong></label>
			</div>
<!-- <div class="input-field col s2">
				<input  id="valorsiete" type="text" name="valorsiete" class="validate">
				<label class="active" for="valorsiete"><strong>Valor R7</strong></label>
			</div>
				<input  id="valorsiete" type="text" name="valorsiete" class="validate">
				<label class="active" for="valorsiete"><strong>Valor R7</strong></label>
			</div> -->


		<br><br><br><br>
		<center><button type="submit" name="registrartres" class="btn cyan darken-3 left" ">Registrar nuevos datos</button></center>
	</form>
</div>

<?php
if (isset($_POST['registrartres'])) {
	
	$valoruno=$_POST['valoruno'];
	$valordos=$_POST['valordos'];
	$valortres=$_POST['valortres'];
	$valorcuatro=$_POST['valorcuatro'];
	$valorcinco=$_POST['valorcinco'];
	$valorseis=$_POST['valorseis'];
	$valorsiete=$_POST['valorsiete'];


	$sqlsumaserietres = "UPDATE capitulodos SET  c2valor1='$valoruno', c2valor2 ='$valordos', c2valor3='$valortres', c2valor4='$valorcuatro' , c2valor5='$valorcinco' , c2valor6='$valorseis', c2valor7='$valorsiete' where id_capdos='3'"; #actualizar datos
	
if ($valoruno!=''&& $valordos!=''&&$valortres!=''&&$valorcuatro!=''&&$valorcinco!=''&&$valorseis!='') {
	

mysqli_query($conexion, $sqlsumaserietres);
$iniEj1 = mysqli_query($conexion,"select c2valor1, c2valor2, c2valor3, c2valor4, c2valor5, c2valor6, c2valor7 from capitulodos where id_capdos='3'");

while ($row = mysqli_fetch_array($iniEj1)) {
$valoruno= $row['c2valor1'];
$valordos= $row['c2valor2'];
$valortres= $row['c2valor3'];
$valorcuatro= $row['c2valor4'];
$valorcinco= $row['c2valor5'];
$valorseis= $row['c2valor6'];
$valorsiete= $row['c2valor7'];

}

	echo "<strong>Valores enviados:</strong> R1:$valoruno -  R2:$valordos  -  R3:$valortres  -  R4:$valorcuatro  -  R5:$valorcinco  -  R6:$valorseis  -  R6:$valorsiete";
//     echo '<script type="text/javascript">
// window.location.assign("capitulo1.php");
// </script>';
} else
alert("Hay algunos campos vacios", "Registro");
mysqli_close($conexion);
}
	
?>
<br>
	</section>

	</body>

<script type="text/javascript">$(document).ready(function() {
    Materialize.updateTextFields();
  });</script>

  </html>





