<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/usuarios_style.css">
    <link rel="shortcut icon" href="../imagenes/iconos/icono.png" type="image/x-icon">
    <title>Registrar Usuarios</title>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="finca.php" class="active">Atras</a>
  <a href="registrar_usuarios.php">Inicio</a>
  <a href="../proceso/edit/edit_usuarios.php">Editar Registros</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <div class="juan"></div>
  <div class="juan"></div>
  <div class="juan"></div>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


<center><h1>Registrar</h1></center>
<div class="container">
<table>
<form action=" " method="post">
                    
    <tr>
     <td><label for="nombres">Nombres</label></td>
     <td><input type="text" name="nombres" required=""></td>

    <td><label for="apellidos">Apellidos</label></td>
    <td><input type="text" name="apellidos" required=""></td>
    
    <td><label for="telefono">Telefono</label></td>
    <td><input type="number" name="telefono" required=""></td>
                    
    </tr>
    <tr>
    <td><label for="correo">Correo</label></td>
    <td><input type="email" name="correo" required=""></td>

    <td><label for="direccion">Dirección</label></td>
    <td><input type="text" name="direccion" required=""></td>

    <td><label>Rol ID</label></td>
    <td><select name="rol_id">
    <option selected value="0" required="">Seleccione</option>
    <option value="2">Administrador</option>
    <option value="3" >Usuario Externo</option>
    </select></td>
                    
                   
    </tr>
    <tr>

    <td><label for="finca_id">Finca ID:</label></td>
    <td><input type="text" name="finca_id" required=""></td>

    <td><label for="usuario">Usuario</label></td>
    <td><input type="text" name="usuario" required=""></td>

    <td><label for="contrasena">Contraseña</label></td>
    <td><input type="password" name="contrasena" required=""></td>
            
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
                        
    <td><input type="submit" value="Guardar" name=""></td>
                    
    </tr>

     <?php
    
    
    if ( isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['usuario']) && isset($_POST['contrasena']) && isset($_POST['direccion']) && isset($_POST['finca_id']) && isset($_POST['rol_id'])) {
        require_once "../conexionbd/conexionlivestocksecundario.php";
        require_once "../proceso/guardar_registro_usuarios.php";
    
    }
    
    ?>
    
   
        </form>
</table>
</div>

<div class="rwd">
  <table class="rwd_auto">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Usuario</th>
            <th>Direccion</th>
            <th>Categoria</th>
        </tr>
        </thead>

       <?php
       require_once "../conexionbd/conexionlivestocksecundario.php";
       require_once "../proceso/select/select_usuarios.php"; 
       
       ?>
   
    </table>
</div>
   

     


</body>
</html>