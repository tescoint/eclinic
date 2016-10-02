<?php
ob_start();
session_start();
require ("includes/db.php");
if(empty($_SESSION['director']) and empty($_SESSION['doc']) and empty($_SESSION['matron']) and empty($_SESSION['recordoff'])){
    header("location:login.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pagename = "vnn";
require ("includes/read.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-CLINIC || View Notations For <?php echo $pname;?></title>
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
                          <right> <?php if(!empty($_SESSION['doc']) or !empty($_SESSION['director'])){?> <a href="addnotation.php?p=<?php echo $_GET['p']; ?>" class="btn btn-primary">Create Notation</a><?php } ?></right>
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
                  							<th>Lab test</th>
                  							<th>Lab test status</th>
                  						</tr>
                  					</thead>
                  					<tbody>
                            <?php
                            $query = "SELECT * FROM notation where stid = $pid ORDER BY id DESC";
                            $run_query = mysqli_query($dbc,$query);
                            $count = mysqli_num_rows($run_query);
                            if($count>0){
                              while ($ndata = mysqli_fetch_assoc($run_query)) {
                                $dquery = "SELECT * FROM users where id = $ndata[doc_id]";
                              $drun_query = mysqli_query($dbc,$dquery);
                              $ddata = mysqli_fetch_assoc($drun_query);
                              $dname = "Dr. $ddata[surname] $ddata[first_name] $ddata[middle_name]";
                              $date = $ndata['edate'];
                              $prescription = $ndata['prescription'];
                              $id = $ndata['id'];
                              $lab_required = $ndata['lab_required'];
                              $lab_report_id = $ndata['lab_report_id'];
                              ?>
                              
                              <tr id="n<?php echo $id; ?>">
                                <td><?php echo $date; ?></td>
                                <td><?php echo $dname; ?></td>
                                <td><?php if(empty($prescription) and !empty($_SESSION['doc'])) { echo "<span  class='label label-default'>PENDING</span>&nbsp;&nbsp;&nbsp;   <a href='editnotation.php?p=$_GET[p]&id=$id' class='btn btn-primary'>EDIT NOTATION</a>"; }else { echo "<span class='label label-success'>COMPLETE</span>&nbsp;&nbsp;&nbsp;<a href='accessnotation.php?p=$_GET[p]&id=$id' class='btn btn-danger'>View Notation</a>"; }?></td>
                                <td><?php if(!empty($lab_required)) { echo "<span class='label label-warning'>required</span>";} else{echo "<span class='label label-primary'>none</span>";}?></td>
                                <td><?php if(empty($lab_report_id) and empty($lab_required)) { echo "<span class='label label-primary'>NONE</span>";}elseif(empty($lab_report_id)){echo "<span class='label label-default'>PENDING</span>";} else{echo "<span class='label label-success'>COMPLETE</span> &nbsp;&nbsp;&nbsp; <a href='accesslabreport.php?p=$_GET[p]&id=$lab_report_id' class='btn btn-success'>View Report</a>";}?></td>
                              </tr>


                          <?php } }else{?>
                          <tr><td></td>
                              <td><center>NO RECORD AVAILABLE</center></td>
                              <td></td>
                              <td></td>
                              </tr>

                            <?php }


                            ?>
                  						
                  					</tbody>
                  				</table>
                  			</div>
                  		</div>
                  	</div>
                  </div>
                    <input type="hidden" name="refresh" id="refresh" value="<?php echo $_GET['p'];?>">












			
			
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