<?php

include '../conexionbd/conexionlivestocksecundario.php';

$pendientes=$_POST['pendientes'];
$finca_id=$_POST['finca_id'];

$consulta= $pdo -> prepare("INSERT INTO notas(pendientes, finca_id_finca) values (?,?)");

$resultado = $consulta -> execute([$pendientes,$finca_id]);
 

if (($resultado == TRUE)) {
    echo "<script> alert('Datos Guardados.');
    window.location.href='../html/notas.php';
    </script>";
}else {
    echo "<script> alert('No se pudo guardar los datos.');
    window.location.href='../html/notas.php';
    </script>";}


?>