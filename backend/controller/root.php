<?php
/*El root puede:
registrar nueva empresa
listar las empresas
buscar empresas
registrar nuevo usuario (DeSoft y 1ro cada empresa)
actualizar datos de la nomina
*/
    class Root
    {
        public function registrarAdministrador($usuario, $password)
        {
            $dto = new UserDto($usuario, $password, 02);
            $dao = new UserDao();

            $respuesta = $dao->insertar($dto);
            if ($respuesta == 0) {
                echo '<script> alert("Registro de Usuario Exitoso")</script>';
            }else {
                echo '<script> alert("Registro de Usuario Fallido")</script>';
            }
        }

        public function registrarEmpresa($nit, $nombre, $direccion, $telefono, $email, $usuario)
        {
            $dto = new EmpresaDTO($nit, $nombre, $direccion, $telefono, $email, $usuario);
            $dao = new EmpresaDAO();

            $respuesta = $dao->insertar($dto);
            if ($respuesta == 0) {
                echo '<script> alert("Registro de Empresa Exitoso")</script>';
                header('Location: ../../frontend/pages/root/registroEmpresa.html');
            }else {
                echo '<script> alert("Registro de Empresa Fallido")</script>';
            }
        }

        public function listarEmpresa()
        {
            $dao = new EmpresaDAO();
            echo json_encode($dao->listar());
        }

        public function registrarRoot($usuario, $password)
        {
            $dto = new UserDto($usuario, $password, 01);
            $dao = new UserDao();

            $respuesta = $dao->insertar($dto);
            if ($respuesta == 0) {
                echo '<script> alert("Registro de Usuario Exitoso")</script>';
            }else {
                echo '<script> alert("Registro de Usuario Fallido")</script>';
            }
        }

        public function listarUsuario()
        {
            $dao = new UserDao();
            echo json_encode($dao->listar());
        }

        public function listarTipo($tipo)
        {
            $dao = new UserDao();
            echo json_encode($dao->listarTipo($tipo));
        }





        public function buscarEmpresa($usuario)
        {
            $dao = new EmpresaDao();
            echo json_encode($dao->buscar($usuario));
        }

    }
?>