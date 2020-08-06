<?php 

	$con = mysqli_connect("localhost","root","","identity") or die("Connection Failed");
	$sql = "SELECT * FROM identity";

	$result = mysqli_query($con,$sql) or die("Connectio failed");

	$output = "";

	if(mysqli_num_rows($result) > 0){
	
	$output = '<table border="1" width="100%" cellpadding="10px" cellspacing="0">
			<tr>
			<th>ID</th>
			<th>Name</th>
			</tr>';

		while ($row = mysqli_fetch_assoc($result)) { 
			$output.= "<tr><td>{$row['id']}</td><td>{$row['first_name']}{$row['last_name']}</td></tr>";

		}
		$output .= '</table>';

		mysqli_close($con);

		echo $output;

	}else{
		echo "Record not found";
	}

	


