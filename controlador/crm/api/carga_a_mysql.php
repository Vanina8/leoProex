<?php
// creamos la conexion a la base de
require_once("api/conexion_mysql.php");


// function carga_datos(){

    $con= new Conexion_mysql("localhost", "root", "fruT321_opq", "crm");

    $linea = 0;

    //Abrimos nuestro archivo
    $archivo = fopen("../data/pruebas.csv", "r");
    
    $contador=0;
    $registrados=0;
    while (($datos = fgetcsv($archivo, 288,";")) == true)
    {
      $num = count($datos);

      if($contador > 0) {
          
          if ( $con->inserta_en_basica($datos)) {
            $registrados++;
          } 
    }
    $contador++;

    }
    echo  "Registros ingresados: ".$registrados;

    //Cerramos el archivo
    fclose($archivo);
    $con->cerrar_conexion();
    
  // }


?>