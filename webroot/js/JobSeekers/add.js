(function(document, window, $) {
  'use strict';
  var Site = window.Site;
  $(document).ready(function($) {
    Site.run();
  }); 
	
		$('button[name="formSubmit"]').on('click',function(){
			alert();
			$('#registrationForm').submit();
		});
	
 /* 
  // Example Validataion Standard Mode
  // ---------------------------------
  (function() {
    $('#signupform').formValidation({
      framework: "bootstrap",
      button: {
        selector: '#validateButton2',
        disabled: 'disabled'
      },
      icon: null,
      fields: {
        full_name: {
          validators: {
            notEmpty: {
              message: 'The name is required.'
            }
          }
        },
		corporate_name: {
          validators: {
            notEmpty: {
              message: 'The corporate name is required.'
            }
          }
        },
		email: {
          validators: {
            notEmpty: {
              message: 'The username is required'
            },
            emailAddress: {
              message: 'The email address is not valid'
            }
          }
        },
		password: {
          validators: {
            notEmpty: {
              message: 'The password is required'
            },
            stringLength: {
              min: 4
            }
          }
        }
      }
    });
  })(); */
})(document, window, jQuery);
