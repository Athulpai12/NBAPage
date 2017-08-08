<?php
session_start();
if(isset($_SESSION["code"]))
{
	$one =1;
}
else
{
	 $one=0;
}
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Profiles</title>
    <link rel="stylesheet" href="css2/style.css">

<style type="text/css">
body{
 background-image:url('v.jpg');
 
 }
  #hello{
    margin-left: 150px;
  }
  h1{
    color: white;
    font-size: 3em;
    margin-left: 40%;
  }
 

.animated { 
    animation-duration: 5s; 
    animation-fill-mode: both; 
} 

@keyframes flip { 
    0% { 
        transform: perspective(400px) rotateY(0); 
        animation-timing-function: ease-out; 
    } 
    40% { 
        transform: perspective(400px) translateZ(150px) rotateY(170deg); 
        animation-timing-function: ease-out; 
    } 
    80% { 
        transform: perspective(400px) rotateY(360deg) scale(.95); 
        animation-timing-function: ease-in; 
    } 
    100% { 
        transform: perspective(400px) scale(1); 
        animation-timing-function: ease-in; 
    } 
} 
.flip { 
    backface-visibility: visible !important; 
    animation-name: flip; 
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
	document.getElementById("hello").style.opacity="0.5";
	//document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	//document.getElementById("bgimg-1").style.opacity = "0.5";
	////document.getElementById("bgimg-2").style.opacity = "0.5";
	//document.getElementById("bgimg-3").style.opacity = "0.5";
	//document.getElementById("bgimg-4").style.opacity = "0.5";
  document.getElementById("circle").style.opacity="0";
}

