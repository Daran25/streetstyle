<?php
    include 'conexion.php';
 
    if(isset($_POST['registrar'])){
        try{
            $comando = $db->prepare("insert into clientes(usuario,nombre,apellidos, celular, correo, contraseña) values(?,?,?,?,?,?)");
            $k = $_POST['usuario'];
            $n = $_POST['nombre'];
            $u = $_POST['apellidos'];
            $p = $_POST['celular'];
            $t = $_POST['correo'];
            $c = $_POST['contraseña'];
 
            $comando->bindParam(1,$k);
            $comando->bindParam(2,$n);
            $comando->bindParam(3,$u);
            $comando->bindParam(4,$p);
            $comando->bindParam(5,$t);
            $comando->bindParam(6,$c);
 
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