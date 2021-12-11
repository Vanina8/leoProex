<?php @session_start();
// $con = new mysqli('localhost','root','fruT321_opq','crm');


Class Conexion_mysql {

    private $servidor;
    private $usuario;
    private $password;
    private $basededatos;
    private $conx;

    function __construct($servidorP, $usuarioP, $passwordP, $basededatosP){
        $this->servidor=$servidorP;
        $this->usuario=$usuarioP;
        $this->password=$passwordP;
        $this->basededatos=$basededatosP;
        $this->conx= new mysqli($this->servidor, $this->usuario, $this->password, $this->basededatos) or die( " No se ha podido conectar al servidor");
        mysqli_query($this->conx, "SET SESSION collation_connection = 'utf8_spanish_ci'");
        $db = mysqli_select_db($this->conx, $this->basededatos)  or die ("Upss! Error al conectar a Base de datos");
                
    }

    function inserta_en_basica($datos){

              
        $codigo= $this->conx->real_escape_string(utf8_encode($datos[0]));
        $nombre= $this->conx->real_escape_string(utf8_encode($datos[1]));
        $tipo= $this->conx->real_escape_string(utf8_encode($datos[2]));
        $cliente= $this->conx->real_escape_string(utf8_encode($datos[3]));
        $proveedor= $this->conx->real_escape_string(utf8_encode($datos[4]));
        $cif= $this->conx->real_escape_string(utf8_encode($datos[5]));
        $direccion= $this->conx->real_escape_string(utf8_encode($datos[6]));
        $ampliacion= $this->conx->real_escape_string(utf8_encode($datos[7]));
        $poblacion= $this->conx->real_escape_string(utf8_encode($datos[8]));
        $cp= $this->conx->real_escape_string(utf8_encode($datos[9]));
        $pais_abr= $this->conx->real_escape_string(utf8_encode($datos[10]));
        $pais= $this->conx->real_escape_string(utf8_encode($datos[11]));
        $comercial= $this->conx->real_escape_string(utf8_encode($datos[12]));
        $fecha= strtotime($this->conx->real_escape_string(utf8_encode($datos[13])));
            
        $fecha_alta = date('Y-m-d',$fecha);
     
        return $this->conx -> query("INSERT INTO basica  ( codigo, nombre, tipo, cliente, proveedor, cif, direccion, ampliacion, poblacion, cp, pais_abr, pais, comercial, fecha_alta) values ('$codigo','$nombre', '$tipo', '$cliente', '$proveedor', '$cif', '$direccion', '$ampliacion', '$poblacion', '$cp', '$pais_abr', '$pais', '$comercial', '$fecha_alta')");
     
    }
    function inserta_en_consolidado($datos){

    
        $codigo= $this->conx->real_escape_string(utf8_encode($datos[0]));
        $equipment= $this->conx->real_escape_string(utf8_encode($datos[1]));
        $pol= $this->conx->real_escape_string(utf8_encode($datos[2]));
        $pod= $this->conx->real_escape_string(utf8_encode($datos[3]));
        $carrier= $this->conx->real_escape_string(utf8_encode($datos[4]));
        $vessel= $this->conx->real_escape_string(utf8_encode($datos[5]));

        $closing= strtotime($this->conx->real_escape_string(utf8_encode($datos[6])));
        $etd= strtotime($this->conx->real_escape_string(utf8_encode($datos[7])));
        $eta= strtotime($this->conx->real_escape_string(utf8_encode($datos[8])));

        $cost= $datos[9];
        $precio= $datos[11];
        $divcost= $this->conx->real_escape_string($datos[10]);
        $divprecio= $this->conx->real_escape_string($datos[12]);
        $estado= $this->conx->real_escape_string(utf8_encode($datos[13]));
        $observa= $this->conx->real_escape_string(utf8_encode($datos[14]));
            
        
        if(intval(date("Y", $closing))<2000){
            $fecha_closing=null;
        }else{
            $fecha_closing = date('Y-m-d', $closing);
        }
        if(intval(date("Y", $etd))<2000){
            $fecha_etd=null;
        }else{
            $fecha_etd = date('Y-m-d', $etd);
        }
        if(intval(date("Y", $eta))<2000){
            $fecha_eta=null;
        }else{
            $fecha_eta = date('Y-m-d', $eta);
        }

        $consulta= "INSERT INTO consolidado  ( codigo, equipment, pol, pod, carrier, vessel, closing, etd, eta, cost, div_cost, div_precio, estado, obs_cliente, precio) values ('$codigo','$equipment', '$pol', '$pod', '$carrier', '$vessel', '$fecha_closing', '$fecha_etd', '$fecha_eta', '$cost', '$divcost', '$divprecio', '$estado', '$observa', '$precio')";
        
        $this->conx -> query($consulta);
    }

    function usuario_logeado($usuario){ // aca devuelve los datos de una usuario ya logeado. El pass debe estar encriptado
        $consulta="SELECT u.id as id, u.nombre as nombre, u.usuario as usuario, u.clave as clave, u.estado as estado, r.nombre as rol  FROM usuarios u LEFT JOIN roles r on u.rol= r.id  WHERE u.usuario = '$usuario'" ;

        $sel = $this->conx->query($consulta);
        return $sel;
    }
  

    function registrar_usuario($id, $nombre, $usuario, $passEncriptada, $estado, $rol){

        $nombre= mysqli_real_escape_string($this->conx, $nombre);
        $usuario= mysqli_real_escape_string($this->conx, $usuario);

        $ins = $this->conx->prepare("INSERT INTO usuarios VALUES (?,?,?,?,?,?)");
        $ins->bind_param("isssii",$id,$nombre, $usuario, $passEncriptada, $rol, $estado);
        return $ins->execute();
    }

    function busca_usuario($usuario){
        $usuario2 = $this->conx ->real_escape_string(htmlentities($usuario));
        $resultado=$this->usuario_logeado($usuario2);
 
        return $resultado->fetch_assoc();
    }
    function getUsuarios(){

        $temporal = array();
        $resultado = array();

        $consulta="SELECT u.id as id, u.nombre as nombre, IF(u.estado=1, 'activo', 'inactivo') as estado, r.nombre as rol  FROM usuarios u LEFT JOIN roles r on u.rol= r.id " ;

        $sel = $this->conx->query($consulta);

        while ($f = $sel->fetch_assoc()) {
            $temporal = $f;
            array_push($resultado, $temporal);
        }
        return $resultado;
    }
    function eliminar_usuario($id_usu){

        $del = $con->prepare("DELETE FROM usuarios WHERE id = ? ");
        $del->bind_param("i", $id_usu);

        if ($del->execute()) {
            return true;
        } else {
            return false;
        }

    }

    function getConsolidado(){

        $temporal = array();
        $resultado = array();

        $consulta="SELECT id, codigo, equipment, pol, pod, carrier, vessel, SUBSTRING(closing, 1, 10)  as closing, SUBSTRING(etd, 1, 10) as etd, SUBSTRING(eta, 1, 10) as eta,cost,precio, div_precio, estado, obs_cliente  FROM consolidado" ;

        $sel = $this->conx->query($consulta);
      
        while ($f = $sel->fetch_assoc()) {
            $temporal = $f;
            array_push($resultado, $temporal);
        }
        return $resultado;
    }


    // function escape_string($variable_string){    
    //     return $this->conx ->real_escape_string(htmlentities($variable_string));
    // }
    function cerrar_conexion(){
        $this->conx->close();
    }
}

?>