function closeNav() {
document.getElementById("hello").style.opacity="1";
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

  <body >
  <h1 id="profile" class="animated flip" style="font-family:arial"> Profiles </h1>
  <div style="cursor: pointer"; id="vr" onclick="startDictation(event)" >
  </div>
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="scrolling.php">HOME</a>
	  <a href="Standings.php">Standings</a>
	  <a href="schedule.php">Points Table</a>
	  <a href="gallery.php">Gallery</a>
	   <a href=<?php if($one==0){ echo "login.php"; } else { echo "profile.php" ;} ?>> <?php if($one==0){ echo "SIGN IN"; } else { echo "Your Details" ;}?></a>
	  <a href="merchandise.php">Merchandise </a>
	  <a href="game.html">Game </a>
	  <a href="timerclock.php">Match Location </a>
	</div>
	<div class="circle" id="circle" style="cursor: pointer; background-color: rgb(0, 0, 230);" onclick="openNav()"></div>
	<div id = "hello">
	<figure class="snip1336">
	  <img src="sample.jpg" />
	  <figcaption>
	    <img src="dirk.jpg" class="profile" />
	    <h2>Dirk Nowitzki<span>Dallas Mavericks</span></h2>
	    <p>Height :7'0'' </p>
	    <p>Weight :245 lbs</p>
	    <a href="nowitzki.html" class="follow">More Info</a>
	  </figcaption>
	</figure>
	<figure class="snip1336 hover"><img src="sample2.jpg" alt="sample74" />
	  <figcaption>
	    <img src="rose.jpg" class="profile" />
	   	<h2>Derrick Rose<span>New York Knicks</span></h2>
	    <p>Height :6'3'' </p>
	    <p>Weight :190 lbs</p>
	    <a href="rose.html" class="follow">More Info</a>
	  </figcaption>
	</figure>
	<figure class="snip1336"><img src="sample3.jpg" alt="sample69" />
	  <figcaption>
	    <img src="cousins.jpg" class="profile" />
	   	<h2>Demarcus Cousins<span>Sacramento Kings</span></h2>
	    <p>Height :6'11'' </p>
	    <p>Weight :270 lbs</p>
	    <a href="cousins.html" class="follow">More Info</a>
	  </figcaption>
	</figure>
	</div>
	<div id = "hello" >
	    <figure class="snip1336">
	  <img src="sample.jpg" />
	  <figcaption>
	    <img src="howard.jpg" class="profile" />
	   	<h2>Dwight Howard<span>Atlanta Hawks</span></h2>
	    <p>Height :6'11'' </p>
	    <p>Weight :265 lbs</p>
	    <a href="howard.html" class="follow">More Info</a>
	  </figcaption>
	</figure>
	<figure class="snip1336 hover"><img src="sample2.jpg" alt="sample74" />
	  <figcaption>
	    <img src="wade.jpg" class="profile" />
	   	<h2>Dwyane Wade<span>Chicago Bulls</span></h2>
	    <p>Height :6'4'' </p>
	    <p>Weight :220 lbs</p>
	    <a href="wade.html" class="follow">More Info</a>
	  </figcaption>
	</figure>
	<figure class="snip1336"><img src="sample3.jpg" alt="sample69" />
	  <figcaption>
	    <img src="cpaul.jpg" class="profile" />
	   	<h2>Chris Paul<span>Los Angeles Clippers</span></h2>
	    <p>Height :6'0'' </p>
	    <p>Weight :175 lbs</p>
	    <a href="cpaul.html" class="follow">More Info</a>
	  </figcaption>
	</figure>
	</div>
	<div id = "hello" >
	    <figure class="snip1336">
	  <img src="sample.jpg" />
	  <figcaption>
	    <img src="westbrook.jpg" class="profile" />
	   	<h2>Russell Westbrook<span>Oklahoma City Thunder</span></h2>
	    <p>Height :6'3'' </p>
	    <p>Weight :187 lbs</p>
	    <a href="westbrook.html" class="follow">More Info</a>
	  </figcaption>
	</figure>
	<figure class="snip1336 hover"><img src="sample2.jpg" alt="sample74" />
	  <figcaption>
	    <img src="curry.jpg" class="profile" />
	   	<h2>Stephen Curry<span>Golden State Warriors</span></h2>
	    <p>Height :6'3'' </p>
	    <p>Weight :190 lbs</p>
	    <a href="curry.html" class="follow">More Info</a>
	  </figcaption>
	</figure>
	<figure class="snip1336"><img src="sample3.jpg" alt="sample69" />
	  <figcaption>
	    <img src="thompson.jpg" class="profile" />
	   	<h2>Klay Thompson<span>Golden State Warriors</span></h2>
	    <p>Height :6'7'' </p>
	    <p>Weight :205 lbs</p>
	    <a href="thompson.html" class="follow">More Info</a>
	  </figcaption>
	</figure>
	</div>
	<div id = "hello" >
	    <figure class="snip1336">
	  <img src="sample.jpg" />
	  <figcaption>
	    <img src="durant.jpg" class="profile" />
	   	<h2>Kevin Durant<span>Golden State Warriors</span></h2>
	    <p>Height :6'9'' </p>
	    <p>Weight :240 lbs</p>
	    <a href="durant.html" class="follow">More Info</a>
	  </figcaption>
	</figure>
	<figure class="snip1336 hover"><img src="sample2.jpg" alt="sample74" />
	  <figcaption>
	    <img src="james.jpg" class="profile" />
	   	<h2>Lebron James<span>Cleveland Cavaliers</span></h2>
	    <p>Height :6'8'' </p>
	    <p>Weight :249 lbs</p>
	    <a href="james.html" class="follow">More Info</a>
	  </figcaption>
	</figure>
	<figure class="snip1336"><img src="sample3.jpg" alt="sample69" />
	  <figcaption>
	    <img src="irving.jpg" class="profile" />
	   	<h2>Kyrie Irving<span>Cleveland Cavaliers</span></h2>
	    <p>Height :6'3'' </p>
	    <p>Weight :205 lbs</p>
	    <a href="irving.html" class="follow">More Info</a>
	  </figcaption>
	</figure>
	</div>
  </body>
</html>
