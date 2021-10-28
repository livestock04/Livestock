<?php
//print_r($_GET);

include '../../conexionbd/conexionlivestocksecundario.php';

if (!isset($_GET['id_notas'])){
	exit();

}
$cod= $_GET['id_notas'];
include '../../conexionbd/conexionlivestocksecundario.php';
$consulta = $pdo -> prepare("DELETE FROM notas where pendientes=?;");

$resultado=$consulta -> execute([$cod]);

if ($resultado === TRUE ){
    echo "<script> alert('Datos Eliminados.');
    window.location.href='../../html/notas.php';
    </script>";
}else{
    echo "<script> alert('¡NO! Se pudo eliminar los datos.');
    window.location.href='../../html/notas.php';
    </script>";     

}
 ?>