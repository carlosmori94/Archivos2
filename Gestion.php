<?php
require_once "Clase estacionamiento/Estacionamiento.php";

$patente = $_POST["Patente"];
$accion = $_POST["Estacionar"];
$i=0;
if($accion == "Ingreso")
	{
		//EStacionamiento::Guardar($patente);
		
		$arrayDeAutos = EStacionamiento::Leer();
		var_dump($arrayDeAutos);
		echo "<br/>Ya sali de Leer, entro a mi foreach...<br/><br/><br/>";
		echo "<br/> Mi array tiene: ".sizeof($arrayDeAutos)." Elementos <br/>";
		
		for ($i=0; $i < sizeof($arrayDeAutos) ; $i++) { 
			echo "Mi auto numero ".($i+1).": Tiene la patente ".$arrayDeAutos[$i]."<br/>";
		}
		
		
	}	


?>