<?php

include "../conexionbd/conexionlivestocksecundario.php";

$nombre=$_POST['nombre'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$peso=$_POST['peso'];
$edad=$_POST['edad'];
$valor=$_POST['valor'];
$color=$_POST['color'];
$promedio_leche=$_POST['promedio_leche'];
$cantidad_partos=$_POST['cantidad_partos'];
$nombre_madre=$_POST['nombre_madre'];
$fecha_adquisicion=$_POST['fecha_adquisicion'];
$adquisicion_id=$_POST['adquision_id'];
$categoria_id=$_POST['categoria_id'];
$genero_id=$_POST['genero_id'];
$estado_id=$_POST['estado_id'];
$raza_id=$_POST['raza_id'];



$consulta= $pdo->prepare("INSERT INTO bovino(nombre,fecha_nacimiento,peso,edad,valor,color,promedio_leche,cantidad_partos,nombre_madre,fecha_adquisicion,adquisicion_id_adquisicion,categoria_id_categoria,genero_id_genero,estado_id_estado,raza_id_raza) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");




$consulta-> bindParam(1,$nombre);
$consulta-> bindParam(2,$fecha_nacimiento);
$consulta-> bindParam(3,$peso);
$consulta-> bindParam(4,$edad);
$consulta-> bindParam(5,$valor);
$consulta-> bindParam(6,$color);
$consulta-> bindParam(7,$promedio_leche);
$consulta-> bindParam(8,$cantidad_partos);
$consulta-> bindParam(9,$nombre_madre);
$consulta-> bindParam(10,$fecha_adquisicion);
$consulta-> bindParam(11,$adquisicion_id);
$consulta-> bindParam(12,$categoria_id);
$consulta-> bindParam(13,$genero_id);
$consulta-> bindParam(14,$estado_id);
$consulta-> bindParam(15,$raza_id);



if ($consulta->execute()) {
    echo "<script> alert('Datos Guardados.');
    window.location.href='../html/bovinos.php';
    </script>";
}else {
    echo "<script> alert('No se pudo guardar los datos.');
    </script>";}

?>