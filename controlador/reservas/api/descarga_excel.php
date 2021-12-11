<?php

require  "../../vendor/autoload.php";
require_once("conexion_mysql.php");
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
//////////////////////////////////////////////////////////

$cantidad_agentes=5;
$archivos=array();

// Los archivos deben tener la extencion xls, tener el siguiente formato: HOJA AGENTE <numero correlativo sin ceros delante>
// debe estar ubicado en la carpeta "data"

for ($i=0; $i < $cantidad_agentes; $i++) { 

    $archivos[$i]="../../data/HOJA AGENTE ".($i+1).".xls";
    descarga_hoja_agente($archivos[$i], $i);
}

echo " Se descargaron los archivos:<br>";
foreach ($archivos as $key => $value) {
    echo $value.'<br>';
}


// Parametros obligatorios: $archivo_excel (URI del archivo excel a leer), $n ( numero del 0-9 que identifique al archivo excel)
function descarga_hoja_agente($archivo_excel, $n){

//    $con= new Conexion_mysql("localhost", "root", "fruT321_opq", "reservas");
    $con= new Conexion_mysql("localhost", "root", "", "reservas");

    $documento = IOFactory::load($archivo_excel);
    $hoja= $documento->getActiveSheet()->toArray(null, true, true, false); 

    $contador=0;

    foreach ($hoja as $key => $linea) {
    
        if($contador>0 ){
        
            if(empty($linea[0])){
                return;
            }
                $datos[0]= $linea[0]."00".$n;  //codigo  (numero de linea y 00+ numero de archivo)
                $datos[1]= $linea[1];     // Equipment
                $datos[2]= $linea[2];      //Pol
                $datos[3]= $linea[3];   // POD
                $datos[4]= $linea[4];   //Carrier
                $datos[5]= $linea[5];   //Vessel

                $datos[6]= $linea[7];   //Closing
                $datos[7]= $linea[8];   //ETD
                $datos[8]= $linea[9];   //ETA


                $datos[9]= convierte_str_dec($linea[10]);  //Cost
                
                $datos[10]= $linea[11];    // Div Cost
                $datos[11]= convierte_str_dec($linea[10])+700;  // Precio
                $datos[12]= $linea[13];     // Div Precio

                $datos[13]= $linea[15];     // estado
                $datos[14]= $linea[16];     // obsv. cliente

                $con->inserta_en_consolidado($datos);

        }
        $contador++;
    }    
    $con->cerrar_conexion();
}

function convierte_str_dec($cadena){
    $pos_decimal= strpos($cadena, ".");
    $cantidad_comas= substr_count($cadena, ',');
    $decimales= substr($cadena, ($pos_decimal+1), strlen($cadena)-($pos_decimal+1) );
    $decimales2=intval($decimales);  /////////  decimales
    $enteros=substr($cadena, 0, $pos_decimal);
    $enteros2=intval($enteros);
    $separado= explode( "," , $enteros);
    $unido_entero=implode("", $separado);
    $unido_entero2=intval($unido_entero); /////// parte entera
    $ceros= (strlen($cadena)-($pos_decimal+1)) < 1  ? 2 : (strlen($cadena)-($pos_decimal+1));
    $numero_divisor="1".str_repeat('0', $ceros);
    $parte_decimal= $decimales2/intval($numero_divisor);
    $numero_float= $unido_entero2+$parte_decimal;
   return $numero_float;
}




?>