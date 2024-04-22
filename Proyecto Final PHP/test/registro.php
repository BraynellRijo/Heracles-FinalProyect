<?php
include("ConexionDB.php");
$Nombre = $_POST["nombreusuario"];
$Contraseña = $_POST["contraseña"];


	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Iniciar sesión']))
		
	{	
	$sqlgrabar = "INSERT INTO login1 values (nombre, contraseña) VALUES ('$Nombre', '$Contraseña')";


	if(mysqli_query($conn,$sqlgrabar))
	{
		header("Location: Login.php");
	}else 
	{
		echo "Error: " .$sql."<br>". mysqli_error($conn);
	}
	}
?>