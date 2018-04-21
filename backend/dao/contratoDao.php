<?php
    class ContratoDao{
        private $model = null;
        public function __construct(){
            $this->model = new model();
        }

        public function insertar($dto){
            $query = "INSERT INTO contrato (salarioBasico, fechaInicio, fechaFin, idTipo, idEmpleado, idCargo) VALUES ('".$dto->getSalarioBasico()."', '".$dto->getFechaInicio()."', '".$dto->getFechaFin()."', '".$dto->getIdTipo()."', '".$dto->getIdEmpleado()."', '".$dto->getIdCargo()."'";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();
            if($respuesta){
                return 0;
            }
            return 1;
        }


        public function actualizar($dto){

        }

        public function listar($numIdentificacion){
            $query = "SELECT * FROM contrato WHERE  idEmpleado = '".$numIdentificacion."'";
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

        public function existencia($numero){
            $query = "SELECT * FROM contrato WHERE numero = '".$numero."'";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();

            if($respuesta){
                return 0;
            }
            return 1;
        }

        public function buscar ($numero){
            $query = "SELECT * FROM contrato WHERE numero = '".$numero."'";
            $this->model->conexion();
            $respuesta = $this->model->query($query);
            $this->model->closeConexion();
            $json_data = array();

            if(isset($respuesta) && $respuesta->num_rows>0){
                $json_data['success'] = 0;

                $row = mysqli_fetch_array($respuesta);
                $contrato = array();
                $contrato['numero'] = $row['num'];
                $contrato['salario Basico'] = $row['salarioMinimo'];
                $contrato['fecha Inicio'] = $row['fechaInicio'];
                $contrato['fecha Fin'] = $row['fechaFin'];
                $contrato['tipo'] = $row['idTipo'];
                $contrato['empleado'] = $row['idEmpleado'];
                $contrato['cargo'] = $row['idCargo'];
            }else{
                $json_data['success'] = 1;
            }
            return $json_data;
        }
    }
?>