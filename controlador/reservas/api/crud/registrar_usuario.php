<?php
 
require_once("../conexion_mysql.php");


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $con= new Conexion_mysql("localhost", "root", "", "reservas");

    $nombre= $_POST["nombre"];
    $usuario=$_POST["usuario"];
    $pass=$_POST["pass"];
    $rol= $_POST["rol"];
    $estado= array_key_exists('estado', $_POST) ? 1 : 0 ;

    $passEncriptada= password_hash($pass, PASSWORD_BCRYPT);
    $resultado=$con->busca_usuario($usuario);

  

    if($resultado<>NULL){
        echo "success";
    }else{

        $id='';
        $ins= $con->registrar_usuario($id, $nombre, $usuario, $passEncriptada, $estado, $rol);
    
        if ($ins) {
            echo "success";
        } else {
            echo "fail";
        }        
    }

    $con->cerrar_conexion();
    
}else{
    header("location:../../../../index.php");
}


?>