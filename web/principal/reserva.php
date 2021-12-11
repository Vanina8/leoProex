<?php   

include "../includes/header.php";
@session_start();
include "../includes/menucompleto2.php";
?>

<div class="pl-5">
    <h1 class="animate__animated animate__backInDown ml-2" > LeoProex</h1>
</div>
<div class="container_fluid pt-5">
    
    <table class="table table-hover ">
        <thead>
          <tr>
          


            <th scope="col">Id</th><th scope="col">Código</th><th scope="col">Equipment</th><th scope="col">Pol</th><th scope="col">Pod</th><th scope="col">Carrier</th><th scope="col">Vessel</th><th scope="col">Closing</th><th scope="col">Etd</th><th scope="col">Eta</th><th scope="col">Cost</th><th scope="col">Div Cost</th><th scope="col">Precio</th><th scope="col">Div Precio</th><th scope="col">Estado</th><th scope="col">Observación</th>  


          </tr>
        </thead>
        <tbody>
          <!-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>    <button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark">
                Reserva
            </button>
               
          </td> -->
          <tr   scope="row" v-for="value in listaDestinos">
                         
                         <div class="card-body card-body-cascade text-center pb-0"  >
                               <td><h5>{{value.id}}</h5></td><td><h5>{{value.codigo}}</h5></td><td><h5>{{value.equipment}}</h5></td><td><h5>{{value.pol}}</h5></td><td><h5>{{value.pod}}</h5></td><td><h5>{{value.carrier}}</h5></td><td><h5>{{value.vessel}}</h5></td><td><h5>{{value.closing}}</h5></td><td><h5>{{value.etd}}</h5></td><td><h5>{{value.eta}}</h5></td><td><h5>{{value.cost}}</h5></td><td><h5>{{value.div_cost}}</h5></td><td><h5>{{value.precio}}</h5></td><td><h5>{{value.div_precio}}</h5></td><td><h5>{{value.estado}}</h5></td><td><h5>{{value.obs_cliente}}</h5></td>
                              
                           </div>
                       </tr>    
 

        </tbody>
    </table>
</div>

<?php
    include "../includes/footer.php";
?>

