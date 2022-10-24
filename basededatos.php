<?php
	
	class bbdd{

		private $hostname = "host";
		private $basededatos = "Nombre de la bbdd";
		private $usuario = "Usuario";
		private $contrasena = "Contraseña";
		private $charset = "utf8";

		function conectar(){

			try{
			$conexion = "mysql:host=" . $this->$hostname . "; dbname=" . $this->basededatos . "; charset=" . $this->$charset;

			$opciones =[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false
			];

			$pdo = new PDO($conexion, $this->$usuario, $this->$contrasena, $opciones);

			return $pdo;
			} catch(PDOException $e){
				echo "Error de conexión a la BBDD: " . $e->getMessage() ;
				exit;
			}
		}
	}
?>
