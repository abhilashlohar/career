(function(document, window, $) {
  'use strict';
  var Site = window.Site;
  $(document).ready(function($) {
    Site.run();
  });

 
  // Example Validataion Standard Mode
  // ---------------------------------
 /*  (function() {
    $('#loginform').formValidation({
      framework: "bootstrap",
      button: {
        selector: '#validateButton2',
        disabled: 'disabled'
      },
      icon: null,
      fields: {
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
              min: 8
            }
          }
        }
      }
    });
  })(); */
})(document, window, jQuery);
