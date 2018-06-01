<html>
<?php include"p.php";?>
<style>
form
  {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 18px;          text-align: left;    
    
    position:absolute; top:200; right:450; 
}
#ingdni{
	border-color:black;
	border-radius:30px;
	background:#0B3861;
	color:white;
	height: 40px;
  }
#btbuscar{
	width: 130px;
	height: 40px;
	background:#0B3861;
	color:white;
	border-radius:30px;
	border-color:black;
}
#parrafo{
	position:absolute;
	top:250; right:343; 
	color: #0B3861;
    font-size:40px;
    font-family: fantasy;
            
}
table 
  {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 17px;    margin: 45px;     width: 480px; text-align: left;    border-collapse: collapse; 
    color:white;
    background-color:#0B3861; position:absolute; top:280; right:350; 
}
</style>
<div id="divlista">


<form name="frmbuscar" method="GET"  >
	<input type="search" name="dni" placeholder="   INGRESE DNI" id="ingdni" maxlength="8">
	<input type="submit" value="BUSCAR" id="btbuscar" >
</FORM>


<p id="parrafo">EL RESULTADO DE LA BUSQUEDA ES:</p>
<?php
if(isset($_GET['dni'])){
	$content = file_get_contents("datos.txt");

	$datos2 = json_decode($content); // para encontrar el estudiante	
	$nro=0;
	
	echo "<table border = '1'>";
		echo "<tr>";
			echo "<td>nro</td>";
			echo "<td>DNI</td>";
			echo "<td>Nombres</td>";
			echo "<td>Apellidos</td>";
			echo "<td>Editar</td>";
			echo "<td>Eliminar</td>";
		echo"</tr>";
	foreach($datos2 as $e){
		if($e->dni==$_GET['dni']){						
					
		$nro++;
			echo "<tr>";
					echo "<td>".$nro."<br></td>";
					echo "<td>".$e->dni."<br></td>";
					echo "<td>".$e->nombre."<br></td>";
					echo "<td>".$e->apellidos."<br></td>";
					echo "<td><a href='editar.php?dni=".$e->dni."'>editar</a></td>";
					echo "<td><a href='borrar.php?dni=".$e->dni."'>eliminar</a></td>";					
			echo "</tr>";
		}			
	}
	echo "</table>";
}
?>
</div>
				
		</body>
	

</html>