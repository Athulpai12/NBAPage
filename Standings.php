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
	<style type="text/css">
	body {
		background-color: black;
	}
	.standings {
		width: 100%;
		height:1000px;
		background-image: url("38.jpg");
		background-size: 100%;
		background-repeat: no-repeat;
	}
	.border {
		font-family: sans-serif;
		color: white;
	}
	h1 {
		color: gray;
		font-family: sans-serif;
	}
	td, th {
    	border: 1px solid #dddddd;
    	text-align: left;
    	padding: 8px;
	}
	table {
    	font-family: arial, sans-serif;
    	border-collapse: collapse;
    	width: 90%;
    	background-color: white;	
	}
	tr:nth-child(even) {
    	background-color: #dddddd;
	}
	.copyright{
		text-align: center;
	}
	tr:hover {
		background-color: #D3D4D6;
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
	document.getElementById("standings").style.opacity="0.5";
	//document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	//document.getElementById("bgimg-1").style.opacity = "0.5";
	////document.getElementById("bgimg-2").style.opacity = "0.5";
	//document.getElementById("bgimg-3").style.opacity = "0.5";
	//document.getElementById("bgimg-4").style.opacity = "0.5";
  document.getElementById("circle").style.opacity="0";
}

function closeNav() {
document.getElementById("standings").style.opacity="1";
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
	<body>
		<div style="cursor: pointer"; id="vr" onclick="startDictation(event)" ></div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="scrolling.php">HOME</a>
  <a href="schedule.php">Points Table</a>
  <a href="gallery.php">Gallery</a>
  <a href=<?php if($one==0){ echo "login.php"; } else { echo "profile.php" ;} ?>> <?php if($one==0){ echo "SIGN IN"; } else { echo "Your Details" ;}?></a>
  <a href="merchandise.php">Merchandise </a>
  <a href="profiles.php">Profile </a>
  <a href="game.html">Game </a>
   <a href="timerclock.php">Next Match </a>
</div>
<div class="circle" id="circle" style="cursor: pointer; background-color: rgb(0, 0, 230);" onclick="openNav()"></div>
		<div class="standings" id="standings" align="center">
				<br>
				<h1>STANDINGS</h1>
				<br>
				<br>
			<br>
			<table align="center">
				<col width="400">
				<tr>
					<th>Pacific</th>
					<th>W</th>
					<th>L</th>
					<th>PCT</th>
					<th>GB</th>
					<th>Last 10</th>
				</tr>
				<tr>
					<td>Warriors</td>
					<td>15</td>
					<td>1</td>
					<td>93.75</td>
					<td>0</td>
					<td>8-2</td>
				</tr>
				<tr>
					<td>Lakers</td>
					<td>13</td>
					<td>3</td>
					<td>81.25</td>
					<td>2</td>
					<td>9-1</td>
				</tr>
				<tr>
					<td>Clippers</td>
					<td>12</td>
					<td>4</td>
					<td>75</td>
					<td>3</td>
					<td>5-5</td>
				</tr>
				<tr>
					<td>Kings</td>
					<td>8</td>
					<td>8</td>
					<td>50</td>
					<td>7</td>
					<td>4-6</td>
				</tr>
			</table>
			<br>
			<table align="center">
			<col width="400">
				<tr>
					<th>South West</th>
					<th>W</th>
					<th>L</th>
					<th>PCT</th>
					<th>GB</th>
					<th>Last 10</th>
				</tr>
				<tr>
					<td>Mavericks</td>
					<td>15</td>
					<td>1</td>
					<td>93.75</td>
					<td>0</td>
					<td>7-3</td>
				</tr>
				<tr>
					<td>Rockets</td>
					<td>12</td>
					<td>4</td>
					<td>75</td>
					<td>3</td>
					<td>8-2</td>
				</tr>
				<tr>
					<td>Spurs</td>
					<td>10</td>
					<td>6</td>
					<td>62.5</td>
					<td>5</td>
					<td>8-2</td>
				</tr>
				<tr>
					<td>Pelicans</td>
					<td>7</td>
					<td>9</td>
					<td>43.75</td>
					<td>8</td>
					<td>2-8</td>
				</tr>
			</table>
			<br>
			<table align="center">
			<col width="400">
				<tr>
					<th>North West</th>
					<th>W</th>
					<th>L</th>
					<th>PCT</th>
					<th>GB</th>
					<th>Last 10</th>
				</tr>
				<tr>
					<td>Thunder</td>
					<td>16</td>
					<td>0</td>
					<td>100</td>
					<td>0</td>
					<td>10-0</td>
				</tr>
				<tr>
					<td>Trail Blazers</td>
					<td>13</td>
					<td>3</td>
					<td>81.25</td>
					<td>3</td>
					<td>7-3</td>
				</tr>
				<tr>
					<td>Jazz</td>
					<td>11</td>
					<td>5</td>
					<td>68.75</td>
					<td>5</td>
					<td>9-1</td>
				</tr>
				<tr>
					<td>Timberwolves</td>
					<td>4</td>
					<td>12</td>
					<td>33.33</td>
					<td>12</td>
					<td>2-8</td>
				</tr>
			</table>
			<br>
			<table align="center">
			<col width="400">
				<tr>
					<th>Central</th>
					<th>W</th>
					<th>L</th>
					<th>PCT</th>
					<th>GB</th>
					<th>Last 10</th>
				</tr>
				<tr>
					<td>Cavaliers</td>
					<td>13</td>
					<td>3</td>
					<td>81.25</td>
					<td>0</td>
					<td>9-1</td>
				</tr>
				<tr>
					<td>Bulls</td>
					<td>6</td>
					<td>10</td>
					<td>37.5</td>
					<td>7</td>
					<td>3-7</td>
				</tr>
				<tr>
					<td>Pistons</td>
					<td>4</td>
					<td>12</td>
					<td>33.33</td>
					<td>9</td>
					<td>2-8</td>
				</tr>
				<tr>
					<td>Pacers</td>
					<td>2</td>
					<td>14</td>
					<td>12.5</td>
					<td>11</td>
					<td>1-9</td>
				</tr>
			</table>
		</div>
		<div class="copyright">
			<br>
			<br>
			<span class="border" >&copy Hoops Of Glory 2016</span>
			<br>
			<br>
		</div>
	</body>
</html>