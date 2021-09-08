<?php 
    session_start();
    if(!(isset($_SESSION['usuario']))){
        echo '<script>window.location="panel.php";</script>';
    }

  require_once 'producto.entidad.php';
  require_once 'producto.model.php';

  $alm = new producto();
  $model = new productoModel();

  if(isset($_REQUEST['action'])){
    switch ($_REQUEST['action']) {
        case 'actualizar':
            $alm->__SET('idproducto',$_REQUEST['idproducto']);
            $alm->__SET('foto',$_REQUEST['foto']);
            $alm->__SET('nombre',$_REQUEST['nombre']);
            $alm->__SET('precio',$_REQUEST['precio']);
            $alm->__SET('stock',$_REQUEST['stock']);
            $model->Actualizar($alm);
            header('Location: producto.php');
            break;
        case 'registrar':
            $alm->__SET('idproducto',$_REQUEST['idproducto']);
            $alm->__SET('foto',$_REQUEST['foto']);
            $alm->__SET('nombre',$_REQUEST['nombre']);
            $alm->__SET('precio',$_REQUEST['precio']);
            $alm->__SET('stock',$_REQUEST['stock']);
            $model->Registrar($alm);
            header('Location: producto.php');
            break;
        case 'eliminar':
            $model->Eliminar($_REQUEST['idproducto']);
            header('Location: producto.php');
            break;
        case 'editar':
            $alm = $model->Obtener($_REQUEST['idproducto']);
            break;
    }
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
    <script src="js/boostrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Módulo Productos</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <form action="?action=<?php echo $alm->idproducto ?'actualizar':'registrar'; ?>" method="post">
                    <fieldset class="form-group">
                        <input type="hidden" 
                            name="idproducto"
                            value="<?php echo $alm->__GET('idproducto'); ?>">
                        <br>
                        <input type="file" 
                            name="foto" 
                            id="foto"
                            value="<?php echo $alm->__GET('foto'); ?>"
                            class="form-control"
                            placeholder="Imagen de producto">
                        <br>
                        <input type="text" 
                            name="nombre" 
                            id="nombre"
                            value="<?php echo $alm->__GET('nombre'); ?>"
                            class="form-control"
                            placeholder="Nombre de producto">
                        <br>
                        <input type="text" 
                            name="precio" 
                            id="precio"
                            value="<?php echo $alm->__GET('precio'); ?>"
                            class="form-control"
                            placeholder="precio de producto">  
                        <br>
                        <input type="text" 
                            name="stock" 
                            id="stock"
                            value="<?php echo $alm->__GET('stock'); ?>"
                            class="form-control"
                            placeholder="Stock actual">  

                    </fieldset>
                    <br>
                    <input type="submit" 
                        value="Añadir"
                        class="btn btn-primary form-control">
                </form>
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <header>
                    <h2 class="text-center">Registro</h2>
                </header>

                <table class="table table-condensed"> 
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                        foreach ($model->Listar() as $r): 
                    ?>
                    <tr>
                        <td>
                            <?php echo $r->__GET('idproducto'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('foto'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('nombre'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('precio'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('stock'); ?>
                        </td>
                        <td>
                            <a href="?action=editar&idproducto=<?php echo $r->idproducto; ?>">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="?action=eliminar&idproducto=<?php echo $r->idproducto; ?>">
                                Eliminar
                            </a>                            
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
<div class="col-md-4">
        <div class="form-group">
            <a href="paneladmin.php" class="btn btn-secondary form-control" >
                    Retornar
            </a>
        </div>
    </div>
</body>
</html>