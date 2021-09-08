<?php
    class Usuario{
        private $idusuario;
        private $nombres;
        private $usuario;
        private $contraseña;

        public function __GET($k){
            return $this->$k;
        }
        public function __SET($k,$v){
            return $this->$k = $v;
        }
    }
?>