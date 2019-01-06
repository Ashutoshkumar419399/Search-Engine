<?php
      $username = "root"; 


$connection = mysqli_connect("localhost", $username); // Establishing Connection with Server

 $db = mysqli_select_db($connection,"coaching2" );  // Selecting Database from Server
 
//$keywords = isset($_GET['s'])  ? '%'.$_GET['s'].'%' : '' ;

$k=$_GET['search'];
$result = mysqli_query($connection, "SELECT `First_Name`, `Second_Name`, `E-mail_Id`, `Username`, `Password`, `Contact_Number`, `Linkedin`, `CoachingId`, `InstituteId` FROM `user` WHERE  First_Name like '$k' OR Second_Name like '$k'  OR Username like '$k' OR Password like '$k'" ) or die("Error: " . mysqli_error($connection));;
//"SELECT `Name`, `Age`, `Id`, `Contact` FROM `id` WHERE Id like '". mysqli_escape_string($connection,$keywords) . "';"

while(mysqli_fetch_assoc($result)) {
	
	$row=mysqli_fetch_assoc($result);
	echo '<p align="middle"><br><br><br><br><br><br><br><br><br><br><br><br><font size="10px" color="blue" >Weldone!!!</font></p>';
    
}
 mysqli_close($connection); 
 // Closing Connection with Server
?>
