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
      <div class="card-shadow main-metrics">
        <div class="main-metrics-item">
          <div id="w-node-_9d1ec32f-19af-33d2-4bf6-4d1afd185d30-e69909e2" class="main-metrics-title">Total Records</div>
          <div id="w-node-_429416bb-8e72-aba3-c8ab-e6bda6b251cc-e69909e2" class="main-metric-amount">
            <?php
              $sql = "SELECT COUNT(id) AS total FROM records;";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);
              if($resultCheck > 0) {while ($row = mysqli_fetch_assoc($result)) {echo $row["total"];}}
            ?>
          </div><img src="images/chart.svg" id="w-node-c90aa290-4335-9a46-8f53-3156ed206e60-e69909e2" alt="">
        </div>
        <div class="main-metrics-item">
          <div id="w-node-f6d28de1-7059-98d3-75c3-af48608a4c2f-e69909e2" class="main-metrics-title">Overall Records Pulled</div>
          <div id="w-node-f6d28de1-7059-98d3-75c3-af48608a4c31-e69909e2" class="main-metric-amount">
            <?php
              $sql = "SELECT COUNT(user_id) AS total FROM users_records;";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);
              if($resultCheck > 0) {while ($row = mysqli_fetch_assoc($result)) {echo $row["total"];}}
            ?>
          </div><img src="images/chart.svg" id="w-node-f6d28de1-7059-98d3-75c3-af48608a4c33-e69909e2" alt="">
        </div>
        <div class="main-metrics-item">
          <div id="w-node-cca3a3e5-45be-eb3b-2741-0c681f700bdb-e69909e2" class="main-metrics-title">Personal Records Pulled</div>
          <div id="w-node-cca3a3e5-45be-eb3b-2741-0c681f700bdd-e69909e2" class="main-metric-amount">
            <?php
              $sql = "SELECT COUNT(user_id) AS total FROM users_records WHERE user_id=".$_SESSION['id']." AND SUBDATE(NOW(), INTERVAL 7 DAY);";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);
              if($resultCheck > 0) {while ($row = mysqli_fetch_assoc($result)) {echo $row["total"];}}
            ?>
          </div><img src="images/chart.svg" id="w-node-cca3a3e5-45be-eb3b-2741-0c681f700bdf-e69909e2" alt="">
        </div>
        <div class="main-metrics-item">
          <div id="w-node-_7f7f0b39-ea0d-cf82-ec1f-2bf6ce59e5ed-e69909e2" class="main-metrics-title">Overall Records Pulled (Last Month)</div>
          <div id="w-node-_7f7f0b39-ea0d-cf82-ec1f-2bf6ce59e5ef-e69909e2" class="main-metric-amount"><?php
            $sql = "SELECT COUNT(user_id) AS total FROM users_records WHERE SUBDATE(NOW(), INTERVAL 31 DAY);";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0) {while ($row = mysqli_fetch_assoc($result)) {echo $row["total"];}}
          ?></div><img src="images/chart.svg" id="w-node-_7f7f0b39-ea0d-cf82-ec1f-2bf6ce59e5f1-e69909e2" alt="">
        </div>
      </div>
      <div class="card-shadow grid">
        <div id="w-node-_740985be-c698-682d-a81e-970a1550c28f-e69909e2" class="dash-item-title grey-3-text">Most Recent Searches</div>
        <div class="quick-dets-grid">
          <?php
            $sql = "SELECT s3.author,record_id,date_searched,user_id FROM users_records s1 INNER JOIN records s3 ON s1.record_id = s3.id WHERE user_id=".$_SESSION['id']." AND date_searched = (SELECT MAX(date_searched) FROM users_records s2 WHERE s1.record_id = s2.record_id) ORDER BY date_searched DESC LIMIT 5;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <div class='separator users'></div>
                  <div class='detail-item'><img src='images/Icon-2.svg' class='detail-icon'>
                    <div class='detail-subitem'>
                      <a href='record.php?record=" . $row['record_id'] . "' class='detail-item w-inline-block'>
                        <div class='legend-label large'> ID: " . $row['record_id'] . " | Author: " . $row['author'] . "</div>
                      </a>
                    </div>
                  </div>
                ";
              }
            }
          ?>
        </div>
      </div>
      <div class="w-layout-grid grid-2-1">
        <div id="w-node-ea72df06-1253-e974-3604-5a824884484b-e69909e2" class="card-shadow flex-vertical">
          <div class="dash-item-title grey-3-text">Most Frequently Accessed Records</div>
          <div class="w-layout-grid grid-2-1-1">
            <div id="w-node-b738144c-4be5-c1f4-0de7-aced9a982550-e69909e2" class="rep-chart-title">
              <div id="w-node-_9e55acbc-56c2-2d25-332c-dc0ad4a3e678-e69909e2" class="rep-chart-title-item _1">RECORD</div>
              <div id="w-node-_40272edb-3633-e412-c0e9-43246ee13b9b-e69909e2" class="rep-chart-title-item center">TOTAL</div>
            </div>
            <!--  FIRST RECORD  -->
              <div id="w-node-c88f1670-9e44-7ccb-1b26-b91272ed09c8-e69909e2" class="flex-lite users">
                <div>
                  <?php $sql = "SELECT records.author, record_id 'Record', COUNT(*) 'Searched' FROM users_records INNER JOIN records ON users_records.record_id = records.id GROUP BY record_id ORDER BY Searched DESC LIMIT 0,1;";$result = mysqli_query($conn, $sql);$resultCheck = mysqli_num_rows($result);if($resultCheck > 0) {while ($row = mysqli_fetch_assoc($result)) {
                        echo "ID: ".$row['Record']." | Author: ".$row['author'];}}
                  ?>
                </div>
              </div>
              <div id="w-node-_9e139069-e28c-2042-762f-020649d021cc-e69909e2" class="week-metric-num">
                <?php $sql = "SELECT records.author, record_id 'Record', COUNT(*) 'Searched' FROM users_records INNER JOIN records ON users_records.record_id = records.id GROUP BY record_id ORDER BY Searched DESC LIMIT 0,1;";$result = mysqli_query($conn, $sql);$resultCheck = mysqli_num_rows($result);if($resultCheck > 0) {while ($row = mysqli_fetch_assoc($result)) {
                      echo $row['Searched'];}}
                ?>
              </div>
              <div id="w-node-fd378eb0-b2fb-13d9-0e71-1698f1a57c61-e69909e2" class="separator users"></div>
            <!--  SECOND RECORD  -->
              <div id="w-node-ad752bec-6d19-87b1-d0c3-04f75d3e6f45-e69909e2" class="flex-lite users">
                <div>
                  <?php $sql = "SELECT records.author, record_id 'Record', COUNT(*) 'Searched' FROM users_records INNER JOIN records ON users_records.record_id = records.id GROUP BY record_id ORDER BY Searched DESC LIMIT 1,1;";$result = mysqli_query($conn, $sql);$resultCheck = mysqli_num_rows($result);if($resultCheck > 0) {while ($row = mysqli_fetch_assoc($result)) {
                        echo "ID: ".$row['Record']." | Author: ".$row['author'];}}
                  ?>
                </div>
              </div>
              <div id="w-node-e78015f0-0ea2-06aa-b60e-521d0c421d41-e69909e2" class="week-metric-num">
                <?php $sql = "SELECT records.author, record_id 'Record', COUNT(*) 'Searched' FROM users_records INNER JOIN records ON users_records.record_id = records.id GROUP BY record_id ORDER BY Searched DESC LIMIT 1,1;";$result = mysqli_query($conn, $sql);$resultCheck = mysqli_num_rows($result);if($resultCheck > 0) {while ($row = mysqli_fetch_assoc($result)) {
                      echo $row['Searched'];}}
                ?>
              </div>
              <div id="w-node-_23ecfb64-e01b-67c9-b5df-3436a7095da8-e69909e2" class="separator users"></div>
            <!--  THIRD RECORD  -->
              <div id="w-node-a0a7d4d9-9d09-87a3-af24-bdc00ea826e6-e69909e2" class="flex-lite users">
                <div>
                  <?php $sql = "SELECT records.author, record_id 'Record', COUNT(*) 'Searched' FROM users_records INNER JOIN records ON users_records.record_id = records.id GROUP BY record_id ORDER BY Searched DESC LIMIT 2,1;";$result = mysqli_query($conn, $sql);$resultCheck = mysqli_num_rows($result);if($resultCheck > 0) {while ($row = mysqli_fetch_assoc($result)) {
                        echo "ID: ".$row['Record']." | Author: ".$row['author'];}}
                  ?>
                </div>
              </div>
              <div id="w-node-_229e3b92-28ff-1f7a-dcd2-6b648c5cff34-e69909e2" class="week-metric-num">
                <?php $sql = "SELECT records.author, record_id 'Record', COUNT(*) 'Searched' FROM users_records INNER JOIN records ON users_records.record_id = records.id GROUP BY record_id ORDER BY Searched DESC LIMIT 2,1;";$result = mysqli_query($conn, $sql);$resultCheck = mysqli_num_rows($result);if($resultCheck > 0) {while ($row = mysqli_fetch_assoc($result)) {
                      echo $row['Searched'];}}
                ?>
              </div>
              <div id="w-node-_79fcf938-b7f1-73a4-e4b7-5fe6a0739914-e69909e2" class="separator users"></div>
            <!--  FOURTH RECORD  -->
              <div id="w-node-e050184b-bb98-ab43-d218-239dd1b6795d-e69909e2" class="flex-lite users">
                <div>
                  <?php $sql = "SELECT records.author, record_id 'Record', COUNT(*) 'Searched' FROM users_records INNER JOIN records ON users_records.record_id = records.id GROUP BY record_id ORDER BY Searched DESC LIMIT 3,1;";$result = mysqli_query($conn, $sql);$resultCheck = mysqli_num_rows($result);if($resultCheck > 0) {while ($row = mysqli_fetch_assoc($result)) {
                        echo "ID: ".$row['Record']." | Author: ".$row['author'];}}
                  ?>
                </div>
              </div>
              <div id="w-node-_0060fb7a-9a9a-7705-bc57-30baff76dc33-e69909e2" class="week-metric-num">
                <?php $sql = "SELECT records.author, record_id 'Record', COUNT(*) 'Searched' FROM users_records INNER JOIN records ON users_records.record_id = records.id GROUP BY record_id ORDER BY Searched DESC LIMIT 3,1;";$result = mysqli_query($conn, $sql);$resultCheck = mysqli_num_rows($result);if($resultCheck > 0) {while ($row = mysqli_fetch_assoc($result)) {
                      echo $row['Searched'];}}
                ?>
              </div>
            <!--  END  -->
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
