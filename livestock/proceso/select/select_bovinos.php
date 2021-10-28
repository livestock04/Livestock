<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../imagenes/iconos/icono.png" type="image/x-icon">
   <title>Bovino</title>
</head>
<body>
   

<?php
$consulta = $pdo->prepare("SELECT * FROM bovino");
$consulta->execute();
if($consulta->rowCount()>=1){
  while($fila=$consulta->fetch()){
     if($fila['adquisicion_id_adquisicion'] == 1){
        $adquisicion = "Comprado";
     }else{
        $adquisicion = "Finca";
     }
     if($fila['genero_id_genero'] == 1){
      $genero = "Macho";
     }else{
      $genero = "Hembra";
     }

     
     echo" <tr>
              <td>".$fila['id_bovino']."</td>
              <td>".$fila['nombre']."</td>
              <td>".$fila['fecha_nacimiento']."</td>
              <td>".$fila['peso']."</td>
              <td>".$fila['edad']."</td>
              <td>".$fila['valor']."</td>
              <td>".$fila['color']."</td>
              <td>".$fila['nombre_madre']."</td>
              <td>".$fila['fecha_adquisicion']."</td>
              <td>".$adquisicion."</td>
              <td>".$genero."</td>
              ";
   }
}else{
  echo "<tr>
           <td rowspan='4'>No hay datos </td>
        </tr>";

}

?>


</body>
</html>