<html>
<head>
<title>Health Monitoring</title>
</head>
<body>
<?php
	session_start();
	include 'dbcon.php';


	//delete in trainerAndTrsinee
	$sqlID = "DELETE FROM trainee ";
	$sqlID .="WHERE trainee_id = '".$_GET["trainee_id"]."'";
	$resultID = mysqli_query($condb, $sqlID);


	if($resultID)
	{
		header("location:admin_traineeInfo.php");
		//echo "Record Deleted.";
		//echo $sql;
		//echo "<br> Go to <a href='traineeInfo.php'>Trainee info page</a>";
	}
	else
	{
		echo "Error Delete [".$sql."]";
	}
	mysql_close($objConnect);
?>
</body>
</html>