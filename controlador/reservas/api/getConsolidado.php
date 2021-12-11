<?php 
include 'conexion_mysql.php';
include_once '../../../data/consolidado.php';

$con= new Conexion_mysql("localhost", "root", "", "reservas");

$resultado= $con->getConsolidado();

echo json_encode($resultado);

$con->cerrar_conexion();

?>