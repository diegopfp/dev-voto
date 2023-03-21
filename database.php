<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="tuto_poo";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
		
		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}
		public function create($cod_socio, $nombres, $razon_social, $correo_electronico){
			$sql = "INSERT INTO `socios` (cod_socio, nombres, razon_social, correo_electronico) VALUES ('$cod_socio', '$nombres', '$razon_social', '$correo_electronico')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function read(){
			$sql = "SELECT * FROM socios";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		
		public function single_record($id){
			$sql = "SELECT * FROM socios where id='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($cod_socio,$nombres,$razon_social,$correo_electronico, $id_socio){
			$sql = "UPDATE socios SET cod_socio='$cod_socio', nombres='$nombres', razon_social='$razon_social', correo_electronico='$correo_electronico' WHERE id=$id_socio";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($id){
			$sql = "DELETE FROM clientes WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
	}
	
	

?>	

