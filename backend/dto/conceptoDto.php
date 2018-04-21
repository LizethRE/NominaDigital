<?php
	class ConceptoDto{

	    private $id;
	    private $nombre;
	    private $idTipo;
		
		public function __construct($id, $nombre, $idTipo) {
			$this->id = $id;
			$this->nombre = $nombre;
			$this->idTipo = $idTipo;
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

		public function getIdTipo() {
			return $this->idTipo;
		}

		public function setIdTipo($idTipo) {
			$this->idTipo = $idTipo;
		}
	}	
?>