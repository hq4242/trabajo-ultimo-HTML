<html>
     <head>
     
     
     <script src="jquery.js"></script>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

		<style>
         
             #divarriba{
         	
         	    position:absolute;
         	    top :30px;
         	    right:100px;
				background-color: #CEF6F5;
				border: 4px solid black;
				border-radius: 30px;
				width: 1200px;
				height: 600px;
			  }
			 #divizquierda{
         	
         	    position:absolute;
         	    top :20px;
         	    right:830px;
				background-color: #F3F781;
				border: 4px solid black;
				border-radius: 30px;
				width: 340px;
				height: 550px;
				  }
			#divpequeño{
         	
         	    position:absolute;
         	    top :54px;
         	    right:130px;
				background-color: #F3F781;
				border: 4px solid black;
				border-radius: 30px;
				width: 790px;
				height: 70px;
				  }
		     #divcentro{
         	
         	    position:absolute;
         	    top :100px;
         	    right:24px;
				background-color: #F3F781;
				border: 4px solid black;
				border-radius: 30px;
				width: 790px;
				height: 470px;
				  }
			#logo{
				position:absolute;
				top : 0px;
				right:35px;


			}
            #btbe{
            	background-color: #0B3861;
                  color:white;
            	position:absolute;
            	top: 280;
            	right:100;
            	border-radius: 30px;
				width: 200px;
				height: 40px;

            }
            #btce{
            	background-color: #0B3861;
                 color:white;
            	position:absolute;
            	top: 330;
            	right:100;
            	border-radius: 30px;
				width: 200px;
				height: 40px;


            }
            #btae{
            	background-color: #0B3861;
                color:white;
            	position:absolute;
            	top: 380;
            	right:30;
            	border-radius: 30px;
				width: 270px;
				height: 40px;
            }
            #parraf{
                position:absolute;
                top:10;
                right:280;
                color: #08298A;
                font-size:50px;
        font-family: fantasy;
            }
            .ao{
         color:white;
         display: inline-block;
         width: 200px;
         height:35px;
         margin-bottom: 10px;
         background-color:#0B3861;
         }
            #lista{
                position:absolute;
                top:60;
                right:180;
            }
            #boton{
         line-height:10px;
         background-color:#0B3861;
         width: 130px;
         height:45px;
         border:0px ;
         color:white;
         position:absolute;
        top:170px;
        right:40px;
        font-size:26px;
        font-family:"Palatino", sans-serif;
        border-radius:30px;
        border:2px solid black ;

		</style>





     </head>
     <body  background="img/fondoo.jpg">

     <div id="divarriba">
     <div id="divcentro">
     <p id="parraf">INGRESE DATOS</p>
     <form method="GET" action="r.php" id="lista">

            <div id="lista">
             <input name="DNI" type="text" maxlength="8" placeholder=" DNI" class="ao"><br>
             <input  name="nombre" type="text" placeholder=" Nombres "  class="ao" ><br>
             <input  name="apellido" type="text" placeholder=" Apellidos"  class="ao" ><br>
             
             
             <input type="submit" name="datos" value="Guardar" id="boton" >
            
            </div>

    </form>
     </div>
       <div id="divizquierda">
       <img src="img/logo.png" id="logo">
       <input type="button"  value="BUSCAR ESTUDIANTE" id="btbe" onclick="location.href='buscador.php'"/><br>
       <input type="button"  value="CREAR ESTUDIANTE" id="btce"  onclick="location.href='c.php'" /><br>
       <input type="button"  value="ADMINISTRADOR DE ESTUDIANTES" onclick="location.href='lista.php'" id="btae"/>
       </div>
     </div>
     <div id="divpequeño">
       </div>






     </body>
     
</html>