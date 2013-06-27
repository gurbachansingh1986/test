<!--step-1-->
<form name="SignUpForm" id="SignUpForm" action="signup.php" method="POST">
    <div class="content">
        <h3>Sign Up</h3>
        <div class="row">
            <input name="emailId" id="emailId" placeholder="E-mail" value="" type="text">
        </div>
        <div class="row">
            <input name="first_name" id="first_name" placeholder="Name" value="" type="text">
        </div>
        <div class="row">
          <input name="signup" id="signup" class="signbtn" type="submit" value="Sign Up">
        </div>
    </div>
</form>
<!--end of step-1-->
<!--step-2-->
<form id="overlay_form" style="display:none;" action="signup.php" method="POST">
    <a href="#" id="close" class="close">Close</a>
    <section class="main-content">
        <div class="advance-Search-wrap">
            <div class="accordian">
                <ul class="box_row">
                    <li>
                        <div class="top-block clearfix">
                            <div class="title">Second Registration</div>
                        </div>
                        <div class="block-content">
                            <div class="formArea">
                                <div class="field-row">
                                    <label>Email<span>:</span></label>
                                    <input name="email" id="email" value="" type="text">
                                </div>
                                <div class="field-row">
                                    <label>First Name<span>:</span></label>
                                    <input name="firstName" id ="firstName" type="text">
                                </div>
                                <div class="field-row">
                                    <label>Last Name<span>:</span></label>
                                    <input name="lastName" id ="lastName" type="text" value="">
                                </div>
                                <div class="field-row">
                                    <label>Gender<span>:</span></label>
                                    <select name="">
                                        <option value="1">Female</option>
                                        <option value="2">Male</option>
                                    </select>
                                </div>
                                <br>
                                <div class="field-row">
                                    <span class="droplist">
                                        <button class="upphovideo-button bluehover">
                                            <span class="bt-text">Submit</span>
                                            <span class="errow"></span></button>
                                        <button class="upphovideo-button bluehover" type="reset">
                                            <span class="bt-text">Reset</span>
                                            <span class="errow"></span>
                                        </button>
                                    </span> </div>
                                <div class="field-row"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</form>
<!--end of step-2-->
