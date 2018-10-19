<h3 class="text-primary font-weight-bold" style="border-bottom: 1px solid white; margin-bottom: 5px; padding-bottom: 5px;">Movies in Cartelera</h3>
	<div style="border-bottom: 1px solid white; margin-bottom: 5px; padding-bottom: 5px;">
		<h4 class="text-primary font-weight-bold" >Theater: </h4>
					<?php 
             			$theater = (new Theater) -> oneTheater();
             			echo "<span class='text-movie'>Name:</span> ".$theater["name"]."<br><span class='text-movie'>Full address:</span> ".$theater["full_address"];
             		?>
	</div>
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