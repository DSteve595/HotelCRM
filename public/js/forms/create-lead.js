/**
 * Created by Bradley Kovacs on 12/26/15.
 */

function generateQuote()
{
    $('#quote').val('1234');
}

$.validator.addMethod(
    "regex",
    function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },
    "There is an error in the format of your input."
);

$.validator.addMethod(
    "phoneNumber",
    function(value) {
        value = value.replace(/\D/g, "");
        return value.length >= 5 && value.length <= 12;
    },
    "That does not look like a valid phone number."
);

var LeadForm = function () {

    return {

        //Lead Form
        initLeadForm: function () {
            // Datepickers
            $('#moveDate').datepicker({
                dateFormat: 'mm/dd/yy',
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>'
            });

            // Validation
            $("#lead-form").validate({
                // Rules for form validation
                rules:
                {
                    fname:
                    {
                        required: true
                    },
                    lname:
                    {
                        required: true
                    },
                    email:
                    {
                        required: true,
                        email: true
                    },
                    phone:
                    {
                        required: true,
                        phoneNumber: ''
                    },
                    departingZip:
                    {
                        required: true,
                        minlength: 5
                    },
                    arrivingZip:
                    {
                        required: true,
                        minlength: 5
                    }
                },

                // Messages for form validation
                messages:
                {
                    fname:
                    {
                        required: 'Enter the customers first name'
                    },
                    lname:
                    {
                        required: 'Enter the customers last name'
                    },
                    email:
                    {
                        required: 'Lead email required',
                        email: 'You entered an invalid email address'
                    },
                    phone:
                    {
                        required: 'Lead phone number required'
                    },
                    departingZip:
                    {
                        required: 'Enter a departing zip code',
                        minlength: 'That zip code is too short'
                    },
                    arrivingZip:
                    {
                        required: 'Enter an arriving zip code',
                        minlength: 'That zip code is too short'
                    }
                },

                // Message colors
                errorClass: "alert-danger",

                // Ajax form submition
                submitHandler: function(form)
                {
                    $(form).ajaxSubmit(
                        {
                            beforeSend: function()
                            {
                                $('#lead-form button[type="submit"]').addClass('button-uploading').attr('disabled', true);
                            },
                            uploadProgress: function(event, position, total, percentComplete)
                            {
                                $("#lead-form .progress").text(percentComplete + '%');
                            },
                            success: function()
                            {
                                $("#sky-form1").addClass('submited');
                                $('#lead-form button[type="submit"]').removeClass('button-uploading').attr('disabled', false);
                            }
                        });
                },

                // Do not change code below
                errorPlacement: function(error, element)
                {
                    error.insertAfter(element.parent());
                }
            });
        }

    };

}();