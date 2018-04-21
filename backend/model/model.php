<?php
    class model{
        private $pdo;

        public function conexion(){
            $host = '127.0.0.1';
            $user = 'root';
            $password = '';
            $dataBase = 'nom';

            try {
                $this->pdo = mysqli_connect($host, $user, $password, $dataBase);
            }

            catch (Exception $exc) {
                mysqli_error($this->pdo);
                echo '<script> alert("Fallo De Conexion")</script>';
            }
        }

        public function query($sql){
            return mysqli_query($this->pdo, $sql);
        }

        public function closeConexion(){
            mysqli_close($this->pdo);
        }
    }
?>