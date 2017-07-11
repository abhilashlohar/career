(function(document, window, $) {
  'use strict';
  var Site = window.Site;
  $(document).ready(function($) {
    Site.run();
  }); 
  
  $(document).on('click','#first_step',function(e){
	$("#last_step").click();
	 var inputName=$('#inputName')[0].checkValidity();
	 var inputMobileNo=$('#inputMobileNo')[0].checkValidity();
	 var inputEmail=$('#inputEmail')[0].checkValidity();
	 var inputPassword=$('#inputPassword')[0].checkValidity();
	 var inputPasswordConfirm=$('#inputPasswordConfirm')[0].checkValidity();
	 if(inputName && inputMobileNo && inputEmail && inputPassword && inputPasswordConfirm)
	 { 
		 $('#personal_info').removeClass('active');
		 $('.first_step').removeClass('current');
		 $('.first_step').addClass('done');
		 $('.second_step').removeClass('disabled');
		 $('.second_step').addClass('current');
		 $('#academic_info').addClass('active');
	 }
  });
  $(document).on('click','#second_step',function(e){
	 $("#last_step").click();
	 var ten_institute_name=$('#10_institute_name')[0].checkValidity();
	 var ten_location=$('#10_location')[0].checkValidity();
	 var ten_percentage_cgpa=$('#10_percentage_cgpa')[0].checkValidity();
	 var ten_passed_out_year=$('#10_passed_out_year')[0].checkValidity();
	 var twel_institute_name=$('#12_institute_name')[0].checkValidity();
	 var twel_location=$('#12_location')[0].checkValidity();
	 var twel_percentage_cgpa=$('#12_percentage_cgpa')[0].checkValidity();
	 var twel_passed_out_year=$('#12_passed_out_year')[0].checkValidity();
	if(ten_institute_name && ten_location && ten_percentage_cgpa && ten_passed_out_year && twel_institute_name && twel_location && twel_percentage_cgpa && twel_passed_out_year)
	 {
		 $('#academic_info').removeClass('active');
		 $('.second_step').removeClass('current');
		 $('.second_step').addClass('done');
		 $('.last_step').removeClass('disabled');
		 $('.last_step').addClass('current');
		 $('#job_info').addClass('active');
	 }
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
