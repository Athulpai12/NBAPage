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
#h2{
	 margin-left: 38%;
}
h1{
	 color: white;
	margin-left: 30%;
	font-size: 50px;
}
body
{
	 background-color: black;
}
.numbers {
    border-style: ridge;    /* options are none, dotted, dashed, solid, double, groove, ridge, inset, outset */
    border-width: 2px;
    border-color: #666666;  /* change the border color using the hexadecimal color codes for HTML */
    background: #222222;    /* change the background color using the hexadecimal color codes for HTML */
    padding: 2px 0px;
    width: 90px;
    text-align: center; 
    font-family: Arial; 
    font-size: 50px;
    font-weight: bold;    /* options are normal, bold, bolder, lighter */
    font-style: normal;   /* options are normal or italic */
    color: #FFFFFF;       /* change color using the hexadecimal color codes for HTML */
}
.title {    /* the styles below will affect the title under the numbers, i.e., “Days”, “Hours”, etc. */
    border: none;    
    padding: 0px;
    width: 55px;
    text-align: center; 
    font-family: Arial; 
    font-size: 10px; 
    font-weight: normal;  /* options are normal, bold, bolder, lighter */
    color: #DDDDDD;       /* change color using the hexadecimal color codes for HTML */
    background: transparent;    /* change the background color using the hexadecimal color codes for HTML */
}
#table {
    width: 400px;
    border: none;    /* options are none, dotted, dashed, solid, double, groove, ridge, inset, outset */
    margin: 0px auto;
    position: relative;    /* leave as "relative" to keep timer centered on your page, or change to "absolute" then change the values of the "top" and "left" properties to position the timer */
    top: 10px;        /* change to position the timer */
    left: 0px;        /* change to position the timer; delete this property and it's value to keep timer centered on page */
}
#map
{
	margin-top: 40px;
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
.fadeInRightBig {
  -webkit-animation-name: fadeInRightBig;
  animation-name: fadeInRightBig;
  -webkit-animation-duration: 1.2s;
  animation-duration: 1.2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes fadeInRightBig {
  0% {
  opacity: 0;
  -webkit-transform: translate3d(2000px, 0, 0);
  transform: translate3d(2000px, 0, 0);
  }
  100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
  }
  }
  @keyframes fadeInRightBig {
  0% {
  opacity: 0;
  -webkit-transform: translate3d(2000px, 0, 0);
  transform: translate3d(2000px, 0, 0);
  }
  100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
  }
  }
   .fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
  animation-name: fadeInLeftBig;
  -webkit-animation-duration: 1.2s;
  animation-duration: 1.2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes fadeInLeftBig {
  0% {
  opacity: 0;
  -webkit-transform: translate3d(-2000px, 0, 0);
  transform: translate3d(-2000px, 0, 0);
  }
  100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
  }
  }
  @keyframes fadeInLeftBig {
  0% {
  opacity: 0;
  -webkit-transform: translate3d(-2000px, 0, 0);
  transform: translate3d(-2000px, 0, 0);
  }
  100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
  }
  }
#myProgress {
  position: relative;
  width: 100%;
  height: 30px;
  background-color: #ddd;
}

#myBar {
  position: absolute;
  width: 1%;
  height: 100%;
  background-color: #4CAF50;
}

#label {
  text-align: center;
  line-height: 30px;
  color: white;
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


var current="THE GAME STARTED!";   
var year=2016;   
var month=11;      
var day=18;      
var hour=18;     
var minute=38;   
var tz=-5;        //-

