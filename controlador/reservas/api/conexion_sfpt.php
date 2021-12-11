
<?php

include('lib/Net/SFTP.php');

Class Conexion_sfpt {

    private $servidor;
    private $usuario;
    private $clave;
    
    function __construct($servidorP, $usuarioP, $claveP){

        if(empty($servidorP)|| empty($usuarioP) || empty($claveP) ){
            return false;
        }else{
            $this->servidor= $servidorP;
            $this->usuario=$usuarioP;
            $this->clave=$claveP;
            return true;
        }
    }


    public function traer_archivo_csv($uri_remoto, $uri_local){

        echo 'entra a traer archivo';

        $sftp = new Net_SFTP($this->servidor);
        if (!$sftp->login($this->usuario, $this->clave)) {
            echo 'Login Failed';
        }else{
            $sftp->get($uri_remoto, $uri_local);   
        }      
    }

    public function lista_archivos_remotos(){
        $sftp = new Net_SFTP($this->servidor);
        if (!$sftp->login($this->usuario, $this->clave)) {
            exit('Login Failed');
        }else{
            return $sftp->nlist();           
        }
    }
}

//$sftp->put('DeptITProject/ListadoClientesCortaPRUEBAS.csv', 'archivo.csv', NET_SFTP_LOCAL_FILE);

//////////////////////////////////////////////////////
// TRAER ARCHIVO

//$sftp->get('DeptITProject/ListadoClientesCortaPRUEBAS.csv', 'archivo.csv');

//////////////////////////////////////////////////////
// lista

?>


