<?php
session_start();

$servername = "localhost";
$user = "root";
$password = "";
$db = "loginsystem";

if(isset($_SESSION['code']))
{
	header("location:profile.php");
}
else
{
$conn = mysqli_connect($servername,$user,$password,$db);


if(!$conn)
{
	die("connection failed" . mysqli_connect_error());
}
$email = mysqli_real_escape_string($conn,$_POST["usem"]);
$email = trim($email);
$email= strip_tags($email);

$password = $_POST['uspd'];

$qry="SELECT * FROM user_detail WHERE email='$email'  ";
$result=mysqli_query($conn,$qry);
$row=mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
//echo $row['last_name'].'<br>';
$salt = $row['last_name'];
$password = hash('sha256', $password);
 //echo "heyy";
	//Check whether the query was successful or not
	if($count!=0) {
		///echo $password."<br>";
		//echo $row['password'];
		
		 if($row['password']==$password)
		 {
		//echo "heyy";
		
		 
			//Login Successful
			//session_regenerate_id();
			//$member = mysql_fetch_assoc($result);
			//$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
			//$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			//$_SESSION['SESS_LAST_NAME'] = $member['password'];
			//session_write_close();
			//header("location: home.php");
			$_SESSION["code"]=1;
	$_SESSION["lstname"]=$row['last_name'];
	$_SESSION["fstname"]=$row['first_name'];
	$_SESSION["email"]= $row['email'];
	header("location:profile.php");
			echo "account found";
			 exit();
		 }
		 else
		 {
			 $_SESSION["erroro"]='email or password incorrect';
			 $er = $_SESSION["erroro"];
			 header("location:login.php");
			
		 }
		
	}
	else
	{
		$_SESSION["erroro"]="email or password incorrect ";
		 header("location:login.php");
		
	}
}
	?>
