$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='registration']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        firstname: "required",
        lastname: "required",
        email: {
          required: true,
          // Specify that email should be validated
          // by the built-in "email" rule
          email: true,
          maxlength: 255
        },
        password: {
          required: true,
          minlength: 6
        },
        passwordMatch : {
            required: true,
            minlength: 6,
            equalTo : "#password"
        }
      },
      // Specify validation error messages
      messages: {
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 6 characters long"
        },
        passwordMatch: {
            required: "Please confirm password",
            minlength: "Your password must be at least 6 characters long",
            equalTo: "Passwords do not match"
        },
        email: {
            email: "Please enter a valid email address",
            required: "Please provide a valid email address",
            maxlength: "Email too long"
        }
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });