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
<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"  >
	
</script>
<style>
#backpage
{
  color:black;
  text-align:center;
  position:relative;
   top: 50%;
 }
@-webkit-keyframes flip {
  from {
    -webkit-transform: perspective(25.000em) rotate3d(0, 1, 0, -360deg);
    transform: perspective(25.000em) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }

  40% {
    -webkit-transform: perspective(25.000em) translate3d(0, 0, 9.375em) rotate3d(0, 1, 0, -190deg);
    transform: perspective(25.000em) translate3d(0, 0, 9.375em) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }

  50% {
    -webkit-transform: perspective(25.000em) translate3d(0, 0, 9.375em) rotate3d(0, 1, 0, -170deg);
    transform: perspective(25.000em) translate3d(0, 0, 9.375em) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  80% {
    -webkit-transform: perspective(25.000em) scale3d(.95, .95, .95);
    transform: perspective(25.000em) scale3d(.95, .95, .95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  to {
    -webkit-transform: perspective(25.000em);
    transform: perspective(25.000em);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@keyframes flip {
  from {
    -webkit-transform: perspective(25.000em) rotate3d(0, 1, 0, -360deg);
    transform: perspective(25.000em) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }

  40% {
    -webkit-transform: perspective(25.000em) translate3d(0, 0, 9.375em) rotate3d(0, 1, 0, -190deg);
    transform: perspective(25.000em) translate3d(0, 0, 9.375em) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }

  50% {
    -webkit-transform: perspective(25.000em) translate3d(0, 0, 9.375em) rotate3d(0, 1, 0, -170deg);
    transform: perspective(25.000em) translate3d(0, 0, 9.375em) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  80% {
    -webkit-transform: perspective(25.000em) scale3d(.95, .95, .95);
    transform: perspective(25.000em) scale3d(.95, .95, .95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  to {
    -webkit-transform: perspective(25.000em);
    transform: perspective(25.000em);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

.flip {
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
  -webkit-animation-name: flip;
  animation-name: flip;
  animation-duration:5s;
}

.flip-container {
	perspective: 62.500em;
}
	
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}

.flip-container, .front, .back {
	width: 84.375em;
	height: 20.000em;
}


.flipper {
	transition: 7s;
	transform-style: preserve-3d;

	position: relative;
}


.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}


.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}


.back {
	transform: rotateY(180deg);
}
.flip-container2 {
  perspective: 62.500em;
}
 
  .flip-container2:hover .flipper2, .flip-container2.hover .flipper2 {
    transform: rotateY(180deg);
  }

.flip-container2, .front2, .back2 {
  width: 90.0em;
  height: 12.500em;
}


.flipper2 {
  transition: 7s;
  transform-style: preserve-3d;

  position: relative;
}


.front2, .back2 {
  backface-visibility: hidden;

  position: absolute;
  top: 0;
  left: 0;
}


.front2 {
  z-index: 2;
  /* for firefox 31 */
  transform: rotateY(0deg);
}


.back2 {
  transform: rotateY(180deg);
}
@-webkit-keyframes rollIn {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes rollIn {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.rollIn {
  -webkit-animation-name: rollIn;
  animation-name: rollIn;
  animation-duration: 3s
}

.animated
{
	-webkit-animation-duration: 5s; 
            animation-duration: 5s; 
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both; 
}
.caption span.border {
 
  color: #fff;
  padding: 18px;
  font-size: 45px;
  letter-spacing: 10px;
  text-align: center;
  animation-duration: 5s
}
  @-webkit-keyframes bounceInLeft {
            0% {
               opacity: 0;
               -webkit-transform: translateX(-2000px);
            }
            60% {
               opacity: 1;
               -webkit-transform: translateX(30px);
            }
            80% {
               -webkit-transform: translateX(-10px);
            }
            100% {
               -webkit-transform: translateX(0);
            }
         }
         
         @keyframes bounceInLeft {
            0% {
               opacity: 0;
               transform: translateX(-2000px);
            }
            60% {
               opacity: 1;
               transform: translateX(30px);
            }
            80% {
               transform: translateX(-10px);
            }
            100% {
               transform: translateX(0);
            }
         }
         
         .bounceInLeft {
            -webkit-animation-name: bounceInLeft;
            animation-name: bounceInLeft;
         }

.circle{
			width: 4.375em;
		    height: 4.375em;
		    -webkit-border-radius: 1.563em;
		    -moz-border-radius: 1.563em;
		    border-radius: 2.813em;
		    box-shadow: 0.625em -0.625em #CCC;
		    position:fixed;
		   
		    background-color: white; 
		    box-shadow: inset 0.625em -0.625em 0.625em rgba(0,0,0,0.6);
			font: bold ;
		  	z-index : 1;
		    top:0.500em;
		    left:3px;
		    background-image: url("nmr.jpg");
    		background-repeat: no-repeat;
    		background-size: contain;
			z-index : 1;
    top:0.500em;
    left:0.188em;
     transition-duration: 2s;
    	}
		.circle:hover{
		transform :   rotate(360deg);
		}
    #vr
    {
      width: 3.125em;
          height: 3.125em;
            -webkit-border-radius: 1.563em;
          -moz-border-radius: 1.563em;
          border-radius: 1.563em;
          background: rgb(17, 39, 17);
          box-shadow: 0.625em -0.625empx #CCC;
          position:fixed;
          border: solid 1px #555; 
          background-color: white;
          box-shadow: inset 0.625em -0.625em 1.563em rgba(0,0,0,0.6);
          z-index: 1;
          left:83.125em;
          top:37.625em;
          background-image: url("voiceimage.png");
        background-repeat: no-repeat;
        background-size: contain;
    }
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 01;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
#bgimg-1
{
	 transition: 1s;
    transition-timing-function: linear;
}
#bgimg-2
{
	 transition: 1s;
    transition-timing-function: linear;
}
#bgimg-3
{
	 transition: 1s;
    transition-timing-function: linear;
}
.bgimg-1  {
  background-image: url("7.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("2.jpg");
  min-height: 25.0em;
}

.bgimg-3 {
  background-image: url("3.jpg");
  min-height: 25.0em;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}



h3 {
  letter-spacing: 0.313em;
  text-transform: uppercase;
  font: 1.250em "Lato", sans-serif;
  color: #111;
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
    padding-top: 3.750em;
	
}

.sidenav a {
    padding: 0.500em 0.500em 0.500em 2.000em;
    text-decoration: none;
    font-size: 1.563em;
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
    right: 1.563em;
    font-size: 2.250em;
    margin-left: 3.125em;}
#sp{
 position:fixed;
 
 }


#disp{
display:none;
}
#video{
display:none;}
#canvas{
display:none;}

</style>
<script>
var start_time ;
var end_time;
var k=7;
function track()
{
window.location="login.php"

 }
 
 function track2()
 {
	 
	 window.location="Standings.php";
 }
function openNav() {
  
    document.getElementById("mySidenav").style.width = "250px";
	//document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	document.getElementById("bgimg-1").style.opacity = "0.5";
	document.getElementById("bgimg-2").style.opacity = "0.5";
	document.getElementById("bgimg-3").style.opacity = "0.5";
	document.getElementById("bgimg-4").style.opacity = "0.5";
  document.getElementById("circle").style.opacity="0";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	document.getElementById("bgimg-1").style.opacity = "1";
	document.getElementById("bgimg-2").style.opacity = "1";
	document.getElementById("bgimg-3").style.opacity = "1";
	document.getElementById("bgimg-4").style.opacity = "1";
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
<body onload="abc()">
<div style="cursor: pointer"; id="vr" onclick="startDictation(event)" ></div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Standings.php">Standings</a>
  <a href="schedule.php">Points Table</a>
  <a href="gallery.php">Gallery</a>
  <a href=<?php if($one==0){ echo "login.php"; } else { echo "profile.php" ;} ?>> <?php if($one==0){ echo "SIGN IN"; } else { echo "Your Details" ;}?></a>
  <a href="merchandise.php">Merchandise </a>
  <a href="profiles.php">Profile </a>
  <a href="game.html">Game </a>
   <a href="timerclock.php">Next Match </a>
</div>
<div class="circle" id="circle" style="cursor: pointer; background-color: rgb(0, 0, 230);" onclick="openNav()"></div>
<div class="bgimg-1" id="bgimg-1">
  <div  class="caption animated flip">
    <span class="border bounceInLeft">HOOPS OF GLORY</span>
  </div>
</div>
<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
<div class="flipper">
	<div class="front">
<div  style="color: #777;background-color:white;text-align:center;padding:3.0em 4.000em;text-align: justify;">
  <h3 style="text-align:center;">About NBA</h3>
  <p  class="rollIn">The National Basketball Association (NBA) is the pre-eminent men's professional basketball league in North America, and is widely considered to be the premier men's professional basketball league in the world. It has 30 teams (29 in the United States and 1 in Canada), and is an active member of USA Basketball (USAB),[2] which is recognized by FIBA (also known as the International Basketball Federation) as the national governing body for basketball in the United States. The NBA is one of the four major professional sports leagues in the United States and Canada.

The league was founded in New York City on June 6, 1946, as the Basketball Association of America. The league adopted the name National Basketball Association on August 3, 1949, after merging with its rival National Basketball League (NBL). The league's several international as well as individual team offices are directed out of its head offices located in the Olympic Tower at 645 Fifth Avenue in New York City. NBA Entertainment and NBA TV studios are directed out of offices located in Secaucus, New Jersey.</p>
</div>
</div>
<div class="back">
		<h1 id="backpage">WELCOME TO HOOPS OF GLORY</h1>
		</div>
</div>

</div>

<div class="bgimg-2" id="bgimg-2" >
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>
<div class="flip-container2" ontouchstart="this.classList.toggle('hover');">
<div class="flipper2">
  <div class="front2">
<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>The 50 Greatest Players in National Basketball Association History (also referred to as NBA's 50th Anniversary All-Time Team or NBA's Top 50) were chosen in 1996 to honor the fiftieth anniversary of the founding of the National Basketball Association (NBA). These fifty players were selected through a vote by a panel of media members, former players and coaches, and current and former general managers.</p>
  </div>
</div>
</div>
<div class="back2" style="cursor: pointer" onclick="track2()"  >
    <h1 id="backpage" >GO TO POINTS TABLE FOR INFO</h1>
    </div>
</div>

</div>

<div class="bgimg-3" id = "bgimg-3" >
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>
<div class="flip-container2" ontouchstart="this.classList.toggle('hover');">
<div class="flipper2">
  <div class="front2">
<div style="position:relative;"  >
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:60px 80px;text-align: justify;">
    <p>The National Basketball Association Most Valuable Player (MVP) is an annual National Basketball Association (NBA) award given since the 1955 - 56 NBA season to the best performing player of the regular season. .</p>
  </div>
</div>
</div>
<div class="back2" style="cursor: pointer" onclick="track()">
    <h1 id="backpage">PLEASE SIGN FOR UPDATES AND RANKING</h1>
    </div>
</div>
</div>

<div class="bgimg-1" id = "bgimg-4">
  <div class="caption">
    <span class="border">&copy Hoops Of Glory 2016</span>
  </div>
</div>



<script>
/*function abc()
{
	video=document.getElementById('video')
canvas=document.getElementById('canvas')
_=canvas.getContext('2d')
ccanvas=document.getElementById('comp')
c_=ccanvas.getContext('2d')
navigator.webkitGetUserMedia({audio:false,video:true},function(stream){
	s=stream
	video.src=window.URL.createObjectURL(stream)
	video.addEventListener('play',
		function(){setInterval(dump,1000/25)}
	)
},function(){
	throw new Error('OOOOOOOH! DEEEEENIED!');
})
compression=5
width=height=0
function dump(){
	if(canvas.width!=video.videoWidth){
		width=Math.floor(video.videoWidth/compression)
		height=Math.floor(video.videoHeight/compression)
		canvas.width=ccanvas.width=width
		canvas.height=ccanvas.height=height
	}
	_.drawImage(video,width,0,-width,height)
	draw=_.getImageData(0,0,width,height)
	c_.putImageData(draw,0,0)
	skinfilter()
	test()	
}
huemin=0.0
huemax=0.10
satmin=0.0
satmax=1.0
valmin=0.4
valmax=1.0
function skinfilter(){
	
	skin_filter=_.getImageData(0,0,width,height)
	var total_pixels=skin_filter.width*skin_filter.height
	var index_value=total_pixels*4
	
	var count_data_big_array=0;
	for (var y=0 ; y<height ; y++)
	{
		for (var x=0 ; x<width ; x++)
		{
			index_value = x+y*width
			r = draw.data[count_data_big_array]
            		g = draw.data[count_data_big_array+1]
            		b = draw.data[count_data_big_array+2]
            		a = draw.data[count_data_big_array+3]

            		hsv = rgb2Hsv(r,g,b);
            		//When the hand is too lose (hsv[0] > 0.59 && hsv[0] < 1.0)
			//Skin Range on HSV values
			if(((hsv[0] > huemin && hsv[0] < huemax)||(hsv[0] > 0.59 && hsv[0] < 1.0))&&(hsv[1] > satmin && hsv[1] < satmax)&&(hsv[2] > valmin && hsv[2] < valmax)){

	       			skin_filter[count_data_big_array]=r
				skin_filter[count_data_big_array+1]=g
				skin_filter[count_data_big_array+2]=b
				skin_filter[count_data_big_array+3]=a
	        	}else{

	        		skin_filter.data[count_data_big_array]=
				skin_filter.data[count_data_big_array+1]=
				skin_filter.data[count_data_big_array+2]=0
				skin_filter.data[count_data_big_array+3]=0
	        	}

            		count_data_big_array=index_value*4;
		}
	}
	draw=skin_filter
	//console.log(draw);
}

function rgb2Hsv(r, g, b){
	
    r = r/255
    g = g/255
    b = b/255;

    var max = Math.max(r, g, b)
    var min = Math.min(r, g, b);

    var h, s, v = max;

    var d = max - min;

    s = max == 0 ? 0 : d / max;

    if(max == min){
        h = 0; // achromatic
    }else{

        switch(max){
            case r: h = (g - b) / d + (g < b ? 6 : 0); break;
            case g: h = (b - r) / d + 2; break;
            case b: h = (r - g) / d + 4; break;
    	}
   		h /= 6;
   	}

    return [h, s, v];
}

last=false
thresh=150
down=false
wasdown=false
function test(){
	delt=_.createImageData(width,height)
	if(last!==false){
		var totalx=0,totaly=0,totald=0,totaln=delt.width*delt.height
		,dscl=0
		,pix=totaln*4;while(pix-=4){
			var d=Math.abs(
				draw.data[pix]-last.data[pix]
			)+Math.abs(
				draw.data[pix+1]-last.data[pix+1]
			)+Math.abs(
				draw.data[pix+2]-last.data[pix+2]
			)
			//console.log(typeof(draw.data[pix]));
			if(d>thresh){
				delt.data[pix]=160
				delt.data[pix+1]=255
					delt.data[pix+2]=
				delt.data[pix+3]=255
				totald+=1
				totalx+=((pix/4)%width)
				totaly+=(Math.floor((pix/4)/delt.height))
			}
			else{
				delt.data[pix]=
					delt.data[pix+1]=
					delt.data[pix+2]=0
				delt.data[pix+3]=0
			}
		}
	}
	//slide.setAttribute('style','display:initial')
	//slide.value=(totalx/totald)/width
	if(totald){
		down={
			x:totalx/totald,
			y:totaly/totald,
			d:totald
		}
		handledown()
	}
	//console.log(totald)
	last=draw
	c_.putImageData(delt,0,0)
}
movethresh=2
brightthresh=300
overthresh=1000
function calibrate(){
	wasdown={
		x:down.x,
		y:down.y,
		d:down.d
	}
}
avg=0
state=0//States: 0 waiting for gesture, 1 waiting for next move after gesture, 2 waiting for gesture to end
function handledown(){
	avg=0.9*avg+0.1*down.d
	var davg=down.d-avg,good=davg>brightthresh
	//console.log(davg)
	switch(state){
		case 0:
			if(good){//Found a gesture, waiting for next move
				state=1
				calibrate()
			}
			break
		case 2://Wait for gesture to end
			if(!good){//Gesture ended
				state=0
			}
			break;
		case 1://Got next move, do something based on direction
			var dx=down.x-wasdown.x,dy=down.y-wasdown.y
			var dirx=Math.abs(dy)<Math.abs(dx)//(dx,dy) is on a bowtie
			console.log(Math.abs(dy)-Math.abs(dx));
			console.log(good,davg)
			if(dx<-movethresh&&dirx){
				console.log('right')
				//window.location="standings.html"
			}
			else if(dx>movethresh&&dirx){
				console.log('left')
				//window.location="nm.html"
			}
			if(dy>movethresh&&!dirx){
				if(davg>overthresh){
					console.log('over up')
					window.scrollBy(dx * 200, dy * 200);
				}
				else{
					console.log('up')
					window.scrollBy(dx * 200, dy * 200);
				}
			}
			else if(dy<-movethresh&&!dirx){
				if(davg>overthresh){
					console.log('over down')
					window.scrollBy(dx * 200, dy * 200);
				}
				else{
					console.log('down')
					window.scrollBy(dx * 200, dy * 200);
				}
			}
			state=2
			break
	}
}
}*/
    </script>
</body>
</html>