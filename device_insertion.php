<?php
if(isset($_POST['register']))
{
	
	include("../db/connection.php");
	$query = "INSERT INTO device_registration(imei) VALUES ('$_POST[imei]')";
	if (mysqli_query($con,$query))
     {
		 $status="success";
         header("Location:device_registration.php?status=$status");		  
	 }
	 else
	 {
		$status="error";
		//echo"error".mysqli_error($con);
        header("Location:device_registration.php?status=$status"); 
	 }
}
?>