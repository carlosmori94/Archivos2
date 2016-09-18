<?php
require_once "Clase estacionamiento/Estacionamiento.php";

$patente = $_POST["Patente"];
$accion = $_POST["Estacionar"];

if($accion == "Ingreso")
	{
		EStacionamiento::Guardar($patente);
	}	


?>