<?php
    class ProductoModel{
        private $pdo;
        public function __CONSTRUCT(){
            try {
                $this->pdo = new PDO('mysql:host=localhost;dbname=tiendaweb','root','');
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function Listar(){
            try {
                $result = array();
                $stm = $this->pdo->prepare("select * from productos");
                $stm->execute();
                foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                    $alm = new producto();
                    $alm->__SET('idproducto',$r->idproducto);
                    $alm->__SET('foto',$r->foto);
                    $alm->__SET('nombre',$r->nombre);
                    $alm->__SET('precio',$r->precio);
                    $alm->__SET('stock',$r->stock);
                    $result[]= $alm;
                }
                return $result;

            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function Obtener($cod){
            try {
                $stm = $this->pdo->prepare("select * from productos where idproducto = ?");
                $stm->execute(array($cod));
                $r = $stm->fetch(PDO::FETCH_OBJ);
                $alm = new producto();
                $alm->__SET('idproducto',$r->idproducto);
                $alm->__SET('foto',$r->foto);
                $alm->__SET('nombre',$r->nombre);
                $alm->__SET('precio',$r->precio);
                $alm->__SET('stock',$r->stock);
                return $alm;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function Eliminar($cod){
            try {
                $stm = $this->pdo->prepare("delete from productos where idproducto = ?");
                $stm->execute(array($cod));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function Actualizar(producto $data){
            try {
                $sql = "update productos set
                foto=?,
                nombre=?,
                precio=?,
                stock=?
                where idproducto=?";

                $this->pdo->prepare($sql)->execute(array(
                    $data->__GET('foto'),
                    $data->__GET('nombre'),
                    $data->__GET('precio'),
                    $data->__GET('stock'),
                    $data->__GET('idproducto')
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function Registrar(producto $data){
            try {
                $sql = "insert into productos(foto,nombre,precio,stock) values (?,?,?,?)";
                $this->pdo->prepare($sql)->execute(array(
                    $data->__GET('foto'),
                    $data->__GET('nombre'),
                    $data->__GET('precio'),
                    $data->__GET('stock')                    
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>