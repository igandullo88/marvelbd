<?php

	class Consultas{
		
		public function insertar($dni,$nombre, $apellido,$ciudad){
		
			$modelo= new Conexion();
			$conexion= $modelo->get_conexion();
			$sql= "insert into clientes (dni, nombre, apellido, ciudad) values(:dni,:nombre, :apellido,:ciudad)";
			$statament= $conexion->prepare($sql);
			$statament->bindParam(':dni',$dni);
			$statament->bindParam(':nombre',$nombre);
			$statament->bindParam(':apellido',$apellido);
			$statament->bindParam(':ciudad',$ciudad);
			
			if(!$statament){
			
			return "error al crear el registro";
			
			}else{
			
				$statament->execute();
				
				return "Registro ejecutado correctamente";
			}
		}
	
		public function consulta(){
		
		$rows= null;
		$modelo= new Conexion();
		$conexion= $modelo->get_conexion();
		$sql= "select * from clientes";
		$statament= $conexion->prepare($sql);
		$statament->execute();
		while($result=$statament->fetch()){
		 
		   $rows[]=$result;
		   
		}
		
		return $rows;
		
		}
	
	
	}

?>