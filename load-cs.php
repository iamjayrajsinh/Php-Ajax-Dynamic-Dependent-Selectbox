<?php

	$conn = mysqli_connect("localhost","root","","test") or die("Connection failed");

	if($_POST['type'] == ""){
		$sql = "SELECT * FROM country_tb";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['cid']}'>{$row['cname']}</option>";
		}
	}else if($_POST['type'] == "stateData"){

		$sql = "SELECT * FROM state_tb WHERE country = {$_POST['id']}";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['sid']}'>{$row['sname']}</option>";
		}
	}

	echo $str;
 ?>
