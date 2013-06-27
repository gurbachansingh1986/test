<?php if( isset($_SESSION['Invaccess']) ) :  
        echo '<div id="Invaccess" style="" align="center" >'.$_SESSION['Invaccess'] .'</div>';
        unset($_SESSION['Invaccess']) ; 
  endif;      
 ?>
<form name="LoginForm" id="LoginForm" action="home.php" method="POST">
    <div class="loginbox">
        <div class="fild">
            <input name="emailId" value="" placeholder="E-mail" type="text">
            <span><input name="" type="checkbox" value="">Keep me logging in</span> 
        </div>
        <div class="fild">
            <input name="password" value="" placeholder="Password" type="password">
            <span><a href="/forgot-password.php">Forgot your password?</a></span> 
        </div>
        <div class="logbtn">
          <input name="login" id="login" type="submit" value="Login">
        </div>
    </div>
</form>
