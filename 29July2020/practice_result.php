<?php
		$name = ($_GET["name"]);
		$address = ($_GET["address"]);
		$phone = ($_GET["phone"]);

    echo "<table border='2px'>";
        echo "<tr>";
            echo "<td>". $name ."</td>";
            echo "<td>". $address. "</td>";
            echo "<td>" . $phone . "</td>";
        echo "</tr>";
    echo "</table>";
	

    ?>