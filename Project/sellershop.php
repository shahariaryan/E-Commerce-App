<?php

       include 'seller.php';
      require_once 'controllers/shopController.php';
	  $shops=getAllShops();

?>
<html>
    <head> 
	     <title>All Deliveryman</title></head>
	 <br></br>  
	<div class="center">			
		<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th>Shop Name</th>
				<th>Street Address</th>
				<th>City</th>
				<th>Email</th>
				<th>Contact Info </th>
				<th></th>
				
			
			<thead>
			<tbody>
			<?php 
			     foreach($shops as $shop)
				 {
					 echo "<tr><td>".$shop["id"]."</td>";
					 echo "<td>".$shop["sname"]."</td>";
					 echo "<td>".$shop["stad"]."</td>";
					 echo "<td>".$shop["city"]."</td>";
					 echo "<td>".$shop["email"]."</td>";
					 echo "<td>".$shop["num"]."</td>"; 
					 echo '<td><a style="text-decoration:none" href="editshop.php?id='.$shop["id"].'" class="btn btn-success" target="_ self">Edit Shops</a></td>';
					 
				 }
				 ?>
		</tbody>
	</table>
	</div>
        </body>
		<?php include 'admin_footer.php';?>
</html>