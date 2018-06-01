<?php
    
    
    $content = file_get_contents("datos.txt");
    $datos = json_decode($content,true);
        
    $n = count($datos);
    
    for($i=0; $i<=$n; $i ++){
        
    }
    
    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellido'];
    $dni = $_GET['DNI'];
    
    $estudiante = array("nombre"=>$nombre,"apellidos"=>$apellidos,"dni"=>$dni);
    
    $datos[$n] = $estudiante;
    
    $json = json_encode($datos);
    
    file_put_contents("datos.txt",$json);
    
    header("location:lista.php");
    
?>
