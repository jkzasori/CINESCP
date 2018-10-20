<?php 
if (!(isset($_SESSION['usuario']))) {
	header('Location: ?');
}else{
?>
<h3 class="text-primary font-weight-bold" style="border-bottom: 1px solid white; margin-bottom: 5px; padding-bottom: 5px;">My Profile</h3>
	<div style="border-bottom: 1px solid white; margin-bottom: 5px; padding-bottom: 5px;">
		<h4 class="text-primary font-weight-bold" >Basic Data: </h4>
		<?php 
             $customer = (new Customer) -> oneCustomer();
             	echo "<span class='text-movie'>First Name:</span> ".$customer["first_name"]."<br><span class='text-movie'>Last Name:</span> ".$customer["last_name"]."<br><span class='text-movie'>Email:</span> ".$customer["email"]."<br><span class='text-movie'>Age:</span> ".$customer["age"];
        ?>
	</div>

 		<div class="table-responsive">          
		   <table  id="example" class="table table-striped table-bordered">
			    <thead>
			        <tr>
				        <th>Movies and its score</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php 
             			$enc = new Score();
             			$enc-> oneScore();
             		?>
				</tbody>
			</table>
		</div>
<?php
}
 ?>
}
