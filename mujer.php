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
    <link rel="stylesheet" type="text/css" href="css/img.css">
    <script src="js/bootstrap.min.js"></script>
    
</head>
<body>
<ul>
    <a href="panele.php"><img align="left" width="160"  height="75" src="img/sport2.png" alt="logo" class="" ></a>
    <li style="font-size: 25px"><a href="hombre.php">Hombre</a></li>
    <li style="font-size: 25px"><a href="mujer.php">Mujer</a></li>
    <li style="font-size: 25px"><a href="niño.php">Niños</a></li>
    <li style="font-size: 25px"><a href="marcas.php">Marcas</a></li>
    <li style="float:right; font-size: 25px;"><a class="active" href="logout.php">Cerrar sesión</a></li>
</ul>
<h4 class="" style="font-size: 35px; margin-left: 0.9%;">
    <?php
        echo 'Bienvenido, <strong>' .$_SESSION['usuario'] .'</strong>';
    ?>
</h4>

<h2 class="text-center" style="font-size: 55px"><font color="LightCoral"><b>SECCIÓN MUJER</b></font></h2>
<br>
                      
<div class="slider">
    <ul>
        <li><img src="img/9g.jpg" class="img-fluid" style="width:1290px; height:630px;"></li>
        <li><img src="img/10g.jpg" class="img-fluid" style="width:1290px; height:630px;"></li>
        <li><img src="img/11g.jpg" class="img-fluid" style="width:1290px; height:630px;"></li>
        <li><img src="img/13g.jpg" class="img-fluid" style="width:1290px; height:630px;"></li>
    </ul>
</div>
<br>
<section>
    <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 style="font-size: 45px;"><b>Zapatillas</b></h3>
                    <br>
                    <div class="con-cajas" align="center">
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="" >
                              <img src="img/z1.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Nike Air Max Plus Premium</p>
                            <p><b>S/.794.62</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/z2.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p></p>
                            <p style="font-size: 25px;">Nike Air Force 1 Pixel</p>
                            <br>
                            <p><b>S/.514.15</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/z3.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p></p>
                            <p style="font-size: 25px;">Nike Dunk High</p>
                            <br>
                            <p><b>S/.514.15</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/z4.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Nike ACG Mountain Fly Low</p>
                            <p><b>S/.841.37</b></p>
                            <br>
                        </div>
                    </div>
                    <div class="con-cajas" align="center">
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="" >
                              <img src="img/z9.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p></p>
                            <p style="font-size: 25px;">Adidas NMD_R1</p>
                            <br>
                            <p><b>S/.449.00</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/z6.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Tenis Ultraboost 21 Primeblue</p>
                            <p><b>S/.649.00</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/z7.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Zapatillas Runfalcon 2.0</p>
                            <p><b>S/.169.00</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/z8.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Polo Adicolor Classics Trefoil</p>
                            <p><b>S/.307.86</b></p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 style="font-size: 45px;"><b>Ropa</b></h3>
                    <br>
                    <div class="con-cajas" align="center">
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="" >
                              <img src="img/m1.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Polo Adicolor Classics Trefoil</p>
                            <p><b>S/.307.86</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/m2.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Sudadera extragrande con capucha</p>
                            <p><b>S/.155.84</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/m3.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Polo Corto Adicolor Primeblue Tricolor</p>
                            <p><b>S/.109.00</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="" >
                              <img src="img/m5.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Camiseta Classics con logo</p>
                            <p><b>S/.58.42</b></p>
                            <br>
                        </div>
                    </div>
                    <div class="con-cajas" align="center">
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/m4.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Chaqueta de entrenamiento con capucha</p>
                            <p><b>S/.272.79</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/m6.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <br>
                            <br>
                            <p style="font-size: 25px;">Pantalones cargo</p>
                            <br>
                            
                            <p><b>S/.233.822</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/m7.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <br>
                            <br>
                            <p style="font-size: 25px;">Sudadera con capucha</p>
                            <br>
                            <p><b>S/.214.33</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/m8.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Licras adidas Sportswear Colorblock Pretina Alta</p>
                            <p><b>S/.149.00</b></p>
                            <br>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 style="font-size: 45px;"><b>Accesorios</b></h3>
                    <br>
                    <div class="con-cajas" align="center">
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="" >
                              <img src="img/h1.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Polera con capucha Essentials 3 Tiras</p>
                            <p><b>S/.179.00</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/h6.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Chaqueta deportiva de malla</p>
                            <p><b>S/.194.81</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/h7.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Buzo Essentials 3 Tiras Primegreen</p>
                            <p><b>S/.249.00</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="" >
                              <img src="img/h9.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Camiseta bordada Classics</p>
                            <p><b>S/.239.92</b></p>
                            <br>
                        </div>
                    </div>
                    <div class="con-cajas" align="center">
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/h5.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p></p>
                            <p style="font-size: 25px;">Pantalón tiro 21</p>
                            <br>
                            <p><b>S/.189.00</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/h2.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p></p>
                            <p style="font-size: 25px;">Casaca Deportiva Perú</p>
                            <br>
                            <p><b>S/.159.00</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/h3.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p style="font-size: 25px;">Shorts de punto Iconic T7</p>
                            <p><b>S/.175.36</b></p>
                            <br>
                        </div>
                        <div class="cajas" align="center" style="width:250px; height:380px; display: inline-block;">
                            <div class="">
                              <img src="img/h8.jpg" class="img-fluid img-thumbnail">
                            </div>
                            <p></p>
                            <p></p>
                            <p style="font-size: 25px;">Pantalón Boca Juniors</p>
                            <br>
                            <p><b>S/.229.00</b></p>
                            <br>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>