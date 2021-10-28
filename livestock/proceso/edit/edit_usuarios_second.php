<?php 
if (!isset($_GET['id_usuarios'])){
	header('location:edit_usuarios.php');
	}
    include '../../conexionbd/conexionlivestocksecundario.php';

	$id_usuarios = $_GET['id_usuarios'];

	$consulta = $pdo ->prepare("SELECT * FROM usuarios WHERE usuario=?;");
	$resultado = $consulta ->execute ([$id_usuarios]);
	$persona = $consulta->fetch(PDO::FETCH_OBJ);
	//print_r($persona);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
	 <link rel="stylesheet" href="../../css/usuarios_style.css">
	 <link rel="shortcut icon" href="../../imagenes/iconos/icono.png" type="image/x-icon">
 	<title>Editar Usuarios</title>
 </head>
 <body>
 <div class="topnav" id="myTopnav">
  <a href="edit_usuarios.php" class="active">Atras</a>
  <a href="edit_usuarios">Inicio</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <div class="juan"></div>
  <div class="juan"></div>
  <div class="juan"></div>
  </a>
</div>

 	
 		<center><h1> Editar usuarios</h1></center>
		 <div class="container">
 		<form method="POST" action="edit_usuarios_third.php">
 			<table>
 			    <tr>
 					<td>NOMBRES</td>
 					<td><input type="text" name="nombres" value=<?php echo $persona->nombres?>> </td>
 				
 					<td>APELLIDOS</td>
 					<td><input type="text" name="apellidos" value=<?php echo $persona->apellidos ?>></td>

					 <td>Telefono</td>
 					<td><input type="tel" name="telefono" value=<?php echo $persona->telefono ?>></td>
                 
 				</tr>
 				<tr>
 				
 					<td>Dirección</td>
 					<td><input type="text" name="direccion" value=<?php echo $persona->direccion?>> </td>

					 <td>Correo</td>
 					<td><input type="gmail" name="correo" value=<?php echo $persona->correo?>> </td>

					
 				</tr>
                 <tr>
 					<td>Rol</td>
 					<!--<td><input type="number" name="rol" value=<?php echo $persona->rol_id_rol?>> </td>-->

					 <td><select name="rol" <?php echo $persona->rol_id_rol?>>
                     <option selected value="0" required="">Seleccione</option>
                    <option value="2">Administrador</option>
                   <option value="3" >Usuario Externo</option>
                   </select></td>

 			
 					<td>Finca</td>
 					<td><input type="number" name="finca" value=<?php echo $persona->finca_id_finca?>> </td>
 				</tr>
				
 					
 			    <tr>
                     <td></td>
					 <td></td>
					 <td></td>
					 <td></td>
 					<input type="HIDDEN" name="oculto">
 					<input type="hidden" name="usuario" value="<?php echo $persona->usuario; ?>">
 					<input type="hidden" name="contrasena" value="<?php echo $persona->contrasena; ?>">
 					<td colspan="2"><input type="submit" value="EDITAR"></td>
 				</tr>
 			</tr>
 			</table>
 		</form>
		 </div>
 	
 
 </body>
 </html>