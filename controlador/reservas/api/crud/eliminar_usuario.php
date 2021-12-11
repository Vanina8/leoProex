
<?php 
require_once("../conexion_mysql.php");

$id = htmlentities($_GET['id']);

$res1=false;

$res1=eliminar_usuario($con, $id);

if($res1){
    echo "success";
}else{
    echo "fail";
}
$con->cerrar_conexion() ;


?>