<html lang="es">
<head>
	<title>Formulario de Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos/estilos.css">
	 <script src="jquery-3.4.0.min.js" type="text/javascript"></script>	
	
	
</head>

<script>
$(document).ready(function()
{
	
	$("#usuario").change(function(){
		
		var user=$("#usuario").val()
		
		$.post("prueba.php" ,{ name:user})
			.done(function(data){
			 if(data.length>0){
				alert("el usuario ya existe"); 
			 }
			 
			
			;})
	});
	
	

	    $("#remail,#email").change(function(){
        if($("#remail").val() !="" && $("#email").val() !=""){
		
				if($("#remail").val()!= $("#email").val()){
				 	
				alert("los emails tienen que ser iguales");
				
				$("#remail,#email").focusout(function(){
	            $("#remail,#email").css("background-color","#F96965");  
			    });
				
				}else{
				$("#remail,#email").focusout(function(){
	            $("#remail,#email").css("background-color","white");  
			    });		
				};
			
		    };
		
         });



       
	    
		$("#pass,#repass").change(function(){	
        if($("#repass").val() !="" && $("#pass").val() !=""){
		
				if($("#repass").val()!= $("#pass").val()){
				    
					alert("Las contraseñas tienen que ser iguales");
					
					$("#repass,#pass").focusout(function(){
	                $("#repass,#pass").css("background-color","#F96965");  
					});
				
				}else{
					$("#repass,#pass").focusout(function(){
	                $("#repass,#pass").css("background-color","white");  
					});
				};
			
		    };
		
		 });
	     
	 
	
	
	
    $("input").focus(function(){
	   $(this).css("background-color","FFFF99");
   });
   
   $("input").focusout(function(){
	   $(this).css("background-color","white");
   }); 
   
   
 
   
   
});



</script>



<body>


<img alt="full screen background image" src="img/descarga.jpg" id="imagen" />

	<form id="form"  action="registrar.php" method="post">
	
     <h2>Registrarse</h2>
	 <h6>Los campos marcados con (*) son obligatorios. Y serviran para recuperar su usuario en caso de que lo olvide.</h6>
	 
	 *Usuario:<input id="usuario" type="text"  name="usuario"  required ></span>
	 
	  <span class="s1">*Email:<input id="email" type="email"  name="email"  required></span>
	 
	 <span class="s2"> *Repetir email:<input id="remail" type="email"  name="remail"  required></span>
	 
	 <span class="s1">*Contraseña:<input id="pass" type="password"  name="pass"  required></span>
	 
	 <span class="s2">*Repetir contraseña:<input id="repass" type="password"  name="repass" required></span>
	 
	 <span class="s1">*Nombre:<input id="nombre" type="text"   name="nombre"  required></span>
	 
	 <span class="s2">*Apellidos:<input id="apellidos" type="text"  name="apellidos" required ></span>
	 
	 <span class="s3">Sexo:</span>
	
	<label class="radio1">Hombre
    <input   class="circ1" type="radio" checked="checked" name="radio" value="Hombre">
     
	</label>
	
    <label class="radio2">Mujer
    <input class="circ2" type="radio" name="radio" value="Mujer"/>
     
	
	</label>
	 
	 <p>Número de teléfono:</p>
	 
	 <input   type="text"   name="telefono">
	 
	 
	 <p>*Fecha de nacimiento:</p><input id="nacimiento" type="date" name="nacimiento" required >
	 
	 <p>País de nacimiento</p>
							<div class="select" >
							<select name="pais">
										<?php
										$user="root";
										$pass= "";
										$host="localhost";
										$db ="paises";
										$conexion= new PDO("mysql:localhost= $host;dbname=$db;charset=utf8", $user , $pass);
										$sql2= "SELECT * FROM paises WHERE nombre='España'";
										$sql = "SELECT * FROM paises WHERE NOT nombre='España'";
										
										
										foreach($conexion->query($sql2) as $fila1){
											echo "<option selected value='España'>",$fila1['nombre'],"</option>";  
										};
										foreach ($conexion->query($sql) as $fila){
											echo "<option value='$fila[nombre]'>",$fila['nombre'],"</option>";  
										};
										?>
						</select>
						</div>
	 
	 <p>*Nombre de su primera mascota:</p> <input id="seguridad" type="text" name="seguridad" required >
	 
	 
	   <span class="s1">Domicilio:<input type="text"  name="domicilio" ></span>
	  
	   <span class="s2">Localidad: <input   type="text"  name="localidad"></span>
	   
	   <span class="s1">Provincia:<input class="provincia" type="text"  name="provincia" ></span>
		
	   <span class="s2">Código Postal:<input class="cp" type="text"  name="cp"></span>
	 
	 
	    <input class="check" type="checkbox" name="check" value="1">
		
		<h5><a href="terminos.html">Declaro haber leido y aceptar las condiciones
		generales del programa y la normativa sobre protección de datos.</a><h5>
     
	 <input id="validar" type="submit" value="Registrar">
	  
	</form>
	
</body>


</html>