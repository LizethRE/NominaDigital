<?php
/*El empleado puede:
actualizar datos de el
generar recibo de pago vigente
Visualizar su historial de pagos
*/
    class Empleado
    {
        //Metodo de buscar empleado por usuario
        public function buscarEmpleado($usuario)
        {
            $dao = new EmpleadoDao();
            echo json_encode($dao->buscar($usuario));
        }

        public function actualizarEmpleado($numIdentificacion, $direccion, $telefono, $email)
        {
            $dto = new EmpleadoDto($numIdentificacion, $direccion, $telefono, $email);
            $dao = new EmpleadoDao();

            $respuesta = $dao->actualizar($dto);
            if ($respuesta == 0) {
                echo '<script> alert("Actualizacion Exitosa")</script>';
            }else{
                echo '<script> alert("Actualizacion Fallida")</script>';
            }
        }


    }


?>