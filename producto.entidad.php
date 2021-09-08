<?php
    class Producto{
        private $idproducto;
        private $foto;
        private $nombre;
        private $precio;
        private $stock;

        public function __GET($k){
            return $this->$k;
        }
        public function __SET($k,$v){
            return $this->$k = $v;
        }
    }
?>