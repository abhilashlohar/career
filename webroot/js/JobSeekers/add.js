(function(document, window, $) {
  'use strict';
  var Site = window.Site;
  $(document).ready(function($) {
    Site.run();
  }); 
 
/*   var dd=$('#inputName')[0].checkValidity();
	$(document).on('click','a[data-wizard="next"]',function(e){
		var dd=$('#inputName')[0].checkValidity();
		//alert(dd);
	}); */
	/* 	var $myForm = $('#registrationForm');
$('#inputName')[0].checkValidity();
		if(! $myForm[0].checkValidity()) {
		  // If the form is invalid, submit it. The form won't actually submit;
		  // this will just cause the browser to display the native HTML5 error messages.
		   $myForm.find(':submit').click();
		}
	 */
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
