<?php
    // @session_start();
    // if(isset($_SESSION['user'])){
    //     header("location:../principal");
    // }
    include "../includes/header.php";
    @session_start();
    include "../includes/menucompleto2.php";
?> 
<div class="container pt-5">
  <div class="row pt-5">
<!-- Pills navs -->


    <form id="formRegistroUsuario" class="col-7 mx-auto" @submit.prevent="registro">
      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerName" class="form-control" name='nombre' />
        <label class="form-label" for="registerName">Name</label>
      </div>

      <!-- Username input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerUsername" class="form-control" name='usuario' />
        <label class="form-label" for="registerUsername">Username</label>
      </div>

       <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="registerPassword" class="form-control" name='pass' v-model="pass" />
        <label class="form-label" for="registerPassword">Password</label>
      </div>

      <!-- Repeat Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="registerRepeatPassword" class="form-control" v-model="passC" />
        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
      </div>

      <!-- Combobox -->
      <div class="form-outline mb-4 ">
        <label class="visually-hidden" for="inlineFormSelectPref">Rol</label>
          <select class="select" v-model="selectedRol" name="rol" >
            <option value="1">CLiente</option>
            <option value="2">Agente</option>
            <option value="3">Administrador</option>
        </select> 
      </div>


      <!-- Material unchecked -->
  
      <div class="custom-control custom-checkbox pb-4">
        <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="estado">
        <label class="custom-control-label pl-5" for="defaultUnchecked">Alta</label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-3">Enviar</button>
    </form>
</div>
</div>

<?php 
       include "../includes/footer.php";
?>