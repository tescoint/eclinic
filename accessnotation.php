<?php
ob_start();
session_start();
require("includes/db.php");
if(empty($_SESSION['director']) and empty($_SESSION['doc']) and empty($_SESSION['matron']) and empty($_SESSION['recordoff'])){
    header("location:login.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Including the read file
$pagename = "vn";
require ("includes/read.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-CLINIC || View Notation</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    
	<!-- BEGIN PLUGIN CSS -->
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


	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<!-- END PAGE TITLE -->
			<!-- BEGIN PlACE PAGE CONTENT HERE -->
			 <div class="row">
			 <input type="hidden" name="refresh" id="refresh" value="<?php echo $_GET['p'];?>">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>DOCTOR'S <span class="semi-bold"> REPORT</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border"> <br>
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                    	<div class="col-md-4 col-sm-4 col-xs-4">
                    		<p><label class="form-label">DATE</label>
                                    <input id="date" name="date" type="text" class="form-control" disabled="true" <?php echo " value='$vdate'"; ?>/></p>
                    	</div>
                    	<div class="col-md-4 col-sm-4 col-xs-4" style="float:right" >
                    		<p><label class="form-label">CARD NUMBER</label>
                                    <input name="card_number" id="card_number" type="text" class="form-control"disabled="true" value="<?php echo $pcard_number; ?>"/></p>
                    	</div>
                    </div>


                      <div class="form-group">
                        <label class="form-label">YOUR NAME</label>
                        <span class="help">MR /MRS /Miss</span>
                        <div class="controls">
                            <input name="name" id="name" type="text" class="form-control" disabled="true" value="<?php echo $pname; ?>"/>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="form-label">HOME ADDRESS</label>
                        <div class="controls">
                            <input name="home_address" id="address" type="text" class="form-control" disabled="true" value="<?php echo $paddress; ?>"/>
                        </div>
                      </div>
                       <div class="row">
                       <div class="col-md-4 col-sm-4 col-xs-4">
                       <div class="form-group">
                        <label class="form-label">AGE</label>
<!--                          <span class="help">eg "dd/mm/yyyy"</span>-->
                        <div class="controls">
                            <input name="dob"  type="text" class="form-control"  disabled="true" value="<?php echo $age; ?>" />
                        </div>
                      </div>
                       </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                       <div class="form-group">
                        <label class="form-label">WEIGHT</label>
                          <span class="help">eg "70Kgs, 95Lbs, 60pounds e.t.c"</span>
                        <div class="controls">
                          <input name="weight" id="weight" type="text" class="form-control"  disabled="true"/>
                        </div>
                      </div>
                      </div>

                       <div class="col-md-4 col-sm-4 col-xs-4">
                       	 <div class="form-group">
                       	 	 <h4>SEX</h4>
                       	 	 <div class="radio">
                                        <input  type="radio"  value="male" name="gender" disabled="true" <?php if($psex == 'Male'){ echo "checked";} ?> />
                        		 <label>MALE</label>
                         		<input type="radio" value="female" name="gender" disabled="true" <?php if($psex == 'Female'){ echo "checked";} ?> />
                          		<label>FEMALE</label>
                       	 	 </div>
                       	 </div>
                       </div>
                       


                       <div class="form-group">
                        <label class="form-label">NAME OF PRIVATE PHYSICIAN</label>
                        <span class="help">If any</span>
                        <div class="controls">
                            <input type="text" class="form-control" disabled="true" value="NONE"/>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="form-label">NEXT OF KIN</label>
                            <span class="help">In case of emergency</span>
                        <div class="controls">
                            <input type="text" class="form-control" disabled="true" value="<?php echo $pnextkin; ?>"/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">ADDRESS</label>
                            <span class="help">Address of next of kin</span>
                        <div class="controls">
                            <input type="text" class="form-control" disabled="true" value="<?php echo $pnextkinadd; ?>"/>
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="form-label">PHONE NUMBER</label>
                            <span class="help">Phone number of next of kin</span>
                        <div class="controls">
                            <input id="'phone" type="text" class="form-control" disabled="true" value="<?php echo $pnextkinphone; ?>"/>
                      </div>
                        </div>
                      </div>
          
                     </div>
                    </div>
                   </div>
                  </div>






	<div class="row">
        <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border">
                    <h3>MEDICAL<span class="semi-bold">NOTATION</span></h3>
                    <br>
                    <div style="background-color:#EEE;min-height:100px">
                      <div class="container"> <?php echo $vnotation; ?> </div>
                    </div>
                    
                  <div class="form-group">
                  <h4>LABORATORY TEST</h4>
                  <div class="radio">
                        <input type="radio" <?php if($vlab == 1){echo " checked"; } ?> >
                  	<label>REQUIRED</label>
                  </div>
                  </div>
                </div>
              </div>
        </div>
      </div>


       <div class="row">
        <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border">
                    <h3>DOCTOR'S <span class="semi-bold">PRESCRIPTION</span></h3>
                    <br>
                    <div style="background-color:#EEE;min-height:100px">
                      <div class="container"> <?php echo $vprescription; ?> </div>
                    </div>
                   
       
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

<!-- END JAVASCRIPTS -->

<!-- END NEED TO WORK ON -->

<!--BEGIN LAB TEST REQUIRED MODAL  -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		 <br/>
        <h4 id="myModalLabel" class="semi-bold">LAB. REQUEST FORM</h4>
        <br/>
      </div>
      <div class="modal-body">
          <form name="alun" id="alun">
        <div class="row form-row">
         <div class="col-md-6">
             <input type="hidden" name="card_number" id="card_number" value="<?php echo $pcard_number; ?>" >
             <input class="form-control" type="text" placeholder="PATIENT NAME" disabled="" value="<?php echo $pname; ?>" />
          </div>
          <div class="col-md-3">
              <input class="form-control" type="text" placeholder="age" disabled="" value="<?php echo $age; ?>" />
          </div>
          <div class="col-md-3">
              <input class="form-control" type="text" placeholder="sex" disabled="" value="<?php echo $psex; ?>" />
          </div>
        </div>
        <div class="row form-row">
          <div class="col-md-12">
              <input class="form-control" type="text" placeholder="address" disabled="" value="<?php echo $paddress; ?>" />
          </div>
        </div>
        <div class="row form-row">
          <div class="col-md-12">
              <input class="form-control" type="text" placeholder="clinical history of patient" disabled="" value="NONE" />
          </div>
        </div>
        <div class="row form-row">
          <div class="col-md-12">
            <input name="sample" id="sample" class="form-control" type="text" placeholder="sample" />
          </div>
        </div>
        <div class="row form-row">
          <div class="col-md-12">
          <h4 id="myModalLabel" class="semi-bold">INVESTIGATION REQUIRED</h4>
            <textarea name="investigation" id="text-editor" placeholder="Enter text ..." class="form-control" rows="10"></textarea>
          </div>
        </div>
          </form>
    </div>
    <div class="modal-footer">

       <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
       <button class="btn btn-primary" type="submit">SEND REQUEST</button>
    </div>
  </div>
</div>


<!-- END LAB TEST REQUIRED MODAL  -->
</body>
</html>