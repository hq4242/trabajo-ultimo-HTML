<?php
	
	$content = file_get_contents("datos.txt");
	$datos = json_decode($content,true); //para guardar el editado
	$datos2 = json_decode($content); // para encontrar el DNI
	$n = count($datos);
	
	$num=0;

	foreach($datos2 as $e){
		 if($e->dni==$_GET['dni']){						
			$posicion=$num;				
		 }
		 $num++;
	}	

	unset($datos[$posicion]);
	
	$json = json_encode($datos);
	
	file_put_contents("datos.txt",$json);
	header("location:lista.php");	
?>
