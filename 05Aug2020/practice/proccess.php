<?php
$fname =  $_REQUEST['firstName'];
$lname =  $_REQUEST['lastName'];
$db = new mysqli("localhost","root","","identity");
$query = $db->query("SELECT * FROM identity");
$result = $query->num_rows;
?>
	<table border="2px">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>
<?php  

if($result > 0){
  while ($data = $query->fetch_assoc()) { 
?>	
	<tr>
		<td><?php echo $data['firstName'] ?></td>
		<td><?php echo $data['lastName'] ?></td>
	</tr>
    
 <?php } ?>

  </table>
<?php 

	} else{
		echo "data not exist";
	}
?>