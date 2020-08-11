<html>
 <head>
<style type="text/css">
body{font-family: "Trebuchet MS", Verdana, Arial;width:600px;}
 div { background-color: #F5F5DC; }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function()
 {
$('#selectDivision').change(function()
{
 if($(this).val() == '') return;
$.get(
'results.php',
 { id : $(this).val() },
function(data)
{
$('#result').html(data);
}
);
});
});
</script>
</head>
<body>
<?php
	require_once('db_config.php');


$query = 'SELECT * FROM divisions';
if ($result = $mysqli->query($query))
{
if ($result->num_rows > 0)
{
?>
<p>
Select a Division
<select id="selectDivision">
<option value="">select</option>
<?php 
while($row = $result->fetch_assoc())
{
?>
<option value="<?php echo $row['div_id']; ?>"><?php echo $row['div_name']; ?></option>
<?php
}
?>
</select>
</p>
<p id="result"></p>
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