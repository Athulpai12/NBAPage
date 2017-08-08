<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['message']))
{
 $msg = $_SESSION['message'];
 echo '<script>';
 echo "alert('$msg')";
 echo '</script>';
 unset($_SESSION['message']);
}

if(isset($_SESSION["code"]))
{
	$one =1;
}
else
{
	 $one=0;
}
?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css3/normalize.css">
	 <link rel="stylesheet" href="css3/style.css">
	<style type="text/css">
	button:focus {outline:0;}
		#images
		{
			width:200px;
			height: 200px;
		}
		.buttonsuccess{
			height: 50px;
			width:85px;
			border-radius: 20%;
			background-color:black;
			box-shadow: white;
			color:white;
		}
		body{
			font-family: arial;
		}
		.listprice
		{
		color: red;
		}
		.col{
			margin-left: 180px;
		}
		.text{
			margin-top: 50px;
			 text-indent: 40%;
		}
		.col2{
			float:left;


		
		}
		#brt{
			height: 10px;
			width:80px;
		}
		ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: 	#0040ff;
    position: fixed;
    top: 0;
    width: 100%;
    align-content: center;
}



li a {
	font-size: 20px;
    display: block;
    color: white;
    text-align: center;
    padding: 18px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
	transition-duration: 3s;
    background-color: orange;
}
button:hover{
transition-duration:2s;
background-color:orange;}

#bgimg
{
	 margin-top: 20px;

	}
	body
	{
		
	}
	
	
	.pop {
	 position: fixed;
	top:100px;
	
	 z-index:5;
    visibility: hidden;
    width: 500px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    
    

    left: 40%;
    margin-left: -80px;
}
#sub
{
background-color:#2672ec;
 }
#sub:hover
{
transition:ease-in;
   transition-duration:0.9s;
   background-color:silver;

 }
 body
 {
  
  background-color:white;
  color:black;
  }
  
  
  .circle{
			width: 70px;
		    height: 70px;
		    -webkit-border-radius: 25px;
		    -moz-border-radius: 25px;
		    border-radius: 45px;
		    box-shadow: 10px -10px #CCC;
		    position:fixed;
		   
		    background-color: white; 
		    box-shadow: inset 10px -10px 10px rgba(0,0,0,0.6);
			font: bold ;
		  	
		    top:90px;
		    left:3px;
		    background-image: url("nmr.jpg");
    		background-repeat: no-repeat;
    		background-size: contain;
			z-index : 5;
    top:8px;
    left:3px;
     transition-duration: 2s;
    	}
		.circle:hover{
		transform :   rotate(360deg);
		}
		
		.sidenav {
		height: 100%;
   		width: 0;
   		position: fixed;
   		z-index: 1;
   		top: 0;
    	left: 0;
    	background-color: #111;
    	overflow-x: hidden;
    	transition: 0.5s;
    	padding-top: 60px;
    	font-family: sans-serif;
	}

	.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	
}

.sidenav a {
    padding: 20px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
	-webkit-transform:scale(1.25);
    	transform: scale(1.25);
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
	}
	@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}

}

 #vr
    {
      width: 50px;
          height: 50px;
            -webkit-border-radius: 25px;
          -moz-border-radius: 25px;
          border-radius: 25px;
          background: rgb(17, 39, 17);
          box-shadow: 10px -10px #CCC;
          position:fixed;
          border: solid 1px #555; 
          background-color: white;
          box-shadow: inset 10px -10px 25px rgba(0,0,0,0.6);
          z-index: 1;
          left:1250px;
          top:570px;
          background-image: url("voiceimage.png");
        background-repeat: no-repeat;
        background-size: contain;
    }
	</style>
<script>
function openNav() {
  
    document.getElementById("mySidenav").style.width = "250px";
	//document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	//document.getElementById("bgimg-1").style.opacity = "0.5";
	/////document.getElementById("bgimg-2").style.opacity = "0.5";
	//document.getElementById("bgimg-3").style.opacity = "0.5";
	//document.getElementById("bgimg-4").style.opacity = "0.5";
  document.getElementById("circle").style.opacity="0";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	//document.getElementById("bgimg-1").style.opacity = "1";
	//document.getElementById("bgimg-2").style.opacity = "1";
//document.getElementById("bgimg-3").style.opacity = "1";
	//document.getElementById("bgimg-4").style.opacity = "1";
   document.getElementById("circle").style.opacity="1";
}



