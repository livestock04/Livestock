<?php 

include '../../conexionbd/conexionlivestocksecundario.php';

$consulta = $pdo -> query("SELECT * FROM usuarios;");
$usuarios = $consulta -> fetchAll(PDO::FETCH_OBJ);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/usuarios_style.css">
    <link rel="shortcut icon" href="../../imagenes/iconos/icono.png" type="image/x-icon">
    <title>Usuarios</title>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="../../html/registrar_usuarios.php" class="active">Atras</a>
  <a href="edit_usuarios">Inicio</a>
  
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

<center><h1>Usuarios</h1></center>


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
            <th>Contraseña</th>
            <th>Direccion</th>
            <th>Categoria</th>
            <th>Finca</th>
        </tr>
        </thead>

        <?php 
 		foreach ($usuarios as $dato) {
             if($dato->rol_id_rol == 2){
           
 			?>
 		 <tr> 
            <td><?php echo $dato->id_usuarios; ?></td>
 			<td><?php echo $dato->nombres; ?></td>
 			<td><?php echo $dato->apellidos; ?></td>
 			<td><?php echo $dato->correo; ?></td>
            <td><?php echo $dato->telefono; ?></td>
            <td><?php echo $dato->usuario; ?></td>
            <td><?php echo $dato->contrasena; ?></td>
            <td><?php echo $dato->direccion; ?></td>
            <td><?php echo "Administrador";?></td>
            <td><?php echo $dato->finca_id_finca; ?></td>

            <td> <a href="edit_usuarios_second.php?id_usuarios=<?php echo $dato->usuario;?>" class="buscador">Editar</a></td>
            <td><a href="../delete/delete_usuarios.php?id_usuarios=<?php echo $dato->usuario;?>">Eliminar</a></td>
            
            <?php }else{
                   if($dato->rol_id_rol == 3){
                ?>
                 <tr> 
            <td><?php echo $dato->id_usuarios; ?></td>
 			<td><?php echo $dato->nombres; ?></td>
 			<td><?php echo $dato->apellidos; ?></td>
 			<td><?php echo $dato->correo; ?></td>
            <td><?php echo $dato->telefono; ?></td>
            <td><?php echo $dato->usuario; ?></td>
            <td><?php echo $dato->contrasena; ?></td>
            <td><?php echo $dato->direccion; ?></td>
            <td><?php echo "Usuario Externo";?></td>
            <td><?php echo $dato->finca_id_finca; ?></td>

            <td> <a href="edit_usuarios_second.php?id_usuarios=<?php echo $dato->usuario;?>">Editar</a></td>
            <td><a href="../delete/delete_usuarios.php?id_usuarios=<?php echo $dato->usuario;?>">Eliminar</a></td>
 		</tr>
 		<?php
 		}
    }
}
 		 ?>
 	</table>
</div>
    
</body>
</html>