<?php
	class EmpleadoDto{
        private $numIdentificacion;
		private $nombre;
		private $fechaNacimiento;
		private $direccion;
		private $telefono;
		private $email;
		private $estado;

        public function __construct($numIdentificacion, $nombre, $fechaNacimiento, $direccion, $telefono, $email, $estado) {
            $this->numIdentificacion = $numIdentificacion;
            $this->nombre = $nombre;
            $this->fechaNacimiento = $fechaNacimiento;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
            $this->email = $email;
            $this->estado = $estado;
        }

        public function getNumIdentificacion() {
            return $this->numIdentificacion;
        }

        public function setNumIdentificacion($numIdentificacion) {
            $this->numIdentificacion = $numIdentificacion;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getFechaNacimiento() {
            return $this->fechaNacimiento;
        }

        public function setFechaNacimiento($fechaNacimiento) {
            $this->fechaNacimiento = $fechaNacimiento;
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

        public function getEstado(){
            return $this->estado;
        }

        public function setEstado($estado){
            $this->estado = $estado;
        }
	}	
?>