<?php
    class EmpleadoDao{
        private $model = null;
        public function __construct(){
            $this->model = new model();
        }

    	public function insertar($dto){
            $query = "INSERT INTO empleado (numIdentificacion, nombre, fechaNacimiento, direccion, telefono, email, estado) VALUES ('".$dto->getNumIdentificacion()."', '".$dto->getNombre()."', '".$dto->getFechaNacimiento()."', '".$dto->getDireccion()."', '".$dto->getTelefono()."', '".$dto->getEmail()."', '".$dto->getEstado()."')";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();
            if($respuesta){
                return 0;
            }
            return 1;
        }


        public function actualizar($numIdentificacion, $direccion, $telefono, $email){
            $query = "UPDATE empleado SET direccion = '".$direccion."', telefono = '".$telefono."', email = '".$email."' WHERE numIdentificacion = '".$numIdentificacion."'";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();
            if($respuesta){
                return 0;
            }
            return 1;
        }


        public function listar(){
            $query = "SELECT * FROM empleado ORDER BY nombre ASC";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();
            $array = array();

            if(isset($respuesta) && $respuesta->num_rows>0){
                while($row = mysqli_fetch_array($respuesta)){
                    array_unshift($array, $row);
                }
            }
            return ($array);
        }

        public function existencia($numIdentificacion){
            $query = "SELECT * FROM empleado WHERE numIdentificacion = '".$numIdentificacion."'";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();
            if($respuesta){
                return 0;
            }
            return 1;
        }

        public function buscar($usuario){
            $query = "SELECT * FROM empleado WHERE numIdentificacion = '".$usuario."'";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();
            $json_data = array();

            if(isset($respuesta) && $respuesta->num_rows>0){
                $json_data['success'] = 0;

                $row = mysqli_fetch_array($respuesta);
                $empleado = array();
                $empleado['numIdentificacion'] = $row['numIdentificacion'];
                $empleado['nombre'] = $row['nombre'];
                $empleado['fechaNacimiento'] = $row['fechaNacimiento'];
                $empleado['direccion'] = $row['direccion'];
                $empleado['telefono'] = $row['telefono'];
                $empleado['email'] = $row['email'];
                $json_data['empleado'] = $empleado;
            }else{
                $json_data['success'] = 1;
            }
            return $json_data;
        }

        public function cambiarEstado($numIdentificacion, $newEstado){
            $query = "UPDATE empleado SET estado = '".$newEstado."' WHERE numIdentificacion = '".$numIdentificacion."'";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();
            if($respuesta){
                return 0;
            }
            return 1;
        }
    }
?>