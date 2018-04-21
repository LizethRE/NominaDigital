<?php
	class UserDto{

	    private $usuario;
		private $password;
		private $idTipo;
		
		public function __construct($usuario, $password, $idTipo) {
			$this->usuario = $usuario;
			$this->password = $password;
			$this->idTipo = $idTipo;
		}

		public function getUsuario() {
			return $this->usuario;
		}

		public function setUsuario($usuario) {
			$this->usuario = $usuario;
		}

		public function getPassword() {
			return $this->password;
		}

		public function setPassword($password) {
			$this->password = $password;
		}

		public function getIdTipo() {
			return $this->idTipo;
		}

		public function setIdTipo($idTipo) {
			$this->idTipo = $idTipo;
		}
	}	
?>