/*
 *  Document   : op_auth_signup.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Sign Up Page
 */

// Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
class pageAuthSignUp {
  /*
   * Init Sign Up Form Validation
   *
   */
  static initValidationSignUp() {
    // Load default options for jQuery Validation plugin
    Codebase.helpers('jq-validation');

    // Init Form Validation
    jQuery(".js-validation-signup").validate({
        rules: {
            first_name: {
                required: true,
                minlength: 3,
            },
            last_name: {
                required: true,
                minlength: 3,
            },
            email: {
                required: true,
                unique: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 8,
            },
            password_confirmation: {
                required: true,
                equalTo: "#password",
            },
            "signup-terms": {
                required: true,
            },
        },
        messages: {
            first_name: {
                required: "Please enter a First Name",
                minlength:
                    "Your username must consist of at least 3 characters",
            },
            last_name: {
                required: "Please enter a Last Name",
                minlength:
                    "Your username must consist of at least 3 characters",
            },
            email: "Please enter a valid email address",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long",
            },
            "password-confirm": {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long",
                equalTo: "Please enter the same password as above",
            },
            "signup-terms": "You must agree to the service terms!",
        },
    });
  }

  /*
   * Init functionality
   *
   */
  static init() {
    this.initValidationSignUp();
  }
}

// Initialize when page loads
Codebase.onLoad(pageAuthSignUp.init());
