<html>
<?php include"p.php";?>


  <style>
  #divlista{
         	
         	    position:absolute;
         	    top :134px;
         	    right:128px;
				background-color: #F3F781;
				border: 4px solid black;
				border-radius: 30px;
				width: 790px;
				height: 470px;
				  }


  table 
  {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 17px;    margin: 45px;     width: 480px; text-align: left;    border-collapse: collapse; 
    color:white;
    background-color:#0B3861; position:absolute; top:30; right:150; 
}
    
   

  </style>
  <div id="divlista">
<?php
	

	$content = file_get_contents("datos.txt");
	$json = json_decode($content);
	$nro=0;
	echo "<table border = '3'  >";
		echo "<tr>";
			echo "<td>Nro</td>";
			echo "<td>DNI</td>";
			echo "<td>Nombres</td>";
			echo "<td>Apellidos</td>";
			echo "<td>Editar</td>";
			echo "<td>Eliminar</td>";
			
	foreach($json as $e){
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
	echo "</table>";
?>
				

				
			
				
			</div>	
		</body>
	

</html>