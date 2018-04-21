<?php
    class Router
    {
        private $login;
        private $controllerRoot;
        private $controllerAdmin;
        private $controllerEmpleado;

        public function __construct()
        {
            $this->login = new Login();
            $this->controllerAdmin = new Administrador();
            $this->controllerRoot = new Root;
            $this->controllerEmpleado = new Empleado();
        }

        public function router()
        {
            if (isset($_POST['solicitud'])) {
                //Metodo de login
                if ($_POST['solicitud'] == 'login') {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];

                    $this->login->iniciarSesion($user, $pass);
                }
                elseif ($_POST['solicitud'] == 'cerrarSesion'){
                    $this->login->cerrarSesion();
                }


                //ROOT
                elseif ($_POST['solicitud'] == 'registroEmpresa'){
                    $usuario = $_SESSION["root"];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];

                    $nit = $_POST['nit'];
                    $nombre = $_POST['nombre'];
                    $direccion = $_POST['direccion'];
                    $telefono = $_POST['telefono'];
                    $email = $_POST['email'];

                    $this->controllerRoot->registrarAdministrador($user, $pass);

                    $this->controllerRoot->registrarEmpresa($nit, $nombre, $direccion, $telefono, $email, $user);
                }

                elseif ($_POST['solicitud'] == 'listarEmpresa'){
                    $usuario = $_SESSION["root"];
                    $this->controllerRoot->listarEmpresa();

                }

                elseif ($_POST['solicitud'] == 'registroRoot'){
                    $usuario = $_SESSION["root"];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];

                    $this->controllerRoot->registrarRoot($user, $pass);
                }

                elseif ($_POST['solicitud'] == 'listarRoot'){
                    $usuario = $_SESSION["root"];
                    $this->controllerRoot->listarTipo();

                }








                elseif ($_POST['solicitud'] == 'buscarenEmpresa'){
                    $usuario = $_SESSION["root"];
                    $this->controllerRoot->buscarEmpresa($usuario);
                }


                //ADMIN
                elseif ($_POST['solicitud'] == 'home'){
                    $usuario = $_SESSION["administrador"];
                    $this->controllerAdmin->buscarEmpresa($usuario);
                }

                elseif ($_POST['solicitud'] == 'perfil'){
                    $usuario = $_SESSION["administrador"];
                    $this->controllerAdmin->buscarEmpresa($usuario);
                }

                elseif ($_POST['solicitud'] == 'actualizacionEmpresa'){
                    $usuario = $_SESSION["administrador"];
                    $nombre = $_POST['nombre'];
                    $direccion = $_POST['direccion'];
                    $telefono = $_POST['telefono'];
                    $email = $_POST['email'];

                    $this->controllerAdmin->actualizarEmpresa($nombre, $direccion, $telefono, $email, $usuario);
                }

                elseif ($_POST['solicitud'] == 'registroEmpleado'){
                    $usuario = $_SESSION["administrador"];
                    $numId = $_POST['numIdentificacion'];
                    $nombre = $_POST['nombreApellido'];
                    $fechaNac = $_POST['fechaNacimiento'];
                    $direccion = $_POST['direccion'];
                    $telefono = $_POST['telefono'];
                    $email = $_POST['email'];

                    $salarioMinimo = $_POST['salarioMinimo'];
                    $fechaInicio = $_POST['fechaInicio'];
                    $fechaFin = $_POST['fechaFin'];
                    $idTipo = $_POST['idTipo'];
                    $idCargo = $_POST['idCargo'];

                    $this->controllerAdmin->registrarEmpleado($numId,$nombre,$fechaNac,$direccion,$telefono,$email, $salarioMinimo, $fechaInicio, $fechaFin, $idTipo, $idCargo);
                }

                elseif ($_POST['solicitud'] == 'listaEmpleado'){
                    $usuario = $_SESSION["administrador"];

                    $this->controllerAdmin->listarEmpleado();
                }

                elseif ($_POST['solicitud'] == 'cambioEstado'){
                    $usuario = $_SESSION["administrador"];

                    $this->controllerAdmin->cambiarEstado();
                }






                elseif ($_POST['solicitud'] == 'liquidacion'){
                    //$id
                    //$descripcion
                    //$idEmpleado
                    //$idPeriodo
                }elseif($_POST['solicitud']=='buscarAdministrador'){
                    $usuario = $_SESSION["administrador"];
                    $this->controllerAdmin->buscarAdministrador($usuario);
                }

                //EMPLEADO
                elseif ($_POST['solicitud'] == 'homeEmpleado'){
                    $usuario = $_SESSION["empleado"];
                    $this->controllerEmpleado->buscarEmpleado($usuario);
                }



            }

            else{
                echo '<script> alert("No encontro la solicitud")</script>';
            }
        }
    }
?>
