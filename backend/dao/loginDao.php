<?php

    class LoginDao extends model{

        public function __construct(){

        }

        public function validar($user, $password){
            $query = "SELECT * FROM usuario WHERE usuario = '$user' AND password = '$password'";

            $this->conexion();
            $respuesta = $this->query($query);
            $this->closeConexion();

            if(isset($respuesta) && $respuesta->num_rows>0){
                $users = array();
                $row = mysqli_fetch_array($respuesta);
                $users['user'] = $row['user'];
                $users['pass'] = $row['pass'];
                return $users;
            }
            return null;
        }
    }
?>