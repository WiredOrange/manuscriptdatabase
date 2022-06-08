<?php
  include_once 'php/config.php';
?>

<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri Mar 11 2022 04:28:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="622aab3bd3db7ac9e69909e2" data-wf-site="621910c2f2818f47edcbc8e4">
<head>
  <?php
    session_start();
    if(!isset($_SESSION["id"])) {
      header("location: ../index.php");
    }
  ?>
  <meta charset="utf-8">
  <title>Random Dashboard</title>
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
      <div class="w-layout-grid grid-2-1">
        <div id="w-node-ea72df06-1253-e974-3604-5a824884484b-e69909e2" class="card-shadow flex-vertical">
          <div class="dash-item-title grey-3-text" style="color:#002855;font-weight: bold;">Search</div>
          <div class="quick-dets-grid">
            <div class="separator users"></div>
            <div class="detail-item">
              <div class="legend-label large">
                <form action="search.php" method="POST">
                  <input type="text" name="search" placeholder="Search" style="height: 40px">
                  <select name="filter" id="filter" style="height: 40px">
                    <option value="none" selected>No Filter</option>
                    <option value="author">Author</option>
                    <option value="recipient">Recipient</option>
                    <option value="date">Date</option>
                    <option value="description">Description</option>
                    <option value="notes">Notes</option>
                  </select>
                  <button type="submit" name="submit-search" style="background-color: #fff;"><img src="images/371221.png"></button>
                </form>
                <?php if($_SESSION["admin"] === 1) { ?>
                <form action="search.php" method="POST">
                  <input type="text" name="search" placeholder="SQL Search" style="height: 40px">
                  <button type="submit" name="submit-search-sql" style="background-color: #fff;"><img src="images/371221.png"></button>
                </form>
                <?php } ?>
              </div>
            </div>
            <?php
              if(isset($_POST['submit-search'])) {
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                if($_POST['filter'] === 'none') {
                  $sql = "SELECT * FROM records WHERE id LIKE '%$search%' OR author LIKE '%$search%' OR recipient LIKE '%$search%' OR date LIKE '%$search%' OR description LIKE '%$search%' OR notes LIKE '%$search%'";
                } else if($_POST['filter'] === 'author') {
                  $sql = "SELECT * FROM records WHERE author LIKE '%$search%'";
                } else if($_POST['filter'] === 'recipient') {
                  $sql = "SELECT * FROM records WHERE recipient LIKE '%$search%'";
                } else if($_POST['filter'] === 'date') {
                  $sql = "SELECT * FROM records WHERE date LIKE '%$search%'";
                } else if($_POST['filter'] === 'description') {
                  $sql = "SELECT * FROM records WHERE description LIKE '%$search%'";
                } else if($_POST['filter'] === 'notes') {
                  $sql = "SELECT * FROM records WHERE notes LIKE '%$search%'";
                }
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);
                if($queryResult > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <div class='separator users'></div>
                    <a href='record.php?record=".$row['id']."' class='detail-item'>
                      <div class='legend-label large'>ID: </div>
                      <div class='legend-label'>
                        ".$row['id']."
                      </div>
                      <div class='legend-label large'>Author: </div>
                      <div class='legend-label'>
                        ".$row['author']."
                      </div>
                      <div class='legend-label large'>Date: </div>
                      <div class='legend-label'>
                        ".$row['date']."
                      </div>
                    </a>
                    ";
                  }
                } else {
                  echo "<div class='separator users'></div>
                  <div class='detail-item'>
                    <div class='legend-label large'>
                      No records found.
                    </div>
                  </div>";
                }
              }
            ?>
            <?php
              if(isset($_POST['submit-search-sql'])) {
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                $sql = "'$search'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);
                if($queryResult > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <div class='separator users'></div>
                    <a href='record.php?record=".$row['id']."' class='detail-item'>
                      <div class='legend-label large'>ID: </div>
                      <div class='legend-label'>
                        ".$row."
                      </div>
                    </a>
                    ";
                  }
                } else {
                  echo "<div class='separator users'></div>
                  <div class='detail-item'>
                    <div class='legend-label large'>
                      No records found.
                    </div>
                  </div>";
                }
              }
            ?>
          </div>
        </div>
        <div id="w-node-ea72df06-1253-e974-3604-5a8248844811-c79909e8" class="card-shadow flex-vertical">
          <div class="flex-lite">
            <div class="dash-item-title grey-3-text small">Interactive Menu</div>
          </div>
          <div class="quick-dets-grid">
            <div class="separator users"></div>
            <a href="search.php" class="detail-item"><img src="images/371221.png" alt="" class="detail-icon">
              <div class="legend-label large">Search Records</div>
            </a>
            <div class="separator users"></div>
            <a href="recordform.php" class="detail-item"><img src="images/Icon.svg" alt="" class="detail-icon">
              <div class="legend-label large">Add a Record</div>
            </a>
            <div class="separator users"></div>
            <a href="search.php" class="detail-item"><img src="images/Icon-3.svg" alt="" class="detail-icon">
              <div class="legend-label large">Edit a Record</div>
            </a>
            <div class="separator users"></div>
            <a href="search.php" class="detail-item"><img src="images/Icon-4.svg" alt="" class="detail-icon">
              <div class="legend-label large">Delete a Record</div>
            </a>
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
