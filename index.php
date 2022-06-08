<?php
  include_once 'php/config.php';
?>

<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri Mar 11 2022 04:28:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="622aab6ac3c1bf3326936a34" data-wf-site="621910c2f2818f47edcbc8e4">
<head>
  <?php
    session_start();
  ?>
  <meta charset="utf-8">
  <title>Login</title>
  <meta content="Login" property="og:title">
  <meta content="Login" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/cmsciproject.webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <style>
  select {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    appearance: none !important;
    padding: 8px !important;
    background: #fff !important;
   /* border: none !important;*/
    border-radius: 3px !important;
    padding: 8px 24px 8px 8px !important;
    /*font-size: 1em !important;*/
}
.select-container {
  position:relative !important;
  /*display: inline !important;*/
  }
.select-container:after {
  content:"" !important;
  width:0 !important;
  height:0 !important;
  position:absolute !important;
  pointer-events: none !important;
  }
.select-container:after {
    border-left: 5px solid transparent !important;
    border-right: 5px solid transparent !important;
right: 6px !important;
    top: 16px !important;
    border-top: 8px solid black !important;
    opacity: 0.5 !important;
}
select::-ms-expand {
    display: none !important;
}
</style>
</head>
<body class="body">
  <div class="page-wrap">
    <div class="section wf-section">
      <div class="nav-header brand-blue">
        <div class="nav-head-inner">
          <div class="nav-header-content">
            <div class="logo-left"><img src="images/mountlogo.svg" height="32" alt="" class="nav-logo"></div>
            <div class="nav-header-text">
              <div class="nav-head-company">Phillips Library</div>
              <div class="nav-head-domain">Manuscript Card Catalog</div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="grid">
          <div id="w-node-d021623e-769c-0fb5-3943-9809caa25b28-26936a34" class="column-2xlarge text-align-center"></div>
          <div id="w-node-_20824167-c592-632b-04e9-441d02fe0559-26936a34" class="card-shadow grid">
            <h1 class="heading">Login</h1>
            <div class="w-form">
              <form id="email-form" name="email-form" data-name="Email Form" method="post" class="form" action="php/login.php">
                <label for="Email">Email Address</label>
                <input type="email" class="w-input" autofocus="true" maxlength="256" name="Email" data-name="Email" placeholder="Email Address" id="Email" required="">
                <label for="Password">Password</label>
                <input type="password" class="w-input" maxlength="256" name="Password" data-name="Password" placeholder="Password" id="Password" required="">
                <input type="submit" name="submit" value="Login" data-wait="Please wait..." class="button-primary w-button">
              </form>
              <?php
                if(isset($_GET['error'])) {
                  if($_GET["error"] == "wrongemail") {
                    echo "<div class='error-message'>
                            <div>Incorrect Email!</div>
                          </div>";
                  } else if($_GET["error"] == "wrongpassword") {
                    echo "<div class='error-message'>
                            <div>Incorrect Password!</div>
                          </div>";
                  }
                }
              ?>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=621910c2f2818f47edcbc8e4" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
