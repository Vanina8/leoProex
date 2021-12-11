<?php   

include "../includes/header.php";
@session_start();
include "../includes/menucompleto2.php";
?>


<div class="container_fluid pt-5">
  <h2>Listado para hacer reservas</h2>
          
<!--   
                    <table class='table table-dark table-striped pt-5 col-12'>
                    <thead>
                        <tr>
                            <th>Id</th><th>{Código</th><th>Equipment</th><th>Pol</th><th>Pod</th><th>Carrier</th><th>Vessel</th><th>Closing</th><th>Etd</th><th>Eta</th><th>Cost</th><th>Div Cost</th><th>Precio</th><th>Div Precio</th><th>Estado</th><th>Observación</th>   
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="value in listaDestinos">
                         
                          <div class="card-body card-body-cascade text-center pb-0"  >
                                <td><h5>{{value.id}}</h5></td><td><h5>{{value.codigo}}</h5></td><td><h5>{{value.equipment}}</h5></td><td><h5>{{value.pol}}</h5></td><td><h5>{{value.pod}}</h5></td><td><h5>{{value.carrier}}</h5></td><td><h5>{{value.vessel}}</h5></td><td><h5>{{value.closing}}</h5></td><td><h5>{{value.etd}}</h5></td><td><h5>{{value.eta}}</h5></td><td><h5>{{value.cost}}</h5></td><td><h5>{{value.div_cost}}</h5></td><td><h5>{{value.precio}}</h5></td><td><h5>{{value.div_precio}}</h5></td><td><h5>{{value.estado}}</h5></td><td><h5>{{value.obs_cliente}}</h5></td>
                              <td>						
                                
                                    <select v-model="tipo" name="tipo" class='form-control'>
                                            <option value="D">Disponible</option>
                                            <option value="R">Reservado</option>
                                            <option value="C">Cancelado</option>
                                    </select>


                                </td> 
                            </div>
                        </tr>    
                        
                    </tbody>        
                    </table> -->

<table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
  <thead>
    <tr>
    <tr>
                            <th>Id</th><th>Código</th><th>Equipment</th><th>Pol</th><th>Pod</th><th>Carrier</th><th>Vessel</th><th>Closing</th><th>Etd</th><th>Eta</th><th>Cost</th><th>Div Cost</th><th>Precio</th><th>Div Precio</th><th>Estado</th><th>Observación</th>  
    </tr>
  </thead>
  <tbody>
  <tr v-for="value in listaDestinos">
                         
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
