<?php
	class PeriodoDto{

	    private $id;
		private $fechaDesde;
		private $fechaHasta;
		
		public function __construct($id, $fechaDesde, $fechaHasta) {
			$this->id = $id;
			$this->fechaDesde = $fechaDesde;
			$this->fechaHasta = $fechaHasta;
		}

		public function getId() {
			return $this->id;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function getFechaDesde() {
			return $this->fechaDesde;
		}

		public function setFechaDesde($fechaDesde) {
			$this->fechaDesde = $fechaDesde;
		}

		public function getFechaHasta() {
			return $this->fechaHasta;
		}

		public function setFechaHasta($fechaHasta) {
			$this->fechaHasta = $fechaHasta;
		}
	}	
?>