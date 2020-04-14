// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='edit-post-form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      your_name: {
          required: true,
          minlength: 2,
          maxlength: 255
      },
      your_email: {
        required: true,
        email: true,
        maxlength: 255
      },
      your_message: {
        required: true,
        minlength: 50,
        maxlength: 500
      }
    },
    // Specify validation error messages
    messages: {
      your_name: {
          required: 'This field is required',
          minlength: 'Min length must be at least 2',
          maxlength: 'Max length must be at least 255'
      },
      your_email: 'Your email is not provided in correct format',
      your_message: {
        required: 'This field is required',
        minlength: 'Min length must be at least 50',
        maxlength: 'Max length must be at least 255'
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});



