<?php
ob_start();
session_start();
require 'includes/db.php';
if(empty($_SESSION['recordoff'])){
    header("location:login.php");
}
/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
$pagename = "editp";
require ("includes/read.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>E-CLINIC || EDIT PROFILE FOR </title>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
 <?php require('includes/header.php'); ?>    
</head>
<body class="">
<!-- BEGIN HEADER -->
<?php require 'includes/header2.php'; ?>
<!-- END HEADER --> 

<!-- BEGIN CONTENT -->
<div class="page-container row-fluid"> 
<!-- BEGIN SIDEBAR --> 
<?php require 'includes/sidebar.php'; ?>
<!-- END SIDEBAR --> 
<!--    ---------------------------------------------------------------------------------    -->


<div class="page-content"> 
    <div class="content">
      	<div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>STUDENT'S <span class="semi-bold"> HEALTH </span> INFORMATION DATA (CONFIDENTIAL)</h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border"> <br>
                    <form action="" id="recordupdate" name="recordupdate">
                 <div class="row">
                 <h4>SECTION 1</h4>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">Surname</label>
                            <input type="hidden" name="card_number" id="card_number" value="<?php echo $pcard_number; ?>" >
                            <input id="surname" name="surname" type="text"  class="form-control" value="<?php echo $pdata['surname']; ?>"></p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">First Name</label>
                            <input id="first_name" name="first_name" type="text" class="form-control" value="<?php echo $pdata['first_name'];?>"></p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">Middle Name</label>
                            <input id="middle_name" name="middle_name" type="text"  class="form-control" value="<?php echo $pdata['middle_name'];?>"></p>
                      </div>
                    </div><input type="hidden" name="redirect" id="redirect" value="<?php echo $_GET['p'];?>">
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">Date Of Birth</label>
                            <input id="dob" name="dob" type="text"  class="form-control" value="<?php echo $pdata['dob'];?>"></p>
                      </div>
<!--                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">Gender</label>
                            <input id="gender" name="gender" type="text"  class="form-control"></p>
                      </div>-->
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="form-group">
                        <label class="form-label">Relationship Status</label>
                        <span class="help">Single / Married</span>
                        <div class="controls">
                            <select name="relationship_status" id="relationship_status">
                              <option value="0">Single</option>
                              <option value="1">Married</option>
                              <option value="2">Divorced</option>
                            </select>
                        </div>
                        </div>
                   
                      </div>
                       <div class="col-md-4 col-sm-4 col-xs-4">
                        <label class="form-label">Home Address</label>
                        <div class="controls">
                            <input id="home_address" name="home_address" type="text" class="form-control" value="<?php echo $pdata['home_address'];?>" />
                        </div>
                        
                      </div>
                       <div class="col-md-6 col-sm-6 col-xs-6">
                        <p><label class="form-label">Phone No</label>
                            <input id="phoneno" name="phoneno" type="text" class="form-control" value="<?php echo $pdata['phoneno'];?>"></p>
                      </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                        <p><label class="form-label">Guardian Phone No</label>
                            <input id="guardian_phoneno" name="guardian_phoneno" type="text" class="form-control" value="<?php echo $pdata['guardian_phoneno'];?>" ></p>
                      </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <p><label class="form-label">Parent/Guardian/Spouse</label>
                            <input id="guardian" name="guardian" type="text" class='form-control' value="<?php echo $pdata['guardian'];?>" ></p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">Relationship</label>
                            <input id="guardian_relationship" name="guardian_relationship" type="text" class="form-control" value="<?php echo $pdata['guardian_relationship'];?>" ></p>
                      </div>
                    </div>
                      <div class="form-group">
                        <label class="form-label">Address</label>
                           <span class="help">Parent/Guardian/Spouse address</span>
                        <div class="controls">
                            <textarea rows="2" class="form-control" name="guardian_address" id="guardian_address" value="<?php echo $pdata['guardian_address'];?>" ></textarea>
                        </div>
                      </div>
					  <div class="row">
                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <p><label class="form-label">Clergy</label>
                            <input id="c_name" name="c_name" type="text" class='form-control' value="<?php echo $pdata['c_name'];?>" ></p>
                      </div>
                    </div>
                      <div class="form-group">
                        <label class="form-label">Address</label>
                           <span class="help">Clergy address</span>
                        <div class="controls">
                            <textarea rows="2" class="form-control" name="c_address" id="c_address" value="<?php echo $pdata['c_address'];?>" ></textarea>
                        </div>
                      </div>
                    
                      <h4>Telephone</h4>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">Home</label>
                            <input id="c_phone" name="c_phone" type="text" class="form-control" value="<?php echo $pdata['c_phone'];?>" ></p>
                      </div>
                      
                    </div>

		</div>
             </div>
                        <center>  <button type="submit" id="submit" class="btn btn-primary">Edit</button></center>
                    </form>
          </div>
                  
      	</div>
    </div>
</div>








      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>
  <!-- END PAGE CONTAINER -->
</div>
<!-- END CONTENT --> 
<!-- BEGIN CORE JS FRAMEWORK--> 
<?php require('includes/footer.php'); ?>
<!-- END CORE TEMPLATE JS --> 

<!-- END NEED TO WORK ON -->
</body>
</html>