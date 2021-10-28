<?php
include '../conexionbd/conexionlivestocksecundario.php';

$consulta = $pdo ->query("SELECT * FROM notas;");
$lista = $consulta -> fetchALL(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="shortcut icon" href="../imagenes/iconos/icono.png" type="image/x-icon">
<link rel="stylesheet" href="../css/notas_style.css">
<title>Pendientes</title>
<body>

<div class="topnav" id="myTopnav">
  <a href="finca.php" class="active">Atras</a>
  <a href="notas.php">Inicio</a>
  
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




<form action="../proceso/guardar_notas.php" method="POST" class="formato">
<div>
  <h2 style="margin:5px">Pendientes</h2>
  <input type="text" placeholder="Lista..." name="pendientes">
  <input type="hidden" name="finca_id" value="1">
  <input type="submit" value="Guardar" class="addBtn">
</div>
</form>


<div class="rwd">
    <table class="rwd_auto">
      <thead>
      <tr>
        <th>Pendientes</th>
      </tr>
      </thead>
<?php 
foreach($lista as $dato){

  ?>

      <tr>

  <td><?php echo $dato->pendientes; ?></td>

  <td><a href="../delete/delete_notas.php?id_notas=<?php echo $dato->pendientes;?>">Eliminar</a></td>
      </tr>

<?php 
}
?>
    </table>
</div>


</body>
</html>