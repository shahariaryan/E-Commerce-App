<?php     
          include 'admin.php';
          require_once 'controllers/deliverymanController.php';
		 $id=$_GET["id"];
		 $deliveryman=getDeliveryman($id);
    ?>


<html>
<head>
        <title>Edit Shop</title>
      <style>
	 
	            .add-div
				{
					
				border:1px solid black;
				margin:auto;
				width:25%;
				margin-top:4%;
				
				}
 		
	  
	  
	  </style>

</head>
<body>

  <body>
        <div class="add-div">
    <fieldset>
        <legend align="center"><h1>Edit Deliveryman</h1></legend>
        <form action="" onsubmit="return validateDelivery()" method="post" >
            <div class="center"><table>
                 <tr>
					<td><span><b>First Name:<b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $deliveryman["id"];?>">  
					<input type="text" id="fname" name="fname"value="<?php echo $deliveryman["fname"];?>" placeholder="First Name">
						<span id="err_fname"><?php echo $err_fname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Last Name:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $deliveryman["id"];?>">  
					<input type="text" id="lname" name="lname"value="<?php echo $deliveryman["lname"];?>" placeholder="Last Name">
						<span id="err_lname"><?php echo $err_lname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Username:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $deliveryman["id"];?>">  
					<input type="text" id="uname" name="uname" value="<?php echo $deliveryman["uname"];?>" placeholder="Username">
						<span id="err_uname"><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Address:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $deliveryman["id"];?>">  
					<input type="text" id="ad" name="ad"value="<?php echo $deliveryman["ad"];?>"placeholder="Address">
					<span id="err_ad"><?php echo $err_ad;?></span></td>
				</tr>	
				
				<tr>
					<td><span><b>Gender:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $deliveryman["id"];?>">  
					<input type="radio" id="male" name="gender" value="Male"><?php if($deliveryman["gender"]=="Male");?><span>Male</span>
					    <input type="radio" id="female" name="gender" value="Female"><?php if($deliveryman["gender"]=="Female");?><span>Female</span>
						<span id="err_gender"><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Email:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $deliveryman["id"];?>">  
					<input type="text" id="email" value="<?php echo $deliveryman["email"];?>" name="email" placeholder="Mail Address">
						<span id="err_email"><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $deliveryman["id"];?>">  
					<input type="password" id="pass" name="pass" value="<?php echo $deliveryman["pass"];?>" placeholder="Password"><br>
						<span id="err_pass"><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $deliveryman["id"];?>">  
					<input type="text" id="number" name="number"value="<?php echo $deliveryman["number"];?>"placeholder="Number">
					<span id="err_number"><?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="edit_man" value="Edit Deliveryman" class="btn btn-success"></td>
				</tr>

       </table></div>
        </form>
        
    </fieldset>
	</div>
   

</body>
<?php include 'admin_footer.php';?>
<script src= "JS/deliverymanValidation.js"></script>
</html>