<?php
Class Usuario {

        private $id;
        private $nombre;
        private $usuario;
        private $clave;
        private $rol;
        private $estado;

        function __construct($idP, $nombreP, $usuarioP, $claveP, $rolP, $estadoP){
            $this->id = $idP;
            $this->nombre = $nombreP;
            $this->usuario = $usuarioP;
            $this->clave = $claveP;
            $this->rol = $rolP;
            $this->estado = $estadoP;
        }

        function getPass(){
            return $this->clave;
        }
        function getEstado(){
            return $this->estado;
        }
        function getNombre(){
            return $this->nombre;
        }
        function getRol(){
            return $this->rol;
        }


}

?>