<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/indexstyle.css">
<meta charset="UTF-8">
<link rel="shortcut icon" href="imagenes/iconos/icono.png" type="image/x-icon">
<title>Livestock</title>

</head>
<style>


</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">LIVEST<img src="imagenes/iconos/icono.png" width="20px">CK</a>
  <a href="index.php">Inicio</a>
  <a href="#nosotros" title="Nosotros">Nosotros</a>
  <a href="#equipo" title="Equipo de trabajo">Equipo</a>
  <a href="#servicios" title="Servicios">Servicios</a>
  <a href="#contactos" title="Contactos">Contactos</a>
  
  <a onclick="document.getElementById('id01').style.display='block'" >Iniciar Sesión</a>
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


<!--<div class="topnav">
<a href="index.php">Inicio</a>
<a href="#nosotros" title="Nosotros">Nosotros</a>
<a href="#servicios" title="Servicios">Servicios</a>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="button1">Iniciar Sesión</button>
</div>


<div class="tarjeta">
    <table>
        <tr>
    <td><img src="imagenes/icono.png" width="30%" alt=""></td>
    <td>Livestock</h1></td>
</table> 
</div>-->

<div class="titulo_parrafo">
  <strong><p>Una herramienta <br>
  para todo el trabajo <br>
  referente a su ganado</p></strong>
</div>

<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="button1">Iniciar Sesión</button>-->


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="proceso/inisiosecion.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="imagenes/imagen12.png" alt="Avatar" class="avatar">
    </div>

    <div class="container1">
      <input type="text" placeholder="Usuario" name="usuario" required>

      <input type="password" placeholder="Contraseña" name="contrasena" required>
        
      <button type="submit">Acceder</button>
    </div>

   <!-- <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>-->
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div class="imagenuno">
    <img src="imagenes/iconos/png5.png" alt="">
</div>

<div class="separador">
    <div class="lineauno" id="nosotros"></div>
</div>

<center><h1 >Nosotros</h1></center>



<div class="parrafo2">

  <div>
   <p>Somos un aplicativo web enfocado en solucionar los problemas que presenta las fincas ganaderas <br>
     respecto al manejo general de la información. Optamos por un ecxelente servicio de manera que <br>
     satisfaga las necesidades del usuario ofreciendo una herramienta de fácil uso.<br><br>
      Garantizamos seguridad y clasificación de los datos para una mejor experiencia y eficacia en la <br>
     utilizacion de nuestro servicio.
   </p>
  </div>
  </div>

<div class="separador">
    <div class="lineauno" id="equipo"></div>
</div>


<h1 style="text-align:center">Equipo</h1>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="imagenes/imagen12.png" alt="Mariana" style="width:80%">
      <div class="container2">
        <h2>Mariana Rios</h2>
        <!--<p class="title">CEO & Founder</p>-->
        <p>riosmariana877@gmail.com</p>
        <p><button class="button">Enviar mensaje</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="imagenes/imagen12.png" alt="Luis" style="width:80%">
      <div class="container2">
        <h2>Luis Arias</h2>
        <p>ariasluisandres18@gmail.com</p>
        <p><button class="button">Enviar mensaje</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="imagenes/imagen12.png" alt="Dahiana" style="width:80%">
      <div class="container2">
        <h2>Dahiana Davila</h2>
        <p>john@example.com</p>
        <p><a href="www.google.co"><button class="button">Enviar mensaje</button></p></a>
      </div>
    </div>
  </div>

<div class="column">
    <div class="card">
      <img src="imagenes/imagen12.png" alt="Samil" style="width:80%">
      <div class="container2">
        <h2>Samil Arias</h2>
        <p>samiluchox26@gmail.com</p>
        <p><button class="button">Enviar mensaje</button></p>
      </div>
    </div>
  </div>
</div>

<div class="separador">
    <div class="lineauno" id="servicios"></div>
</div>
<!--servicios-->
<center><h1>Servicios</h1></center>
<div class="servicios" >

      <div class="servicios1">
          <img src="imagenes/iconos/png2.png" alt="Bovinos">
          <h3>Comunidad</h3>
          <p>Contamos con tres roles: Propietario, Administrador y Usuario externo.</p>
      </div>
      <div class="servicios1">
          <img src="imagenes/iconos/png2.png" alt="Bovinos">
          <h3>Veterinaria</h3>
          <p>Brindamos información referente a la veterinaria en general. </p>
      </div>
      <div class="servicios1">
          <img src="imagenes/iconos/png2.png" alt="Bovinos">
          <h3>Notificaciones</h3>
          <p>Manteganse informado de los cambios positivos o negativos de su propiedad.</p>
      </div>
      <div class="servicios1">
          <img src="imagenes/iconos/png2.png" alt="Bovinos">
          <h3>Usuarios ilimitados</h3>
          <p>Registre todos los usuarios que requiera o necesite sin ningún tipo de restrincción.</p>
      </div>
      <div class="servicios1">
          <img src="imagenes/iconos/png2.png" alt="Bovinos">
          <h3>Administración de <br> propiedades</h3>
          <p>Gestión de manera informatica respecto a su propiedad.</p>
      </div>
      <div class="servicios1">
          <img src="imagenes/iconos/png2.png" alt="Bovinos">
          <h3>Ingreso desde cualquier <br> dispositivo</h3>
          <p>La pagina web ofrece la comodida de ingresar por medio de cualquier dispositivo a su alcance.</p>
      </div>
      
  </div>

  <!--end servicios-->

 
  <div class="separador">
    <div class="lineauno" id="contactos"></div>
</div>


<div class="container">
    <div class="row">
      <h2 style="text-align:center" >Contactos</h2>
      <div class="vl">
        <span class="vl-innertext">O</span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i>Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i>Twitter
        </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i>Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>O Iniciar Sesión:</p>
        </div>
        <form action="proceso/inisiosecion.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <input type="submit" value="Acceder">
       </form>
      </div>
      
    </div>
</div>



</body>
</html>