<?php
	session_start();
	include 'dbcon.php';
	$sql = "UPDATE trainee SET trainee_weight = '".trim($_POST['Weight'])."'";
	$sql .="WHERE trainee_id = '".$_GET["trainee_id"]."' ";
	$result = mysqli_query($condb, $sql);
	
	//echo "Save Completed!<br>";		
	//echo $sql;
	
	if($result)
	{
		header("location:traineeInfo.php");
	}
	else
	{
		echo "Error Edit [".$sql."]";
	}
	
	mysqli_close($condb);
?>