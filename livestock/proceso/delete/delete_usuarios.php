<?php
//print_r($_GET);

if (!isset($_GET['id_usuarios'])){
	exit();

}
$cod= $_GET['id_usuarios'];
include '../../conexionbd/conexionlivestocksecundario.php';
$consulta = $pdo -> prepare("DELETE FROM usuarios where usuario=?;");
$resultado=$consulta -> execute([$cod]);

if ($resultado === TRUE ){
    echo "<script> alert('Datos Eliminados.');
    window.location.href='../edit/edit_usuarios.php';
    </script>";
}else{
    echo "<script> alert('¡NO! Se pudo eliminar los datos.');
    window.location.href='../edit/edit_usuarios.php';
    </script>";     }
 ?>