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
            first_name: {
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
                        message: 'Clergy name is required field!'
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
        // e.preventDefault();
        var mh_8 =  $('input[name="mh_8"]:checked').val();
        var mh_9 =  $('input[name="mh_9"]:checked').val(); 
        var mh_10 = $('input[name="mh_10"]:checked').val();  
        var mh_14 = $('input[name="mh_14"]:checked').val();  
        var sh_2 =  $('input[name="sh_2"]:checked').val(); 
        var sh_3 =  $('input[name="sh_3"]:checked').val(); 
        var sh_4 =  $('input[name="sh_4"]:checked').val(); 
        var dh_1 =  $('input[name="dh_1"]:checked').val(); 
        var dh_2 =  $('input[name="dh_2"]:checked').val(); 
        var ih_1 =  $('input[name="ih_1"]:checked').val(); 
        var ih_2 =  $('input[name="ih_2"]:checked').val();
        var ih_3 =  $('input[name="ih_3"]:checked').val(); 
        var ih_4 =  $('input[name="ih_4"]:checked').val(); 
        var ih_5 =  $('input[name="ih_5"]:checked').val();  
        if(mh_8 == 1){
            $("#lyes").removeAttr('name');
            $("#lno").removeAttr('name');
        }else if(mh_8 == 1){
            $("#lyes").removeAttr('name');
            $("#mh_8").removeAttr('name');
        }

        if(mh_9 == 1){
            $("#oyes").removeAttr('name');
            $("#ono").removeAttr('name');
        }else if(mh_9 == 1){
            $("#oyes").removeAttr('name');
            $("#mh_9").removeAttr('name');
        }

        if(mh_10 == 0){
            $("#pyes").removeAttr('name');
            $("#pno").removeAttr('name');
        }else if(mh_10 == 1){
            $("#pyes").removeAttr('name');
            $("#mh_10").removeAttr('name');
        }

        if(mh_14 == 0){
            $("#tyes").removeAttr('name');
            $("#tno").removeAttr('name');
        }else if(mh_14 == 1){
            $("#tyes").removeAttr('name');
            $("#mh_14").removeAttr('name');
        }

        if(sh_2 == 0){
            $("#eyes").removeAttr('name');
            $("#eno").removeAttr('name');
        }else if(sh_2 == 1){
            $("#eyes").removeAttr('name');
            $("#sh_2").removeAttr('name');
        }

        if(sh_3 == 0){
            $("#syes").removeAttr('name');
            $("#sno").removeAttr('name');
        }else if(sh_3 == 1){
            $("#syes").removeAttr('name');
            $("#sh_3").removeAttr('name');
        }

        if(sh_4 == 0){
            $("#ayes").removeAttr('name');
            $("#ano").removeAttr('name');
        }else if(sh_4 == 1){
            $("#ayes").removeAttr('name');
            $("#sh_4").removeAttr('name');
        }

        if(dh_1 == 0){
            $("#myes").removeAttr('name');
            $("#mno").removeAttr('name');
        }else if(dh_1 == 1){
            $("#myes").removeAttr('name');
            $("#dh_1").removeAttr('name');
        }

         if(dh_2 == 0){
            $("#abyes").removeAttr('name');
            $("#abno").removeAttr('name');
        }else if(dh_2 == 1){
            $("#abyes").removeAttr('name');
            $("#dh_2").removeAttr('name');
        }

         if(ih_1 == 0){
            $("#ttyes").removeAttr('name');
            $("#ttno").removeAttr('name');
        }else if(ih_1 == 1){
            $("#ttyes").removeAttr('name');
            $("#ih_1").removeAttr('name');
        }

        if(ih_2 == 0){
            $("#mgyes").removeAttr('name');
            $("#mgno").removeAttr('name');
        }else if(ih_2 == 1){
            $("#mgyes").removeAttr('name');
            $("#ih_2").removeAttr('name');
        }

        if(ih_3 == 0){
            $("#yyes").removeAttr('name');
            $("#yno").removeAttr('name');
        }else if(ih_3 == 1){
            $("#yyes").removeAttr('name');
            $("#ih_3").removeAttr('name');
        }

        if(ih_4 == 0){
            $("#tuyes").removeAttr('name');
            $("#tuno").removeAttr('name');
        }else if(ih_4 == 1){
            $("#tuyes").removeAttr('name');
            $("#ih_4").removeAttr('name');
        }

        if(ih_5 == 0){
            
            $("#tyyes").removeAttr('name');
            $("#tyno").removeAttr('name');
        }else if(ih_5 == 1){
            
            $("#tyyes").removeAttr('name');
            $("#ih_5").removeAttr('name');
        }
            alert("REGISTERING YOU NOW");
        // var formData = $('#registration').serialize();
        // var params = {'mode':'register'};
        // // var loadingIcon = $("#loading");
        // $.ajax({
        //     type: 'POST',
        //     url : 'register.php',
        //     data: formData + '&' + $.param(params),
        //     //  beforeSend: function(){
        //     //      loadingIcon.show();
        //     //  },
        //     //  complete: function(){
        //     //     loadingIcon.hide();
        //     //  },
        //     success: function(data){
        //        if(data === 'success'){
        //            // Success action
        //            alert('success');
        //        }else{
        //         alert(data);
        //            swal('Incorrect details.');
        //        }
        //     }
        // });
    });

    $(document).ready(function(){
    	 $("#long").hide();
        $("#surgery").hide();
        $("#problem").hide();
        $("#result").hide();
        $("#test").hide();
        $("#social2").hide();
        $("#social3").hide();
        $("#social4").hide();
        $("#dh1").hide();
        $("#dh2").hide();
        $(".ffs").hide();
        $("#y1").hide();
        $("#y2").hide();
        $("#y3").hide();
        $("#y4").hide();
        $("#y5").hide();
        $("#lyes").click(function(){
        	$("#long").show();
        });
        $("#lno").click(function(){
        	$("#long").hide();
        });

        $("#oyes").click(function(){
        	$("#surgery").show();
        });
        $("#ono").click(function(){
        	$("#surgery").hide();
        });

        $("#pyes").click(function(){
        	$("#problem").show();
        });
        $("#pno").click(function(){
        	$("#problem").hide();
        });

        $("#hyes").click(function(){
        	$("#result").show();
        });
        $("#hno").click(function(){
        	$("#result").hide();
        });

        $("#tyes").click(function(){
        	$("#test").hide();
        });
        $("#tno").click(function(){
        	$("#test").show();
        });

        $("#syes").click(function(){
        	$("#social2").show();
        });
        $("#sno").click(function(){
        	$("#social2").hide();
        });

        $("#eyes").click(function(){
        	$("#social3").show();
        });
        $("#eno").click(function(){
        	$("#social3").hide();
        });

        $("#ayes").click(function(){
        	$("#social4").show();
        });
        $("#ano").click(function(){
        	$("#social4").hide();
        });

        $("#myes").click(function(){
        	$("#dh1").show();
        });
        $("#mno").click(function(){
        	$("#dh1").hide();
        });

        $("#abyes").click(function(){
        	$("#dh2").show();
        });
        $("#abno").click(function(){
        	$("#dh2").hide();
        });

        $("#ttyes").click(function(){
        	$("#y1").show();
        });
        $("#ttno").click(function(){
        	$("#y1").hide();
        });

        $("#mgyes").click(function(){
        	$("#y2").show();
        });
        $("#mgno").click(function(){
        	$("#y2").hide();
        });

        $("#yyes").click(function(){
        	$("#y3").show();
        });
        $("#yno").click(function(){
        	$("#y3").hide();
        });

        $("#tuyes").click(function(){
        	$("#y4").show();
        });
        $("#tuno").click(function(){
        	$("#y4").hide();
        });

        $("#tyyes").click(function(){
        	$("#y5").show();
        });
        $("#tyno").click(function(){
        	$("#y5").hide();
        });

        $("#g1").click(function(){
        	$(".ffs").hide();
            $("#vaginal").hide();
            $("#penile").show();
            $("#mh_4").removeAttr('name');
            $("#mh_3").attr('name','mh_3');
        });
        $("#g2").click(function(){
        	$(".ffs").show();
            $("#vaginal").show();
            $("#penile").hide();
            $("#mh_3").removeAttr('name');
            $("#mh_4").attr('name','mh_4');
        });
    })