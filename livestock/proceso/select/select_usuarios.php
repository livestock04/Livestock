<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   

<?php
$consulta = $pdo->prepare("SELECT * FROM usuarios");
$consulta->execute();
if($consulta->rowCount()>=1){
  while($fila=$consulta->fetch()){
   if($fila['rol_id_rol'] == 2){

     echo" <tr>
              <td>".$fila['id_usuarios']."</td>
              <td>".$fila['nombres']."</td>
              <td>".$fila['apellidos']."</td>
              <td>".$fila['correo']."</td>
              <td>".$fila['telefono']."</td>
              <td>".$fila['usuario']."</td>
              <td>".$fila['direccion']."</td>
              <td>"."Administrador"."</td>";
   }else{
      if ($fila['rol_id_rol'] == 3)

      echo" <tr>
              <td>".$fila['id_usuarios']."</td>
              <td>".$fila['nombres']."</td>
              <td>".$fila['apellidos']."</td>
              <td>".$fila['correo']."</td>
              <td>".$fila['telefono']."</td>
              <td>".$fila['usuario']."</td>
              <td>".$fila['direccion']."</td>
              <td>"."Usuario Externo"."</td>";
   }
   }
}else{
  echo "<tr>
           <td rowspan='4'>No hay datos </td>
        </tr>";

}

?>


</body>
</html>