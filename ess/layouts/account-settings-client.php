<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php 
    //include_once dirname(__FILE__). '/../lib/constants.php';
    //include_once dirname(__FILE__). '/../lib/Utils.php';
?>
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
  <header class="header">
    <div class="top-bar">
      <div class="top-bar-inner clearfix">
        <div class="left">
          <ul class="clearfix">
            <li><a href="#"><img src="images/top-icon01.png" alt="" border="0" /></a></li>
            <li><a href="#"><img src="images/top-icon02.png" alt="" border="0" /></a></li>
            <li><a href="#"><img src="images/top-icon03.png" alt="" border="0" /></a></li>
            <li><a href="#"><img src="images/top-icon04.png" alt="" border="0" /></a></li>
            <li><a href="#"><img src="images/top-icon05.png" alt="" border="0" /></a></li>
            <li><a href="#"><img src="images/top-icon06.png" alt="" border="0" /></a></li>
          </ul>
        </div>
        <div class="right clearfix">
          <form action="" method="get">
            <div class="search">
              <input type="text" value="" placeholder="Search..." />
              <input type="submit" placeholder="Search..." />
            </div>

            <div class="filter">
              <label>
              <input name="" type="checkbox" value="" />
              People</label>
              <label>
              <input name="" type="checkbox" value="" />
              Blog</label>
              <label>
              <input name="" type="checkbox" value="" />
              Team</label>
              <label>
              <input name="" type="checkbox" value="" />
              Tournament</label>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="header-inner">
      <h1><a href="#"><img src="images/cricfi-logo.png" alt="Crick-FI" /></a></h1>
      <div class="cric-sectons">
        <ul class="clearfix">
          <li class="active"><a href="#"><img src="images/im-player.png" alt="" border="0" /></a></li>
          <li><a href="#"><img src="images/im-coach.png" border="0" /></a></li>
          <li><a href="#"><img src="images/im-comment.png" border="0" /></a></li>
          <li><a href="#"><img src="images/im-bloger.png" border="0" /></a></li>
        </ul>
      </div>
      <div class="h-menu">
        <ul class="clearfix">
          <li><a href="#"><img src="images/home.png" /> Home</a></li>
          <li class="last"><span class="name">Welcome Neeraj</span> <span class="edit"></span></li>
        </ul>
        <ul class="social clearfix">
          <li><a class="face" href="#"><span></span></a></li>
          <li><a class="tweet" href="#"><span></span></a></li>
          <li><a class="youtube" href="#"><span></span></a></li>
          <li><a class="google" href="#"><span></span></a></li>
        </ul>
      </div>
    </div>
  </header>
  <section class="bloggers-section">
    <div class="bloggers-section-inner">
      <label>BLOGGERS</label>
      <div class="slideshow"> <a href="#" class="prev"></a> <a href="#" class="next"></a>
        <ul class="clearfix">
          <li><a href="#"><img src="images/slide-img01.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/slide-img02.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/slide-img03.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/slide-img02.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/slide-img03.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/slide-img02.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/slide-img03.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/slide-img04.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/slide-img01.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/slide-img04.gif" alt="" /></a></li>
        </ul>
      </div>
    </div>
  </section>
  <section id="main" class="clearfix">
    <aside id="sideBarLeft">
      <h2>Trending Topics</h2>
      <? foreach ($data['trendingTopics'] as $postVO) { 
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
              <div class="block-content">
                <div class="formAreaautoWidth">
                  <div class="field-row">
                    <label><strong>Email Preferences</strong></label>
                    <span class="label"><? echo $data['userInfo']->accountSettings->notificationReceivePreference; ?><a class="acco-editico" href="#"><img border="0" src="images/account-edit-icon.gif"></a></span> </div>
		  <div class="field-row">
                    <label><strong>Notification Email</strong></label>
                    <span class="label"><? echo $data['userInfo']->accountSettings->notificationEmail; ?><a class="acco-editico" href="#"><img border="0" src="images/account-edit-icon.gif"></a></span> </div>
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
            <? foreach ($data['userInfo']->friends as $userDTO) {
		    include dirname(__FILE__).'/../modules/friends.php';	
		}
            ?>
          </ul>
        </div>
      </div>
      <div class="scoreboard"> <img src="images/scorecard.jpg" /> </div>
    </aside>
  </section>
  <footer class="footer">
    <div class="footer-inner"> <img src="images/footer-01.png" />
      <ul class="clearfix">
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Terms and Condition</a></li>
        <li><a href="#">Advertising</a></li>
      </ul>
      <p>&copy; 2012 CricFi.</p>
    </div>
  </footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>
