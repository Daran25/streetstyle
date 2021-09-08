<?php    
    session_start();
    include 'conexion.php';
    if(isset($_SESSION['usuario'])){
        header('Content-Type: text/html; charset=utf-8');
    }
    else{
        echo '<script>alert("usted no esta registrado");</script>';
        echo '<script>window.location="index.php";</script>';
    }
?>

<!DOCTYPE html>
<html lang="es-pe">
<head>
    <title>Sport Center</title>
    <link rel="shortcut icon" href="img/logos.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/barra.css">
    <script src="js/bootstrap.min.js"></script>
    <script>
        function calculoImc(){
            var vPeso, vEstatura, vImc;
            vPeso=0;
            vEstatura=0;
            vImc=0;

            vPeso = document.getElementById("peso").value;
            vEstatura = document.getElementById("estatura").value/100;            
            vImc = vPeso / (vEstatura * vEstatura);
            //document.getElementById("resultado_imc").value=vImc;
            //document.getElementById("resultado1").innerHTML=vImc;
            alert(vImc);
        }
        
    </script>
    <script>
        function calculoCambio(){
            var vMonto, vTipo;
            vMonto=0;
            vTipo=0;
            vResul=0;

            vMonto = document.getElementById("monto").value;
            vTipo = document.getElementById("tipo").value;            
            vResul = vMonto / vTipo;
            //document.getElementById("resultado_imc").value=vImc;
            //document.getElementById("resultado1").innerHTML=vImc;
            alert(vResul);
        }
        
    </script>
    <script>
        function enviarMen(){
            var vAsunto, vMensaje;
            vAsunto=0;
            vMensaje=0;
            vEnviado=0;

            vAsunto = document.getElementById("asunto").value;
            vMensaje = document.getElementById("mensaje").value;            
            vEnviado = ("Su mensaje fue enviado");
            //document.getElementById("resultado_imc").value=vImc;
            //document.getElementById("resultado1").innerHTML=vImc;
            alert(vEnviado);
        }     
    </script>
</head>
<body>
<ul>
    <img align="left" width="160"  height="75" src="img/sport2.png" alt="logo" class="">
    <li style="font-size: 25px"><a href="#home">Hombre</a></li>
    <li style="font-size: 25px"><a href="#news">Mujer</a></li>
    <li style="font-size: 25px"><a href="#contact">Niños</a></li>
    <li style="font-size: 25px"><a href="#contact">Marcas</a></li>
</ul>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1 class="text-center">
                        Senati
                    </h1>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <img 
                            src="img/logo2.jpg" 
                            alt="Logo Senati"
                            class="img-fluid  img-thumbnail">
                    </div> 
                </div>
                <div class="col-md-4">
                    <h2 class="text-center">
                        Panel Principal
                    </h2>
                    <h4 class="text-center">
                        <?php
                            echo 'Bienvenido, <strong>' .$_SESSION['usuario'] .'</strong>';
                        ?>
                    </h4>                                           
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="img/editar.jpg" 
                            alt="editar perfil" 
                            class="img-fluid rounded-circle img-thumbnail"
                            style="width:180px; height:180px;">
                            <br>
                        <a href="#">
                            Editar Perfil
                        </a>
                        <br>
                        <a href="logout.php" class="btn btn-info">
                            Cerrar sesión
                        </a> 
                        <br>  
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <img src="img/productos.png" 
                        alt="productos"
                        class="img-fluid rounded-circle img-thumbnail">
                    <a href="producto.php" 
                        class="btn btn-secondary form-control text-center">
                        Módulo Productos
                    </a>
                    
                </div>              
                <div class="col-md-4">
                    <img src="img/clientes.jpg" 
                        alt="clientes"
                        class="img-fluid rounded-circle img-thumbnail">
                    <a href="cliente.php" 
                        class="btn btn-success form-control text-center">
                        Módulo Clientes
                    </a>
                </div>  
                <div class="col-md-4">     
                    <img src="img/usuarios.png" 
                        alt="usuarios"
                        class="img-fluid rounded-circle img-thumbnail">
                    <a href="personal.php" 
                        class="btn btn-success form-control text-center">
                        Módulo Trabajadores
                    </a>     
              </div>
            </div>
            <!-- Seccion de utilidades -->
            <br>
            <div class="row">
                <div class="col-md-12">                    
                    <h4 class="text-center">
                        Utilidades para el usuario
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">                    
                    <h5 class="text-center">
                        Calculo del IMC
                    </h5>
                    <form name="f1" id="f1" action="">
                        <div class="form-group">
                            <input type="text" 
                                name="" 
                                id="peso" 
                                placeholder="Indique su peso en kilogramos"
                                required
                                class="form-control">
                            <input type="text" 
                                name="" 
                                id="estatura" 
                                placeholder="Indique su estatura en centimetros"
                                required
                                class="form-control">
                        </div>
                        <button 
                            class="btn btn-primary"
                            onClick="calculoImc();">
                            Calcular IMC
                        </button>
                    </form>
                </div>
                <div class="col-md-4">                    
                    <h5 class="text-center">
                        Calculo de Tipo de cambio
                    </h5>
                    <form name="f1" id="f1" action="">
                        <div class="form-group">
                            <input type="text" 
                                name="" 
                                id="monto" 
                                placeholder="Indique monto en soles"
                                required
                                class="form-control">
                            <input type="text" 
                                name="" 
                                id="tipo" 
                                placeholder="Indique el tipo de cambio"
                                required
                                class="form-control">
                        </div>
                        <button 
                            class="btn btn-primary"
                            onClick="calculoCambio();">
                            Calcular tipo de cambio
                        </button>
                    </form>
                </div>
                <div class="col-md-4">                    
                    <h5 class="text-center">
                        Recomendaciones
                    </h5>
                    <form name="f1" id="f1" action="">
                        <div class="form-group">
                            <input type="text" 
                                name="" 
                                id="asunto" 
                                placeholder="Asunto"
                                required
                                class="form-control">
                            <input type="text" 
                                name="" 
                                id="mensaje" 
                                placeholder="Mensaje"
                                required
                                class="form-control">
                        </div>
                        <button 
                            class="btn btn-primary"
                            onClick="enviarMen();">
                            Enviar comentarios
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>
</body>
</html>