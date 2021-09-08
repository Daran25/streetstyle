<?php 
    session_start();
    if(!(isset($_SESSION['usuario']))){
        echo '<script>window.location="paneladmin.php";</script>';
    }

  require_once 'personal.entidad.php';
  require_once 'personal.model.php';

  $alm = new usuario();
  $model = new usuarioModel();

  if(isset($_REQUEST['action'])){
    switch ($_REQUEST['action']) {
        case 'actualizar':
            $alm->__SET('idusuario',$_REQUEST['idusuario']);
            $alm->__SET('nombres',$_REQUEST['nombres']);
            $alm->__SET('usuario',$_REQUEST['usuario']);
            $alm->__SET('contraseña',$_REQUEST['contraseña']);
            $model->Actualizar($alm);
            header('Location: personal.php');
            break;
        case 'registrar':
            $alm->__SET('idusuario',$_REQUEST['idusuario']);
            $alm->__SET('nombres',$_REQUEST['nombres']);
            $alm->__SET('usuario',$_REQUEST['usuario']);
            $alm->__SET('contraseña',$_REQUEST['contraseña']);
            $model->Registrar($alm);
            header('Location: personal.php');
            break;
        case 'eliminar':
            $model->Eliminar($_REQUEST['idusuario']);
            header('Location: personal.php');
            break;
        case 'editar':
            $alm = $model->Obtener($_REQUEST['idusuario']);
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
                <h1 class="text-center">Módulo Trabajadores</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <form action="?action=<?php echo $alm->idusuario ?'actualizar':'registrar'; ?>" method="post">
                    <fieldset class="form-group">
                        <input type="hidden" 
                            name="idusuario"
                            value="<?php echo $alm->__GET('idusuario'); ?>">
                        <br>
                        <input type="text" 
                            name="nombres" 
                            id="nombres"
                            value="<?php echo $alm->__GET('nombres'); ?>"
                            class="form-control"
                            placeholder="Nombres completos del usuario">
                        <br>
                        <input type="text" 
                            name="usuario" 
                            id="usuario"
                            value="<?php echo $alm->__GET('usuario'); ?>"
                            class="form-control"
                            placeholder="Usuario">  
                        <br>
                        <input type="text" 
                            name="contraseña" 
                            id="contraseña"
                            value="<?php echo $alm->__GET('contraseña'); ?>"
                            class="form-control"
                            placeholder="Ingrese nueva contraseña">  

                    </fieldset>
                    <br>
                    <input type="submit" 
                        value="Añadir Usuario"
                        class="btn btn-primary form-control">
                </form>
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <header>
                    <h2 class="text-center">Registro</h2>
                </header>

                <table class="table table-condensed"> 
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombres</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                        foreach ($model->Listar() as $r): 
                    ?>
                    <tr>
                        <td>
                            <?php echo $r->__GET('idusuario'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('nombres'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('usuario'); ?>
                        </td>
                        <td>
                            <?php echo $r->__GET('contraseña'); ?>
                        </td>
                        <td>
                            <a href="?action=editar&idusuario=<?php echo $r->idusuario; ?>">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="?action=eliminar&idusuario=<?php echo $r->idusuario; ?>">
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