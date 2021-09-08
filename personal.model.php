<?php
    class UsuarioModel{
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
                $stm = $this->pdo->prepare("select * from personal");
                $stm->execute();
                foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                    $alm = new usuario();
                    $alm->__SET('idusuario',$r->idusuario);
                    $alm->__SET('nombres',$r->nombres);
                    $alm->__SET('usuario',$r->usuario);
                    $alm->__SET('contraseña',$r->contraseña);
                    $result[]= $alm;
                }
                return $result;

            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function Obtener($cod){
            try {
                $stm = $this->pdo->prepare("select * from personal where idusuario = ?");
                $stm->execute(array($cod));
                $r = $stm->fetch(PDO::FETCH_OBJ);
                $alm = new usuario();
                $alm->__SET('idusuario',$r->idusuario);
                $alm->__SET('nombres',$r->nombres);
                $alm->__SET('usuario',$r->usuario);
                $alm->__SET('contraseña',$r->contraseña);
                return $alm;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function Eliminar($cod){
            try {
                $stm = $this->pdo->prepare("delete from personal where idusuario = ?");
                $stm->execute(array($cod));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function Actualizar(usuario $data){
            try {
                $sql = "update personal set
                nombres=?,
                usuario=?,
                contraseña=?
                where idusuario=?";

                $this->pdo->prepare($sql)->execute(array(
                    $data->__GET('nombres'),
                    $data->__GET('usuario'),
                    $data->__GET('contraseña'),
                    $data->__GET('idusuario')
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function Registrar(usuario $data){
            try {
                $sql = "insert into personal(nombres,usuario,contraseña) values (?,?,?)";
                $this->pdo->prepare($sql)->execute(array(
                    $data->__GET('nombres'),
                    $data->__GET('usuario'),
                    $data->__GET('contraseña')                    
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>