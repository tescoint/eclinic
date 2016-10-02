 $(document).ready(function() {
    $('#registration').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            surname: {
                validators: {
                    notEmpty: {
                        message: 'Enter your surname!'
                    },
                    stringLength: {
                        min: 3,
                        max: 60,
                        message: 'Your surname should have a minimum of 3 and maximum of 60 characters please!'
                    }
                }
            },
            middle_name: {
                validators: {
                    stringLength: {
                        min: 3,
                        max: 60,
                        message: 'Your middle name should have a minimum of 3 and maximum of 60 characters please!'
                    }
                }
            },
            firstname: {
                validators: {
                    notEmpty: {
                        message: 'You have to enter your firstname!'
                    },
                    stringLength: {
                        min: 3,
                        max: 60,
                        message: 'Your firstname should have a minimum of 3 and maximum of 60 characters please!'
                    }
                }
            },
            c_name: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            c_address: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            c_phone: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            dob: {
                validators: {
                    notEmpty: {
                        message: 'Your date of birth is required!'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'Please select an option!'
                    }
                }
            },
            relationship_status: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            programme: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            home_address: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            guardian: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            guardian_relationship: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            guardian_address: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            phoneno: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            guardian_phoneno: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            mh_1: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_2: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_3: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_4: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_5: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_6: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_7: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_8: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_9: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_10: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_11: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_12: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_13: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_14: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            mh_15: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            sh_1: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            sh_2: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            sh_3: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            sh_4: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            sh_5: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            dh_1: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            dh_2: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            ih_1: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            ih_2: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            ih_3: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            ih_4: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            ih_5: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            ffs1: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            },
            ffs2: {
                validators: {
                    notEmpty: {
                        message: 'Your answer is required!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#registration').serialize();
        var params = {'mode':'registration'};
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
            //  },
            success: function(data){
               if(data === 'success'){
                   // Success action
                   alert('success');
               }else{
                   swal('Incorrect details.');
               }
            }
        });
    });


    $('#notation').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            card_number: {
                validators: {
                    notEmpty: {
                        message: 'The card number is required!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#notation').serialize();
        var params = {'mode':'notation'};
        var redirect = $('#redirect').val(); 
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
            //  },
            success: function(data){
               if(data === 'lab'){
                $('#myModal').modal('show');
                   
               }else if(data === 'success'){
                    // Success action
                   alert('success');
                window.assign.location("viewnotation.php?p="+redirect);
               }else{
                   alert(data);
               }
            }
        });
    });


    $('#alun').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            card_number: {
                validators: {
                    notEmpty: {
                        message: 'The card number is required!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#alun').serialize();
        var params = {'mode':'alun'};
        var redirect = $('#redirect').val();
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
            //  },
            success: function(data){
               if(data === 'success'){
                   // Success action
                   alert('success');
                   window.location.assign("viewnotation.php?p="+redirect);
               }else{
                   alert(data);
               }
            }
        });
    });


    $('#alrun').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            stid: {
                validators: {
                    notEmpty: {
                        message: 'Student not identified!'
                    }
                }
            },
            doc_id: {
                validators: {
                    notEmpty: {
                        message: 'Doctor not identified!'
                    }
                }
            },
            lab_req_id: {
                validators: {
                    notEmpty: {
                        message: 'Request Form not identified!'
                    }
                }
            },
            notation_id: {
                validators: {
                    notEmpty: {
                        message: 'Notation not identified!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#alrun').serialize();
        var params = {'mode':'alrun'};
        var redirect = $('#redirect').val();
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
            //  },
            success: function(data){
               if(data === 'success'){
                   // Success action
                   alert('success');
                   window.location.assign("viewlab.php?p="+redirect);
               }else{
                   alert(data);
               }
            }
        });
    });


    $('#statusupdate').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'Please enter a username!'
                    }
                }
            },
            status: {
                validators: {
                    notEmpty: {
                        message: 'No status defined'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#statusupdate').serialize();
        var params = {'mode':'statusupdate'};
        var redirect = $('#redirect').val();
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
            //  },
            success: function(data){
               if(data === 'success'){
                   // Success action
                   alert('success');
                   window.location.assign("profile.php?p="+redirect);
               }else{
                   alert(data);
               }
            }
        });
    });


    $('#recordupdate').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            card_number: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            surname: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    },
                    stringLength: {
                        min: 3,
                        max: 60,
                        message: 'Your surname should have a minimum of 3 and maximum of 60 characters please!'
                    }
                }
            },
            middle_name: {
                validators: {
                    stringLength: {
                        min: 3,
                        max: 60,
                        message: 'Your middle name should have a minimum of 3 and maximum of 60 characters please!'
                    }
                }
            },
            firstname: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    },
                    stringLength: {
                        min: 3,
                        max: 60,
                        message: 'Your firstname should have a minimum of 3 and maximum of 60 characters please!'
                    }
                }
            },
            c_name: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            c_address: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            c_phone: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            dob: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            relationship_status: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            home_address: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            guardian: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            guardian_relationship: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            guardian_address: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            phoneno: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            },
            guardian_phoneno: {
                validators: {
                    notEmpty: {
                        message: 'This field cannot be empty!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#recordupdate').serialize();
        var params = {'mode':'recordupdate'};
        var redirect = $('#redirect').val();
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
            //  },
            success: function(data){
               if(data === 'success'){
                   // Success action
                   alert('success');
                   window.location.assign("profile.php?p="+redirect);
               }else{
                   alert(data);
               }
            }
        });
    });


    $('#tester').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            card_number: {
                validators: {
                    notEmpty: {
                        message: 'The card number is required!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#tester').serialize();
        var params = {'mode':'tester'};
        var redirect = $('#redirect').val();
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
            //  },
            success: function(data){
               if(data === 'success'){
                   // Success action
                   alert('success');

               }else{
                   alert(data);
               }
            }
        });
    });
    
    $('#tnosby').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            year: {
                validators: {
                    notEmpty: {
                        message: 'The Year is required!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#tnosby').serialize();
        var params = {'mode':'tnosby'};
        // var loadingIcon = $("#loading");
        $.ajax({
            type: 'POST',
            url : 'clinicstat.php',
            data: formData + '&' + $.param(params),
            //  beforeSend: function(){
            //      loadingIcon.show();
            //  },
            //  complete: function(){
            //     loadingIcon.hide();
            //  },
            success: function(data){
                $("#tnosby").show();
               if(data === 'success'){
                   // Success action
              //    alert('success');
                  window.location.assign("clinicstat.php#tnbpy");
                  window.location.reload();

              }else{
              //    alert(data);
                  window.location.assign("clinicstat.php#tnbpy");
                  window.location.reload();
               }
            }
        });
    });

    $('#tnofrsby').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            year: {
                validators: {
                    notEmpty: {
                        message: 'The Year is required!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#tnofrsby').serialize();
        var params = {'mode':'tnofrsby'};
        // var loadingIcon = $("#loading");
        $.ajax({
            type: 'POST',
            url : 'clinicstat.php',
            data: formData + '&' + $.param(params),
            //  beforeSend: function(){
            //      loadingIcon.show();
            //  },
            //  complete: function(){
            //     loadingIcon.hide();
            //  },
            success: function(data){
                $("#tnofrsby").show();
               if(data === 'success'){
                   // Success action
              //    alert('success');
                  window.location.assign("clinicstat.php#tnfrsby");
                  window.location.reload();

              }else{
               //   alert(data);
                  window.location.assign("clinicstat.php#tnfrsby");
                  window.location.reload();
               }
            }
        });
    });

     $('#tnostbd').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            year: {
                validators: {
                    notEmpty: {
                        message: 'The Date is required!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#tnostbd').serialize();
        var params = {'mode':'tnostbd'};
        // var loadingIcon = $("#loading");
        $.ajax({
            type: 'POST',
            url : 'clinicstat.php',
            data: formData + '&' + $.param(params),
            //  beforeSend: function(){
            //      loadingIcon.show();
            //  },
            //  complete: function(){
            //     loadingIcon.hide();
            //  },
            success: function(data){
                $("#tnostbd").show();
               if(data === 'success'){
                   // Success action
              //    alert('success');
                  window.location.assign("clinicstat.php#tnstbd");
                  window.location.reload();

              }else{
               //   alert(data);
                  window.location.assign("clinicstat.php#tnstbd");
                  window.location.reload();
               }
            }
        });
    });

    $('#tnosttbd').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            doc: {
                validators: {
                    notEmpty: {
                        message: 'The Doctor is required!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#tnosttbd').serialize();
        var params = {'mode':'tnosttbd'};
        // var loadingIcon = $("#loading");
        $.ajax({
            type: 'POST',
            url : 'clinicstat.php',
            data: formData + '&' + $.param(params),
            //  beforeSend: function(){
            //      loadingIcon.show();
            //  },
            //  complete: function(){
            //     loadingIcon.hide();
            //  },
            success: function(data){
                $("#tnosttbd").show();
               if(data === 'success'){
                   // Success action
              //    alert('success');
                  window.location.assign("clinicstat.php#tnsttbd");
                  window.location.reload();

              }else{
               //   alert(data);
                  window.location.assign("clinicstat.php#tnsttbd");
                  window.location.reload();
               }
            }
        });
    });


    $('#tnosttbdbd').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            doc: {
                validators: {
                    notEmpty: {
                        message: 'The Doctor is required!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#tnosttbdbd').serialize();
        var params = {'mode':'tnosttbdbd'};
        // var loadingIcon = $("#loading");
        $.ajax({
            type: 'POST',
            url : 'clinicstat.php',
            data: formData + '&' + $.param(params),
            //  beforeSend: function(){
            //      loadingIcon.show();
            //  },
            //  complete: function(){
            //     loadingIcon.hide();
            //  },
            success: function(data){
                $("#tnosttbdbd").show();
               if(data === 'success'){
                   // Success action
              //    alert('success');
                  window.location.assign("clinicstat.php#tnsttbdbd");
                  window.location.reload();

              }else{
                 // alert(data);
                  window.location.assign("clinicstat.php#tnosttbdbd");
                  window.location.reload();
               }
            }
        });
    });


    $('#tnoltrbd').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            day: {
                validators: {
                    notEmpty: {
                        message: 'The Day is required!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#tnoltrbd').serialize();
        var params = {'mode':'tnoltrbd'};
        // var loadingIcon = $("#loading");
        $.ajax({
            type: 'POST',
            url : 'clinicstat.php',
            data: formData + '&' + $.param(params),
            //  beforeSend: function(){
            //      loadingIcon.show();
            //  },
            //  complete: function(){
            //     loadingIcon.hide();
            //  },
            success: function(data){
                $("#tnoltrbd").show();
               if(data === 'success'){
                   // Success action
              //    alert('success');
                  window.location.reload("clinicstat.php#ltr");
                  window.location.reload();

              }else{
                //  alert(data);
                  window.location.assign("clinicstat.php#ltr");
                  window.location.reload();
               }
            }
        });
    });


    $('#tnolrgbd').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            day: {
                validators: {
                    notEmpty: {
                        message: 'The Day is required!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#tnolrgbd').serialize();
        var params = {'mode':'tnolrgbd'};
        // var loadingIcon = $("#loading");
        $.ajax({
            type: 'POST',
            url : 'clinicstat.php',
            data: formData + '&' + $.param(params),
            //  beforeSend: function(){
            //      loadingIcon.show();
            //  },
            //  complete: function(){
            //     loadingIcon.hide();
            //  },
            success: function(data){
                $("#tnoltrbd").show();
               if(data === 'success'){
                   // Success action
              //    alert('success');
                  window.location.reload("clinicstat.php#tnlrgbd");
                  window.location.reload();

              }else{
                //  alert(data);
                  window.location.assign("clinicstat.php#tnlrgbd");
                  window.location.reload();
               }
            }
        });
    });


        $('#tnodpbd').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            day: {
                validators: {
                    notEmpty: {
                        message: 'The Day is required!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#tnodpbd').serialize();
        var params = {'mode':'tnodpbd'};
        // var loadingIcon = $("#loading");
        $.ajax({
            type: 'POST',
            url : 'clinicstat.php',
            data: formData + '&' + $.param(params),
            //  beforeSend: function(){
            //      loadingIcon.show();
            //  },
            //  complete: function(){
            //     loadingIcon.hide();
            //  },
            success: function(data){
                $("#tnodpbd").show();
               if(data === 'success'){
                   // Success action
              //    alert('success');
                  window.location.reload("clinicstat.php#tndpbd");
                  window.location.reload();

              }else{
                //  alert(data);
                  window.location.assign("clinicstat.php#tndpbd");
                  window.location.reload();
               }
            }
        });
    });

    $('#labreg').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#labreg').serialize();
        var params = {'mode':'labreg'};
        var redirect = $('#redirect').val();
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
            //  },
            success: function(data){
               if(data === 'success'){
                   // Success action
                   alert('success');
                   window.location.assign("viewlab.php?p="+redirect);
               }else{
                   alert(data);
               }
            }
        });
    });


   $(".drugupdate").click(function(){
       var drug = $(this).val();
    var collected = $("#collected").val();
    var notation_id = $(this).val();
    var redirect = $('#redirect').val();
    $.post("process.php", {'mode':'drugupdate', 'collected':collected, 'notation_id':notation_id},function(data){
            if(data === 'success'){
                   // Success action
                   alert('success');
                   window.location.assign("viewprescription.php?p="+redirect);
               }else{
                   alert(data);
               }
    });
   });
    $('#editnotation').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            collected: {
                validators: {
                    notEmpty: {
                        message: 'Please specify!'
                    }
                }
            },
            notation_id: {
                validators: {
                    notEmpty: {
                        message: 'Notation form not referenced'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#editnotation').serialize();
        var params = {'mode':'editnotation'};
        var redirect = $('#redirect').val();
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
            //  },
            success: function(data){
               if(data === 'success'){
                   // Success action
                   alert('success');
                   window.location.assign("viewnotation.php?p="+redirect);
               }else{
                   alert(data);
               }
            }
        });
    });


    $('#search').bootstrapValidator({
        message: 'This value is not valid',
        //live: 'submitted',
        feedbackIcons: {
            // valid: 'glyphicon glyphicon-ok',
            // invalid: 'glyphicon glyphicon-remove',
            // validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            searchquery: {
                validators: {
                    notEmpty: {
                        message: 'Enter a value to search!'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        // Prevent submit form
        e.preventDefault();

        var formData = $('#search').serialize();
        var params = {'mode':'search'};
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
            //  },
            success: function(data){
               if(data === 'success'){
                   // Success action
                   alert('success');
               }else{
                   alert(data);
               }
            }
        });
    });

});


// Userperssion function can be called from any page with userpermission()
function userpermission() {
    var params = {'mode':'userpermission'};
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
        //  },
        success: function(data){
           if(data === 'success'){
               // Success action
               alert('success');
           }else{
               alert(data);
           }
        }
    });
}

