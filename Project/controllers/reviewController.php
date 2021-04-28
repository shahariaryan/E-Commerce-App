<?php
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$address="";
	$err_address="";
	$rtype="";
	$err_rtype="";
	$rating="";
	$err_rating="";
	$comment="";
	$err_comment="";
	$hasError=false;
	
		if	($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if (empty($_POST["uname"]))
			{
				$err_uname="**Username Required.";
				$hasError=true;
			}
			else if(strlen($_POST["uname"])<6)
			{
				$err_uname="**Username must be greater than 7 charachters.";
				$hasError=true;
			}
			else
			{
				$uname=htmlspecialchars($_POST["uname"]);
			}
			if (empty($_POST["address"]))
			{
				$err_address="**Address Required.";
				$hasError=true;
			}
			else if(strlen($_POST["address"])<6)
			{
				$err_address="**Address should be least 12 character.";
				$hasError=true;
			}
			else
			{
				$address=htmlspecialchars($_POST["address"]);
			}
			
			function validateEmail($email)
			{
				$pos_at = strpos($email,"@");
				$pos_dot = strpos($email,".",$pos_at+1);
				if ($pos_at < $pos_dot)
				{return true;}
				else
				return false;
			}
			if (empty($_POST["email"]))
			{
				$err_email="**Email Required.";
				$hasError=true;
			}
			 elseif(!validateEmail($_POST["email"]))
			{
				$err_email="**Email should contain '@' and a '.' after '@'";
				$hasError=true;
			}
			else
			{
				$email=htmlspecialchars($_POST["email"]);
			}
			
			if (!isset($_POST["rtype"]))
			{
				$err_rtype="**Rating type must be selected";
				$hasError=true;
			}
			else
			{
				$rtype=$_POST["rtype"];
			}
			if(!isset($_POST["rating"]))
			{
				$err_rating="**Please select a rating";
				$hasError=true;
			}
			else
			{
				$rating=$_POST["rating"];
			}
			
			if (empty($_POST["comment"]))
			{
				$err_comment="**Comment can not be blank";
				$hasError=true;
			}
			else
			{
				$comment=htmlspecialchars($_POST["comment"]);
			}
			 if(!$hasError)
		{
			header("Location: home.php");
		}
		}
?>