<?php
    session_start();
    include('conexion.php');
    if(isset($_SESSION['usuario'])){
        echo '<script>window.location="panel.php";</script>'; 

    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sport Center</title>
    <link rel="shortcut icon" href="img/logos.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">
                </h1>
                <div class="text-center">
                    <img
                        src="img/logo2.jpg"
                        alt="logo senati"
                        class="img-">
                </div>
            </div>
        </div>
    </div>
</header>  
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
              <div class="col-md-4">
                <h3>Registro</h3>
                <br>
                <form action="registrar.php" method="post">
                    <div class="form-group">
                        <input
                            type="text"
                            name="usuario"
                            id="usuario"
                            placeholder="Ingrese su usuario"
                            required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="nombre"
                            id="nombre"
                            placeholder="Ingrese su nombre"
                            required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="apellidos"
                            id="apellidos"
                            placeholder="Ingrese sus apellidos"
                            required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="celular"
                            id="celular"
                            placeholder="Ingrese su celular"
                            required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input
                            type="text"
                            name="correo"
                            id="correo"
                            placeholder="Ingrese su correo"
                            required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input
                            type="password"
                            name="contraseña"
                            id="contraseña"
                            placeholder="Ingrese su contraseña"
                            required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input
                            type="submit"
                            value="Registrar"
                            name="registrar"      
                            class="btn btn-primary form-control">
                    </div>
                    <div class="form-group">
                        <input
                            type="reset"
                            value="Restaurar"
                            name="restaurar"         
                            class="btn btn-secondary form-control">
                    </div>
                    <div class="form-group">
                        <a href="index.php" class="btn btn-success form-control">Ir al sitio</a>
                    </div>
                </form>
        </div>
    </div>
</section>
</body>   