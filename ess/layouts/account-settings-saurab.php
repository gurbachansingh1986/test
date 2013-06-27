<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php
	#include constant variables and functions
	//include '../../defines/constant.php';
	//include '../../defines/functions.php';
?>
<?php 
    include_once dirname(__FILE__). '/../lib/constants.php';
    include_once dirname(__FILE__). '/../lib/Utils.php';
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Edit Profile</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>normalize.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>main.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>common.css">
<script src="<?php echo JS_PATH;?>vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<div id="crickFiWrap">
  <?php 
	# include the header template
	include dirname(__FILE__).'/../modules/header.php';
	
	# include the slider template
	include dirname(__FILE__).'/../modules/slider.php';
?>

  <section id="main" class="clearfix">
    <aside id="sideBarLeft">
    	<div class="tabbed-block">
        <!--<ul class="tabs clearfix">
          <li class="active"><a href="#">Following</a></li>
          <li class="last"><a href="#">Follower</a></li>
        </ul>-->
        <div class="tab-content" style="border:none;!important">
        
          <!--<div id="content01" class="abc">
            <form method="get" action="">
              <input type="text" placeholder="Search">
            </form>
            <ul class="list">
              <li class="clearfix"> <span class="img"><a href="#"><img alt="" src="images/user01.gif"></a></span> <span><a href="#">Abcname</a></span> <span class="status-offline"></span> </li>
              <li class="clearfix"> <span class="img"><a href="#"><img alt="" src="images/user01.gif"></a></span> <span><a href="#">Abcname</a></span> <span class="status-online"></span> </li>
              <li class="clearfix"> <span class="img"><a href="#"><img alt="" src="images/user01.gif"></a></span> <span><a href="#">Abcname</a></span> <span class="status-offline"></span> </li>
              <li class="clearfix"> <span class="img"><a href="#"><img alt="" src="images/user01.gif"></a></span> <span><a href="#">Abcname</a></span> <span class="status-online"></span> </li>
              <li class="clearfix"> <span class="img"><a href="#"><img alt="" src="images/user01.gif"></a></span> <span><a href="#">Abcname</a></span> <span class="status-offline"></span> </li>
            </ul>
          </div>-->
        
        </div>
      </div>
    </aside>
    <section class="main-content">
      <div class="main-content-your-notifications editProfile">
        <div class="notifications-title clearfix row">          
          <span class="droplist">
          <button class="viewprofile-button bluehover"><span class="bt-text">View Profile</span><span class="errow"></span></button>         
          </span> </div>
          
                  <div class="field-row">
                    <label>First Name</label>
                    <input name="" type="text" />
                    <br />
                    <label>Last Name</label>
                    <input name="" type="text"/>
                    <br />
                    <label>Gender</label>
<select name="" style="margin-left:30px; width:154px;">
                      <option>Male</option>                      
<option>Female</option>
                    </select><label><br>
                      First Name</label>
                    <input name="" type="text" style="margin-left:9px; width:150px;">
                    <br>
                    
                    <form name="form2" method="post" action="">
                      <p>
                        <label>
                          <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_0" style="width:30px; text-align:right; margin-left:50px;" >
                          Terms & Conditions</label>
                        <br>
                        <button class="backtoalbums-button bluehover" style="margin-left:73px;"><span class="bt-text" style="width:126px; text-align:center;">Set My Location</span></button>
                        <br>
                      </p>
                    </form>
<br>
                
                   
          <button class="backtoalbums-button bluehover"><span class="bt-text">Submit</span></button>
          <button class="upphovideo-button bluehover"><span class="bt-text">Reset</span></button>
         
                  </div>
                
        
      </div>
    </section>
    <!--<aside id="sideBarRight">
    	
      <div class="profile-wrap">
       <p class="img clearfix"><span><a href="#"><img src="images/profile-img.jpg"></a></span></p>
      </div>
      <div id="profileRlink">
      	<ul class="first">
        	<li><a href="#">Basic Information</a> <span class="basic"></span></li>
            <li><a href="#">Profile Picture</a><span class="profile"></span></li>
            <li><a href="#">Friends</a><span class="friends"></span></li>
            <li><a href="#">Education and work</a><span class="education"></span></li>
            <li><a href="#">Contact Information</a><span class="contact"></span></li>
        </ul>
        
        <ul class="second">
        	<li><a href="#">Edit Player Profile</a> <span class="edit"></span></li>
            <li><a href="#">Edit Content Creator Profile</a><span class="edit"></span></li>
            <li><a href="#">Edit Coach Profile</a><span class="edit"></span></li>
        </ul>
      </div>
      
    </aside>-->
  </section>
  
  <?php 
	# include the footer template
	include dirname(__FILE__).'/../modules/footer.php';
   ?>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
<script src="<?php echo JS_PATH;?>plugins.js"></script>
<script src="<?php echo JS_PATH;?>main.js"></script>
</body>
</html>