<?php
    class EmpresaDao{
        private $model = null;
        public function __construct(){
            $this->model = new model();
        }

        public function insertar($dto){
            $query = "INSERT INTO empresa (nit, nombre, direccion, telefono, email, usuario) VALUES ('".$dto->getNit()."', '".$dto->getNombre()."', '".$dto->getDireccion()."', '".$nombre."', '".$email."', '".$mensaje."')";
            
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();
            if($respuesta){
                return 0;
            }
            return 1;
        }

        public function actualizar($dto){
            $query = "UPDATE empresa SET nombre = '".$dto->getNombre()."', direccion = '".$dto->getDireccion()."', telefono = '".$dto->getTelefono()."', email = '".$dto->getEmail()."' WHERE usuario = '".$dto->getUsuario()."'";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();
            if($respuesta){
                return 0;
            }
            return 1;
        }

        public function eliminar($nit){
            $query = "DELETE FROM empresa WHERE nit = '".$nit."'";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();

            if($respuesta){
                return 0;
            }
            return 1;
        }

        public function listar(){
            $query = "SELECT * FROM empresa ORDER BY nombre ASC";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();
            $array = array();

            if(isset($respuesta) && $respuesta->num_rows>0){
                while($row = mysqli_fetch_array($respuesta)){
                    array_unshift($array, $row);
                }
            }
            return $array;
        }

        public function buscar($usuario){
            $query = "SELECT * FROM empresa WHERE usuario = '".$usuario."'";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();
            $json_data = array();

            if(isset($respuesta) && $respuesta->num_rows>0){
                $json_data['success'] = 0;

                $row = mysqli_fetch_array($respuesta);
                $empresa = array();
                $empresa['nit'] = $row['nit'];
                $empresa['nombre'] = $row['nombre'];
                $empresa['direccion'] = $row['direccion'];
                $empresa['telefono'] = $row['telefono'];
                $empresa['email'] = $row['email'];

                $json_data['empresa'] = $empresa;
            }else{
                $json_data['success'] = 1;
            }
            return $json_data;
        }
    }
?>