</script>
</head>
<body>
<div style="cursor: pointer"; id="vr" onclick="startDictation(event)" ></div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="scrolling.php">HOME </a>
  <a href="Standings.php">Standings</a>
  <a href="schedule.php">Points Table</a>
  <a href="gallery.php">Gallery</a>
 <a href=<?php if($one==0){ echo "login.php"; } else { echo "profile.php" ;} ?>> <?php if($one==0){ echo "SIGN IN"; } else { echo "Your Details" ;}?></a>
  <a href="profiles.php">Profile </a>
  <a href="game.html">Game </a>
   <a href="timerclock.php">Next Match </a>
</div>
<div id="coloe">
	<ul>
  <li><a  href="" style="font-family:arial">Merchandise</a></li>
  
</ul>

</div>
<div class="circle" id="circle" style="cursor: pointer; background-color: rgb(0, 0, 230);" onclick="openNav()"></div>
<div id="pos">

</div>
<div id= "bgimg">
	<div id="img1">
		<img src="fr.jpeg">
	</div>
	<div id="img2">
	</div>
</div>

<div class ="col" id="blur">
	<div class="row" >
		<h1 class="text">Featured</h1>
	<div>
		<h2>Caps</h2>
		<div class="col2">
			<img src="caps1.jpg" alt="cap" id="images"/>
			<p class="listprice">List Price <s>$34.99</s> </p>
			<p class="ourprice"> Our Price: $24.99</p>
			<button  type="button"  id="btno" class="buttonsuccess" data-toggle="modal" data-target="#details-1">Details </button>
		</div>
		<div class="col2" id="brt">
		</div>
		<div class="col2" >
			<img src="caps2.jpg" alt="cap" id="images"/>
			<p class="listprice">List Price <s>$34.99</s> </p>
			<p class="ourprice"> Our Price: $24.99</p>
			<button  type="button"  id="btno1" class="buttonsuccess" >Details </button>
		</div>
		<div id="brt" class="col2">
		</div>
		<div class="col2">
			<img src="caps3.jpg" alt="cap" id="images"/>
			<p class="listprice">List Price <s>$34.99</s> </p>
			<p class="ourprice"> Our Price: $24.99</p>
			<button  type="button" id="btno2" class="buttonsuccess" data-toggle="modal" data-target="#details-1">Details </button>
		</div>
		<div id="brt" class="col2">
		</div>
		<div class="col2">
			<img src="caps4.jpg" alt="cap" id="images"/>
			<p class="listprice">List Price <s>$34.99</s> </p>
			<p class="ourprice"> Our Price: $24.99</p>
			<button  type="button" id="btno3" class="buttonsuccess" data-toggle="modal" data-target="#details-1">Details </button>
		</div>
	</div>
	<br/>
	<br/>
	<br/>
	<div>
		
		<div class="col2">
			<img src="jersey1.jpeg" alt="jersey" id="images"/>
			<p class="listprice">List Price <s>$249.99</s> </p>
			<p class="ourprice"> Our Price: $199.99</p>
			<button  type="button" id="btno4" class="buttonsuccess" data-toggle="modal" data-target="#details-1">Details </button>
		</div>
		<div class="col2" id="brt">
		</div>
		<div class="col2">
			<img src="jersey3.jpeg" alt="jersey" id="images"/>
			<p class="listprice">List Price <s>$109.99</s> </p>
			<p class="ourprice"> Our Price: $79.99</p>
			<button  type="button" id="btno5" class="buttonsuccess" data-toggle="modal" data-target="#details-1">Details </button>
		</div>
		<div id="brt" class="col2">
		</div>
		<div class="col2" >
			<img src="jersey2.jpeg" alt="jersey" id="images"/>
			<p class="listprice">List Price <s>$34.99</s> </p>
			<p class="ourprice"> Our Price: $29.99</p>
			<button  type="button" id="btno6" class="buttonsuccess" data-toggle="modal" data-target="#details-1">Details </button>
		</div>
		<div id="brt" class="col2">
		</div>
		<div class="col2">
			<img src="jersey4.jpeg" alt="jersey" id="images"/>
			<p class="listprice">List Price <s>$49.99</s> </p>
			<p class="ourprice"> Our Price: $39.99</p>
			<button  type="button" id="btno7" class="buttonsuccess" data-toggle="modal" data-target="#details-1">Details </button>
		</div>
	</div>
	<div>
		<h2>Accessories</h2>
		<div class="col2">
			<img src="access1.jpeg" alt="backpack" id="images"/>
			<p class="listprice">List Price <s>$29.99</s> </p>
			<p class="ourprice"> Our Price: $19.99</p>
			<button  type="button" id="btno8" class="buttonsuccess" data-toggle="modal" data-target="#details-1">Details </button>
		</div>
		<div class="col2" id="brt">
		</div>
		<div class="col2" >
			<img src="access2.jpeg" alt="shooter sleeve" id="images"/>
			<p class="listprice">List Price <s>$24.99</s> </p>
			<p class="ourprice"> Our Price: $19.99</p>
			<button  type="button" id="btno9" class="buttonsuccess" data-toggle="modal" data-target="#details-1">Details </button>
		</div>
		<div id="brt" class="col2">
		</div>
		<div class="col2">
			<img src="access3.jpeg" alt="cufflinks" id="images"/>
			<p class="listprice">List Price <s>$24.99</s> </p>
			<p class="ourprice"> Our Price: $19.99</p>
			<button  type="button" id="btno10" class="buttonsuccess" data-toggle="modal" data-target="#details-1">Details </button>
		</div>
		<div id="brt" class="col2">
		</div>
		<div class="col2">
			<img src="access4.jpeg" alt="scarf" id="images"/>
			<p class="listprice">List Price <s>$24.99</s> </p>
			<p class="ourprice"> Our Price: $19.99</p>
			<button  type="button" id="btno" class="buttonsuccess" data-toggle="modal" data-target="#details-1">Details </button>
		</div>
	</div>
