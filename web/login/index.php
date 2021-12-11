<?php
    // @session_start();
    // if(isset($_SESSION['user'])){
    //     header("location:../principal");
    // }
	include "../includes/headerLogin.php";
    @session_start();
?> 

<div class="limiter">
		<div class="container-login100">
			<div class="login100-more " style="background-image: url('images/edificios.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

				<form class="login100-form validate-form" id="inicioSesion" @submit.prevent="login" >
				
					<span class="login100-form-title p-b-59 animate__animated animate__backInDown">
						Iniciar sesión
					</span>

	    			<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username..." value="fanychv">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="*************" value="prueba123">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn animate__animated animate__bounceInRight">
							<div class="login100-form-bgbtn "></div>
							<button class="login100-form-btn btn btn-success btn-rounded" type="submit">
								Sign Up
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<?php 
       include "../includes/footerLogin.php";
?>