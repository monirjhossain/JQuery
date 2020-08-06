<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$fName = $_POST['fName'];
		$lName = $_POST['lName'];

		if (!empty($fName) || !empty($lName)) {
			$dbCon = new mysqli('localhost', 'root', '', 'identity');
			$query = $dbCon->query("INSERT INTO identity VALUES ('','$fName', '$lName')");

			if ($query) {
				echo json_encode(array("statusCode"=>200));
			} else {
				echo json_encode(array("statusCode"=>201));
			}
		}
	}
?>
