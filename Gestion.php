<?php
require_once "Clase estacionamiento/Estacionamiento.php";

$patente = $_POST["Patente"];
$accion = $_POST["Estacionar"];
$i=0;
if($accion == "Ingreso")
	{
		//EStacionamiento::Guardar($patente);
		$arrayDeAutos = EStacionamiento::Leer();
		foreach ($arrayDeAutos as $value) {

			echo "Auto numero ".$i." Tiene la patente: ".$value;	
			$i++;
		}
	}	


?>