<?php
   if( $_REQUEST["name"] ){
      $name = $_REQUEST['name'];
      $address = $_REQUEST['add'];
      $phone = $_REQUEST['phone'];
      echo "<h1>Welcome ". $name . " From " . $address . " And Phone number is " . $phone . "</h1>";
   }
?>
<p>Data passing to PHP page and returning to html page using JQuery</p>