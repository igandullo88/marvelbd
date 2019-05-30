<?php

		class Conexion{
			public function get_conexion(){
				$user="root";
				$pass= "";
				$host="localhost";
				$db ="piscina";
				$conexion= new PDO("mysql:localhost= $host;dbname=$db;charset=utf8", $user , $pass);
				
				return $conexion;
				
			}	
			
		}	



?>