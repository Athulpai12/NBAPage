<?php
session_start();
if(!isset($_SESSION["email"]))
{
header("location:login.php");	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change password</title>
	 <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">
	<style>

     #changepassword
     {
     	position:fixed;
     	top:150px;
     	margin-left: 450px;
     	width:500px;
     	height:150px;
     	background-color: #555;
     }
     body
     {
     	background-image: url("citi.jpg");
     	

     }
     #button{
     	color:black;
     	background-color:blue;
     }
     #button:hover
     {
     	transition:ease-in;
   transition-duration:2s;
   background-color:silver;
     }

	</style>
	
	
</head>
<body>
  <div id="changepassword">
<form action="yourpass.php" method="post" id="form" onsubmit= "return abc()" >
<input type="password" name = "pass1" placeholder="password" id="pas">
<input type="password" name="pass2" placeholder="confirmpassword" id="pas1">
<input type="submit" name="sub" value="changepassword" id="button">
</form>
  </div>
<script>
//form = document.getElementById("form");
//form.onsubmit = " return abc()";
function abc()
{
	var p = document.getElementById("pas").value;
	var p1 = document.getElementById("pas1").value;
	//alert(p+p1);
//alert(c);
	
	if(p==p1)
	{
		//alert("password correct");
		return true;
	}
	

alert("password incorrect");
      return false;
	 
}



</script>

</body>
</html>