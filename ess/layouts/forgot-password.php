<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Forgot Password</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<!--<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/common.css">
<script src="js/vendor/modernizr-2.6.2.min.js"></script>-->

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
    include dirname(__FILE__).'/../modules/header.php';
  ?>
  
  <section id="main" class="clearfix">
    <aside id="sideBarLeft">
      <div class="promotion-block">
       
      </div>
    </aside>
    <section class="main-content">
      <div class="advance-Search-wrap">
        <div class="accordian">
          <ul class="box_row">
            <li>
              <div class="top-block clearfix">
                <div class="title">Forgot your password?</div>
              </div>
              <div class="block-content">
              <p class="forgot">To reset your password, type the full email address you use to sign in to your Google Account.


</p>
<form action="forgot-password.php" name="ForgotPassword" id="ForgotPassword" method="POST">
                <div class="formArea">
                  <div class="field-row">
                    <label>Email Address<span>:</span></label>
                    <input name="email" id="email" type="text" value="example@example.com" onfocus="if(this.value  == 'example@example.com') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'example@example.com'; } " />
                  </div>
                  
                  

                  <div class="field-row">
                   <span class="droplist">
          <button class="upphovideo-button bluehover">
              <span class="bt-text">Submit</span>
              <span class="errow"></span>
          </button>
                   </span> </div>
          <div class="field-row">
                  </div>
                  
                </div>
</form>
              </div>
            </li>
            <li>
              
              
            </li>
          </ul>
        </div>
      </div>
    </section>
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