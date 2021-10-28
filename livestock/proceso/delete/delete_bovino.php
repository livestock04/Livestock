<?php
//print_r($_GET);

if (!isset($_GET['id_bovino'])){
	exit();

}
$cod= $_GET['id_bovino'];
include '../../conexionbd/conexionlivestocksecundario.php';
$consulta = $pdo -> prepare("DELETE FROM bovino where nombre=?;");
$resultado=$consulta -> execute([$cod]);

if ($resultado === TRUE ){
    echo "<script> alert('Datos Eliminados.');
    window.location.href='../../html/bovinos.php';
    </script>";
}else{
    echo "<script> alert('¡NO! Se pudo eliminar los datos.');
    window.location.href='../../html/bovinos.php';
    </script>";     }
 ?>