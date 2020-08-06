<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show data from database</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<table id="main" border="0" cellspacing="0" align="center">
		<tr>
			<td id="header" align="center">
				<h1>PHP with Ajax</h1>
			</td>
		</tr>
		<tr>
			<td id="table-load" align="center">
				<input type="button" id="load-button" value="load-data">
			</td>
		</tr>
		<tr>
			<td id="table-data">
				<table border="1" width="100%" cellpadding="10px" cellspacing="0">
					<tr>
						<th>ID</th>
						<th>Name</th>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#load-button").click(function(e){
				$.ajax({
					url: "ajaxLoad.php",
					type: "POST",
					success: function(data){
						$("#table-data").html(data);
					}
				})
			});
		});
	</script>


</body>
</html>