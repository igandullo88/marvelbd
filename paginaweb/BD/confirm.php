<html>
<head>
<script src="jquery-3.4.0.min.js" 
type="text/javascript"></script>   
<script>
$(document).ready(function(){
	
   
   var bd= ['bdtrabajo.sql','paises.sql','porra_juego_tronos.sql','ej4a.sql'];
   
	   
	   var conf= confirm("¿Quieres cargar "+bd[0]+" la base de datos?");
	   
			   $.post("cargarbd.php" ,{ name:conf, bd:bd[0]})
			   .done(function(data){
				
				  alert(data);
	   
	   });
	   
	    var conf= confirm("¿Quieres cargar "+bd[1]+" la base de datos?");
	   
			   $.post("cargarbd.php" ,{ name:conf, bd:bd[1]})
			   .done(function(data){
				
				  alert(data);
	   
	   });
	   
	    var conf= confirm("¿Quieres cargar "+bd[2]+" la base de datos?");
	   
			   $.post("cargarbd.php" ,{ name:conf, bd:bd[2]})
			   .done(function(data){
				
				  alert(data);
	   
	   });
	   
	    var conf= confirm("¿Quieres cargar "+bd[3]+" la base de datos?");
	   
			   $.post("cargarbd.php" ,{ name:conf, bd:bd[3]})
			   .done(function(data){
				
				  alert(data);
	   
	   });
	   
	   
	   
      window.location = '../Login.html';

   
});

</script>




</head>
<body>
 
 



</body>
</html>
