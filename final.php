<html>
<script type = "text/JavaScript">
         <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
      </script><body onload = "JavaScript:AutoRefresh(32000);"><style>
.snowflake {
  color: #8798b0;
  font-size: 1em;
  font-family: Arial, sans-serif;
  text-shadow: 0 0 3px #000;
}
@-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%,100%{-webkit-transform:translateX(0);transform:translateX(0)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%,100%{transform:translateX(0)}50%{transform:translateX(80px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}.snowflake:nth-of-type(10){left:25%;-webkit-animation-delay:2s,0s;animation-delay:2s,0s}.snowflake:nth-of-type(11){left:65%;-webkit-animation-delay:4s,2.5s;animation-delay:4s,2.5s}
</style><div class="snowflakes" aria-hidden="true">
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div><div class="snowflake">
  ❅
  </div>
  </div>
  <div id="countdown">
  </div></style>
  <script>
 
var timeleft = 30;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("countdown").innerHTML = "OTP EXPIRED! Page Will Refresh Now for new OTP!";
  } else {
    document.getElementById("countdown").innerHTML = "OTP will expire in "+timeleft + " seconds";
  }
  timeleft -= 1;
}, 1000);
</script>

<?php
session_start();

$rndno=rand(100000, 999999);//OTP generate
$sub = "OTP Verification for logging in into the librarium.";
//the message
$msg=rand(100000, 999999);//OTP generate
//recipient email here
$rec = "saakshimittal123@gmail.com";
//send email
mail($rec,$sub,$msg);
$_SESSION['message']=$msg;
echo '<br><br><br><center><form method="POST" action="final2.php"><table border="2">
<tr><td><label><br>Enter OTP :<input type="text" name="otp"></label><br><br></td></tr>
<tr><td><br><center><input type="submit" id="x" value="Verify"  /></center><br></td></tr></table></form>';
echo '<br><a href="final.php"><h1>Resend OTP</h1></a></center>';
?>
</body></html>
	