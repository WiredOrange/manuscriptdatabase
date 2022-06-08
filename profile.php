<?php
  include_once 'php/config.php';
?>

<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri Mar 11 2022 04:28:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="622aad3902ad4232bdf38f7b" data-wf-site="621910c2f2818f47edcbc8e4">
<head>
  <?php
    session_start();
    if(!isset($_SESSION["id"])) {
      header("location: ../index.php");
    }
    if(isset($_GET["user"])) {
      if($_GET["user"] == $_SESSION["id"]) {
        header("location: ../profile.php");
      }
    }
  ?>
  <meta charset="utf-8">
  <title>Profile Page</title>
  <meta content="Profile Page" property="og:title">
  <meta content="Profile Page" property="twitter:title">
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

    button, input[type="submit"], input[type="reset"] {
    	background: none;
    	color: inherit;
    	border: none;
    	padding: 0;
    	font: inherit;
    	cursor: pointer;
    	outline: inherit;
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
  <div class="flex-body">
    <div class="nav-container">
      <div data-w-id="c310cb3e-4a59-9a7f-9ebb-2754cda9a752" class="nav-handle open">
        <div class="handle top"></div>
        <div class="handle bottom"></div>
      </div>
      <div data-w-id="c310cb3e-4a59-9a7f-9ebb-2754cda9a755" class="nav-handle closed">
        <div class="handle top"></div>
        <div class="handle bottom"></div>
      </div>
      <div class="nav-header brand-blue">
        <div class="nav-head-inner">
          <div class="nav-header-content">
            <div data-w-id="c310cb3e-4a59-9a7f-9ebb-2754cda9a75b" class="logo-left"><img src="images/mountlogo.svg" height="32" alt="" class="nav-logo"></div>
            <div class="nav-header-text">
              <div class="nav-head-company">Phillips Library</div>
              <div class="nav-head-domain">Manuscript Card Catalog</div>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-items">
        <a href="dashboard.php" class="nav-item w-inline-block">
          <div class="nav-item-icon">
            <div class="icon"></div>
          </div>
          <div class="nav-label">Dashboard</div>
        </a>
        <a href="recordlist.php" class="nav-item w-inline-block">
          <div class="nav-item-icon">
            <div class="icon"><strong></strong></div>
          </div>
          <div class="nav-label">Records</div>
        </a>
        <a href="reports.php" class="nav-item w-inline-block">
          <div class="nav-item-icon">
            <div class="icon"><strong></strong></div>
          </div>
          <div class="nav-label">Reports</div>
        </a>
        <?php if($_SESSION["admin"] === 1) { ?>
          <a href="users.php" class="nav-item w-inline-block">
            <div class="nav-item-icon">
              <div class="icon"><strong></strong></div>
            </div>
            <div class="nav-label">Users</div>
          </a>
        <?php } ?>
      </div>
      <div class="nav-footer-extra">
        <div class="nav-item separator"></div>
        <a data-w-id="c310cb3e-4a59-9a7f-9ebb-2754cda9a787" href="profile.php" aria-current="page" class="nav-item bottom-item-inner dark-text w-inline-block w--current">
          <div class="nav-item-icon user-bg">
          <?php
            if(isset($_SESSION["id"])) {
              echo "<div class='user-icon'><strong class='bold-text'>" . substr($_SESSION["firstname"], 0, 1) . "</strong></div>";
            }
          ?>
          </div>
          <?php
            if(isset($_SESSION["id"])) {
              echo "<div ms-data='first-name' class='nav-label'>" . $_SESSION["firstname"] . " " . $_SESSION["lastname"] ."</div>";
            }
          ?>
          <div class="menu-dots">
            <div class="icon nav-foot-icon"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="nav-back"></div>
    <div class="main-block">
      <div class="mobile-bar">
        <div class="flex-llogo">
          <div class="logo-mob">
            <div class="logo-left"><img src="images/mountlogo.svg" height="32" alt="" class="nav-logo"></div>
          </div>
          <div class="mob-nav-title flex-logo">Manuscript Card Catelog</div>
        </div>
        <div data-w-id="a987a1aa-bbb4-c94d-58d9-79c55f3ff3d1" class="nav-trigger">
          <div class="icon burger"></div>
        </div>
      </div>






      <div class="card-shadow grid">
        <div id="w-node-_740985be-c698-682d-a81e-970a1550c28f-c79909e8" class="dash-item-title grey-3-text" style="color:#002855;font-weight: bold;">
          <?php
            if(isset($_GET['user'])){$uid=$_GET['user'];}else{$uid=$_SESSION['id'];}
            $sql = "SELECT * FROM users WHERE id=" . $uid . ";";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo $row['firstname']." ".$row['lastname'];}}
          ?>
        </div>
        <div class="quick-dets-grid">
          <div class="separator users"></div>
          <div class="detail-item">
            <div class="legend-label large">ID: </div>
            <div class="legend-label">
              <?php
                if(isset($_GET['user'])){$uid=$_GET['user'];}else{$uid=$_SESSION['id'];}
                $sql = "SELECT * FROM users WHERE id=" . $uid . ";";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['id'];}}
              ?>
            </div>
          </div>
          <div class="separator users"></div>
          <div class="detail-item">
            <div class="legend-label large">Email: </div>
            <div class="legend-label">
              <?php
                if(isset($_GET['user'])){$uid=$_GET['user'];}else{$uid=$_SESSION['id'];}
                $sql = "SELECT * FROM users WHERE id=" . $uid . ";";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['email'];}}
              ?>
            </div>
          </div>
          <div class="separator users"></div>
          <div class="detail-item">
            <div class="legend-label large">User Type: </div>
            <div class="legend-label">
              <?php
                if(isset($_GET['user'])){$uid=$_GET['user'];}else{$uid=$_SESSION['id'];}
                $sql = "SELECT * FROM users WHERE id=" . $uid . ";";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    if($row["admin"] === 1) {
                      echo "Admin";
                    } else {
                      echo "User";
                    }
                  }}
              ?>
            </div>
          </div>
          <?php
            if($_SESSION["admin"] === 1) {
              if(isset($_GET["user"])) {
          ?>
          <div class="separator users"></div>
          <form id="edituser-form" name="edituser-form" data-name="Edit User Form" action="profile.php" method="get" class="detail-item">
            <img src="images/Icon-3.svg" alt="" class="detail-icon">
            <input type="hidden" id="user" name="user" value="<?php echo $_GET['user'] ?>">
            <input type="hidden" id="edit" name="edit" value="1">
            <input type="submit" name="submit" value="Edit User" class="legend-label large">
          </form>
          <div class="separator users"></div>
          <form id="deleteuser-form" name="deleteuser-form" data-name="Delete User Form" method="post" action="php/deleteuser.php" onsubmit="return confirm('Are you sure you want to delete?');" class="detail-item">
            <img src="images/Icon-4.svg" alt="" class="detail-icon">
            <input type="hidden" name="user" id="user" value=<?php echo $_GET['user'] ?>>
            <input type="submit" name="submit" value="Delete User" class="legend-label large">
          </form>
          <?php }} ?>
          <div class="separator users"></div>
          <div class="detail-item">
            <a href="php/signout.php" class="link-block w-inline-block">
              <div class="legend-label large logout">Sign Out</div>
            </a>
          </div>
        </div>
      </div>




      <?php if($_SESSION["admin"] === 1) { ?>
        <div class="card-shadow flex-vertical">
          <div class="dash-item-title grey-3-text">User Information Entry</div>
          <div class="w-form">
            <?php
              if(isset($_GET['error'])) {
                if($_GET["error"] == "none") {
                  echo "<div class='success-message'><div>Record Entry Successful!</div></div>";
                }
                else if($_GET["error"] == "emailexists") {
                  echo "<div class='error-message'><div>Email already exists</div></div>";
                }
                else if($_GET["error"] == "pwdnomatch") {
                  echo "<div class='error-message'><div>Passwords need to match!</div></div>";
                }
              }
            ?>
            <form id="createuser-form" name="createuser-form" data-name="Create User Form" method="post" action="php/createuser.php">
              <label for="FirstName">First Name</label>
              <input type="text" class="w-input" maxlength="30" name="FirstName" data-name="FirstName" placeholder="First Name" id="FirstName" required=""
                <?php if(isset($_GET["edit"])) {
                    if(isset($_GET['user'])) {
                      $sql = "SELECT * FROM users WHERE id=" . $_GET['user'] . ";";
                      $result = mysqli_query($conn, $sql);
                      $resultCheck = mysqli_num_rows($result);
                      if($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo 'value='.$row["firstname"].'';}}}}
                ?>>
              <label for="LastName">Last Name</label>
              <input type="text" class="w-input" maxlength="30" name="LastName" data-name="LastName" placeholder="Last Name" id="LastName" required=""
                <?php if(isset($_GET["edit"])) {
                    if(isset($_GET['user'])) {
                      $sql = "SELECT * FROM users WHERE id=" . $_GET['user'] . ";";
                      $result = mysqli_query($conn, $sql);
                      $resultCheck = mysqli_num_rows($result);
                      if($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo 'value='.$row["lastname"].'';}}}}
                ?>>
              <label for="Email">Email</label>
              <input type="email" class="w-input" maxlength="50" name="Email" data-name="Email" placeholder="Email" id="Email" required=""
                <?php if(isset($_GET["edit"])) {
                    if(isset($_GET['user'])) {
                      $sql = "SELECT * FROM users WHERE id=" . $_GET['user'] . ";";
                      $result = mysqli_query($conn, $sql);
                      $resultCheck = mysqli_num_rows($result);
                      if($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo 'value='.$row["email"].'';}}}}
                ?>>
              <label for="Password">Password</label>
              <input type="password" class="w-input" maxlength="256" name="Password" data-name="Password" placeholder="Password" id="Password" required="">
              <label for="RepeatPassword">Repeat Password</label>
              <input type="password" class="w-input" maxlength="256" name="RepeatPassword" data-name="RepeatPassword" placeholder="Repeat Password" id="RepeatPassword" required="">
              <label for="Email-2">Administration Account</label>
              <label class="w-checkbox checkbox-field">
                <input type="checkbox" name="Administrator" id="Administrator" data-name="Administrator" class="w-checkbox-input" value="1">
                <span class="w-form-label" for="Administrator">Enabled</span>
              </label>
              <?php if(isset($_GET["edit"])) { ?>
              <input type="hidden" name="edit" id="edit" value=<?php echo $_GET['user']; ?>>
              <?php } ?>
              <input type="submit" name="submit" value="Submit" data-wait="Please wait..." class="button-primary w-button" style="height: 44px; padding: 0px 35px; border-radius: 20px; background-color: #002855; color: #fff; font-weight: 400;">
            </form>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=621910c2f2818f47edcbc8e4" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
