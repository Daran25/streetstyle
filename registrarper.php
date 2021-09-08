<?php
    include 'conexion.php';
 
    if(isset($_POST['registrar'])){
        try{
            $comando = $db->prepare("insert into personal(nombres,usuario, contraseña) values(?,?,?)");
            $k = $_POST['nombres'];
            $n = $_POST['usuario'];
            $c = $_POST['contraseña'];
 
            $comando->bindParam(1,$k);
            $comando->bindParam(2,$n);
            $comando->bindParam(3,$c);
 
            $comando->execute();
 
            echo '<script>alert("Usuario registrado");</script>';
            echo '<script>window.location="index.php";</script>';
 
        }catch (exception $e) {
            die($e->getMessage());
        }
    }
    else{
        echo 'se desconoce el origen';
    }
?>