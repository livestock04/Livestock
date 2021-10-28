<?php
session_start();
if (!isset($_SESSION['rol_id_rol'])){
    $_SESSION['rol_id_rol'] = 0;
}

?>
<?php
    include '../conexionbd/conexionlivestocksecundario.php';
    $sentencia = $pdo->query("SELECT id_usuarios, nombres, apellidos, correo, telefono, direccion, finca_id_finca, usuario FROM usuarios");
    $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Livestock</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/fincastyle.css" rel="stylesheet">
        <link rel="shortcut icon" href="../imagenes/iconos/icono.png" type="image/x-icon">
    </head>
    <body>
        
      <!--menu horizontal-->

<div class="topnav" id="myTopnav">
 <a href="finca.php" class="active">LIVEST<img src="../imagenes/iconos/icono.png" width="20px">CK</a>
 <a href="finca.php" title="Inicio">Inicio</a>
  <a href="#tratamientos" title="Tratamientos">Tratamientos</a>
  <a href="notas.php" title="Block de notas">Notas</a>
  <a href="registrar_usuarios.php" title="Información de usuarios">Usuarios</a>
  <a href="#" title="Información propiedad">Propiedad</a>
  <a href="bovinos.php" title="Información de bovinos">Bovinos</a>
  <!--<a href="#"><img src="../imagenes/imagen12.png" alt="Yo" width="40px"></a>-->
  <a href="../proceso/cerrarsesion.php" title="Cerrar Sesión">Cerrar Sesión</a>

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

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="../imagenes/imagen17.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="../imagenes/fondo2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="../imagenes/fondo4.jpeg" style="width:100%">
</div>



<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>



<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<!--Tratamientos-->
<center><h1 id="tratamientos">Tratamientos</h1></center>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="../imagenes/imagen12.png" alt="Avatar" style="width:200px;height:250px;">
    </div>
    <div class="flip-card-back">
      <h1>Vacunas</h1> 
      <p>Vacunas requeridas</p> 
      <p><a href="">Ir</a></p>
    </div>
  </div>
</div>
<div class="flip-card2">
  <div class="flip-card-inner2">
    <div class="flip-card-front2">
      <img src="../imagenes/imagen12.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back2">
      <h1>Información</h1> 
      <p>Genetica & Producción</p> 
      <p><a href="">Ir</a></p>
    </div>
  </div>
</div>
<div class="flip-card3">
  <div class="flip-card-inner3">
    <div class="flip-card-front3">
      <img src="../imagenes/imagen12.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back3">
      <h1>Tratamientos medicos</h1> 
      <p>Información de cirugias </p> 
      <p><a href="">Ir</a></p>
    </div>
  </div>
</div>
<div class="flip-card3">
  <div class="flip-card-inner3">
    <div class="flip-card-front3">
      <img src="../imagenes/imagen12.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back3">
      <h1>Historia</h1> 
      <p>Producción lactea</p> 
      <p><a href="">Ir</a></p>
    </div>
  </div>
</div>



    
    </body>
</html>