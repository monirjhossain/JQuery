<?php
$OffCode =  $_REQUEST['OfficeCode'];
$db = new mysqli("localhost","root","","classicmodels");
$query = $db->query("SELECT employeeNumber, lastName, firstName, jobTitle FROM employees WHERE officeCode = '$OffCode'");
$result = $query->num_rows;
?>
	<table border="2px">
		<tr>
			<th>Number</th>
			<th>Last Name</th>
			<th>First Name</th>
			<th>Job Title</th>
		</tr>
<?php  

if($result > 0){
  while ($data = $query->fetch_assoc()) { 
?>	
	<tr>
		<td><?php echo $data['employeeNumber'] ?></td>
		<td><?php echo $data['lastName'] ?></td>
		<td><?php echo $data['firstName'] ?></td>
		<td><?php echo $data['jobTitle'] ?></td>	
	</tr>
    
 <?php } ?>

  </table>
<?php 

	} else{
		echo "data not exist";
	}
?>