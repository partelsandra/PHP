<?php
require_once('database.php');
if(isset($_POST['submit']))
{	 
	 $nimi = $_POST['nimi'];
	 $sugu = $_POST['sugu'];
	 $pikkus = $_POST['pikkus'];
	 $kaal = $_POST['kaal'];
	 $synniaeg = $_POST['synniaeg'];
	 $sql = "INSERT INTO ISIKUD (nimi,sugu,pikkus,kaal,synniaeg)
	 VALUES ('$nimi','$sugu','$pikkus','$kaal', '$synniaeg')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
