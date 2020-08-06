<?php

if($_GET['office']!=null){

$code = $_GET['office'];

$db = new mysqli("localhost", "root", "", "data");
$query = $db->query("SELECT employeeNumber, lastName, firstName, jobTitle FROM employees WHERE officeCode ='$code'");

//echo $query->num_rows;


if($query->num_rows>0){

?>


<table border="1">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Number</th>
		<th>Title</th>
	</tr>


	<?php

//while($row=mysqli_fetch_array($query)){  // valu founded by (index & key)
while($row=$query->fetch_assoc()){   // valu founded by (key)
//while($row=mysqli_fetch_row($query)){  // valu founded by (index)

// print_r($row);
// echo "<br>";

	?>


	<tr>
		<td><?php echo $row['firstName']; ?></td>
		<td><?php echo $row['lastName']; ?></td>
		<td><?php echo $row['employeeNumber']; ?></td>
		<td><?php echo $row['jobTitle']; ?></td>
	</tr>


<?php }

	}
	else{
	echo "No data in this offce";
	}


	}
	else{
	echo "Please select an office";
	}


?>
	</table>