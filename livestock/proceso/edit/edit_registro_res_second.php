<?php

include "../../conexionbd/conexionlivestocksecundario.php";

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

$consulta= $pdo->prepare("UPDATE bovino SET fecha_nacimiento=?, peso=?, edad=?,valor=?,color=?,promedio_leche=?,cantidad_partos=?,nombre_madre=?,fecha_adquisicion=?,adquisicion_id_adquisicion=?,categoria_id_categoria=?,genero_id_genero=?,estado_id_estado=?,raza_id_raza=? WHERE nombre = ?;"); 
$resultado = $consulta->execute([$fecha_nacimiento, $peso, $edad, $valor, $color, $promedio_leche, $cantidad_partos, $nombre_madre, $fecha_adquisicion, $adquisicion_id, $categoria_id, $genero_id, $estado_id, $raza_id, $nombre]);
    if ($resultado === TRUE){
        echo "<script> alert('Datos Guardados.');
    window.location.href='../../html/bovinos.php';
    </script>";
    }else{
        echo "<script> alert('No se pudo guardar los datos: Error.');
    window.location.href='edit_registro_res.php';
    </script>";
    }


 ?> 