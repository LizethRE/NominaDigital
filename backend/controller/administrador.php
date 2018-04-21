<?php
/*El administrador puede:
actualizar datos de la empresa

registar nuevo administrador
actualizar contraseña de cuenta
eliminar administardor
listar administradores
buscar administrador

registrar nuevo empleado
cambiar estado empleado
listar los empleados
buscar empleados
liquidar nomina
*/

	class Administrador
    {
        //Metodo de buscar empleado por usuario
        public function buscarEmpresa($usuario)
        {
            $dao = new EmpresaDao();
            echo json_encode($dao->buscar($usuario));
        }

        public function actualizarEmpresa($nombre, $direccion, $telefono, $email, $usuario)
        {
            $dto = new EmpresaDto($nombre, $direccion, $telefono, $email, $usuario);
            $dao = new EmpresaDao();

            $respuesta = $dao->actualizar($dto);
            if ($respuesta == 0) {
                echo '<script> alert("Actualizacion Exitosa")</script>';
                header('Location: ../frontend/pages/administrador/actualizacion.html');
            }else{
                echo '<script> alert("Actualizacion Fallida")</script>';
            }
        }

        public function registrarEmpleado($numIdentificacion, $nombre, $fechaNacimiento, $direccion, $telefono, $email, $salarioBasico, $fechaInicio, $fechaFin, $idTipo, $idCargo)
        {
            $dto = new EmpleadoDto($numIdentificacion, $nombre, $fechaNacimiento, $direccion, $telefono, $email, 'Activo');
            $dao = new EmpleadoDao();

            $respuesta = $dao->insertar($dto);
            if ($respuesta == 0) {
                echo '<script> alert("Empleado Registrado")</script>';
                $contrato = $this->crearContrato($salarioBasico, $fechaInicio, $fechaFin, $idTipo, $numIdentificacion, $idCargo);
                $usuario = $this->asignarUsuario($numIdentificacion, $numIdentificacion);

                if ($contrato == 0 && $usuario == 0) {
                    echo '<script> alert("Registro Exitoso")</script>';
                } else {
                    echo '<script> alert("Registro Fallido")</script>';
                }
            }else {
                echo '<script> alert("Empleado no Registrado")</script>';
            }
        }

        private function crearContrato($salarioBasico, $fechaInicio, $fechaFin, $idTipo, $idEmpleado, $idCargo)
        {
            $dto = new contratoDto($salarioBasico, $fechaInicio, $fechaFin, $idTipo, $idEmpleado, $idCargo);
            $dao = new ContratoDao();

            $respuesta = $dao->insertar($dto);
            if ($respuesta == 0) {
                echo '<script> alert("Contrato Exitoso")</script>';
            }else {
                echo $dto->getSalarioBasico();
                echo '<script> alert("Contrato Fallido")</script>';
            }
        }

        private function asignarUsuario($usuario, $password)
        {
            $dto = new UserDto($usuario, $password, 03);
            $dao = new UserDao();

            $respuesta = $dao->insertar($dto);
            if ($respuesta == 0) {
                echo '<script> alert("Asignacion Exitosa")</script>';
            }else {
                echo '<script> alert("Asignacion Fallida")</script>';
            }
        }

        public function listarEmpleado()
        {
            $dao = new EmpleadoDao();
            echo json_encode($dao->listar());
        }





        public function registrarAdministrador($usuario, $password)
        {
            $dto = new UserDto($usuario, $password, 02);
            $dao = new UserDao();

            $respuesta = $dao->insertar($dto);
            if ($respuesta == 0) {
                echo '<script> alert("Registro Exitoso")</script>';
            }else {
                echo '<script> alert("Registro Fallido")</script>';
            }
        }

        public function actualizarPassword($usuario, $password, $newPassword)
        {
            $dao = new UserDao();
            $respuesta = $dao->actualizar($usuario, $password, $newPassword);

            if ($respuesta == 0) {
                echo '<script> alert("Actualizacion Exitosa")</script>';
            }else {
                echo '<script> alert("Actualizacion Fallida")</script>';
            }
        }

        public function eliminarAdministrador($usuario)
        {
            $dao = new UserDao();
            $respuesta = $dao->eliminar($usuario);

            if ($respuesta == 0) {
                echo '<script> alert("Eliminado Exitoso")</script>';
            }else {
                echo '<script> alert("Eliminado Fallido")</script>';
            }
        }

        public function listarAdministrador()
        {
            $dao = new UserDao();

            echo json_encode($dao->listar('02'));
        }

        public function buscarAdministrador($usuario)
        {
            $dao = new UserDao();
            echo json_encode($dao->buscar($usuario));
        }

        public function cambiarEstado($numIdentificacion, $estado){
            $newEstado = null;
            $dao = new EmpleadoDao();
            if ($estado =='Activo'){
                $newEstado = 'Inactivo';

                $respuesta = $dao->cambiarEstado($numIdentificacion, $newEstado);
                if ($respuesta == 0) {
                    echo '<script> alert("Cambio de Estado Exitoso")</script>';
                }else {
                    echo '<script> alert("Cambio de Estado Fallido")</script>';
                }
            }
            else{
                $newEstado = 'Activo';

                $respuesta = $dao->cambiarEstado($numIdentificacion, $newEstado);
                if ($respuesta == 0) {
                    echo '<script> alert("Cambio de Estado Exitoso")</script>';
                }else {
                    echo '<script> alert("Cambio de Estado Fallido")</script>';
                }
            }
        }

        public function buscarEmpleado($numIdentificacion)
        {
            $dao = new EmpleadoDao();

            echo json_encode($dao->buscar($numIdentificacion));
        }

        /*public function liquidar($)
        {
            $dto = new LiquidacionDto()
            $dao = new EmpleadoDao();

            echo json_encode($dao->buscar($numIdentificacion));
        }*/
    }
?>