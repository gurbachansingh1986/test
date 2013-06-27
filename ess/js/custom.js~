$(document).ready(function() {
	$("#LoginForm").validate({
		rules: {
			emailId: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 6
			}	
		},
		messages: {
			emailId: {
			        required: "Please enter a email address",
			        email:   "Please enter a valid email address"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 6 characters long"
			}
			
		}
	});
        
        
        $("#SignUpForm").validate({
		rules: {
			emailId: {
				required: true,
				email: true
			},
			first_name: {
				required: true
			}	
		},
		messages: {
			emailId: {
			        required: "Please enter a email address",
			        email:   "Please enter a valid email address"
			},
			first_name: {
				required: "Please provide your name"
			}
			
		},
                
                submitHandler: function() { 
                    $('#email').val($('#emailId').val());
                    $('#firstName').val($('#first_name').val()) ;
                    
                     $("#overlay_form").fadeIn(500);
                     positionPopup();
                     
                    //close popup
                    $("#close").click(function(){
                        $("#overlay_form").fadeOut(500);
                    });
                }
        
		$('#login').click(function(){
		
		         $('#Invaccess').hide();

		});

	});
        
       
    
        $("#overlay_form").validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			firstName: {
				required: true
			},
                        lastName: {
				required: true
			}	
		},
		messages: {
			email: {
			        required: "Please enter a email address",
			        email:   "Please enter a valid email address"
			},
			firstName: {
				required: "Please provide your first name"
			},
                        lastName: {
				required: "Please provide your last name"
			}	
		}
	});
        
        
           // For Edit Account Setting
    $("button[id='account_setting']").click(function() {
        var emailPreferences = $.trim($("#emailPreferences :selected").val());
        var notificationEmail = $.trim($("#notificationEmail").val());
        $.ajax({
            type: "POST",
            url: "/edit-account-setting.php",
            data: {
                emailPreferences: emailPreferences,
                notificationEmail: notificationEmail
            },
            success: function(result) {
                alert(result);
                //window.location.reload(true);
                
            }
        });
    });
});

$(".upphovideo-button1").bind("click", function() {
  $("input[type=text], textarea").val("");
});
//position the popup at the center of the page
function positionPopup(){
  if(!$("#overlay_form").is(':visible')){
    return;
  } 
  $("#overlay_form").css({
      left: ($(window).width() - $('#overlay_form').width()) / 2,
      top: ($(window).width() - $('#overlay_form').width()) / 7,
      position:'absolute'
  });
}

//maintain the popup at center of the page when browser resized
$(window).bind('resize',positionPopup);
