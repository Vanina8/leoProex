<?php

include("api/conexion_sfpt.php");
include("carga_a_mysql.php");

$conexion= new Conexion_sfpt("212.36.65.85", "taric", "L30pr03x" );

$conexion->traer_archivo_csv("DeptITProject/ListadoClientesCortaPRUEBAS.csv" , "../data/pruebas.csv");

//var_dump($conexion->lista_archivos_remotos());

carga_datos();


?>