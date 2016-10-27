var Auth = function () {
	"use strict";

	var _setupFormValidation = function () {
		GOONPAGE_VALIDATE.UTIL.formOne();
		GOONPAGE_VALIDATE.UTIL.formTwo();
		GOONPAGE_VALIDATE.UTIL.formThree();
		_handleButtonBack();
	};

	var _handleButtonBack = function () {
		$("#btn-back-step2").click(function () {
			$("#step2").addClass("hide");
			$("#step1").removeClass("hide");
		});
		$("#btn-back-step3").click(function () {
			$("#step3").addClass("hide");
			$("#step2").removeClass("hide");
		});
	}

	var GOONPAGE_VALIDATE = {};
	GOONPAGE_VALIDATE.UTIL = {
		formOne: function () {
			$("#register-form-step1").validate({
				errorClass:'error-class',
				errorElement: 'span',
				rules: {
					businessName: "required",
					businessDescription: "required",
					bkeyword: "required",
					blogo: "required",
					pageCategory: "required",
					bemail: {
						required: true,
						email: true
					},
				},
				messages: {
					businessName: "Please enter business name",
					businessDescription: "Please enter description",
					bkeyword: "Please enter keyword",
					blogo: "Please enter logo",
					pageCategory: "Please enter page category",
					bemail: "Please enter email",
				},
				submitHandler: function () {
					$("#step1").addClass("hide");
					$("#step2").removeClass("hide");
				},
			});
		},
		formTwo: function () {
			$("#register-form-step2").validate({
				errorClass:'error-class',
				errorElement: 'span',
				rules: {
					country: "required",
					state: "required",
					city: "required",
				},
				messages: {
					country: "Please select country",
					state: "Please select state",
					city: "Please select city",
				},
				submitHandler: function () {
					$("#step2").addClass("hide");
					$("#step3").removeClass("hide");
				},
			});
		},
		formThree: function () {
			$("#register-form-step3").validate({
				errorClass:'error-class',
				errorElement: 'span',
				rules: {
					fname: "required",
					lname: "required",
					userPhone: "required",
					email: {
						required: true,
						email: true
					},
					confirmEmail: {
						required: true,
						email: true,
						equalTo: "#email"
					},
					password: {
						required: true,
						minlength: 5
					},
					confirmPassword: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
				},
				messages: {
					fname: "Please enter first name",
					lname: "Please enter first name",
					email: "Please enter email",
					confirmEmail: "Please enter confirm email",
					password: "Please enter password",
					confirmPassword: "Please enter confirm password",
				},
				submitHandler: function () {
					$("#step2").addClass("hide");
					$("#step3").removeClass("hide");
					alert("Succeed to register");
				},
			});
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
