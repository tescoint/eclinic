<?php
ob_start();
session_start();
require("includes/db.php");
if(empty($_SESSION['director']) and empty($_SESSION['doc'])){
    header("location:login.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Including the read file
$pagename = "clinicstat";
require ("includes/read.php");
if(!empty($edata['prescription'])){
  header('location:viewprofilephp?p=$_GET[p]');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-CLINIC || Clinic Statistics</title>
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
			     <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p> 
        </li>
        <li><a href="#" class="active">Notifications</a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>NOTIFICATION</h3>
      </div>
      <div class="clearfix"></div>
      <h4>Recent <span class="semi-bold">Notification</span></h4>
      <br>
      <div class="row">
      <?php
      while ($ndata = mysqli_fetch_assoc($nrun_query)) {
      	$id = $ndata['id'];
      	$stid = $ndata['stid'];
      	$notation_id = $ndata['notation_id'];
      	$lab_req_id = $ndata['lab_req_id'];
      	$lrdate = $ndata['edate'];
      	$pdquery = "SELECT * FROM users where id = $stid";
      	$pdrun_query = mysqli_query($dbc,$pdquery);
      	$pdata = mysqli_fetch_assoc($pdrun_query);
      	$pname = "$pdata[surname] $pdata[first_name] $pdata[middle_name]";
      	$pcard_number = $pdata['card_number'];
      	$pphone = $pdata['phoneno'];

      	//GETTING THE DATA FROM LABREQUEST TABLE TO BE ABLE TO DISPLAY SOME STUFFS
      	$lfquery = "SELECT * FROM labform where id = $lab_req_id";
      	$lfrun_query = mysqli_query($dbc,$lfquery);
      	$lfdata = mysqli_fetch_assoc($lfrun_query);
      	$ldate = $lfdata['edate'];
      







      ?>
        <div class="col-md-12">
          <div class="grid simple no-border">
            <div class="grid-title no-border descriptive clickable">
              <h4 class="semi-bold">Lab Report Form Has Been Generated For <?php echo $pname; ?> on <?php echo $lrdate;  ?> </h4>
              <p ><span class="text-success bold">Notation Id #<?php echo $notation_id; ?></span> - Created on <?php echo $ldate ?>  - <a class="btn btn-success" href="viewnotation.php?p=<?php echo $pcard_number;?>#n<?php echo $notation_id; ?>">View Notation</a><a class="btn btn-default" href="accesslabreport.php?p=<?php echo $pcard_number;?>&id=<?php echo $id; ?>">View Lab Report</a>  &nbsp;&nbsp;<span class="label label-important">ALERT</span></p>
              <div class="actions"> <a class="view" href="javascript:;"><i class="fa fa-search"></i></a> <a class="remove" href="javascript:;"><i class="fa fa-times"></i></a> </div>
            </div>
    </div>
  </div>
  <?php }
  if($ncount == 0){
  	echo '<div class="fail_element anim250">Sorry &mdash; you have nor recent notification</div>';
  }


  ?>
	<!-- END PAGE CONTAINER -->
</div>
<!-- END CONTENT --> 
<!-- BEGIN CORE JS FRAMEWORK-->
<?php require('includes/footer.php'); ?>
<!-- END JAVASCRIPTS -->

<!-- END NEED TO WORK ON -->
</div>
</div>


</body>
</html>