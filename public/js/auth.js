var Auth = function () {
	var _setupFormValidation = function () {
		alert(1);
		$("#register-form").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				email: {
					required: true,
					email: true
				},
				password: {
					required: true,
					minlength: 5
				},
				agree: "required"
			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				email: "Please enter a valid email address",
				agree: "Please accept our policy"
			},
			submitHandler: function (form) {
				form.submit();
			}
		});
	}
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
