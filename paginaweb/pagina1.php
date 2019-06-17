<html lang="es">
<head>
	<title>Página web</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/chosen.css">
	<link rel="stylesheet" href="css/ImageSelect.css">

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <script src="js/chosen.jquery.js"></script>
     <script src="js/ImageSelect.jquery.js"></script>

	<link rel="stylesheet" href="estilos/fonts/style.css">
	<link rel="stylesheet" href="estilos/estilos2.css">


<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null | $varsesion= ''){
						echo "<script>";
						echo "alert('Usted no tiene autorización');";  
						echo "window.location = 'Login.html';";
						echo "</script>"; 
	die();
	
	

}
?>


</head>


<body>




<?php


session_start();
$usuario= $_SESSION['usuario'];
 
  
		
		$link= mysql_connect("localhost","root","");
		if($link){
			mysql_select_db("trabajobd", $link);
		};
		
		
		$tabla= mysql_query("select sexo from datoscomplementarios where usuario='$usuario'");;
		
		while($fila= mysql_fetch_array($tabla)){
			$sexo= $fila[sexo]  ;
		 
		};
		
		
		if($sexo=="Hombre"){
			
			    echo "<img src='img/man.svg'
					   width='40'
					   height='40' style='position:relative; margin:0px 780;top:5px; background-color: #ddd;'>";
				
				echo   "<span id='user2' style='color:black;'>".$usuario;
				
				echo "<a href='cerrarsesion.php'> cerrar sesión </a></span>";
		
		}else{
		
		
				echo "<img src='img/woman.png'
					   width='40'
					   height='40' style='position:relative; margin:0px 780;top:5px; background-color: #ddd;'>";
				
				echo   "<span id='user2' style='color:black;'>".$usuario;
				
				echo "<a href='cerrarsesion.php'> cerrar sesión </a></span>";
		};
		
	 

	
		
		

?>











 



<span id="conf" class="icon-cog"></span>


<form>

<?php


echo "<select  id='configuracion'  name='dest' onchange='surfto(this.form)'>";
echo"<optgroup label=Configuración><option></option>";
echo "<option  value='recuperarcontrase.php'>Cambiar contraseña </option> ";
echo "<option  value='eliminar.php'> Eliminar cuenta </option> ";

echo "<script type='text/javascript'> 

			function surfto(form) 
			{ 
			var myindex=form.dest.selectedIndex 
			window.open(form.dest.options[myindex].value,'_top','&quotGiño'); 
			} 
</script>

</select>";

?>



 </form> 
 
 
 

<h1>Programación web: html, css, jQuery y PHP</h1>

<img alt="full screen background image" src="img/avenger2.jpg" id="imagen" />

 


<form class="form1">
 
<h2>HTML</h2>
<img  src="img/hulk.webp" class="fondo1" />
 
 <br>
 <br>




<br>
<br><br>
 
  
 
<a href="https://www.docdroid.net/MRfC0PR/bd-tema-7.pdf" class="boton"> <img  id="iconos" src="img/pdf.png"  align="left" />Introducción a HTML</a>

<br>
 

<br>
 
 <?php

echo "<div class='container'>";
echo "<select   class='my-select' id='boton2'   name='dest' size='2' onchange='surfto(this.form)'>

<option data-img-src='img/html.png' selected > Ejemplos</option> "; 
 
for($i =1;$i<12;$i++){

echo "<option data-img-src='img/html.png'  value='html/ex".$i.".html'>Ejemplo ".$i."</option> ";

}; 


echo "<script type='text/javascript'> 

function surfto(form) 
	{ 
			var myindex=form.dest.selectedIndex 
			window.open(form.dest.options[myindex].value,'_top','&quotGiño'); 
	} 
</script>


</select> ";


echo "<script>
 $('.my-select').chosen();
</script>
</div>";




?> 


<br>


<a href="https://www.docdroid.net/fd7TjJx/bd-problemas-6.pdf" class="boton"> <img  id="iconos" src="img/pdf.png"  align="left" />Problemas </a>
<br>


<a  href="html/R6.html" class="boton"> <span> <img  id="iconos" src="img/html.png"  align="left" /></span> Problema resuelto </a>
 



</form>



<form class="form2" >
<h2>JavaScript</h2>
<img  src= "img/strange.png" class="fondo2" />

<br><br><br><br><br><br>

 <a href="https://www.docdroid.net/XN3csyj/bd-tema-9.pdf" class="boton"> <span> <img  id="iconos" src="img/pdf.png"  align="left" /></span> Introducción a JavaScript </a>
<br>
<br>

<a  class="boton" href="ejemplosjs.php"> <span> <img  id="iconos" src="img/html.png"  align="left" /></span>Ejemplos <br> JavaScript</a>






<br>


<a href="Relacion7.php" class="boton"> <img  id="iconos" src="img/pdf.png"  align="left" />Problemas </a>
<br>



