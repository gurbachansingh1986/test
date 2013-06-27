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
<script src="js/vendor/validate.js"></script>
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
                <div class="title">General Account Settings</div>
                </div>
              <!--<div class="block-content">
                <div class="formAreaautoWidth">
                  <div class="field-row">
                    <label><strong>Name</strong></label>
                    <span class="label">Abcname <a class="acco-editico" href="#"><img border="0" src="templates/images/account-edit-icon.gif"></a></span> </div>
                  <div class="field-row">
                    <label><strong>Username</strong></label>
                    <span class="label">Abc <a class="acco-editico" href="#"><img border="0" src="templates/images/account-edit-icon.gif"></a></span> </div>
                  <div class="field-row">
                    <label><strong>Email</strong></label>
                    <span class="label">abc@gmail.com <a class="acco-editico" href="#"><img border="0" src="templates/images/account-edit-icon.gif"></a></span> </div>
                  <div class="field-row">
                    <label><strong>Password</strong></label>
                    <span class="label">********* <a class="acco-editico" href="#"><img border="0" src="templates/images/account-edit-icon.gif"></a></span> </div>
                  <div class="field-row">
                    <label><strong>Secure Browsing</strong></label>
                    <span class="label">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class="acco-editico" href="#"><img border="0" src="templates/images/account-edit-icon.gif"></a></span> </div>
                  <div class="field-row">
                    <label><strong>Email Preferences</strong></label>
                    <select name="">
                      <option>All Notification</option>
                      <option>Test</option>
                    </select> </div>
                </div>
              </div> -->
                
                
            <?php
            //echo "<pre>";
            //print_r($data['notiFication']);
            //echo "AAAAAAAAAA ::".$data['userInfo']->accountSettings->notificationReceivePreference;
            ?>
             <?php //if($noti == $data['userInfo']->accountSettings->notificationReceivePreference) echo "selected"; 
             // $data['userInfo']->accountSettings->notificationEmail;
             ?>
              
            <div class="block-content">
                <div class="formAreaautoWidth">
                 
                  <div class="field-row">
                    <label><strong>Email Preferences</strong></label>
                    <select name="emailPreferences" id="emailPreferences">
                      <?php 
                      foreach ($data['notiFication'] as $key =>$noti) { 
                      ?>
                      <option value ="<?php echo $noti; ?>" <?php if($noti == $data['userInfo']->accountSettings->notificationReceivePreference) echo "selected"; ?>><?php echo $key; ?></option>
                      <?php } ?>
                    </select> 
                  </div>
                  
		  <div class="field-row">
                    <label><strong>Notification Email</strong></label>
                    <span class="label"><input type ="text" name ="notificationEmail" id ="notificationEmail" value ="<?php echo $data['userInfo']->accountSettings->notificationEmail; ?>">
                        
                        <a class="acco-editico" href="#">
                            <img border="0" src="images/account-edit-icon.gif">
                        </a>
                    </span> 
                  </div>
                </div>
                <div class="field-row">
                   <span class="droplist">
                <button class="upphovideo-button bluehover" id="account_setting"><span class="bt-text">Submit</span><span class="errow"></span></button> 
                </span> 
                </div>
              </div>         
                
                
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
            <?php 
            
            foreach ($data['userInfo']->friends as $userDTO) {
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
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>-->
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>
