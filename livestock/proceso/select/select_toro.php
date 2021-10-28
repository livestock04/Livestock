<?php 

include '../../conexionbd/conexionlivestocksecundario.php';

$consulta = $pdo -> query("SELECT * FROM bovino;");
$toro = $consulta -> fetchAll(PDO::FETCH_OBJ);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/usuarios_style.css">
    <link rel="shortcut icon" href="../../imagenes/iconos/icono.png" type="image/x-icon">
    <title>Toros</title>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="../../html/bovinos.php" class="active">Atras</a>
  <a href="select_toro.php">Inicio</a>
  
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

<center><h1>Toros</h1></center>
 

 <div class="rwd">
  <table class="rwd_auto">
      <thead>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Fecha Nacimiento</th>
            <th>Peso</th>
            <th>Edad</th>
            <th>Valor</th>
            <th>Color</th>
            <th>Nombre Madre</th>
            <th>Fecha Adquisición</th>
            <th>Adquisición</th>
            <th>Raza</th>
        </tr>
        </thead>

        <?php 
 		foreach ($toro as $dato) {

            if($dato->raza_id_raza == 1){
                $raza = "Ayrshire";
            }else{
               if($dato->raza_id_raza == 2){
                   $raza = "Brahamn";
                }else{
                    if($dato->raza_id_raza == 3){
                        $raza = "Girolando";
                    }else{
                        if($dato->raza_id_raza == 4){
                            $raza = "Gyr";
                        }else{
                            if($dato->raza_id_raza == 5){
                                $raza = "Holstein";
                            }else{
                                if($dato->raza_id_raza == 6){
                                    $raza = "Jersey";
                                }else{
                                    if($dato->raza_id_raza == 7){
                                        $raza = "Simmental";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        
        if($dato->categoria_id_categoria == 6){                            
                   
        if($dato->adquisicion_id_adquisicion == 1){
            $adquisicion = "Comprado";
        }else{
            $adquisicion = "Finca";
        }

 			?>
 		 <tr> 
 			<td><?php echo $dato->nombre; ?></td>
 			<td><?php echo $dato->fecha_nacimiento; ?></td>
            <td><?php echo $dato->peso; ?></td>
 			<td><?php echo $dato->edad; ?></td>
            <td><?php echo $dato->valor; ?></td>
            <td><?php echo $dato->color; ?></td>
            <td><?php echo $dato->nombre_madre; ?></td>
            <td><?php echo $dato->fecha_adquisicion; ?></td>
            <td><?php echo $adquisicion; ?></td>
            <td><?php echo $raza; ?></td>

            <td> <a href="../edit/edit_registro_res.php?id_bovino=<?php echo $dato->nombre;?>" class="buscador">Editar</a></td>
            <td><a href="../delete/delete_bovino.php?id_bovino=<?php echo $dato->nombre;?>">Eliminar</a></td>
        </tr>

 		<?php
                   }
                }
            
 		 ?>
 	</table>
   
    
</body>
</html>