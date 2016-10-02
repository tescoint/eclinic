<?php
ob_start();
session_start();
require ('includes/db.php');
if(empty($_SESSION['labtech']) and empty($_SESSION['director']) and empty($_SESSION['doc']) and empty($_SESSION['matron']) and empty($_SESSION['recordoff'])){
    header("location:login.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pagename = "vl";
require ("includes/read.php");
if(empty($pdata['lt4'])){
	header("location:addlabtest.php?p=$_GET[p]");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-CLINIC || View Lab Request</title>
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


	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<!-- END PAGE TITLE -->
			<!-- BEGIN PlACE PAGE CONTENT HERE -->
			 <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>STUDENT'S <span class="semi-bold"> BIODATA</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border"> <br>
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                    	<div class="col-md-4 col-sm-4 col-xs-4">
                    		<label class="form-label">DATE</label>
                    		<input id="date" type="text" class="form-control" disabled="true" value="<?php echo date('Y-M-D');?>" />
                    	</div>
                    	<div class="col-md-4 col-sm-4 col-xs-4" style="float:right" >
                    		<label class="form-label">CARD NUMBER</label>
                    		<input type="text" class="form-control" disabled="true" value="<?php echo $pcard_number;?>">
                    	</div>
                    </div>


                      <div class="form-group">
                        <label class="form-label">YOUR NAME</label>
                        <span class="help">MR/MRS/Miss</span>
                        <div class="controls">
                          <input type="text" class="form-control" disabled="true" value="<?php echo $pname;?>"/>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="form-label">HOME ADDRESS</label>
                        <div class="controls">
                          <input type="text" class="form-control" disabled="true" value="<?php echo $paddress;?>"/>
                        </div>
                      </div>
                       <div class="row">
                       <div class="col-md-4 col-sm-4 col-xs-4">
                       <div class="form-group">
                        <label class="form-label">DATE OF BIRTH</label>
                          <span class="help">eg "dd/mm/yyyy"</span>
                        <div class="controls">
                          <input type="text" class="form-control"  disabled="true" value="<?php echo $pdata['dob'];?>"/>
                        </div>
                      </div>
                       </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                       <div class="form-group">
                        <label class="form-label">WEIGHT</label>
                          <span class="help">eg "70Kgs, 95Lbs, 60pounds e.t.c"</span>
                        <div class="controls">
                          <input type="text" class="form-control"  disabled="true"/>
                        </div>
                      </div>
                      </div>

                       <div class="col-md-4 col-sm-4 col-xs-4">
                       	 <div class="form-group">
                       	 	 <h4>SEX</h4>
                       	 	 <div class="radio">
                       	 	 	<input  type="radio"  disabled="true" <?php if($psex ==  'Male'){echo "checked";}?> >
                        		 <label for="male">MALE</label>
                         		<input  type="radio"  disabled="true" <?php if($psex ==  'Female'){echo "checked";}?>>
                          		<label for="female">FEMALE</label>
                       	 	 </div>
                       	 </div>
                       </div>
                       


                       <div class="form-group">
                        <label class="form-label">NAME OF PRIVATE PHYSICIAN</label>
                        <span class="help">If any</span>
                        <div class="controls">
                          <input type="text" class="form-control" disabled="true" value="NONE" />
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
                  	<div class="col-md-12 col-sm-12">
                  		<div class="grid simple">
                  			<div class="grid-title no-border">
                  				<h4> PATIENT'S  <span class="semi-bold">DATA</span></h4>
                  			</div>
                  			<div class="tools">
										    <a class="collapse" href="javascript:;"></a>
    									    <a class="config" data-toggle="modal" href="#grid-config"></a>
    										<a class="reload" href="javascript:;"></a>
    										<a class="remove" href="javascript:;"></a>
    								</div>
                  			<div class="grid-body no-border">
                  				<table class="table table-hover no-more-tables">
                  					<thead>
                  						<tr>
                  							<th>DATE</th>
                  							<th>Doctor In Charge</th>
                  							<th>Status</th>
                  							<th></th>
                  							<th></th>
                  						</tr>
                  					</thead>
                  					<tbody>
                  					<?php 
                  					$query = "SELECT * FROM labform where stid = $pid ORDER BY id DESC";
                  					$run_query = mysqli_query($dbc,$query);
                  					$count = mysqli_num_rows($run_query);
                  					if($count >0){
                  						while ($lfdata = mysqli_fetch_assoc($run_query)) {
                  					$dquery = "SELECT * FROM users where id = $lfdata[doc_id] ORDER BY id DESC";
                  						$drun_query = mysqli_query($dbc,$dquery);
                  						$ddata = mysqli_fetch_assoc($drun_query);
                  						$dname = "Dr. $ddata[surname] $ddata[first_name] $ddata[middle_name]";
                  						$lrfquery = "SELECT * FROM labreport where stid = $pid and notation_id = $lfdata[notation_id] ORDER BY id DESC";
                  						$lrfrun_query = mysqli_query($dbc,$lrfquery);
                  						$lrfdata = mysqli_fetch_assoc($lrfrun_query);
                  							?>                 							
                  							<tr>
                  							<td><?php echo $lfdata['edate']; ?></td>
                  							<td><?php echo $dname; ?></td>
                  							<td><?php if(!empty($lrfdata['h1'])){echo "<span class='label label-success'>COMPLETED</span>";}else {echo "<span class='label label-warning'>PENDING</span>";}  ?></td>
                  							<td><?php if(empty($lrfdata['h1']) and !empty($_SESSION['labtech'])){echo "<a href='addlabreport.php?p=$_GET[p]&notation_id=$lfdata[notation_id]' class='btn btn-primary'>Add Lab. Report</a>";}elseif(!empty($lrfdata)){echo "<a href='accesslabreport.php?p=$_GET[p]&id=$lrfdata[id]' class='btn btn-primary'> View Lab. Report</a>";}?>
                  							<td><button class="btn btn-default" data-toggle="modal" data-target="#myModal<?php echo $lfdata['id'];?>">View Lab. Request</button></td>
                  						</tr>

                  						<!-- BEGIN MODAL -->
              						<div class="modal fade" id="myModal<?php echo $lfdata['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										  <div class="modal-dialog">
										    <div class="modal-content">
										      <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												 <br/>
										        <h4 id="myModalLabel" class="semi-bold">LAB. REQUEST FORM</h4>
										        <br/>
										      </div>
										      <div class="modal-body">
										        <div class="row form-row">
										         <div class="col-md-6">
										            <input class="form-control" type="text" placeholder="patient name" disabled="" value="<?php echo $pname;?>"/>
										          </div>
										          <div class="col-md-3">
										            <input class="form-control" type="text" placeholder="age" disabled="" value="<?php echo $age; ?>"/>
										          </div>
										          <div class="col-md-3">
										            <input class="form-control" type="text" placeholder="sex" disabled="" value="<?php echo $psex; ?>"/>
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
										            <input class="form-control" type="text" placeholder="sample" disabled="" value="<?php echo $lfdata['sample']; ?>" />
										          </div>
										        </div>
										        <div class="row form-row">
										          <div class="col-md-12">
										          <h4 id="myModalLabel" class="semi-bold">INVESTIGATION REQUIRED</h4>
										            <textarea id="text-editor" placeholder="Enter text ..." class="form-control" rows="10" disabled=""><?php echo $lfdata['investigation']; ?></textarea>
										          </div>
										        </div>
										    </div>
										    <div class="modal-footer">

										       <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
										      
										    </div>
										    </div>
										    </div>
										    </div>
	

                  						
                  				<?php	}  }else{?>
                  						<tr><td></td>
                  						<td><center>NO RECORD AVAILABLE</center></td>
                  						<td></td>
                  						<td></td>
                  						</tr>
                  					<?php } ?>
                  						<input type="hidden" name="refresh" id="refresh" value="<?php echo $_GET['p'];?>">
                  						                  					</tbody>
                  				</table>
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


  </div>
</div>
</body>
</html>