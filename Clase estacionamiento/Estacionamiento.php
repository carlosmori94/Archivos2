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
	public static function Leer()
	{
		$listadoDeAutos = array();
		//con el comando $listadoDeAutos[] , accedo al primer elemento de mi array.
		$archivo = fopen("AutosEStacionados.txt", "r");
		while (!feof($archivo)) 
		{
			$renglon = fgets($archivo);
			$auto = explode("=>", $renglon);//Divide mi patente $auto[0] y mi hora de entrada$auto[1];
			echo "</BR> Patente".$auto[0]."Registro su entrada a las: ".$auto[1]."</BR>";
			
			$auto[0]=trim($auto[0]);
			if($auto[0]!="")
				$ListaDeAutosLeida[]=$auto;

		}
		fclose($archivo);
		return $listadoDeAutos;
	}
}
?> 