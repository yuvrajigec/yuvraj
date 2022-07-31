

<html>
<head>
	<title>Display</title>
</head>
<style>
	body{
		background-color: #d160F9;
	}
	table{
		background-color: white;
	}
</style>


<?php 
	include("love.php");
	error_reporting(0);

	$query = "SELECT * FROM FORM";
	$data = mysqli_query($con, $query);

	$total = mysqli_num_rows($data);
	$result = mysqli_fetch_assoc($data);

	//echo  $result;


	
	//echo $total;
	if ($total != 0) {
		//echo "Tables have record";
		?>

			<h2 align="center"> <mark> Hello There! This is all Data About form.</mark></h2>

			<h4 align="center"> <mark>College Name:- Indira Gandhi Engineering College Sagar Madhya Pradesh</mark></h4>

			<table border=3px cellspacing="7px" width="90%" align="center">
				<tr>
					<th width="5%">EMP_ID</th>
					<th width="10%">First_Name</th>
					<th width="10%">Last_Name</th>
					<th width="10%">E-mail</th>
					<th width="10%">DoB</th>
					<th width="10%">Password</th>
					<th width="10%">ConformPassword</th>
					<th width="10%">Gender</th>
					<th width="10%">Mobile_number</th>
					<th width="15%">Address</th>
				</tr>
			


		<?php
		while ($result = mysqli_fetch_assoc($data)) {
			// code...
		echo "	<tr border=2px>
				<td>".$result[EMP_ID]."</td>
				<td>".$result[fname]."</td>
				<td>".$result[lastname]."</td>
				<td>".$result[email]."</td>
				<td>".$result[dob]."</td>
				<td>".$result[password]."</td>
				<td>".$result[cnfpassword]."</td>
				<td>".$result[gender]."</td>
				<td>".$result[mobileno]."</td>
				<td>".$result[address]."</td>	
			</tr>
			";


		}
	}
	else{
		echo "No record found";
	}

?>
</table>
</html>