<?php
/**
* 
*/
class Estacionamiento  
{
	
	public static function  Guardar($patente)
	{
		$archivo = fopen("AutosEstacionados.txt", "a");//"a" significa append
		$ahora = date("Y-m-d H:i:s");//Year-month-day Hour-mInutes-Seconds
		$renglon = $patente."=>".$ahora."\n";
		fwrite($archivo,$renglon);//(Donde quiero imprimir,Que quiero imprimir)
		fclose($archivo);


	}
	public static function Leer(){}
}
?> 