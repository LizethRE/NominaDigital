<?php
	class EmpresaDto{

	    private $nit;
		private $nombre;
		private $direccion;
		private $telefono;
		private $email;
		private $usuario;


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

        public function __construct1($nit, $nombre, $direccion, $telefono, $email, $usuario) {
            $this->nit = $nit;
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
            $this->email = $email;
            $this->usuario = $usuario;
        }

        public function __construct2($nombre, $direccion, $telefono, $email, $usuario) {
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
            $this->email = $email;
            $this->usuario = $usuario;
        }

		public function getNit() {
			return $this->nit;
		}

		public function setNit($nit) {
			$this->nit = $nit;
		}

		public function getNombre() {
			return $this->nombre;
		}

		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}

		public function getDireccion() {
			return $this->direccion;
		}

		public function setDireccion($direccion) {
			$this->direccion = $direccion;
		}

		public function getTelefono(){
			return $this->telefono;
		}

		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}

        public function getUsuario(){
            return $this->usuario;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }
	}	
?>