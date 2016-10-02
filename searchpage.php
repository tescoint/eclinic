<?php
ob_start();
session_start();
require 'includes/db.php';
if(empty($_SESSION['labtech']) and empty($_SESSION['director']) and empty($_SESSION['doc']) and empty($_SESSION['matron']) and empty($_SESSION['pharma']) and empty($_SESSION['tester']) and empty($_SESSION['recordoff'])){
   header("location:login.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pagename = "index";
$searchpage = mysqli_real_escape_string($dbc,$_POST['searchpage']);
          $query = "SELECT * FROM users where surname like '%$searchpage%' OR card_number like '%$searchpage%' OR first_name like '%$searchpage%'";
          $run_query = mysqli_query($dbc, $query);
          $count = mysqli_num_rows($run_query);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>E-Clinic - Tasued Dashboard || TechHuB</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="TechHub" name="author" />
<?php require('includes/header.php'); ?>
</head>
<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<?php require 'includes/header2.php'; ?>
<!-- END HEADER --> 

<!-- BEGIN CONTENT -->
<div class="page-container row-fluid"> 
<!-- BEGIN SIDEBAR --> 
<?php require 'includes/sidebar.php'; ?>
<!-- END SIDEBAR --> 

  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Patient Search Page</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Search - <?php echo $count;?> <span class="semi-bold">Patients Found</span></h3>
      </div>

      <br>
      <div id="Parks" class="just">
        <!-- "TABLE" HEADER CONTAINING SORT BUTTONS (HIDDEN IN GRID MODE)-->
        <div class="list_header">
          <div class="meta name active desc"> Name &nbsp;  </div>
          <div class="meta region">Card Number</div>
          <div class="meta area"> Address &nbsp;  </div>
          <div class="meta rec">Address</div>
        </div>
        <!-- FAIL ELEMENT -->
        
        <!-- BEGIN LIST OF PARKS (MANY OF THESE ELEMENTS ARE VISIBLE ONLY IN LIST MODE)-->
        <ul>
        <?php
        if(isset($_POST['searchpage'])){
          
          if($count >= 1){
            while ($searchdata = mysqli_fetch_assoc($run_query)) {
              $passport = $searchdata['passport'];
              $name = "$searchdata[surname] $searchdata[first_name] $searchdata[middle_name]";
              $dob = $searchdata['dob'];
              $card_number = $searchdata['card_number'];
              $address = $searchdata['home_address'];
              ?>
              <li class="mix northeast camping climbing fishing swimming">
          <div class="meta name">
            <div class="img_wrapper"> <img src="register/passport/<?php echo $searchdata['passport']; ?>" alt="" /> </div>
            <div class="titles">
              <h2><?php echo $name;?></h2>
              <p><em><?php echo $dob;?></em></p>
              <?php if(!empty($_SESSION['director']) || !empty($_SESSION['recordoff']) || !empty($_SESSION['matron']) || !empty($_SESSION['doc'])){?>
              <br>
              <p>
              <a href="profile.php?p=<?php echo $card_number; ?>" class='btn btn-primary'>View Profile</a>
              <a href="viewnotation.php?p=<?php echo $card_number; ?>" class='btn btn-primary'>View Notation</a>
              <a href="viewlab.php?p=<?php echo $card_number; ?>" class='btn btn-primary'>View Lab History</a>
              </p>
              <?php }elseif(!empty($_SESSION['labtech'])){?>
              <br>
              <p>
             <a href="viewlab.php?p=<?php echo $card_number; ?>" class='btn btn-primary'>View Lab History</a>
             </p>
              <?php }elseif(!empty($_SESSION['tester'])){?>
              <br>
              <p>
              <a href="tester.php?p=<?php echo $card_number; ?>" class='btn btn-primary'>Add Test Result</a>
              </p>
              <?php }elseif(!empty($_SESSION['pharma'])){ ?>
              <br>
              <p>
              <a href="viewprescription.php?p=<?php echo $card_number; ?>" class='btn btn-primary'>View Prescription History</a>
              </p>
              <?php }?>
            </div>
          </div>
          <div class="meta region">
            <p><?php echo $card_number;?></p>
          </div>
          <div class="meta rec">
             <?php echo $address;?>
          </div>
          <div class="meta area">
            
          </div>
        </li>


              <?php
            }
          }else{?>
            <div class="fail_element anim250">Sorry &mdash; we could not find any patient matching these criteria</div>
          <?php }
        }


        ?>
        <!-- END LIST OF PARKS -->
		</ul>
      </div>
    </div>
    <!-- END PAGE -->
  </div>
</div>
<!-- BEGIN CORE JS FRAMEWORK-->
<?php require('includes/footer.php'); ?>
<!-- END CORE TEMPLATE JS -->
</body>
</html>