//    DO NOT CHANGE THE CODE BELOW!
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function countdown(yr,m,d,hr,min){
    theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
    var today=new Date();
    var todayy=today.getYear();
    if (todayy < 1000) {todayy+=1900;}
    var todaym=today.getMonth();
    var todayd=today.getDate();
    var todayh=today.getHours();
    var todaymin=today.getMinutes();
    var todaysec=today.getSeconds();
    var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
    var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
    var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
    var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
    var dd=futurestring-todaystring;
    var dday=Math.floor(dd/(60*60*1000*24)*1);
    var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
    var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
    var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
    if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
        document.getElementById('count2').innerHTML=current;
        document.getElementById('count2').style.display="block";
        document.getElementById('count2').style.width="390px";
        document.getElementById('dday').style.display="none";
        document.getElementById('dhour').style.display="none";
        document.getElementById('dmin').style.display="none";
        document.getElementById('dsec').style.display="none";
        document.getElementById('days').style.display="none";
        document.getElementById('hours').style.display="none";
        document.getElementById('minutes').style.display="none";
        document.getElementById('seconds').style.display="none";
        document.getElementById('spacer1').style.display="none";
        document.getElementById('spacer2').style.display="none";
        return;
    }
    else {
        document.getElementById('count2').style.display="none";
        document.getElementById('dday').innerHTML=dday;
        document.getElementById('dhour').innerHTML=dhour;
        document.getElementById('dmin').innerHTML=dmin;
        document.getElementById('dsec').innerHTML=dsec;
        setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
    }
}
function openNav() {
  
    document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("table").style.opacity="0.5";
	document.getElementById("map").style.opacity="0.5";
	//document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	//document.getElementById("bgimg-1").style.opacity = "0.5";
	////document.getElementById("bgimg-2").style.opacity = "0.5";
	//document.getElementById("bgimg-3").style.opacity = "0.5";
	//document.getElementById("bgimg-4").style.opacity = "0.5";
  document.getElementById("circle").style.opacity="0";
}

function closeNav() {
//document.getElementById("standings").style.opacity="1";
   document.getElementById("mySidenav").style.width = "0";
   document.getElementById("table").style.opacity="1";
	document.getElementById("map").style.opacity="1";
	//document.getElementById("bgimg-1").style.opacity = "1";
	//document.getElementById("bgimg-2").style.opacity = "1";
	//document.getElementById("bgimg-3").style.opacity = "1";
	//document.getElementById("bgimg-4").style.opacity = "1";
   document.getElementById("circle").style.opacity="1";
}

</script>



	


</head>
<body onload="">
<div style="cursor: pointer"; id="vr" onclick="startDictation(event)" ></div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="scrolling.php">HOME </a>
  <a href="Standings.php">Standings</a>
  <a href="schedule.php">Points Table</a>
  <a href="gallery.php">Gallery</a>
   <a href=<?php if($one==0){ echo "login.php"; } else { echo "profile.php" ;} ?>> <?php if($one==0){ echo "SIGN IN"; } else { echo "Your Details" ;}?></a>
  <a href="merchandise.php">Merchandise </a>
  <a href="profiles.php">Profile </a>
  <a href="game.html">Game </a>
</div>
<div class="circle" id="circle" style="cursor: pointer; background-color: rgb(0, 0, 230);" onclick="openNav()"></div>
<h1 class="fadeInRightBig">The Next Match Starts After </h1>
<table id="table" border="0">
    <tr>
        <td align="center" colspan="6"><div class="numbers" id="count2" style="padding: 10px; "></div></td>
    </tr>
    <tr id="spacer1">
        <td align="center" ><div class="title" ></div></td>
        <td align="center" ><div class="numbers" id="dday"></div></td>
        <td align="center" ><div class="numbers" id="dhour"></div></td>
        <td align="center" ><div class="numbers" id="dmin"></div></td>
        <td align="center" ><div class="numbers" id="dsec"></div></td>
        <td align="center" ><div class="title" ></div></td>
    </tr>
    <tr id="spacer2">
        <td align="center" ><div class="title" ></div></td>
        <td align="center" ><div class="title" id="days">Days</div></td>
        <td align="center" ><div class="title" id="hours">Hours</div></td>
        <td align="center" ><div class="title" id="minutes">Minutes</div></td>
        <td align="center" ><div class="title" id="seconds">Seconds</div></td>
        <td align="center" ><div class="title" ></div></td>
    </tr>
