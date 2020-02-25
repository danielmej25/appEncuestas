<?php		

	    $time = time();
		$fecha = date("d-m-y", $time);
		$fh = fopen( "Correos.json", 'w') or die("Se produjo un error al crear el archivo");
		  /*
		$texto .="\"correos\":[\n";
		$size=count($miUsuario->getTareas());
		for ($j=0; $j <$size ; $j++) { 
			$texto .="	{	\n	\"email\":\"".$_GET['correo']."\",\n }";			
		}
		$texto .="]}";

		*/
		fwrite($fh, "quemado") or die("No se pudo escribir en el archivo");
		
		fclose($fh);
		

    
?>