<?php

echo "<div class='container'>";

echo "<select  class='my-select' id='boton2'   name='dest' size='1' onchange='surfto(this.form)'>";

echo " <option  data-img-src='img/html.png' selected> Problemas    resueltos     </option>";

echo"<optgroup label= 'Relacion 7.a'  selected><option></option>";


 


for($i =1;$i<7;$i++){


echo "<option data-img-src='img/html.png'  value='javas/R7aproblema".$i.".html'><span class='far fa-copy'> Problema".$i."</span></option> ";


}; 



echo "<optgroup label= 'Relacion 7.b' ><option></option>";

for($i =1;$i<8;$i++){


echo "<option data-img-src='img/html.png'  value='javas/R7cproblema".$i.".html'><span class='far fa-copy'> Problema ".$i."</span></option> ";


}; 


echo "<optgroup label= 'Relacion 7.c' ><option></option>";



for($i =1;$i<5;$i++){


echo "<option data-img-src='img/html.png'  value='javas/R7cproblema".$i.".html'><span class='far fa-copy'> Problema ".$i."</span></option> ";


}; 



echo "<script type='text/javascript'> 

function surfto(form) 
{ 
var myindex=form.dest.selectedIndex 
window.open(form.dest.options[myindex].value,'_top','&quotGiño'); 
} 
</script>


</select> ";

/*  */
echo "<script>
 $('.my-select').chosen();
</script>
</div>";






?>









 


</form>




<form class="form3">
<h2>JQUERY</h2>
<img  src= "img/capitana.jpg"  class="fondo3"/>

<a href="https://www.docdroid.net/M0QgfYu/bd-tema-10.pdf" class="boton4"> <span> <img  id="iconos" src="img/pdf.png"  align="left" /></span> Introducción a jQuery</a>
<br>
<br>

<a  href="ejemplojquery.php" class="boton4"> <span> <img  id="iconos" src="img/html.png"  align="left" /></span>Ejemplos <br> JQuery </a>

<br>
 



<br>


<a href="https://www.docdroid.net/wvLUDTQ/relacion8-jquery.pdf" class="boton4"> <img  id="iconos" src="img/pdf.png"  align="left" />Problemas </a>
<br>

 <?php

echo "<div id='boton4' class='container'>";

echo "<select  class='my-select' id='boton2'   name='dest' size='1' onchange='surfto(this.form)'>
<option data-img-src='img/html.png' selected> Problemas resueltos</option>"; 
 


for($i =1;$i<8;$i++){


echo "<option data-img-src='img/html.png'  value='jquery/R8problema".$i.".html'>Problema ".$i."</option> ";


}; 





echo "<script type='text/javascript'> 

function surfto(form) 
{ 
var myindex=form.dest.selectedIndex 
window.open(form.dest.options[myindex].value,'_top','&quotGiño'); 
} 
</script>


</select> ";

/*  */
echo "<script>
 $('.my-select').chosen();
</script>
</div>";




?> 

 
 

</form>




<form class="form4">
<h2>PHP</h2>
<img  src= "img/thor.jpg" class="fondo4" />


<a href="https://www.docdroid.net/2tkmbbX/bd-tema-11.pdf" class="boton4"> <span> <img  id="iconos" src="img/pdf.png"  align="left" /></span> Introducción a PHP </a>
<br>
<br>

<a  href="ejemplosphp.php" class="boton4"> <span> <img  id="iconos" src="img/html.png"  align="left" /></span>Ejemplos <br> PHP </a>

<br>
 
 

<a href="https://www.docdroid.net/NJHzg1Y/bd-relacion-9.pdf" class="boton4"> <img  id="iconos" src="img/pdf.png"  align="left" />Problemas </a>
<br>


<?php

echo "<div id='boton4' class='container'>";

echo "<select  class='my-select' id='boton2'   name='dest' size='1' onchange='surfto(this.form)'>"; 
 
echo " <option  data-img-src='img/php.png' selected> Problemas    resueltos     </option>";
echo "<optgroup label= 'Relacion 9' ><option></option>";


echo "<option data-img-src='img/php.png'  value='php/piscina/formulario.html'> Formulario </option> ";


echo "<optgroup label= 'Juego de Tronos' ><option></option>";
for($i =2;$i<=5;$i++){

echo "<option data-img-src='img/php.png'  value='php/juegodelotronos/ej".$i.".php'> Ejecicio".$i."</option> ";


}; 





echo "<script type='text/javascript'> 

function surfto(form) 
{ 
var myindex=form.dest.selectedIndex 
window.open(form.dest.options[myindex].value,'_top','&quotGiño'); 
} 
</script>


</select> ";

/*  */
echo "<script>
 $('.my-select').chosen();
</script>
</div>";




?> 


<br>


 

</form>


<br>
 
 



</body>


</html>