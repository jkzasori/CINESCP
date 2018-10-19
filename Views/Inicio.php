<div class="row header bg-primary text-center">
	<div class="line col-12">
		<div class="title ">
			<span class="SCP"> CINE SCP </span>
			<span>Sistema de calificación para películas que ayude a los teatros a calcular el nivel de aceptación de estas.</span>
		</div>
		<div class="sub-title text-right">
			TEST - Elemento 43
		</div>
	</div>
</div>
<div class="container content-box">
	<div class="row text-center">
		<div class="col-12 col-md-6 SignUp ">
			<h2>Don't have an account?</h2>
			  <!-- Trigger the modal with a button -->
		  <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#modalSignUp">Sign Up</button>
		   <?php
	            $enc = new Custumer();
	            $enc -> nuevoCustumer();
	      ?>
		</div>
		<div class="col-12 LogIn col-md-6 ">
			<h2>Have an account?</h2>
		  <!-- Trigger the modal with a button -->
		  <?php
		       if(isset($_SESSION['usuario'])) 
		        { 
		          echo '<a class="btn btn-outline-light btn-lg" href="?action=salir" >Salir</a>'; 
		        }else {
		          echo '<button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#modalLogIn">Log In</button>';
		        }
		    ?>
		  
		  <?php
                $enc -> ingresoController();
            ?>
		</div>	
	</div>
 </div>
 <div class="container content-box text-center" style="background-color: #e5dfff; padding: 20px;"> 
 	<!--  -->
 	<h3 class="text-primary font-weight-bold" style="border-bottom: 1px solid white; margin-bottom: 5px; padding-bottom: 5px;">THEATER</h3>
 		<div class="table-responsive">          
		   <table  id="example" class="table table-striped table-bordered">
			    <thead>
			        <tr>
				        <th>Theater Name</th>
				        <th>Full address</th>
				        
			        </tr>
			    </thead>
			    <tbody>
				    <?php 
             			$enc = new Theater();
             			$enc-> verTheater();
             		?>
				</tbody>
			</table>
		</div>
 	<!--  -->
 	<table>
 		
 	</table>
 </div>



	  <!-- Modal Sign Up -->
	  <div class="modal fade" id="modalSignUp" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Sign Up</h4>
	        </div>
	        <div class="modal-body">
	          <form method="post">
                  <div class="form-group">
                    <label for="firtsname" class="font-weight-bold">First Name</label>
                    <input type="text" class="form-control" id="firtsname" name="firtsname" required=""/>
                  </div>
                  <div class="form-group">
                    <label for="lastname" class="font-weight-bold">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required=""/>
                  </div>
                  <div class="form-group">
                    <label for="age" class="font-weight-bold">Age</label>
                    <input type="number" class="form-control" id="age" name="age" required=""/>
                  </div>
                  <div class="form-group">
                    <label for="emailC" class="font-weight-bold">Email</label>
                    <input type="email" class="form-control" id="emailC" name="emailC" pattern="[A-Za-z0-9._%+-]{3,}@[a-zA-Z]{3,}([.]{1}[a-zA-Z]{2,}|[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,})" required=""/>
                  </div>
                  <div class="form-group">
                    <label for="passwordS" class="font-weight-bold">Clave</label>
                    <input class="form-control" id="passwordS"  type="password" pattern="[A-Za-z0-9_-]{1,15}" name="passwordS" required=""/>
                  </div>
                  <div>
                    <input type="submit" class="btn btn-outline-primary black font-weight-bold" name="" value="REGISTRARSE">
                  </div>
                  
                </form>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	      
	    </div>
	  </div><!-- /Modal Sign Up -->

 <!-- Modal Log In-->
	  <div class="modal fade" id="modalLogIn" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Log In</h4>
	        </div>
	        <div class="modal-body">
	          	<form method="post">
                  
                  <div class="form-group">
                    <label for="username" class="font-weight-bold">Email</label>
                    <input type="email" class="form-control" id="username" name="usuariolg" pattern="[A-Za-z0-9._%+-]{3,}@[a-zA-Z]{3,}([.]{1}[a-zA-Z]{2,}|[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,})" required=""/>
                  </div>
                  <div class="form-group">
                    <label for="password" class="font-weight-bold">Password</label>
                    <input class="form-control" id="password"  type="password" pattern="[A-Za-z0-9_-]{1,15}" name="passlg" required=""/>
                  </div>
                  <div>
                    <input type="submit" class="btn btn-outline-primary black font-weight-bold" name="" value="INICIAR SESIÓN">
                  </div>
                  
                </form>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	      
	    </div>
	  </div><!-- /Modal -->
<!-- <div class="container">
	<div class="bg-primary body">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
</div> -->

