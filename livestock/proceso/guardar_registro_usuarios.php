<?php

include "../conexionbd/conexionlivestocksecundario.php";

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$rol_id=$_POST['rol_id'];
$finca_id=$_POST['finca_id'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];


$consulta= $pdo -> prepare("INSERT INTO usuarios(nombres,apellidos,correo,telefono,usuario,contrasena,direccion,rol_id_rol,finca_id_finca) values (?,?,?,?,?,?,?,?,?)");

$resultado = $consulta -> execute([$nombres,$apellidos,$correo,$telefono,$usuario,$contrasena,$direccion,$rol_id,$finca_id]);
 

if (($resultado == TRUE)) {
    echo "<script> alert('Datos Guardados.');
    </script>";
}else {
    echo "<script> alert('No se pudo guardar los datos.');
    </script>";}


?>

