<?php
	class ContratoDto{

	    private $numero;
	    private $salarioBasico;
		private $fechaInicio;
		private $fechaFin;
		private $idTipo;
		private $idEmpleado;
		private $idCargo;

        public function __construct() {
            //obtengo un array con los parámetros enviados a la función
            $params = func_get_args();

            //saco el número de parámetros que estoy recibiendo
            $num_params = func_num_args();

            //atendiendo al siguiente modelo __construct1() __construct2()...
            $funcion_constructor ='__construct'.$num_params;

            //compruebo si hay un constructor con ese número de parámetros
            if (method_exists($this,$funcion_constructor)) {
                //si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
                call_user_func_array(array($this,$funcion_constructor),$params);
            }
        }

        public function __construct0() {
        }

        public function __construct1($num, $salarioBasico, $fechaInicio, $fechaFin, $idTipo, $idEmpleado, $idCargo) {
            $this->num = $num;
            $this->salarioBasico = $salarioBasico;
            $this->fechaInicio = $fechaInicio;
            $this->fechaFin = $fechaFin;
            $this->idTipo = $idTipo;
            $this->idEmpleado = $idEmpleado;
            $this->idCargo = $idCargo;
        }

        public function __construct2($salarioBasico, $fechaInicio, $fechaFin, $idTipo, $idEmpleado, $idCargo) {
            $this->salarioBasico = $salarioBasico;
            $this->fechaInicio = $fechaInicio;
            $this->fechaFin = $fechaFin;
            $this->idTipo = $idTipo;
            $this->idEmpleado = $idEmpleado;
            $this->idCargo = $idCargo;
        }

		public function getNumero() {
			return $this->numero;
		}

		public function setNumero($numero) {
			$this->numero = $numero;
		}

		public function getSalarioBasico() {
			return $this->salarioBasico;
		}

		public function setSalarioBasico($salarioBasico) {
			$this->salarioBasico = $salarioBasico;
		}

		public function getFechaInicio() {
			return $this->fechaInicio;
		}

		public function setFechaInicio($fechaInicio) {
			$this->fechaInicio = $fechaInicio;
		}

		public function getFechaFin() {
			return $this->fechaFin;
		}

		public function setFechaFin($fechaFin) {
			$this->fechaFin = $fechaFin;
		}

		public function getIdTipo() {
			return $this->idTipo;
		}

		public function setIdTipo($idTipo) {
			$this->idTipo = $idTipo;
		}

		public function getIdEmpleado() {
			return $this->idEmpleado;
		}

		public function setIdEmpleado($idEmpleado) {
			$this->idEmpleado = $idEmpleado;
		}

		public function getIdCargo() {
			return $this->idCargo;
		}

		public function setIdCargo($idCargo) {
			$this->idCargo = $idCargo;
		}
	}	
?>