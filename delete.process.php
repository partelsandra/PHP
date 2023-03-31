<?php
include_once 'database.php';

if(isset($_GET['id']))
{	 
	$id = $_GET['id'];
	$sql = "DELETE FROM ISIKUD WHERE Isiku_id = '$id'";
	if (mysqli_query($conn, $sql)) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	header("Location: index.php");
}
?>