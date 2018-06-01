<?php
	
	$content = file_get_contents("datos.txt");
	$datos = json_decode($content,true); //para guardar el editado
	$datos2 = json_decode($content); // para encontrar el nombre anterior en la linea 14
	$n = count($datos);
	
	$nombre = $_GET['nombre'];
	$apellidos = $_GET['apellido'];
	$dni = $_GET['dni'];

	$num=0;

	foreach($datos2 as $e){
		 if($e->dni==$_GET['dni_ant']){						
			$posicion=$num;				
		 }
		 $num++;
	}
	$estudiante = array("nombre"=>$nombre,"apellidos"=>$apellidos,"dni"=>$dni,);

	$datos[$posicion] = $estudiante;
	
	$json = json_encode($datos);
	
	file_put_contents("datos.txt",$json);
	header("location:lista.php");	
?>
