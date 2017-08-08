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
<html>
	<head>
		<title></title>
		<style>
			* {
				margin: 0; padding: 0;
			}
			body {
			 background-image: url('11.jpg');
			}
			#container {
			 width: 1000px;
			 overflow: hidden;
			 margin: 50px auto;
			}
			header {
			 width: 800px;
			 margin: 40px auto;
			 color:white;
			}
			header h1 {
			 text-align: center;
			 font: 100 60px/1.5 Helvetica, Verdana, sans-serif;
			}
			header p ,p{
			 font: 100 15px/1.5 Helvetica, Verdana, sans-serif;
			 text-align: justify;
			}
			.first {
			 -webkit-animation: bannermove 13s linear infinite;
			    -moz-animation: bannermove 13s linear infinite;
			     -ms-animation: bannermove 13s linear infinite;
			      -o-animation: bannermove 13s linear infinite;
			         animation: bannermove 13s linear infinite;
			}
			@keyframes bannermove {
			 0% {
			    margin-left: 0px;
			 }
			 100% {
			    margin-left: -2125px;
			 }
			}
			@-moz-keyframes bannermove {
			 0% {
			   margin-left: 0px;
			 }
			 100% {
			   margin-left: -2125px;
			 }
			}
			@-webkit-keyframes "bannermove" {
			 0% {
			   margin-left: 0px;
			 }
			 100% {
			   margin-left: -2125px;
			 }
			}
			@-ms-keyframes "bannermove" {
			 0% {
			   margin-left: 0px;
			 }
			 100% {
			   margin-left: -2125px;
			 }
			}
			@-o-keyframes "bannermove" {
			 0% {
			   margin-left: 0px;
			 }
			 100% {
			   margin-left: -2125px;
			 }
			}
			.photobanner {
			 height: 250px;
			 width: 3550px;
			 margin-bottom: 80px;
			}
			.photobanner img {
			 -webkit-transition: all 0.5s ease;
			 -moz-transition: all 0.5s ease;
			 -o-transition: all 0.5s ease;
			 -ms-transition: all 0.5s ease;
			 transition: all 0.5s ease;
			 object-fit: cover;
			}
			.photobanner img:hover {
			 -webkit-transform: scale(2);
			 -moz-transform: scale(2);
			 -o-transform: scale(2);
			 -ms-transform: scale(2);
			 transform: scale(2);
			 cursor: pointer;
			 animation-play-state: paused;
			 -webkit-box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
			 -moz-box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
			 box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
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
			.copyright{
				text-align: center;
			}
			.border {
				font-family: sans-serif;
				color: white;
			}
		</style>
		<script type="text/javascript">
			var start_time ;
		    var end_time;
		    var k=7;
		    function track(){
		        window.location="reg.html"
		    }

		    function openNav() {
		        document.getElementById("mySidenav").style.width = "250px";
		      //	/document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
		      	//document.getElementById("bgimg-1").style.opacity = "0.5";
		      	///document.getElementById("bgimg-2").style.opacity = "0.5";
		      //	document.getElementById("bgimg-3").style.opacity = "0.5";
		      	////document.getElementById("bgimg-4").style.opacity = "0.5";
		        document.getElementById("circle").style.opacity="0";
		    }

		    function closeNav() {
		        document.getElementById("mySidenav").style.width = "0";
		      	//document.getElementById("bgimg-1").style.opacity = "1";
		      	/////document.getElementById("bgimg-2").style.opacity = "1";
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
			          	    var fo = (event.results[i][0].transcript).indexOf("next");
			          	    var bac = (event.results[i][0].transcript).indexOf("back");
			                var n = (event.results[i][0].transcript).indexOf("ranking")
			                var q = (event.results[i][0].transcript).indexOf("hello")
			                var qw = (event.results[i][0].transcript).indexOf("about")
			                var prev = (event.results[i][0].transcript).indexOf("previous");
			                var g = (event.results[i][0].transcript).indexOf("Seattle")
			                var v = (event.results[i][0].transcript).indexOf("Chicago")
			                var backg = (event.results[i][0].transcript).indexOf("change")
			          	    var orig = (event.results[i][0].transcript).indexOf("original")
			          	    var all = (event.results[i][0].transcript).indexOf("all")
			                var login = (event.results[i][0].transcript).indexOf("login")
				            if(n!=-1){
				                window.location = 'Standings.html'
				            }
			        		else if(q!=-1){
			        		    var audio = new Audio('q.mp3');
			                	audio.play();
			        		}
			        		else if(qw!=-1){
			                	var audio = new Audio('qw.mp3');
			                	audio.play();
			        		}
			        	    else if((v!=-1)&&(g!=-1)){
			          			function setCookie(cname,cvalue,exdays) {
			                    	var d = new Date();
			                    	d.setTime(d.getTime() + (exdays*24*60*60*1000));
			                    	var expires = "expires=" + d.toGMTString();
			                    	document.cookie = cname+"="+cvalue+"; "+expires;
			                	}
			                	setCookie("voice","Seattle Chicago",40);
			                	window.location="md.html";
			        		}
			        		else if(bac!=-1||prev!=-1){
			        		    function goBack() {
			                		window.history.back();
			                	}
			                	goBack();
			        		}
			        		else if(fo!=-1){
			        		    function gofor() {
			                		window.history.forward();
			                	}
			                	gofor();
			        		}
			        		else if(backg!=-1&&all!=-1){
			                	document.getElementById("bgimg-1").style.backgroundImage="url('8.jpg')";
			                	document.getElementById("bgimg-2").style.backgroundImage="url('a1.jpg')";
			                	document.getElementById("bgimg-3").style.backgroundImage="url('a2.jpg')"; 
			        		}
			        		else if(backg!=-1){
			        		 	if(k==7){
			        		 	    document.getElementById("bgimg-1").style.backgroundImage="url('8.jpg')";
			        		 	    k++;
			        		    }
			        		    else if(k==8){
			        		 	    document.getElementById("bgimg-1").style.backgroundImage="url('9.jpg')";
			        		 	    k++
			        		    }
			        		    else if(k==9){
			        		 	    document.getElementById("bgimg-1").style.backgroundImage="url('c.jpg')";
			        		 	    k++
			        		    }
			        		    else{
			        		 	    document.getElementById("bgimg-1").style.backgroundImage="url('7.jpg')";
			        		 	    k=7;
			        		    }
			        		}
			        		else if(orig!=-1){
			        		    document.getElementById("bgimg-1").style.backgroundImage="url('7.jpg')";
			        		    document.getElementById("bgimg-2").style.backgroundImage="url('2.jpg')";
			                	document.getElementById("bgimg-3").style.backgroundImage="url('3.jpg')";
			        		}
			              	else if(login!=-1){
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
	<body>
		<div style="cursor: pointer"; id="vr" onclick="startDictation(event)" ></div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="scrolling.php">HOME</a>
  <a href="Standings.php">Standings</a>
  <a href="schedule.php">Points Table</a>
  <a href=<?php if($one==0){ echo "login.php"; } else { echo "profile.php" ;} ?>> <?php if($one==0){ echo "SIGN IN"; } else { echo "Your Details" ;}?></a>
  <a href="merchandise.php">Merchandise </a>
  <a href="profiles.php">Profile </a>
  <a href="game.html">Game </a>
  <a href="timerclock.php">Match location</a>
</div>
<div class="circle" id="circle" style="cursor: pointer; background-color: rgb(0, 0, 230);" onclick="openNav()"></div>
	    </div>
		<div id="mySidenav" class="sidenav">
			    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  				<a href="main.html">Home</a>
  				<a href="Standings.html">Standings</a>
  				<a href="schedule.html">Schedule</a>
  				<a href="reg.html">Login / Signup</a>
  				<a href="profiles.html">Profiles</a>
		</div>
		<div id="container">
		    <header>
			    <h1>Gallery</h1>
			    <p>Photo Gallery</p>
		    </header>
		    <!-- Each image is 350px by 233px -->
		    <div class="photobanner">
		    	<img class="first" style="height:250px"src="1.jpeg" alt="" />
		    	<img style="height:250px;" src="12.jpeg" alt="" />
		    	<img style="height:250px" src="14.jpeg" alt="" />
		    	<img style="height:250px" src="4.jpeg" alt="" />
		    	<img style="height:250px" src="5.jpeg" alt="" />
		    	<img style="height:250px" src="15.jpeg" alt="" />
		    	<img style="height:250px" src="7.jpeg" alt="" />
		    </div>
		    <header>
		    	<p>Video Gallery</p>
		    </header>
		    <div id="video1">
		    	<video width="330" height="250" controls>
		    		<source src="1.mp4" type="video/mp4">
		    	</video>
		    	<video width="330" height="250" controls>
		    		<source src="2.mp4" type="video/mp4">
		    	</video>
		    	<video width="330" height="250" controls>
		    		<source src="3.mp4" type="video/mp4">
		    	</video>
		    </div>
		</div>
		<div class="copyright">
			<br>
			<br>
			<br>
			<br>
			<span class="border" >&copy Hoops Of Glory 2016</span>
			<br>
			<br>
		</div>
	</body>
</html>