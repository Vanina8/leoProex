<?php 

include '../conexion_mysql.php';
include_once '../../../../data/usuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

        $con= new Conexion_mysql("localhost", "root", "", "reservas");
        $usuario_ingresado = $_POST['username'];
        $pass_ingresado= $_POST['pass'];

        $sel = $con->busca_usuario($usuario_ingresado );
  
        if ($sel===NULL) {

            echo 'fallo usuario';        
        }else{

            $usuario= new Usuario( $sel['id'], $sel['nombre'], $sel['usuario'], $sel['clave'], $sel['rol'], $sel['estado']);

            if( !verifica_pass($pass_ingresado, $usuario->getPass())){
                    echo 'fallo pass';
            }else{
                if(!verifica_estado($usuario->getEstado())){
                        echo 'fallo estado';
                }else{
                    echo 'success';
                    carga_sesion_usuario($usuario->getNombre(), $usuario->getRol());
                };
            }
        }
        $con->cerrar_conexion();
}
else{
    header("location:../../../../index.php");
}

function verifica_pass($pass_web_p, $pass_data_p ){
    return password_verify($pass_web_p, $pass_data_p);
}
function verifica_estado($estadoP){
    return $estadoP==1 ? true : false;
}
function carga_sesion_usuario($nombre, $rol){
    $_SESSION['user'] = $nombre;
    $_SESSION['rol'] = $rol;
}
?>