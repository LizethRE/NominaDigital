<?php
	class LiquidacionConceptoDto{

	    private $idLiquidacion;
	    private $idConcepto;
		
		public function __construct($idConcepto, $idLiquidacion) {
			$this->idConcepto = $idConcepto;
			$this->idLiquidacion = $idLiquidacion;
		}

		public function getIdLiquidacion() {
			return $this->idLiquidacion;
		}

		public function setIdLiquidacion($idLiquidacion) {
			$this->idLiquidacion = $idLiquidacion;
		}

		public function getIdConcepto() {
			return $this->idConcepto;
		}

		public function setIdConcepto($idConcepto) {
			$this->idConcepto = $idConcepto;
		}
	}	
?>