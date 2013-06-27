<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php 
    include_once dirname(__FILE__). '/../lib/constants.php';
    include_once dirname(__FILE__). '/../lib/Utils.php';
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Landing Page</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="<? echo CSS_PATH;?>normalize.css">
<link rel="stylesheet" href="<? echo CSS_PATH;?>main.css">
<link rel="stylesheet" href="<? echo CSS_PATH;?>common.css">
<link rel="stylesheet" href="<? echo CSS_PATH;?>pop-up.css">
<script src="<? echo JS_PATH;?>vendor/modernizr-2.6.2.min.js"></script>
<script src="<? echo JS_PATH;?>vendor/jquery-1.9.0.min.js"></script>
<script src="<? echo JS_PATH;?>vendor/validate.js"></script>
<script src="<? echo JS_PATH;?>custom.js"></script>
</head>
<body>
<div id="crickFiWrap">
  <header class="header home">
    <div class="header-inner">
      <h1><a href="#"><img src="<? echo IMAGE_PATH;?>cricfi-logo.png" alt="Crick-FI" /></a></h1>
      <? include dirname(__FILE__).'/../modules/login.php';?>
      <div class="h-menu">
        <ul class="social clearfix">
          <li><a class="face" href="#"><span></span></a></li>
          <li><a class="tweet" href="#"><span></span></a></li>
          <li><a class="youtube" href="#"><span></span></a></li>
          <li><a class="google" href="#"><span></span></a></li>
        </ul>
        <span class="follow"><img src="<? echo IMAGE_PATH;?>followsimg.png" alt="" border="0" /></span> </div>
    </div>
  </header>
  <section class="homegreen-section">
    <div class="bloggers-section-inner">
      <h2>manage tournament</h2>
      <div class="lefttext">
        <div class="row clearfix">
          <div class="left"><a href="#"><img src="<? echo IMAGE_PATH;?>img09.jpg" alt="" border="0" /></a></div>
          <div class="rightdis">
            <h3><a href="#">Manage Scorecard</a></h3>
            <p>It is a long established fact that a reader will be distracted by </p>
          </div>
        </div>
        <div class="row clearfix">
          <div class="left"><a href="#"><img src="<? echo IMAGE_PATH;?>img09.jpg" alt="" border="0" /></a></div>
          <div class="rightdis">
            <h3><a href="#">Manage Teams</a></h3>
            <p>It is a long established fact that a reader will be distracted by </p>
          </div>
        </div>
      </div>
      <div class="rightbox">
        <div class="topomg">
          <div class="botimg"> <span class="playericon"></span>
            <? include dirname(__FILE__).'/../modules/signup.php';?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="categorysection" class="clearfix">
  <div class="bloggers-section-inner">
  	<div class="ima clearfix"><span>I am a</span></div>
    <aside class="col first">  
      <div class="img">
      	<a href="#"><img src="<? echo IMAGE_PATH;?>playershort.png" alt="" /></a>
      </div>
      <h4><a href="#">Player</a></h4>
      <p>It is a long established fact that a reader will be of a page ...</p>
      <div class="readmore">
         <a href="#">Read more<span class="errow"></span></a>
        </div>
    </aside>
    <aside class="col second">  
      <div class="img">
      	<a href="#"><img src="<? echo IMAGE_PATH;?>playerhead.png" alt="" /></a>
      </div>
      <h4><a href="#">Coach</a></h4>
      <p>It is a long established fact that a reader will be of a page ...</p>
      <div class="readmore">
         <a href="#">Read more<span class="errow"></span></a>
        </div>
    </aside>
    <aside class="col third">  
      <div class="img">
      	<a href="#"><img src="<? echo IMAGE_PATH;?>homeheadphone.png" alt="" /></a>
      </div>
      <h4><a href="#">Content Creator</a></h4>
      <p>It is a long established fact that a reader will be of a page ...</p>
      <div class="readmore">
         <a href="#">Read more<span class="errow"></span></a>
        </div>
    </aside>
    <aside class="col fourth">  
      <div class="img">
      	<a href="#"><img src="<? echo IMAGE_PATH;?>home_hend.png" alt="" /></a>
      </div>
      <h4><a href="#">Bloger</a></h4>
      <p>It is a long established fact that a reader will be of a page ...</p>
      <div class="readmore">
         <a href="#">Read more<span class="errow"></span></a>
        </div>
    </aside>
    </div>
  </section>
  <section id="newssection">
  <div class="bloggers-section-inner">
  	<div class="slidebot"> 
<!--            <a href="#" class="prev"></a> <a href="#" class="next"></a>-->
        <ul class="clearfix">
          <li><a href="#">It is a long established fact that a reader will be distracted by the readable content of a page when layout.</a></li>
        </ul>
      </div>
      </div>
  </section>
  <? include dirname(__FILE__).'/../modules/footer.php';?>
</div>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>
