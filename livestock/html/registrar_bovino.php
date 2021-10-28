<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/usuarios_style.css">
    <link rel="shortcut icon" href="../imagenes/iconos/icono.png" type="image/x-icon">
    <title>Registrar Bovinos</title>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="bovinos.php" class="active">Atras</a>
  <a href="registrar_bovinos.php">Inicio</a>
  
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
                <form action="../proceso/guardar_registrores.php"  method="post">
                    <tr>
                
                    <td><label>Nombre</label></td>
                    <td><input type="text" name="nombre" ></td>
                </tr>

                <tr> 
                <td><label>Edad</label></td>
                    <td><input type="number" name="edad"  ></td>

                    <td><label>peso</label></td>
                    <td><input type="number" name="peso"></td>

                    <td><label>Promedio Leche</label></td>
                    <td><input type="number" name="promedio_leche"></td>

                </tr>
                <td><label>Valor</label></td>
                    <td><input type="number" name="valor" ></td>

                    <td><label>Fecha nac</label></td>
                    <td><input type="date" name="fecha_nacimiento" ></td>
                    
                    <td><label>Cantidad de partos</label></td>
                    <td><input type="number" name="cantidad_partos"></td>
                </tr>
                <tr>
                    <td><label>Color</label></td>
                    <td><select name="color">
                        <option selected>Seleccione</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Cafe">Café</option>
                        <option value="Gris">Gris</option>
                        <option value="Negro">Negro</option>
                        <option value="Rojo">Rojo</option>

                    </select></td>
                    <td><label>Categoria</label></td>
                    <td><select name="categoria_id">
                        <option selected>Seleccione</option>
                            <option value="1" >Ternera</option>
                            <option value="2">Ternero</option>
                            <option value="3">Vaquilla</option>
                            <option value="4">Novillo</option>
                            <option value="5">Vaca</option>
                            <option value="6">Toro</option>
                    </select></td>

                    <td><label>Adquisición</label></td>
                    <td><input type="radio" name="adquision_id" value="1">Comprado
                    <input type="radio" name="adquision_id" value="2">Finca</td>

                </tr>
                 <tr>
                    <td><label>Raza</label></td>
                    <td><select name="raza_id">
                        <option selected value="0">Seleccione</option>
                        <option value="1">Ayrshire</option>
                        <option value="2">Brahman</option>
                        <option value="3">Girolando</option>    
                        <option value="4">Gyr</option>
                        <option value="5">Holstein</option>
                        <option value="6">Jersey</option> 
                        <option value="7">Simmental</option>
                    </select></td>

                    <td><label>Genero</label></td>
                    <td><input type="radio" name="genero_id" value="1">Macho
                    <input type="radio" name="genero_id" value="2">Hembra</td>

                   

                   <td><label>Fecha Adquisicion</label></td>
                    <td><input type="date" name="fecha_adquisicion"></td>

                    
                </tr>
                <tr>

                    <td><label>Madre</label></td>
                    <td><input type="text" name="nombre_madre" ></td>

                    <td><label>Estado </label></td>
                  <td> <select name="estado_id">
                        <option selected value="0">Seleccione</option>
                        <option value="1">vivo</option>
                        <option value="2">enfermo</option>
                        <option value="3">muerto</option>
                   </select></td>
                  
                    
                </tr>
                <tr>

                    
                  
                </tr>
                <tr>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   <td><input type="submit" value="Guardar"></td>
                </tr>
                
            </table>
        </div>