<?php  namespace Models;

	class Conexion{

		private $datos = array(
			"host" => "localhost",
			"user" => "root",
			"pw" => "",
			"db" => "proyecto_escuela"
		);
		private $con;

		public function __construct(){
			/* NOTA
			 * A las clases globales como lo es
			 * MySqli es necesario colocarles
			 * \ por delante, ya que si no se
			 * hace asi, entonces el namespace
			 * lo va a tomar como una funcion
			 * cualquiera
			 */
			$this->con = new \mysqli($this->datos['host'], $this->datos['user'], $this->datos['pw'], $this->datos['db']);
		}

		public function consultaSimple($sql){
			$this->con->query($sql);
		}

		public function consultaRetorno($sql){
			$datos = $this->con->query($sql);
			return $datos;
		}
	}

?>