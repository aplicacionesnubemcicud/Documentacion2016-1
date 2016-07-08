

<?php
include 'conexion.php';
echo '<link href="css/materialize.css"  type="text/css" rel="stylesheet">';


function alert ($text,$func){
	echo "<script type='text/javascript'>alert('$text');$func();</script>";
}
?>


<!DOCTYPE html>
<head>
<title>Programación en la nube</title>
	<script  src="js/materialize.js" ></script>
</head>

<body>


<section class="clean" id="Registro">
<center><h4 class="Frase"> Proyecto Final - Programación en la nube </h4></center>
<center><h6 class="Frase"> Maestría en Ciencias de la Información y las Comunicaciones </h6></center>
<center><h6 class="Frase"> Pedro J. Vargas Barrios </h6></center>
<br>




<div class="container">
 <ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="index.php" class="brand-logo"> Inicio</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
    
    </ul>
  </div>
</nav>

<blockquote>
     
    </blockquote>

     <div class="collection">
        <a href="capitulo1.php" class="collection-item"><strong>Capitulo 1</strong> - Resistencias en serie</a>
        <a href="capitulo2.php" class="collection-item "><strong>Capitulo 2</strong> - Resistencias en paralelo</a>
        <a href="#!" class="collection-item"><strong>Capitulo 3</strong> - Resistencias en serie</a>
      </div>


</div>
	</section>
	</body>



  </html>

<?php
if (isset($_POST['registraruno'])) {
	
	$valoruno=$_POST['valoruno'];
	$valordos=$_POST['valordos'];
	$valortres=$_POST['valortres'];
	$valorcuatro=$_POST['valorcuatro'];

	# code...
	// $conexio = mysqli_connect("ec2-52-67-61-161.sa-east-1.compute.amazonaws.com","theuser","t3sgj*56hH","test1") or die("Error conectando a la BBDD");
	#$sql1 = "INSERT INTO contacts VALUES ('$nombre', '$apellido', 'correo', 'contrasena')";
	#$sql2 = "INSERT INTO contacts (ID_Contact, Name, Email, Phone) VALUES ('5', 'juan', 'pedro@prueba', '3435255354')";
#sql3 = "UPDATE contacts SET  Name='$nombre' where ID_Contact='3'"; #actualizar datos
	$sqlsumaserieuno = "UPDATE capitulouno SET  valor1='$valoruno', valor2 ='$valordos', valor3='$valortres', valor4='$valorcuatro'where id='1'"; #actualizar datos
if ($valoruno!='') {
	mysqli_query($conexion, $sqlsumaserieuno);
}


mysqli_close($conexion);

}
	


?>


