<?php   

include "../includes/header.php";
@session_start();
include "../includes/menucompleto2.php";
?>


<!--Navbar-->
    <!-- <nav class="navbar navbar-light">
    <form class="form-inline active-cyan-3 active-cyan-4 px-2 pt-4" @submit.prevent="getAsignaturas()">                              
        <label for="" class="pr-2">Buscando Asignaturas</label>
        <input class="form-control" type="text" placeholder="Search" aria-label="Search" v-model="buscarAsig">
        <button class="btn  blue-gradient btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
    </form>
    </nav> -->
<!--/.Navbar-->

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-11">
         
                <div class="col-12 pt-5">

                    <table class='table pt-5 col-12'>
                        <tr>
                            <th>Id</th><th>Nombre</th><th>Rol</th><th>Estado</th><th><i class="fas fa-wrench"></i></th>
                        </tr>                        
                        
                        <tr v-for="value in listarUsu">
                          <!-- Card content -->
                          <div class="card-body card-body-cascade text-center pb-0"  >
                                <td><h5>{{value.id}}</h5></td><td><h5>{{value.nombre}}</h5></td><td><h5>{{value.rol}}</h5></td>
                                <td class="centra_item">
                                    <h5 class="blue-text pb-2 text-center" ><strong>{{value.estado}}</strong></h5>
                                    <!-- <h5 class="blue-text pb-2 text-center" v-if="item.estado==0"><strong>{{etiquetaEstadoB}}</strong></h5> -->
                                </td>
                                <td>						
                                    <!-- <a class='btn btn-danger btn-sm' href="#" @click="eliminarUsuario(value.id)"><i class="fas fa-trash"></i></a> -->
                                    <button type="button" class="btn btn-danger"  @click="eliminarUsuario(value.id)">
                                            <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                                <td>						
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" @click="modificarUsuario(value.id)">
                                    <i class="far fa-edit"></i>
                                </button>
                                </td>
                            </div>
                        </tr>            
                    </table>
                </div>
            </div>
        </div>  
   
    </div>
</div>
<!-- Modal -->

<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  
   

  
  
  
  <!--Content-->


    <div class="modal-content">
         <!--Header-->
    <div class="modal-header">
        <p class="heading">Modifica Usuario</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
   
            <!--Body-->
            <div class="modal-body">

            <table>
             <tr>
                <div class="md-form form-sm mb-5">
                <!-- <div class="custom-control custom-checkbox pb-4"> -->
                    <th>

                        <label data-error="wrong" data-success="right"class="active pt-5 ">Estado</label>
                        
                    </th> 
                     <th class='pl-3'> 
       
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="estado" v-model="checked" >
                        <label class="custom-control-label pl-5" for="defaultUnchecked" style="font-size: 16px;" v-if="checked == false"> {{etiquetaEstadoB}}</label>
                        
                        <label class="custom-control-label pl-5" for="defaultUnchecked"  style="font-size: 16px;" v-if="checked == true"> {{etiquetaEstadoA}}</label>
      
                    </th>
                    </div>
                </div>
             </tr>

                <tr>
                    <div class="md-form form-sm mb-5">
                    <th>
                        <label data-error="wrong" data-success="right"class="active pt-5 ">Rol</label>
                    </th>
                    <th>
                        <input type="text" class="form-control form-control-sm validate" v-bind:value="rolModifi" >                
                    </th>
                    </div>
                </tr>
           

                <tr>
                    <div class="md-form form-sm mb-4">
                    <th>
                        <label data-error="wrong" data-success="right" for="modalLRInput14">Nombre</label>
                    </th>
                    <th>
                        <input type="text" id="modalLRInput14" class="form-control form-control-sm validate" v-model="nombreModifi" name="nombre">
                    </th>
                    </div>
                </tr>
      
               </table>
             


              <div class="text-center form-sm mt-2">
                <button type="button" class="btn btn-info" data-dismiss="modal">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
    


    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->




<?php
    include "../includes/footer.php";
?>
