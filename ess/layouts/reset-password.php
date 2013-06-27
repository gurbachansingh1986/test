<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Reset Password</title>
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
<script src="js/vendor/validate.js"></script>
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
                <div class="title">Reset Password</div>
              </div>
              <div class="block-content">
               <p class="forgot">Select your new password and enter it below.</p>
               <form name ="resetPassword" id="resetpassword" method="POST">
                <div class="formArea">
                <div class="field-row">
                    <label>Token No.<span>:</span></label>
                    <input name="tokenNo" id="tokenno">
                  </div>
                  <div class="field-row">
                    <label>New Password<span>:</span></label>
                    <input name="newPassword" id="newPassword" type="password">
                  </div>
                  
                 <br>

                  <div class="field-row">
                   <span class="droplist">
          <button class="upphovideo-button bluehover" id="resetpassword"><span class="bt-text">Reset</span><span class="errow"></span></button> 
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