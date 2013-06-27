<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Account Settings</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/common.css">
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/vendor/jquery-1.9.0.min.js"></script>
<script src="js/custom.js"></script>
</head>
<body>
<div id="crickFiWrap">
  <?php 
    include dirname(__FILE__).'/../modules/inner-header.php';
    ?>
  <section class="bloggers-section">
    <?php 
    include dirname(__FILE__).'/../modules/blogger.php';
    ?>
  </section>
  <section id="main" class="clearfix">
    <aside id="sideBarLeft">
      <h2>Trending Topics</h2>
      <?php 
      
      foreach ($data['trendingTopics'] as $postVO) { 
      	     include dirname(__FILE__).'/../modules/trending-topics.php';
         } 
      ?>
      <div class="ads-wrap"><a href="#"><img alt="" src="images/ads01.gif"></a></div>
    </aside>
<section class="main-content">
      <div class="advance-Search-wrap">
        <div class="accordian">
          <ul class="box_row">
            <li>
              <div class="top-block clearfix">
                <div class="title">Reset Password</div>
              </div>
              <div class="block-content">
               <p class="forgot">Select your new password and enter it below.</p>
              
                <div class="formArea">
                <div class="field-row">
                    <label>Old Password<span>:</span></label>
                    <input name="" type="text">
                  </div>
                  <div class="field-row">
                    <label>New Password<span>:</span></label>
                    <input name="" type="text">
                  </div>
                  
                  <div class="field-row">
                    <label>Re-Enter Password<span>:</span></label>
                    <input name="" type="text">
                  </div>
                  <!--<div class="field-row">
                    <label>Gender<span>:</span></label>
                    <select name="">
                      <option>Female</option>
                      <option>Male</option>
                    </select>
                  </div>-->
                  <!--<div class="filter">
              <label>
              <input name="" type="checkbox" value="" />
              Terms & Conditions</label>
                  </div>--><br>

                  <div class="field-row">
                   <span class="droplist">
          <button class="upphovideo-button bluehover"><span class="bt-text">Reset</span><span class="errow"></span></button> 
          </span> </div>
          <div class="field-row">
                  </div>
                  
                </div>
              </div>
            </li>
            <li>
              
              
            </li>
          </ul>
        </div>
      </div>
    </section>
    <aside id="sideBarRight">
      <div class="profile-wrap">
        <p class="img clearfix"><span><a href="#"><img src="images/profile-img.jpg"></a></span></p>
        <p class="edit"><a href="#">Edit Basic Profile</a></p>
        <ul>
          <li><a href="#">Feed</a>
            <ul>
              <li><a href="#">All</a></li>
              <li><a href="#">Mine</a></li>
              <li><a href="#">Favorites</a></li>
            </ul>
          </li>
          <li><a href="#">Events</a><span class="notification">6</span></li>
          <li><a href="#">Notifications</a><span class="notification">2</span>
            <ul>
              <li><a href="#">Score Card Approval</a><span class="notification h">4</span></li>
            </ul>
          </li>
          <li><a href="#">Followings</a></li>
          <li><a href="#">Polls</a></li>
          <li><a href="#">Import Friends</a></li>
        </ul>
      </div>
      <div id="studentsBlock">
        <ul class="title clearfix">
          <li class="active"><a href="#">Friends</a></li>
        </ul>
        <div class="content">
          <form action="" method="get">
            <input type="text" placeholder="Search..." />
          </form>
          <ul class="list">
            <?php foreach ($data['userInfo']->friends as $userDTO) {
		    include dirname(__FILE__).'/../modules/friends.php';	
		}
            ?>
          </ul>
        </div>
      </div>
      <div class="scoreboard"> <img src="images/scorecard.jpg" /> </div>
    </aside>
  </section>
  <?php 
  include dirname(__FILE__).'/../modules/inner-footer.php';
  ?>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>
