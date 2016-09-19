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
		echo "Estoy dentro de Leer ";
		$listadoDeAutos = array();
		//con el comando $listadoDeAutos[] , accedo al primer elemento de mi array.
		$archivo = fopen("AutosEstacionados.txt", "r");
		while (!feof($archivo)) 
		{
			$renglon = fgets($archivo);
			$auto = explode("=>", $renglon);//Divide mi patente $auto[0] y mi hora de entrada$auto[1];
			
			echo "<BR/> Patente: ".$auto[0]." Registro su entrada a las: ".$auto[1]."</BR>";
			
			$auto[0]=trim($auto[0]);//Elimina espacio en blanco al principio y al final de las cadenas
			if($auto[0]!="")
				$listadoDeAutos[]=$auto;



		}
		fclose($archivo);
		return $listadoDeAutos;


		public static function Sacar($patente)
		{
			$listado = Estacionamiento::Leer();
			$listadoAdentro = array();
			$estaElVehiculo )= false;
			//Ahora recorro el array
			foreach ($listado as $auto) {
				if ($auto[0] == $patente) 
				{
					$estaElVehiculo = true;
					$inicio = $auto[1];
					$ahora = date("y-m-d H:i:s");
					//Calculo la diferencia
					$diferencia = strtotime($ahora)- strtotime($inicio);
					$importe = $diferencia * 15;

					$mensaje = "Tiempo transcurrido: ".$diferencia," segundos, costo $".$importe;
					echo "<br/>".$mensaje;

					$archivo = fopen("AutosEstacionados.txt", "a");
					$dato = $patente."=>".$importe."\n" ;
					fwrite($archivo, $dato);
					fclose($archivo)	

				}
			}
		}
		public static function Sacar($patente)
	{

		$listado=estacionamiento::Leer();
		$ListadoAdentro=array();
		$estaElVehiculo=false;
		foreach ($listado as $auto) 
		{
			if($auto[0]==$patente)
			{
				$estaElVehiculo=true;
				$inicio=$auto[1];	
				$ahora=date("Y-m-d H:i:s"); 			 
 				$diferencia = strtotime($ahora)- strtotime($inicio) ;
 				//http://www.w3schools.com/php/func_date_strtotime.asp
 				$importe=$diferencia*15;
				$mensaje= "tiempo transcurrido:".$diferencia." segundos <br> costo $importe ";
				
				$archivo=fopen("archivos/facturacion.txt", "a"); 		  
		 		$dato=$patente ."=> $".$importe."\n" ;
		 		fwrite($archivo, $dato);
		 		fclose($archivo);


			}
			else
			{
				$ListadoAdentro[]=$auto;				
			}
		}// fin del foreach

		if(!$estaElVehiculo)
		{
			$mensaje= "no esta esa patente!!!";
		}


		estacionamiento::GuardarListado($ListadoAdentro);


		echo $mensaje;
	}
		


		
	}
}
?> 