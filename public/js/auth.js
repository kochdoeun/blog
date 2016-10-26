var Auth = function () {
	"use strict";

	var _setupFormValidation = function () {
		GOONPAGE_VALIDATE.UTIL.formOne();
	};

	var GOONPAGE_VALIDATE = {};
	GOONPAGE_VALIDATE.UTIL = {
		formOne: function () {
			$("#register-form-step1").validate({
				errorClass:'error-class',
				errorElement: 'span',
				rules: {
					listingName: "required",
					description: "required",
					keyword: "required",
					logo: "required",
					email: {
						required: true,
						email: true
					},
				},
				messages: {
					listingName: "Please enter name",
					description: "Please enter description",
					keyword: "Please enter keyword",
					logo: "Please enter logo",
					email: "Please enter email",
				},
				submitHandler: function () {
					alert(11);
				},
			});
		},
		formTwo: function () {

		},
		formThree: function () {

		},
	};
	return {
		validation: function () {
			return {
				setupFormValidation: function () {
					return _setupFormValidation();
				}
			}
		}()
	}
}();

$(document).ready(function () {
	Auth.validation.setupFormValidation();
});
