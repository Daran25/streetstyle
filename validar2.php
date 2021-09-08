<?php
    session_start();
    include 'conexion.php';

    if(isset($_POST['iniciar'])){
        $entro   = false;
        $usuario = $_POST['usuario'];
        $pw      = $_POST['contraseña'];
        
        $registro = "SELECT usuario FROM personal WHERE usuario= '$usuario' and contraseña= '$pw'";

        foreach ($db->query($registro) as $fila) {
			$_SESSION['usuario']=$fila['usuario'];

            if($fila['usuario']=='administrador'){
                echo '<script>alert("Usuario encontrado");</script>';
                echo '<script>window.location="paneladmin.php";</script>';
            }else{
                echo '<script>alert("Usuario encontrado");</script>';
                echo '<script>window.location="paneladmin.php";</script>';
            }      
        }
        $db = null;
        echo '<script>alert("Usuario no encontrado");</script>';
        echo '<script>window.location="index.php";</script>'; 

    }
?>