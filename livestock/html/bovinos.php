<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bovinos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bovinosstyle.css" rel="stylesheet">
        <link rel="shortcut icon" href="../imagenes/iconos/icono.png" type="image/x-icon">
    </head>
    <body>



        <!--menu horizontal-->

<div class="topnav" id="myTopnav">
  <a href="finca.php" class="active">Atras</a>
  <a href="bovinos.php">Inicio</a>
  <a href="registrar_bovino.php" title="Registro Res">Registrar Res</a>
  
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


        <!--end de menu horizontal-->
        


   <!--menu de info reses-->
   <div class="sidebar">
       <!--<li><a href="../proceso/edit/edit_registro_res.php"  title="Registro Res">Editar Res</a></li>-->
       <a href="../proceso/select/select_terneras.php">Terneras</a>
       <a href="../proceso/select/select_terneros.php">Terneros</a>
       <a href="../proceso/select/select_novilla.php">Novillas</a>
       <a href="../proceso/select/select_novillo.php">Novillos</a>
       <a href="../proceso/select/select_vaca.php">Vacas</a>
       <a href="../proceso/select/select_toro.php">Toros</a>
   </div>

   <!--end menu de info reses-->



 

 <div class="rwd">
  <table class="rwd_auto">
      <thead>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Fecha Nacimiento</th>
            <th>Peso</th>
            <th>Edad</th>
            <th>Valor</th>
            <th>Color</th>
            <th>Nombre Madre</th>
            <th>Fecha Adquisición</th>
            <th>Adquisición</th>
            <th>Genero</th>
        </tr>
        </thead>

       <?php
       require_once "../conexionbd/conexionlivestocksecundario.php";
       require_once "../proceso/select/select_bovinos.php"; 
       
       ?>
   
    </table>
 </div>

    </body>
    </html>