<?php 
include 'conexion_mysql.php';
include_once '../../../data/usuario.php';

$con= new Conexion_mysql("localhost", "root", "", "reservas");

$resultado= $con->getUsuarios();

echo json_encode($resultado);

$con->cerrar_conexion();

?>