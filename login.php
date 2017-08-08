<!DOCTYPE html>
<html >
<?php
session_start();
if(isset($_SESSION["erroro"]))
{
	$err = $_SESSION["erroro"];
	 echo '<script language="javascript">';
	 echo "alert('$err')";
     echo '</script>';
	 session_unset();
}	
if(isset($_SESSION["msg"]))
{
	$err = $_SESSION["msg"];
	 echo '<script language="javascript">';
	 echo "alert('$err')";
     echo '</script>';
	$_SESSION["restrict"]=1;
}	

if((isset($_SESSION["code"]))&&(!isset($_SESSION["restrict"])))
{
   header("location:profile.php");
}
	

?>
 <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    <style>
	body{
	background-image:url("citi.jpg");
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
		  	z-index : 1;
		    top:8px;
		    left:3px;
		    background-image: url("nmr.jpg");
    		background-repeat: no-repeat;
    		background-size: contain;
			z-index : 1;
    top:8px;
    left:3px;
     transition-duration: 2s;
    	}
		.circle:hover{
		transform :   rotate(360deg);
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
	
	
	
	.pop {
	 position: relative;
	 top:30%;
	 z-index:2;
    visibility: hidden;
    width: 500px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    

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
	
	</style>
    <script type="text/javascript">
	
		var start_time ;
var end_time;
var k=7;
	function track()
{
window.location="reg.html"

 }
function openNav() {
  
    document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("form").style.opacity="0.5";
	//document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	//document.getElementById("bgimg-1").style.opacity = "0.5";
	////document.getElementById("bgimg-2").style.opacity = "0.5";
	//document.getElementById("bgimg-3").style.opacity = "0.5";
	//document.getElementById("bgimg-4").style.opacity = "0.5";
  document.getElementById("circle").style.opacity="0";
}

function closeNav() {
document.getElementById("form").style.opacity="1";
    document.getElementById("mySidenav").style.width = "0";
	//document.getElementById("bgimg-1").style.opacity = "1";
	//document.getElementById("bgimg-2").style.opacity = "1";
	//document.getElementById("bgimg-3").style.opacity = "1";
	//document.getElementById("bgimg-4").style.opacity = "1";
   document.getElementById("circle").style.opacity="1";
}
var final_transcript = '';
var recognizing = false;
 var voi =0;
if ('webkitSpeechRecognition' in window) {
 
  var recognition = new webkitSpeechRecognition();
 
  recognition.continuous = true;
  recognition.interimResults = true;
 
  recognition.onstart = function() {
    recognizing = true;
  };
 
  recognition.onerror = function(event) {
    console.log(event.error);
  };
 
  recognition.onend = function() {
    recognizing = false;
  };
 
  recognition.onresult = function(event) {
    var interim_transcript = '';
    for (var i = event.resultIndex; i < event.results.length; ++i) {
	 end_time = new Date();
	 var tm = end_time - start_time;
     var sec= Math.round(tm/1000);
      if (event.results[i].isFinal) {
	  recognition.stop();
	  var fo=(event.results[i][0].transcript).indexOf("next");
	  var bac=(event.results[i][0].transcript).indexOf("back");
    var n = (event.results[i][0].transcript).indexOf("ranking")
    var q= (event.results[i][0].transcript).indexOf("hello")
    var qw=(event.results[i][0].transcript).indexOf("about")
    var prev=(event.results[i][0].transcript).indexOf("previous");
    var g = (event.results[i][0].transcript).indexOf("Seattle")
    var v = (event.results[i][0].transcript).indexOf("Chicago")
    var backg=(event.results[i][0].transcript).indexOf("change")
	var orig=(event.results[i][0].transcript).indexOf("original")
	var all=(event.results[i][0].transcript).indexOf("all")
  var login=(event.results[i][0].transcript).indexOf("login")
        if(n!=-1)
        {
          
          window.location = 'Standings.html'
      
        }
		else if(q!=-1)
		{
		
		var audio = new Audio('q.mp3');
        audio.play();
		
		}
		else if(qw!=-1)
		{
		
var audio = new Audio('qw.mp3');
        audio.play();
		
		
			}
	else if((v!=-1)&&(g!=-1))
		{
		
			function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}
setCookie("voice","Seattle Chicago",40);
window.location="md.html"
		}
		else if(bac!=-1||prev!=-1)
		{
		function goBack() {
    window.history.back();
}
goBack();
		}
		else if(fo!=-1)
		{
		function gofor() {
    window.history.forward();
}
gofor();
		 }
		 else if(backg!=-1&&all!=-1)
		 {
document.getElementById("bgimg-1").style.backgroundImage="url('8.jpg')";
document.getElementById("bgimg-2").style.backgroundImage="url('a1.jpg')";
document.getElementById("bgimg-3").style.backgroundImage="url('a2.jpg')";
         
		 }
		 else if(backg!=-1)
		 {
		 	if(k==7)
		 	{
		 	document.getElementById("bgimg-1").style.backgroundImage="url('8.jpg')";
		 	k++;
		 }
		 else if(k==8)
		 {
		 	document.getElementById("bgimg-1").style.backgroundImage="url('9.jpg')";
		 	k++
		 }
		 else if(k==9)
		 {
		 	document.getElementById("bgimg-1").style.backgroundImage="url('c.jpg')";
		 	k++
		 }
		 else 
		 {
		 	document.getElementById("bgimg-1").style.backgroundImage="url('7.jpg')";
		 	k=7;
		 }
		 
		 }
		 else if(orig!=-1)
		 {

		 document.getElementById("bgimg-1").style.backgroundImage="url('7.jpg')";
		 document.getElementById("bgimg-2").style.backgroundImage="url('2.jpg')";
document.getElementById("bgimg-3").style.backgroundImage="url('3.jpg')";
		 }
      else if(login!=-1)
      {
         window.location="reg.html";
      }  
      }

    }
    
  
    
  };
}

	function startDictation(event) {

  if (recognizing) {
    recognition.stop();
    return;
  }
  
  recognition.lang = 'en-US';
   start_time = new Date();
  recognition.start();
  }
	</script>
    
  </head>

  <body id="bdya">
  <div style="cursor: pointer"; id="vr" onclick="startDictation(event)" ></div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="scrolling.php">HOME </a>
  <a href="Standings.php">Standings</a>
  <a href="schedule.php">Points Table</a>
  <a href="gallery.php">Gallery</a>
  <a href="merchandise.php">Merchandise </a>
  <a href="profiles.php">Profile </a>
  <a href="game.html">Game </a>
   <a href="timerclock.php">Next Match </a>
</div>
<div class="circle" id="circle" style="cursor: pointer; background-color: rgb(0, 0, 230);" onclick="openNav()"></div>

    <div class="form" id="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#lin">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="insert.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fstname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lstname"  required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"  name="email"  required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"   name="password" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="lin">   
          <h1>Welcome Back!</h1>
          
          <form action="check.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name ="usem" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="uspd" required autocomplete="off"/>
          </div>
          
          <p class="forgot" id="forge"  ><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    <div id="popup" class ="pop" > 
	<p> ENTER YOUR EMAIL </p>
	
	<form action="changepassword.php" method ="post" >
	<input type="email" name ="email" placeholder="ENTER YOUR EMAIL" >
	<input type="submit" id="sub">
	</form>
	<p id="close"  ><a href="#">CLOSE</a></p>
	</div>
    <script>
	var forget = document.getElementById("forge");
	forget.addEventListener("click",pass,false);
	function pass()
	{
	var res = document.getElementById("popup");
	var cirk = document.getElementById("circle");
	cirk.style.opacity="0.5";
	res.style.visibility="visible";
	var c =document.getElementById("form");
	c.style.opacity="0.5";
	}
		//var bodyu2=document.getElementById("body1");
		//bodyu2.addEventListener("click",pass2,false);
		var close2 = document.getElementById("close");
		close2.addEventListener("click",pass2,false);
		function pass2()
		{
		var cirk = document.getElementById("circle");
	cirk.style.opacity="1";
		var c =document.getElementById("form");
	c.style.opacity="1";
		var res = document.getElementById("popup");
		res.style.visibility="hidden";
		}
	
	
	
	</script>
  </body>
</html>