</div>
</div>
<div id="popup" class ="pop" > 
	
	
	<form action="order.php" method ="post" >
	<p> ENTER YOUR EMAIL </p>
	<input type="email" name ="email" placeholder="ENTER YOUR EMAIL" >
    <p> ENTER YOUR ADDRESS </p>
	<input type="text" name="address" placeholder="ENTER YOUR ADDRESS " >
	<p> ENTER THE QUANTITY </p>
	<input type="text" name="quantity" placeholder="ENTER THE QUANTITY " required pattern="[1-9]">
	<input type="submit" id="sub">
	</form>
	<p id="close"  ><a href="#">CLOSE</a></p>
	</div>
	 <script>
	 var blu = document.getElementById("blur");
	var forget = document.getElementById("btno");
	var forget1 = document.getElementById("btno1");
	var forget2 = document.getElementById("btno2");
	var forget3 = document.getElementById("btno3");
	var forget4 = document.getElementById("btno4");
	var forget5 = document.getElementById("btno5");
	var forget6 = document.getElementById("btno6");
	var forget7 = document.getElementById("btno7");
	var forget8 = document.getElementById("btno8");
	var forget9 = document.getElementById("btno8");
	var forget10 = document.getElementById("btno10");
	forget.addEventListener("click",pass,false);
	forget1.addEventListener("click",pass,false);
	forget2.addEventListener("click",pass,false);
	forget3.addEventListener("click",pass,false);
	forget4.addEventListener("click",pass,false);
	forget5.addEventListener("click",pass,false);
	forget6.addEventListener("click",pass,false);
	forget7.addEventListener("click",pass,false);
	forget8.addEventListener("click",pass,false);
	forget9.addEventListener("click",pass,false);
	function pass()
	{
	var res = document.getElementById("popup");
	//var cirk = document.getElementById("circle");
	blu.style.opacity="0.5";
	res.style.visibility="visible";
	//var c =document.getElementById("form");
	//c.style.opacity="0.5";
	}
		//var bodyu2=document.getElementById("body1");
		//bodyu2.addEventListener("click",pass2,false);
		var close2 = document.getElementById("close");
		close2.addEventListener("click",pass2,false);
		function pass2()
		{
		//var cirk = document.getElementById("circle");
	blu.style.opacity="1";
		//var c =document.getElementById("form");
	//c.style.opacity="1";
		var res = document.getElementById("popup");
		res.style.visibility="hidden";
		}
	
	
	
	</script>
</body>
</html>