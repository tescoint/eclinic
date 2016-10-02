/* 
 * This Javascript file was written by TesSal.
 * It handles most ajax process of the E-Clinic WebApplication
 * Copyright TechHuB
 */
$(document).ready(function(){
    //Below Have Setup An Error Message To be shown if ajax failed
   $.ajaxSetup({
       error: function(){
           $("#error").show();
       }
   });
   //Now Moving on to when a form is submitted, registration foorm
   $("#registration").submit(function(){
       var formData = $("#registration").serialize();
       var params = {"mode":"register" };
       var loadingIcon = $("#loading");
       $.ajax({
       type: "POST",
       url : "process.php",
       data: formData + "&" + $.param(params),
       beforeSend: function(){
           loadingIcon.show();
       },
       complete: function(){
           loadingIcon.hide();
       },
       success: function(data){
           if(data === 'success'){
               
               alert("Registration Completed Successfully");
               window.location.assign('index.php');
           }else{
               alert("Registration Error Please Try Again.")
           }
       }
       
       
   });
   });
   
     //Now Moving on to when a form is submitted, login foorm
   $("#login").submit(function(event){
       event.stopPropagation();
       var formData = $("#login").serialize();
       var params = {"mode":"login" };
      // var loadingIcon = $("#loading");
       $.ajax({
       type: "POST",
       url : "process.php",
       data: formData + "&" + $.param(params),
     //  beforeSend: function(){
     //      loadingIcon.show();
     //  },
     //  complete: function(){
      //     loadingIcon.hide();
      // },
       success: function(data){
           if(data === 'success'){
               
               alert("Login Completed Successfully");
               window.location.assign('index.php');
           }else{
               alert("Login Error Please Try Again.")
           }
       }
       
   });

   });
   //Now this is for sending notation values to the process scriptAddingNotation
   $("#notation").submit(function(){
      var formData = $("#notation").serialize();
      var params = {"mode":"notation"};
       var loadingIcon = $("#loading");
       var labRequired = $("#labRequired").val();
       var labForm = $("#labForm");
       $.ajax({
          url: 'process.php',
          data: formData + "&" + $.param(params),
       beforeSend: function(){
           loadingIcon.show();
       },
       complete: function(){
           loadingIcon.hide();
       },
       success: function(data){
           if(data === 'success'){
               alert('Notation Added Succesfully');
               if($("input:radio[name:required]").is(":checked")){
                   labForm.show();
               }else{
                   window.location.assign('notation.php?');
               }
           }else{
               alert("Unable To Add Notation Please Try Again.");
           }
       }
           
       });
       
   });
    //Now TO Add LabRequest And Update Notation, This Will do the magic
    $("#alun").submit(function(){
        var formData = $("#alun").serialize();
      var params = {"mode":"alun"};
       var loadingIcon = $("#loading");
        $.ajax({
          url: 'process.php',
          data: formData + "&" + $.param(params),
       beforeSend: function(){
           loadingIcon.show();
       },
       complete: function(){
           loadingIcon.hide();
       },
       success: function(data){
           if(data === 'success'){
               alert('LabRequest Added Succesfully');
              window.location.assign('notation.php?');
           }else{
               alert("Unable To Add LabRequest Please Try Again.");
           }
       }
           
       });
    });
    //Now Next is To Handle The LabReport Generation Form
    $("#alrun").submit(function(){
        var formData = $("#alrun").serialize();
      var params = {"mode":"alrun"};
       var loadingIcon = $("#loading");
        $.ajax({
          url: 'process.php',
          data: formData + "&" + $.param(params),
       beforeSend: function(){
           loadingIcon.show();
       },
       complete: function(){
           loadingIcon.hide();
       },
       success: function(data){
           if(data === 'success'){
               alert('LabReport Added Succesfully');
              window.location.assign('labrequest.php?');
           }else{
               alert("Unable To Add LabReport Please Try Again.");
           }
       }
           
       });
    });
    //Now Handling UserPermission Form
    $("#userpermission").submit(function(){
       var formData = $("#userpermission").serialize();
      var params = {"mode":"userpermission"};
       var loadingIcon = $("#loading");
        $.ajax({
          url: 'process.php',
          data: formData + "&" + $.param(params),
       beforeSend: function(){
           loadingIcon.show();
       },
       complete: function(){
           loadingIcon.hide();
       },
       success: function(data){
           if(data === 'success'){
               alert('User Permission Granted Succesfully');
              window.location.assign('profile.php?');
           }else{
               alert("Unable To Grant UserPermission Please Try Again.");
           }
       }
           
       }); 
        
    });
    //Handling Status Update Form
    $("#statusupdate").submit(function(){
       var formData = $("#statusupdate").serialize();
      var params = {"mode":"statusupdate"};
       var loadingIcon = $("#loading");
        $.ajax({
          url: 'process.php',
          data: formData + "&" + $.param(params),
       beforeSend: function(){
           loadingIcon.show();
       },
       complete: function(){
           loadingIcon.hide();
       },
       success: function(data){
           if(data === 'success'){
               alert('User Status Changed Succesfully');
              window.location.assign('profile.php?');
           }else{
               alert("Unable To Change UserStatus Please Try Again.");
           }
       }
           
       }); 
        
        
    });
    //recordupdate Handling
    $("#recordupdate").submit(function(){
       var formData = $("#recordupdate").serialize();
      var params = {"mode":"recordupdate"};
       var loadingIcon = $("#loading");
        $.ajax({
          url: 'process.php',
          data: formData + "&" + $.param(params),
       beforeSend: function(){
           loadingIcon.show();
       },
       complete: function(){
           loadingIcon.hide();
       },
       success: function(data){
           if(data === 'success'){
               alert('Record Successfully Updated Succesfully');
              window.location.assign('profile.php?');
           }else{
               alert("Unable To Update Record Please Try Again.");
           }
       }
           
       });  
    });
    //Tester Form Handling
    $("#tester").submit(function(){
       var formData = $("#tester").serialize();
      var params = {"mode":"tester"};
       var loadingIcon = $("#loading");
        $.ajax({
          url: 'process.php',
          data: formData + "&" + $.param(params),
       beforeSend: function(){
           loadingIcon.show();
       },
       complete: function(){
           loadingIcon.hide();
       },
       success: function(data){
           if(data === 'success'){
               alert('TestResult Added Succesfully');
              window.location.assign('test.php?');
           }else{
               alert("Unable To Add TestResult,Please Try Again.");
           }
       }
           
       });  
    });
    //LabReg Handling(form)
    
});


