<h3 class="text-primary font-weight-bold" style="border-bottom: 1px solid white; margin-bottom: 5px; padding-bottom: 5px;">THEATERS</h3>
 		<div class="table-responsive">          
		   <table  id="example" class="table table-striped table-bordered">
			    <thead>
			        <tr>
				        <th>Theater Name</th>
				        <th>Full address</th>
				        <th>To go</th>
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