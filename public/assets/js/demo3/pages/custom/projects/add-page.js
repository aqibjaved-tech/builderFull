"use strict";

// Class definition
var KTAppProjectsAdd = function () {
	// Base elements
	var wizardEl;
	var formEl;
	var validator;
	var wizard;
	var avatar;

	// Private functions
	var initWizard = function () {
		// Initialize form wizard
		wizard = new KTWizard('kt_apps_page_add', {
			startStep: 1,
		});

		// Validation before going to next page
		wizard.on('beforeNext', function(wizardObj) {
			if (validator.form() !== true) {
				wizardObj.stop();  // don't go to the next step
			}
		})

		// Change event
		wizard.on('change', function(wizard) {
			KTUtil.scrollTop();
		});
	}

	var initValidation = function() {
		validator = formEl.validate({
			// Validate only visible fields
			ignore: ":hidden",

			// Validation rules
			rules: {
				// Step 1
				profile_avatar: {
					//required: true
				},
				title: {
					required: true
				},
				// description: {
				// 	required: true
				// },
				// authorname: {
				// 	required: true
				// },
				// authoremail: {
				// 	required: true,
				// 	email: true
				// }
			},

			// Display error
			invalidHandler: function(event, validator) {
				KTUtil.scrollTop();

				swal.fire({
					"title": "",
					"text": "There are some errors in your submission. Please correct them.",
					"type": "error",
					"buttonStyling": false,
					"confirmButtonClass": "btn btn-brand btn-sm btn-bold"
				});
			},

			// Submit valid form
			submitHandler: function (form) {

			}
		});
	}

	var initSubmit = function() {
		var btn = formEl.find('[data-ktwizard-type="action-submit"]');

		btn.on('click', function(e) {
			// alert('sdfsdf');
			e.preventDefault();

			if (validator.form()) {
				// See: src\js\framework\base\app.js
				KTApp.progress(btn);
				//KTApp.block(formEl);

				// See: http://malsup.com/jquery/form/#ajaxSubmit
				formEl.ajaxSubmit({
					success: function(response) {
					    alert(response);
						 console.log(response);
						 // KTApp.unprogress(btn);
						 // KTApp.unblock(formEl);
						// window.location.href = response;
						// swal.fire({
						// 	"title": "",
						// 	"text": "The application has been successfully submitted!",
						// 	"type": "success",
						// 	"confirmButtonClass": "btn btn-secondary"
						// });
					},error: function () {
                        alert('err');
                    }
				});
			}
		});
	}

	// var initAvatar = function() {
	// 	avatar = new KTAvatar('kt_apps_projects_add_avatar');
	// }

	return {
		// public functions
		init: function() {
			formEl = $('#kt_apps_page_add_form');

			initWizard();
			initValidation();
			initSubmit();
			// initAvatar();
		}
	};
}();

jQuery(document).ready(function() {
	KTAppProjectsAdd.init();
});
