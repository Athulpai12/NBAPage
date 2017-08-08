<?php
session_start();

$servername = "localhost";
$username = "id2017998_root1";
$password = "12345678";
$dbname = "id2017998_loginsystem";

if(isset($_SESSION["code"]))
{
	header("location:profile.php");
}
else
{
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$fst = mysqli_real_escape_string($conn, $_POST['fstname']);
$fst = trim($fst);
$fst = strip_tags($fst);
$fst = htmlspecialchars($fst,ENT_QUOTES);
$lst = mysqli_real_escape_string($conn, $_POST['lstname']);
$lst = trim($lst);
$lst = strip_tags($lst);
$lst = htmlspecialchars($lst,ENT_QUOTES);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$email = trim($email);
$email= strip_tags($email);
$email = htmlspecialchars($email,ENT_QUOTES);



 $query = "SELECT * FROM user_detail WHERE email='$email'";
   $result = mysqli_query($conn,$query);
   $count = mysqli_num_rows($result);
   if($count!=0){
    $error = true;
	$_SESSION["erroro"]="Email already in use";
	header("location:login.php");
   // echo "Provided Email is already in use.";
   }
   else
   {
$row=mysqli_fetch_array($result);
$salt=$lst;
echo $row['last_name'];$password = $_POST["password"];
$password = hash('sha256', $password);
$sql = "INSERT INTO user_detail (first_name, last_name, email, password)
VALUES ('$fst','$lst','$email','$password')";




if (mysqli_query($conn, $sql)) {
	$_SESSION["code"]=1;
	$_SESSION["lstname"]=$lst;
	$_SESSION["fstname"]=$fst;
	$_SESSION["email"]= $email;
	header("location:profile.php");
    echo "New record created successfully";
} else {
	
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
   }
mysqli_close($conn);
}
?>