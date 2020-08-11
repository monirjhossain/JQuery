<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	body{ font-family: "Trebuchet MS", Verdana, Arial;
	width:500px; }
	input,textarea { vertical-align:top; }
	label{ float:left; width:150px;}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
	$(document).ready(function()
	{
	$('#frmMain').submit(function()
	{
	var flag = true;
	$('#error').empty();
	$('.required').each(function()
	{
	if(jQuery.trim($(this).val()) == '' )
	{
	flag = false;
	}
	});
	if(!flag)
	{
	$('#error').html('Please fill all the fields');
	return false;
	}
	else
	{
	return true;
	}
	});
	});
</script>
</head>
<body>
<?php
	require_once('db_config.php');
if(isset($_POST['save']))
{
$distname = $mysqli->real_escape_string($_POST['dist_name']);
$distinfo = $mysqli->real_escape_string($_POST['dist_info']);
$divid = $mysqli->real_escape_string($_POST['div_id']);

$query = "INSERT INTO dictricts
VALUES ('', '$distname', '$distinfo', '$divid')";
if ($mysqli->query($query))
{
echo 'Data Saved Successfully.';
}
else
{
echo 'Cannot save data.';
}

}
$query = 'SELECT * FROM divisions';
if ($result = $mysqli->query($query))
{
if ($result->num_rows > 0)
{
?>
<fieldset>
<legend><strong>Add a District</strong></legend>
<form action="" method="post" id="frmMain">
<p>
<label>Select a Division</label>
<select name="div_id" class="required">
<option value="">select</option>
<?php
 while($row = $result->fetch_array())
{
?>
 <option value="<?php echo $row['div_id']; ?>">
<?php echo $row['div_name']; ?></option>
<?php
 }
?>
</select>
</p>
<p>
<label>District name </label>
<input type="text" name="dist_name" class="required"/>
</p>

<p>
<label>District information</label> <textarea rows="10" cols="30"
name="dist_info" class="required"></textarea>
 </p>
 <p>
<strong id="error"></strong>
</p>
<p>
<input type="submit" name="save"
 value="Save Information"/>
</p>
</form>
 </fieldset>
<?php
}
else
{
echo 'No records found!';
}
$result->close();
}
else
{
echo 'Error in query: $query. '.$mysqli->error;
}
$mysqli->close();
?>
	
</body>
</html>