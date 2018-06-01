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

		</style>





     </head>
     <body  background="img/fondoo.jpg">
     <div id="divarriba">
     <div id="divcentro">
     </div>
       <div id="divizquierda">
       <img src="img/logo.png" id="logo">
       <input type="button"  value="BUSCAR ESTUDIANTE" id="btbe"  onclick="location.href='buscador.php'" /><br>
       <input type="button"  value="CREAR ESTUDIANTE" id="btce"  onclick="location.href='c.php'" /><br>
       <input type="button"  value="ADMINISTRADOR DE ESTUDIANTES"  id="btae"  onclick="location.href='lista.php'" />
       </div>
     </div>
     <div id="divpequeño">
       </div>






     </body>
     
</html>