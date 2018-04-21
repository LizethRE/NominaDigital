<?php
	class CargoDto{

	    private $id;
	    private $nombre;
	    private $idDepartamento;
		
		public function __construct($id, $nombre, $idDepartamento) {
			$this->id = $id;
			$this->nombre = $nombre;
			$this->idDepartamento = $idDepartamento;
		}

		public function getId() {
			return $this->id;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function getNombre() {
			return $this->nombre;
		}

		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}

		public function getIdDepartamento() {
			return $this->idDepartamento;
		}

		public function setIdDepartamento($idDepartamento) {
			$this->idDepartamento = $idDepartamento;
		}
	}	
?>