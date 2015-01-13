<?php include("includes/header.php");?>
<div class="container">
<?php 
	//recojo las variables del formulario
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$poblacion=$_POST['poblacion'];
	include("Includes/funcion.php");
	
	echo "<p>".sobreMi($nombre,$email,$poblacion)."<p>";
?>
</div>
<?php include("includes/footer.php");?>
