<?php
$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
	echo 'Not Connected To Server';
}

if(!mysqli_select_db($con,'ss6k'))
{
	echo 'Database Not Selected';
}

$FName = $_POST('firstname');
$LName = $_POST('lastname');
$UID = $_POST('userid');
$Course = $_POST('course');
$Section = $_POST('section');




$sql = "INSERT INTO Student (LastName,FirstName,UserID,CourseName,Section,TimeStamp,Lat,Lng) 
	VALUES ('$FName','$LName','$UID','$Course','$Section')";
	
if(!mysqli_query($con,$sql))
{
	echo 'Not Inserted'
}

else
{
	echo 'Inserted';
}

header("refresh:2; url=index.html");




?>