<?php

session_start();
$servername = "localhost";
$user = "root";
$password = "";
$db = "loginsystem";



$conn = mysqli_connect($servername,$user,$password,$db);


if(!$conn)
{
	die("connection failed" . mysqli_connect_error());
}
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$email = trim($email);
$email= strip_tags($email);

$password = $_POST['uspd'];

$qry="SELECT * FROM user_detail WHERE email='$email' ";
$result=mysqli_query($conn,$qry);
$row=mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if($count!=0) {
		///echo $password."<br>";
		//echo $row['password'];
		
		$_SESSION["message"]="your order will be sent in a few days";
	    header("location:merchandise.php");
}
else 
{
$_SESSION["message"]="email address not in our list please register first"; 
 header("location:merchandise.php");	
}