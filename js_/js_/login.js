 $(document).ready(function() {		
	$('.login').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The username must be more than 3 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The password must be more than 3 and less than 30 characters long'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('.login').serialize();
        var params = {'mode':'login'};
        // var loadingIcon = $("#loading");
        $.ajax({
            type: 'POST',
            url : 'process.php',
            data: formData + '&' + $.param(params),
            //  beforeSend: function(){
            //      loadingIcon.show();
            //  },
            //  complete: function(){
            //     loadingIcon.hide();
            // },
            success: function(data){
               if(data === 'success'){
                   // alert('Login Completed Successfully');
                   window.location.assign('index.php');
               }else{
                   alert('Incorrect details.');
               }
            }
        });
    });
});