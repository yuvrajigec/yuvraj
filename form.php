
<?php
	include("love.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
		<div class="container">
			<form action="" method="POST"> 
			<div class="title">
				REGISTRATION FORM
			</div>
			
			<div class="form">
				<div class="input_field">
					<label>First Name</label>
					<input type="text" class="input" name="fname" required>
				</div> 
				<div class="input_field">
					<label>Last Name</label>
					<input type="text"  class="input" name="lname" required>
				</div>
				<div class="input_field">
					<label>E-mail</label>
					<input type="E-mail"  class="input" name="gmail">
				</div>
				<div class="input_field">
					<label>Date of Birth</label>
					<input type="date"  class="input" name="dob" required>
				</div>
				<div class="input_field">
					<label>Password</label>
					<input type="password" class="input" name="pass" required>
				</div>
				<div class="input_field">
					<label>Conform Password</label>
					<input type="password" class="input" name="cnfpass" required>
				</div>
				<div class="input_field">
					<label>Gender</label>
					<select class="selectbox" name="gender" required>
						<option value="not select">Select</option>
						<option value="male">Male</option>
						<option value="Female">Female</option>
						<option value="666">Not Define</option>
					</select>
				</div>
				<div class="input_field">
					<label>Mobile Number</label>
					<input type="text"  class="input" name="mobile" required>
				</div>
				<div class="input_field">
					<label>Address</label>
					<textarea class="aditi" name="address" required></textarea>
				</div>
				
				<div class="input_field_term">
										
						
						<p><label class="check">
							<input type="checkbox" required>
						<span class="checkmark">  </span>I carefully read T&C and I accept Terms and Condition.</label></p>
					
				
				
				</div>
				<div class="input_field">
					<input type="submit" value="Register" class="btn" name="register">
				</div>

			</div>
		</form>

	</div>

</body>
</html>


<?php if($_POST['register'])
 	{
 		$a     = $_POST['fname'];
 		$b    = $_POST['lname'];
 		$c       = $_POST['gmail'];
 		$d        = $_POST['dob'];
 		$e       = $_POST['pass'];
 		$f     = $_POST['cnfpass'];
 		$g		 = $_POST['gender'];
 		$h     =     $_POST['mobile'];
 		$i        = $_POST['address'];

 		if ($a!="" && $b !="" && $c !="" && $d !="" && $e !="" && $f !="" && $g != "" && $h !="" && $i !="") {

 			// code...
 			echo "Successful! Registration is successfully";
 		
 		
				$query = "INSERT INTO form (fname,lastname,email,dob,password,cnfpassword,gender,mobileno,address)   VALUES('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i')";
 		
 				$data = mysqli_query($con, $query);

 				if ($e != $f) {
 					// code...
 					echo "<script>alert('This Password is not match');</script>";
 				}

 				if ($data) {
 			
 					//echo "Successful! your registratin is completed.";
 				}
 				else{
 				echo "fail";
 			}
 	}

 	else{
 		echo "<script>alert('Please fill form');</script>";
 	}

 	}

?>


