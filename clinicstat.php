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
     <style type="text/css">
  .col-md-4 {
    padding-right: 0px;
  }
  .tiles.green{
    height: 300px;
  }
  select{
    background-color: #282323;
  }
  select:focus{
    background-color: #0AA699;
  }
</style>
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
      <!-- Total Student Stats -->

     <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <H3>PATIENTS STATISTICS</H3>
            </div>
            <div style="display: block;" class="grid-body no-border">
            <!-- Here Lies The Tile Which Shows The The TotalNumber Of Patient In Our Database -->
                 <div class="col-md-4 col-sm-4 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF PATIENT </div>
         <br><br><br>   <div class="heading"> <span class="animate-number" data-value="<?php echo $tnos ?>" data-animation-duration="1000">0</span> </div>
            <div class="progress transparent progress-small no-radius">
              <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php echo $averagecantreat;?>%"></div>
            </div>
            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; Number of patients each medical personel must treat to cater for everybody(<?php echo $averagecantreat;?>) <span class="blend"></span></span></div>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF PATIENTS)-->
      <!-- Here Lies The Tile Which Shows The The TotalNumber Of  Patient Treated In Our Database -->
               <div class="col-md-4 col-sm-4 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF PATIENT TREATED TODAY </div>
         <br><br><br>   <div class="heading"> <span class="animate-number" data-value="<?php echo $tnostt; ?>" data-animation-duration="1000">0</span> </div>
            <div class="progress transparent progress-small no-radius">
             <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php echo $tpd;?>%"></div>
            </div>
            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; Number of patients treated today(<?php echo $date; ?>) <span class="blend"></span></span></div>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF  PATIENTS Treated Today)-->

      <!-- Here Lies The Tile Which Shows The The TotalNumber Of Fully Patient Per YEar In Our Database -->
               <div class="col-md-4 col-sm-4 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF FULLY REGISTERED PATIENT </div>
      <br><br><br>      <div class="heading"> <span class="animate-number" data-value="<?php echo $tnofrs ?>" data-animation-duration="1000">0</span> </div>
            <div class="progress transparent progress-small no-radius">
             <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php echo $trsp;?>%"></div>
            </div>
            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; Number of patients who have completed their registration <span class="blend"></span></span></div>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF FULLY REGISTERED PATIENTS)-->



       <!-- Here Lies The Tile Which Shows The The TotalNumber Of Patient Per YEar In Our Database -->
                 <div id="tnpby" class="col-md-4 col-sm-4 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF PATIENT BASED ON YEAR(<?php if(!empty($_SESSION['ytnosby'])){echo $_SESSION['ytnosby'];} ?>) </div>
           <br><br><br> <form id="tnosby">
            <input type="text" name="year" id="year" class=""><button class="btn btn-info" type="submit">GO</button>
            </form>
           <?php if(isset($_SESSION['tnosby'])){?><div class="heading" id="tnosbym"> <h3><?php if(isset($_SESSION['tnosby'])){echo "$_SESSION[tnosby] patient(s) found in $_SESSION[ytnosby]";} ?></h3> </div>
           <?php }else{?> <br/><div class="">Please Enter A year to get the statistic of patients</div><?php }?>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF PATIENTS PER YEAR)-->

       <!-- Here Lies The Tile Which Shows The The TotalNumber Of Treated Patient PER Day In Our Database -->
                 <div id="tnstbd" class="col-md-4 col-sm-4 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF TREATED PATIENT BASED ON DAY(<?php if(!empty($_SESSION['ytnostbd'])){echo $_SESSION['ytnostbd'];} ?>) </div>
            <span class='description'>USE FORMAT YEAR-MONTH-DAY(<?php echo date("Y-m-d"); ?>) TO SEARCH</span>
            <br><form id="tnostbd">
            <input type="text" name="day" id="day" class=""><button class="btn btn-info" type="submit">GO</button>
            </form>
           <?php if(isset($_SESSION['tnostbd'])){?><div class="heading" id=""> <h3><?php if(isset($_SESSION['tnostbd'])){echo "$_SESSION[tnostbd] patient(s) were treated on $_SESSION[ytnostbd]";} ?></h3> </div>
           <?php }else{?> <br/><div class="">Please Enter date to get the statistic of treated patients for that date</div><?php }?>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF TREATED PATIENTS PER DAy)-->


      <!-- Here Lies The Tile Which Shows The The TotalNumber Of Fully Registered Patient Per YEar In Our Database -->
                 <div id="tnfrsby" class="col-md-4 col-sm-4 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF FULLY REGISTERED PATIENT BASED ON YEAR(<?php if(!empty($_SESSION['ytnofrsby'])){echo $_SESSION['ytnofrsby'];} ?>) </div>
          <br><br>  <form id="tnofrsby">
            <input type="text" name="year" id="year" class=""><button class="btn btn-info" type="submit">GO</button>
            </form>
           <?php if(isset($_SESSION['tnofrsby'])){?><div class="heading" id=""> <h3><?php if(isset($_SESSION['tnofrsby'])){echo "$_SESSION[tnofrsby] patient(s) has completed their registration in the year $_SESSION[ytnofrsby]";} ?></h3> </div>
           <?php }else{?> <br/><div class="">Please Enter A year to get the statistic of fully registered patients</div><?php }?>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF PATIENTS PER YEAR)-->

     
            </div>
        </div>
      </div>

            <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">            
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
           <h3>DOCTOR'S STATISTICS <span class="semi-bold"></span></h3>
            </div>
            <div class="grid-body no-border">
                 <!-- Here Lies The Tile Which Shows The The TotalNumber Of Treated Patient BY A DOC In Our Database -->
                 <div id="tnsttbd" class="col-md-6 col-sm-6 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF TREATED PATIENT BY <?php if(!empty($_SESSION['dname'])){echo $_SESSION['dname'];}else{echo "DOCTOR";} ?></div>
         <br><br>   <form id="tnosttbd">
            <select name="doc" id="doc">
            <?php
            $query = "SELECT * FROM users where usertype = 2 and status = 0";
            $run_query = mysqli_query($dbc,$query);
            while ($ddata = mysqli_fetch_assoc($run_query)) {
            ?>
            <option value="<?php echo $ddata['id'];?>"><?php echo "Dr. $ddata[surname] $ddata[first_name] $ddata[middle_name]";?></option>
            <?php 
            }
            ?>
            </select>
            <button class="btn btn-info" type="submit">GO</button>
            </form>
           <?php if(isset($_SESSION['tnosttbd'])){?><div class="" id=""><h3> <?php if(isset($_SESSION['tnosttbd'])){echo "$_SESSION[tnosttbd] patient(s) were treated by $_SESSION[dname]";} ?> today.</h3></div>
           <?php }else{?> <br/><div class="">Please select doctor to get the statistic of treated patients for that doctor today</div><?php }?>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF TREATED PATIENTS BY A DOC )-->


        <!-- Here Lies The Tile Which Shows The The TotalNumber Of Treated Patient BY A DOC PER DAY In Our Database -->
                 <div id="tnsttbdbd" class="col-md-6 col-sm-6 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF TREATED PATIENT BY <?php if(!empty($_SESSION['ddname'])){echo "$_SESSION[ddname] on $_SESSION[ytnosttbdbd]";}else{echo "DOCTOR";} ?></div>
         <br><br>   <form id="tnosttbdbd">
            <select name="doc" id="doc">
            <?php
            $query = "SELECT * FROM users where usertype = 2 and status = 0";
            $run_query = mysqli_query($dbc,$query);
            while ($ddata = mysqli_fetch_assoc($run_query)) {
            ?>
            <option value="<?php echo $ddata['id'];?>"><?php echo "Dr. $ddata[surname] $ddata[first_name] $ddata[middle_name]";?></option>
            <?php 
            }
            ?>
            </select>
            <input type="text" name="day" id="day" class="">
            <button class="btn btn-info" type="submit">GO</button>
            </form>
           <?php if(isset($_SESSION['tnosttbdbd'])){?><div class="" id=""><h3> <?php if(isset($_SESSION['tnosttbdbd'])){echo "$_SESSION[tnosttbdbd] patient(s) were treated by $_SESSION[ddname]";} ?> on <?php echo $_SESSION['ytnosttbdbd']; ?> .</h3></div>
           <?php }else{?> <br/><div class="">Please select doctor to get the statistic of treated patients for that doctor today</div><?php }?>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF TREATED PATIENTS BY A DOC PER DAY )-->

            </div>
        </div>
      </div>




      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border"> 
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <h3>STAFF STATISTICS</h3>
            </div>
            <div style="display: block;" class="grid-body no-border">

                   <!-- Here Lies The Tile Which Shows The The TotalNumber Of Doctors In Our Database -->
                 <div class="col-md-4 col-sm-4 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF DOCTORS </div>
         <br><br><br>   <div class="heading"> <span class="animate-number" data-value="<?php echo $tnod ?>" data-animation-duration="1000">0</span> </div>
            <div class="progress transparent progress-small no-radius">
              <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php //echo $averagecantreat;?>%"></div>
            </div>
            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; Number of doctor available in the school university clinic <span class="blend"></span></span></div>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF DOCTOR)-->

       <!-- Here Lies The Tile Which Shows The The TotalNumber Of MEDICAL PERSONELL Including DOCTORS Our Database -->
                 <div class="col-md-4 col-sm-4 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF MEDICAL PERSONNEL </div>
         <br><br><br>   <div class="heading"> <span class="animate-number" data-value="<?php echo $tnomp ?>" data-animation-duration="1000">0</span> </div>
            <div class="progress transparent progress-small no-radius">
              <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php //echo $averagecantreat;?>%"></div>
            </div>
            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; Number of all medical staff available in the school university clinic <span class="blend"></span></span></div>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF MEDICAL PERSONNELS)-->

      <!-- Here Lies The Tile Which Shows The The TotalNumber Of LAB TECHS Our Database -->
                 <div class="col-md-4 col-sm-4 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF LAB PERSONNEL </div>
         <br><br><br>   <div class="heading"> <span class="animate-number" data-value="<?php echo $tnolp ?>" data-animation-duration="1000">0</span> </div>
            <div class="progress transparent progress-small no-radius">
              <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php //echo $averagecantreat;?>%"></div>
            </div>
            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; Number of all laboratory staff available in the school university clinic <span class="blend"></span></span></div>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF PATIENTS)-->

      <!-- Here Lies The Tile Which Shows The The TotalNumber Of USER WITH ACCESS TO THIS SOFTWARE Our Database -->
                 <div class="col-md-12 col-sm-12 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF STAFF WITH ACCESS TO THIS SOFTWARE</div>
         <br><br><br>   <div class="heading"> <span class="animate-number" data-value="<?php echo $tnoa ?>" data-animation-duration="1000">0</span> </div>
            <div class="progress transparent progress-small no-radius">
              <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php echo $tap;?>%"></div>
            </div>
            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; Number of all  staff who can login to this platform and use. <span class="blend"></span></span></div>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF STAFF WITH ACCESS)-->

            </div>
        </div>
      </div>
            



      <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <h3>LABORATORY STATISTICS <span class="semi-bold"></span></h3>
            </div>
            <div class="grid-body no-border">
                  <!-- Here Lies The Tile Which Shows The The TotalNumber Of  LAB TEST REQUESTED In Our Database -->
               <div class="col-md-6 col-sm-6 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF LAB TEST REQUESTED TODAY </div>
         <br><br><br>   <div class="heading"> <span class="animate-number" data-value="<?php echo $tnoltrt; ?>" data-animation-duration="1000">0</span> </div>
            <div class="progress transparent progress-small no-radius">
             <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php echo $tpd;?>%"></div>
            </div>
            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; Number of patients asked to go for lab test today(<?php echo $date; ?>) <span class="blend"></span></span></div>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF  LAB TEST REQUESTED Today)-->


      <!-- Here Lies The Tile Which Shows The The TotalNumber Of  LAB REPORT CREATED In Our Database -->
               <div class="col-md-6 col-sm-6 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF LAB REPORT GENERATED TODAY </div>
         <br><br><br>   <div class="heading"> <span class="animate-number" data-value="<?php echo $tnlrgt; ?>" data-animation-duration="1000">0</span> </div>
            <div class="progress transparent progress-small no-radius">
             <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php echo $lfgp;?>%"></div>
            </div>
            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; Number of reports generated today(<?php echo $date; ?>) <span class="blend"></span></span></div>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF  LAB TEST REQUESTED Today)-->


       <!-- Here Lies The Tile Which Shows The The TotalNumber Of LAbtest Requested PER Day In Our Database -->
                 <div class="col-md-6 col-sm-6 m-b-20">        
        <div id="ltr" class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF LAB TEST REQUESTED BASED ON DAY(<?php if(!empty($_SESSION['ytnoltrbd'])){echo $_SESSION['ytnoltrbd'];} ?>) </div>
            <span class='description'>USE FORMAT YEAR-MONTH-DAY(<?php echo date("Y-m-d"); ?>) TO SEARCH</span>
            <br><form id="tnoltrbd">
            <input type="text" name="day" id="day" class=""><button class="btn btn-info" type="submit">GO</button>
            </form>
           <?php if(isset($_SESSION['tnoltrbd'])){?><div class="heading" id=""> <h3><?php if(isset($_SESSION['tnoltrbd'])){echo "$_SESSION[tnoltrbd] lab test(s) were requested on $_SESSION[ytnoltrbd]";} ?></h3> </div>
           <?php }else{?> <br/><div class="">Please Enter date to get the statistic of lab test requested for that date</div><?php }?>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF LAB TEST REQUESTED PER DAy)-->

      <!-- Here Lies The Tile Which Shows The The TotalNumber Of Lab Report Generated PER Day In Our Database -->
                 <div id="tnlrgbd" class="col-md-6 col-sm-6 m-b-20">        
        <div id="ltr" class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF LAB REPORT GENERATED BASED ON DAY(<?php if(!empty($_SESSION['ytnolrgbd'])){echo $_SESSION['ytnolrgbd'];} ?>) </div>
            <span class='description'>USE FORMAT YEAR-MONTH-DAY(<?php echo date("Y-m-d"); ?>) TO SEARCH</span>
            <br><form id="tnolrgbd">
            <input type="text" name="day" id="day" class=""><button class="btn btn-info" type="submit">GO</button>
            </form>
           <?php if(isset($_SESSION['tnolrgbd'])){?><div class="heading" id=""> <h3><?php if(isset($_SESSION['tnolrgbd'])){echo "$_SESSION[tnolrgbd] lab report(s) were genarated on $_SESSION[ytnolrgbd]";} ?></h3> </div>
           <?php }else{?> <br/><div class="">Please Enter date to get the statistic of lab report generated for that date</div><?php }?>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF LAB REPORT GENERATED PER DAy)-->

      
                  
            </div>
        </div>
      </div>




      <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <h3>PHARMACY STATISTICS <span class="semi-bold"></span></h3>
            </div>
            <div class="grid-body no-border">
                   <!-- Here Lies The Tile Which Shows The The TotalNumber Of  LAB REPORT CREATED In Our Database -->
               <div class="col-md-6 col-sm-6 m-b-20">        
        <div class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF DRUGS PRESCRIBED TODAY </div>
         <br><br><br>   <div class="heading"> <span class="animate-number" data-value="<?php echo $tnodpt; ?>" data-animation-duration="1000">0</span> </div>
            <div class="progress transparent progress-small no-radius">
             <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php echo $dp;?>%"></div>
            </div>
            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; Number of drugs prescribed today(<?php echo $date; ?>) <span class="blend"></span></span></div>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF  LAB TEST REQUESTED Today)-->

       <!-- Here Lies The Tile Which Shows The The TotalNumber Of Drugs prescribed PER Day In Our Database -->
                 <div id="tndpbd" class="col-md-6 col-sm-6 m-b-20">        
        <div id="ltr" class="tiles green ">
          <div class="tiles-body">
            <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            <div class="tiles-title"> TOTAL NUMBER OF DRUGS PRESCRIBED BASED ON DAY(<?php if(!empty($_SESSION['ytnodpbd'])){echo $_SESSION['ytnodpbd'];} ?>) </div>
            <span class='description'>USE FORMAT YEAR-MONTH-DAY(<?php echo date("Y-m-d"); ?>) TO SEARCH</span>
          <br><br>  <br><form id="tnodpbd">
            <input type="text" name="day" id="day" class=""><button class="btn btn-info" type="submit">GO</button>
            </form>
           <?php if(isset($_SESSION['tnodpbd'])){?><div class="heading" id=""> <h3><?php if(isset($_SESSION['tnodpbd'])){echo "$_SESSION[tnodpbd] drug(s) were prescribed on $_SESSION[ytnodpbd]";} ?></h3> </div>
           <?php }else{?> <br/><div class="">Please Enter date to get the statistic of drugs prescribed for that date</div><?php }?>
          </div>
        </div>
      </div>
      <!-- END OF TILE HERE(TOTAL NOS OF DRUG PRESCRIBED  PER DAy)-->

            </div>
        </div>
      </div>









    </div>






















    </div>

			 
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