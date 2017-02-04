
<?php

 $con = mysqli_connect('127.0.0.1','ss6k','mthack2017');

if(!$con)
{
	echo 'Not Connected To Server';
}


if(!mysqli_select_db($con,'ss6k'))
{
	echo 'Database Not Selected';
}


$FName = $_POST['firstname'];
$LName = $_POST['lastname'];
$UID = $_POST['userid'];
$Course = $_POST['course'];
$Section = $_POST['section'];
$lat = $_POST['lat'];
$lon = $_POST['lon'];
//var_dump($lat);


 $sql ="INSERT INTO Student (LastName,FirstName,UserID,CourseName,Section,Lat, Lng) 
	VALUES ('$FName','$LName','$UID','$Course','$Section', '$lat', '$lon')";



if(!mysqli_query($con,$sql))
{
	echo '<h2>Not Inserted</h2><br>';
	echo '<h2>', $UID, ' is already signed in for ' , $Course, '</h2>';
}

else
{
	echo 'Inserted';
}

header("refresh:2; url=index.html");


?>