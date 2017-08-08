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
	<title>Scores and Schedule</title>
	<style>
  #time{
    border:none;
  }
  h1{
    float: right;
    padding-right: 125px;
  }
  td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
  }
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
    background-color: white;  
  }
  .schedule{
    width: 100%;
    height:1500px;
    background-image: url("1.jpeg");
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    font-family: sans-serif;
    color: #3EA7E3;
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
  

  function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
     // document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
      //document.getElementById("bgimg-1").style.opacity = "0.5";
      //document.getElementById("bgimg-2").style.opacity = "0.5";
     // document.getElementById("bgimg-3").style.opacity = "0.5";
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
  <a href="scrolling.php">HOME </a>
  <a href="Standings.php">Standings</a>
  <a href="merchandise.php">Merchandise</a>
  <a href="gallery.php">Gallery</a>
  <a href=<?php if($one==0){ echo "login.php"; } else { echo "profile.php" ;} ?>> <?php if($one==0){ echo "SIGN IN"; } else { echo "Your Details" ;}?></a>
  <a href="profile.php">Profile </a>
  <a href="game.html">Game </a>
   <a href="timerclock.php">Next Match </a>
</div>
<div class="circle" id="circle" style="cursor: pointer; background-color: rgb(0, 0, 230);" onclick="openNav()"></div>
	<span style="font-size:30px;cursor:pointer;-webkit-transform: translate3d(0,0,0.7);transform: translate3d(0,0,0);position:fixed;
color:white" onclick="openNav()">&#9776;</span>
	<div id="mySidenav" class="sidenav">
		    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="main.php">Home</a>
				<a href="Standings.php">Standings</a>
				<a href="gallery.php">Gallery</a>
				<a href="login.php">Login / Signup</a>
        <a href="profiles.php">Profiles</a>
	</div>
  <div class="schedule" align ="center">
    <br>
    <h1>Scores and Schedule</h1>
    <br>
    <table align="center">
      <tr>
        <th rowspan = 1 colspan = 3 id="time"><span style="font-size:30px">10:30</span> PM ET</th>
        <th> <span style="font-size:30px">Q</span>1</th>
        <th> <span style="font-size:30px">Q</span>2</th>
        <th> <span style="font-size:30px">Q</span>3</th>
        <th> <span style="font-size:30px">Q</span>4</th>
        <th><span style="font-size:30px"> T </span></th>
        <th rowspan=1> Leaders </th>
      </tr>
      <tr>
        <td colspan=3><img src="CAVS.jpg" alt="GSW" height=50px width=50px></td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td> <span style="font-weight:bold">-</span></td>
      </tr>
      <tr>
        <td colspan=3><img src="GSW.jpg" alt="CLE" height=50px width=50px></td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td> <span style="font-weight:bold">-</span></td>
      </tr>
    </table>
    <br>
    <table align="center">
      <tr>
        <th rowspan = 1 colspan = 3 id="time"><span style="font-size:30px">3:43</span> Q2</th>
        <th> <span style="font-size:30px">Q</span>1</th>
        <th> <span style="font-size:30px">Q</span>2</th>
        <th> <span style="font-size:30px">Q</span>3</th>
        <th> <span style="font-size:30px">Q</span>4</th>
        <th><span style="font-size:30px"> T </span></th>
        <th rowspan=1> Leaders </th>
      </tr>
      <tr>
        <td colspan=3><img src="LAL.jpg" alt="LAL" height=50px width=50px></td>
        <td>29</td>
        <td>18</td>
        <td>-</td>
        <td>-</td>
        <td>47</td>
        <td> <span style="font-weight:bold">J. Clarkson</span> 17</td>
      </tr>
      <tr>
        <td colspan=3><img src="LAC.jpg" alt="LAC" height=50px width=50px></td>
        <td>35</td>
        <td>16</td>
        <td>-</td>
        <td>-</td>
        <td>51</td>
        <td> <span style="font-weight:bold">C. Paul</span> 22</td>
      </tr>
    </table>
    <br>
    <table align="center">
      <tr>
        <th rowspan = 1 colspan = 3 id="time"><span style="font-size:30px">Half Time</span></th>
        <th> <span style="font-size:30px">Q</span>1</th>
        <th> <span style="font-size:30px">Q</span>2</th>
        <th> <span style="font-size:30px">Q</span>3</th>
        <th> <span style="font-size:30px">Q</span>4</th>
        <th><span style="font-size:30px"> T </span></th>
        <th rowspan=1> Leaders </th>
      </tr>
      <tr>
        <td colspan=3><img src="/Users/Reddy/Desktop/Web Technologies Mini Project Trial/MAVS.png" alt="DAL" height=50px width=50px></td>
        <td>30</td>
        <td>25</td>
        <td>-</td>
        <td>-</td>
        <td>55</td>
        <td> <span style="font-weight:bold">D. Nowitzki</span> 20</td>
      </tr>
      <tr>
        <td colspan=3><img src="HOU.jpg" alt="HOU" height=50px width=50px></td>
        <td>28</td>
        <td>28</td>
        <td>-</td>
        <td>-</td>
        <td>56</td>
        <td> <span style="font-weight:bold">J. Harden</span> 25</td>
      </tr>
    </table>
    <br>
    <table align="center">
      <tr>
        <th rowspan = 1 colspan = 3 id="time"><span style="font-size:30px">5:54</span> Q3</th>
        <th> <span style="font-size:30px">Q</span>1</th>
        <th> <span style="font-size:30px">Q</span>2</th>
        <th> <span style="font-size:30px">Q</span>3</th>
        <th> <span style="font-size:30px">Q</span>4</th>
        <th><span style="font-size:30px"> T </span></th>
        <th rowspan=1> Leaders </th>
      </tr>
      <tr>
        <td colspan=3><img src="SAS.jpg" alt="SAS" height=50px width=50px></td>
        <td>29</td>
        <td>31</td>
        <td>20</td>
        <td>-</td>
        <td>80</td>
        <td> <span style="font-weight:bold">K. Leonard</span> 31</td>
      </tr>
      <tr>
        <td colspan=3><img src="OKC.jpg" alt="OKC" height=50px width=50px></td>
        <td>28</td>
        <td>22</td>
        <td>25</td>
        <td>-</td>
        <td>75</td>
        <td> <span style="font-weight:bold">R. Westbrook</span> 32</td>
      </tr>
    </table>
    <br>
    <table align="center">
      <tr>
        <th rowspan = 1 colspan = 3 id="time"><span style="font-size:30px">1:51</span> Q4</th>
        <th> <span style="font-size:30px">Q</span>1</th>
        <th> <span style="font-size:30px">Q</span>2</th>
        <th> <span style="font-size:30px">Q</span>3</th>
        <th> <span style="font-size:30px">Q</span>4</th>
        <th><span style="font-size:30px"> T </span></th>
        <th rowspan=1> Leaders </th>
      </tr>
      <tr>
        <td colspan=3><img src="CHI.jpg" alt="CHI" height=50px width=50px></td>
        <td>34</td>
        <td>35</td>
        <td>31</td>
        <td>29</td>
        <td>129</td>
        <td> <span style="font-weight:bold">D. Wade</span> 40</td>
      </tr>
      <tr>
        <td colspan=3><img src="POR.png" alt="POR" height=50px width=50px></td>
        <td>30</td>
        <td>40</td>
        <td>35</td>
        <td>28</td>
        <td>133</td>
        <td> <span style="font-weight:bold">D. Lilliard</span> 45</td>
      </tr>
    </table>
    <br>
    <table align="center">
      <tr>
        <th rowspan = 1 colspan = 3 id="time"><span style="font-size:30px">FINAL</span></th>
        <th> <span style="font-size:30px">Q</span>1</th>
        <th> <span style="font-size:30px">Q</span>2</th>
        <th> <span style="font-size:30px">Q</span>3</th>
        <th> <span style="font-size:30px">Q</span>4</th>
        <th><span style="font-size:30px"> T </span></th>
        <th rowspan=1> Leaders </th>
      </tr>
      <tr>
        <td colspan=3><img src="IND.jpg" alt="IND" height=50px width=50px></td>
        <td>33</td>
        <td>38</td>
        <td>21</td>
        <td>29</td>
        <td>121</td>
        <td> <span style="font-weight:bold">P. George</span> 34</td>
      </tr>
      <tr>
        <td colspan=3><img src="DET.png" alt="DET" height=50px width=50px></td>
        <td>20</td>
        <td>25</td>
        <td>35</td>
        <td>38</td>
        <td>118</td>
        <td> <span style="font-weight:bold">R. Jackson</span> 31</td>
      </tr>
    </table>
    <br>
    <br>
    <br>
    <br>
    <span class="border" >&copy Hoops Of Glory 2016</span>
  </div>
</body>
</html>