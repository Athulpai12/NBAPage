<?php
session_start();
if(isset($_POST["email"]))
{
	
	
	$_SESSION["email"]=$_POST['email'];
	$email = $_POST['email'];;
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$qry="SELECT * FROM user_detail WHERE email='$email'  ";
$result=mysqli_query($conn,$qry);
$row=mysqli_fetch_array($result);

$count = mysqli_num_rows($result);
   if($count!=0){
   //$randnum = rand(1111111111,9999999999);
   
    //$salt = $row['last_name'];

       //$password = password_hash($password, PASSWORD_DEFAULT);
	   //$sql = "UPDATE user_detail SET password='$password' WHERE email='$email'";
	  // mysqli_query($conn, $sql);
   ///$row['password']=$password;
 //UPDATE loginsystem;
   $from = "HOOPS OF GLORY";
		$url = "www.hoopsofglory.com";
		$body  =  "YOU requested for a change in password 
		-----------------------------------------------
		Url : $url;
		email Details is : $email;
		Please login to : localhost/login3/change.php; to change your password
		Sincerely,
		HOOPS OF GLORY";
		$from = "hoopsofglory.com";
		$subject = " Password recovered";
		$headers1 = "From: $from\n";
		$headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
		$headers1 .= "X-Priority: 1\r\n";
		$headers1 .= "X-MSMail-Priority: High\r\n";
		$headers1 .= "X-Mailer: Just My Server\r\n";
		$sentmail = mail ( $email, $subject, $body, $headers1 );
		$_SESSION["msg"]="email sent ";
		$_SESSION["email"] = $email;
		header("location:login.php");
	} 
   
   
   
   else
   {
	   $_SESSION["erroro"]=" email not found";
		header("location:login.php");
	   
	    //echo "email not found";
   }

}

mysqli_close($conn);
?>