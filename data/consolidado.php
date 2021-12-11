<?php
Class Item {

        private $id;
        private $codigo;
        private $equipment;
        private $pol;
        private $pod;
        private $carrier;
        private $vessel;
        private $closing;
        private $etd;
        private $eta;
        private $cost;
        private $div_cost;
        private $precio;
        private $div_precio;
        private $estado;
        private $obs_cliente;
        
        function __construct($idP, $codigoP, $equipmentP, $polP, $podP, $carrierP, $vesselP, $closingP, $etdP, $etaP, $costP, $div_costP, $precioP, $div_precioP, $estadoP, $obs_clienteP){
            $this->id = $idP;
            $this->codigo = $codigoP;
            $this->equipment = $equipmentP;
            $this->pol = $polP;
            $this->pod = $podP;
            $this->carrier = $carrierP;
            $this->vessel = $vesselP;
            $this->closing = $closingP;
            $this->etd = $etdP;
            $this->eta = $etaP;
            $this->cost = $costP;
            $this->div_cost = $div_costP;
            $this->precio = $precioP;
            $this->div_precio = $div_precioP;
            $this->estado = $estadoP;
            $this->obs_cliente = $obs_clienteP;
        }

        // function getPass(){
        //     return $this->clave;
        // }
        // function getEstado(){
        //     return $this->estado;
        // }
        // function getNombre(){
        //     return $this->nombre;
        // }
        // function getRol(){
        //     return $this->rol;
        // }


}

?>