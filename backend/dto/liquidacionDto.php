<?php
	class LiquidacionDto{

	    private $id;
	    private $descripcion;
		private $idEmpleado;
		private $idPeriodo;

		public function __construct($id, $descripcion, $idEmpleado, $idPeriodo) {
			$this->id = $id;
			$this->descripcion = $descripcion;
			$this->idEmpleado = $$idEmpleado;
			$this->idPeriodo = $$idPeriodo; 
		}

		public function getId() {
			return $this->id;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function getDescripcion() {
			return $this->descripcion;
		}

		public function setDescripcion($descripcion) {
			$this->descripcion = $descripcion;
		}

				public function getIdEmpleado() {
			return $this->idEmpleado;
		}

		public function setIdEmpleado($idEmpleado) {
			$this->idEmpleado = $idEmpleado;
		}

				public function getIdPeriodo() {
			return $this->idPeriodo;
		}

		public function setIdPeriodo($idPeriodo) {
			$this->idPeriodo = $idPeriodo;
		}
	}	
?>