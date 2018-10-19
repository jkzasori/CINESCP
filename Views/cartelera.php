<h3 class="text-primary font-weight-bold" style="border-bottom: 1px solid white; margin-bottom: 5px; padding-bottom: 5px;">Movies in Cartelera</h3>
	<div style="border-bottom: 1px solid white; margin-bottom: 5px; padding-bottom: 5px;">
		<h4 class="text-primary font-weight-bold" >Theater: </h4>
					<?php 
             			$theater = (new Theater) -> oneTheater();
             			echo "<span class='text-movie'>Name:</span> ".$theater["name"]."<br><span class='text-movie'>Full address:</span> ".$theater["full_address"];
             		?>
	</div>
	<?php 
             			$s = new Score();
             			$s-> addScore();
             		?>
 		<div class="table-responsive">          
		   <table  id="example" class="table table-striped table-bordered">
			    <thead>
			        <tr>
				        <th>Movies</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php 
             			$enc = new Cartelera();
             			$enc-> verCartelera();
             		?>
				</tbody>
			</table>
		</div>

	<!-- The Modal Puntuar-->
	  <div class="modal fade" id="ModalPuntuar">
	    <div class="modal-dialog modal-sm" style="align-content: center;">
	      <div class="modal-content">
	      
	        <!-- Modal Header -->
	        <div class="modal-header" >
	          <h5 class="modal-title" style="color: white;">Elija la puntuación a otorgar</h5>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        
	        <!-- Modal body -->
	        <div class="modal-body">
	        	<form method="post">
	        		<div class="form-group">
					    <label for="selectP">Quantity</label>
					    <select class="form-control" id="selectP" name="SelectionPuntuar">
					      <option value="1">1</option>
					      <option value="2">2</option>
					      <option value="3">3</option>
					      <option value="4">4</option>
					      <option value="5">5</option>
					      <option value="6">6</option>
					      <option value="7">7</option>
					      <option value="8">8</option>
					      <option value="9">9</option>
					      <option value="10">10</option>
					    </select>
					  </div>
	        		<input type="text" name="quantityP" id="quantityP" hidden="" value="">
	        		<?php 
	        			if(isset($_SESSION['usuario'])){
	        				echo '<input type="text" name="customerP" id="customerP" hidden="" value="'.$_SESSION['usuario']['idcustomer'].'">';
	        			}else{

	        			}
	        		 ?>
	        		<div class="" style="display: flex;flex-wrap: wrap; align-items: center;justify-content: center;">
	        			<div class="modal-footer">
	        				<div>
	        					<input type="submit"  class="btn btn-outline-light" style="margin-right: 20px;width: 100px;" name="" value="Puntuar">
	        				</div>
	        				<div>
	        					<button type="button" class="btn btn-outline-dark" style="margin-left: 20px;width: 100px;" data-dismiss="modal">Close</button>
	        				</div>
	        			</div>
	        		</div>
	        	</form>
	        </div>
	      </div>
	    </div>
	  </div>