</table>







<script>
 {
	 countdown(year,month,day,hour,minute)
	 var today=new Date("November 14, 2016 01:15:00");
	 var micr = today.getDate();
	 var todd = new Date();
	 var d = todd.getDate();
	 //alert(d)
	 var total = (micr- d)*24*60*10;
	// alert(total)
  var elem = document.getElementById("myBar");
  var width = 1;
  
}
</script>
<h1 id="h2" class="fadeInLeftBig">Match Location </h1>
<div id="map" style="width:100%;height:450px"></div>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
   google.maps.event.addListener(marker,'click',function() {
    map.setZoom(9);
    map.setCenter(marker.getPosition());
  });
}
var start_time ;
  var end_time;
  var k=7;
  

  
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
                var location = (event.results[i][0].transcript).indexOf("location");
                var bac = (event.results[i][0].transcript).indexOf("back");
                var n = (event.results[i][0].transcript).indexOf("ranking")
                var q = (event.results[i][0].transcript).indexOf("hello")
                var qw = (event.results[i][0].transcript).indexOf("about")
                var prev = (event.results[i][0].transcript).indexOf("previous");
                var g = (event.results[i][0].transcript).indexOf("Seattle")
                var v = (event.results[i][0].transcript).indexOf("Chicago")
                var backg = (event.results[i][0].transcript).indexOf("change")
                var hybrid = (event.results[i][0].transcript).indexOf("hybrid")
                var all = (event.results[i][0].transcript).indexOf("all")
                var login = (event.results[i][0].transcript).indexOf("login")
				 var road = (event.results[i][0].transcript).indexOf("road")
				var satellite = (event.results[i][0].transcript).indexOf("satellite")
				 var connect = (event.results[i][0].transcript).indexOf("connect")
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
                   
                  }
                  goBack();
            }
            else if(location!=-1){
				function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } 
}

function showPosition(position) {
  
               
  var myCenter = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
   google.maps.event.addListener(marker,'click',function() {
    map.setZoom(9);
    map.setCenter(marker.getPosition());
  });
}

                  getLocation();
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
            else if(hybrid!=-1){
                function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } 
}

function showPosition(position) {
  
               
  var myCenter = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 18, mapTypeId:google.maps.MapTypeId.HYBRID};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
   google.maps.event.addListener(marker,'click',function() {
    map.setZoom(9);
    map.setCenter(marker.getPosition());
  });
}

                  getLocation();
            }
			else if(road!=-1){
                function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } 
}

function showPosition(position) {
  
               
  var myCenter = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 18, mapTypeId:google.maps.MapTypeId.ROADMAP};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
   google.maps.event.addListener(marker,'click',function() {
    map.setZoom(9);
    map.setCenter(marker.getPosition());
  });
}

                  getLocation();
            }
			else if(satellite!=-1){
                function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } 
}

function showPosition(position) {
  
               
  var myCenter = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 18, mapTypeId:google.maps.MapTypeId.SATELLITE};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
   google.maps.event.addListener(marker,'click',function() {
    map.setZoom(9);
    map.setCenter(marker.getPosition());
  });
}

                  getLocation();
            }
			else if(connect!=-1){
                function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } 
}

function showPosition(position) {
  
               
  var myCenter = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
  var myCenter2 = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom:6 };
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
  var marker2 = new google.maps.Marker({position:myCenter2});
  marker2.setMap(map);
   google.maps.event.addListener(marker,'click',function() {
    map.setZoom(9);
    map.setCenter(marker.getPosition());
  });
}

                  getLocation();
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
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBH5eLTMGYAGM34zXCsrkkKfs06CcWhLF0&callback=myMap"
  type="text/javascript"></script>

</body>
</html>