<?php
    include_once '../dao/loginDao.php';

    class Login{

        public function __construct(){

        }

        public function iniciarSesion($user, $password){
            $loginDao = new LoginDao();
            $respuesta = $loginDao->validar($user, $password);
            $json_data = array();

            if(!is_null($respuesta)) {
                $array = array();
                $json_data['success'] = 0;

                $array['usuario'] = $respuesta['user_name'];
                $array['contrasena'] = $respuesta['contrasena'];

                if ((strrpos($user, '00', -4)) !== false) {
                    $_SESSION['root'] = $user;
                    header('Location: ../frontend/pages/root/home.html');
                }
                elseif ((strrpos($user, '01', -4)) !== false) {
                    $_SESSION['administrador'] = $user;
                    header('Location: ../frontend/pages/administrador/home.html');
                }
                else {
                    $_SESSION['empleado'] = $user;
                    header('Location: ../frontend/pages/empleado/home.html');
                }
            }
            else{
                echo '<script> alert("Datos invalidos")</script>';
                header('Location: ../index.html');
            }
        }

        public function cerrarSesion(){
            session_destroy();
        }
    }
?>