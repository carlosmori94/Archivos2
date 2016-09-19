<?php
require_once "Clase estacionamiento/Estacionamiento.php";//Error , se detiene el programa
//include tira warning pero no crashea 

$patente = $_POST["Patente"];
$accion = $_POST["Estacionar"];
$i=0;
if($accion == "Ingreso")
	{
		//EStacionamiento::Guardar($patente);
		
		$arrayDeAutos = EStacionamiento::Leer();//Primer duda, porque esto me guarda un Array de arrays?
		var_dump($arrayDeAutos);
		echo "<br/>Ya sali de Leer, entro a mi foreach...<br/><br/><br/>";
		echo "<br/> Mi array tiene: ".sizeof($arrayDeAutos)." Elementos <br/>";
		foreach ($arrayDeAutos as  $value) {
			echo"<br/>Auto estacionado patente: ".$value[0]."<br/>";//patente
					//
		}
		
		
	}	


?>