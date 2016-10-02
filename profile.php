<?php
ob_start();
session_start();
require ('includes/db.php');
if(empty($_SESSION['recordoff']) and empty($_SESSION['director']) and empty($_SESSION['doc']) and empty($_SESSION['matron'])){
    header("location:login.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pagename = "profile";
require ("includes/read.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>E-CLINIC || <?php echo $pname;?>'s  PROFILE</title>
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
        <?php if(!empty($_SESSION['director'])){?>
        <form name="userpermission" id="userpermission">
            <div class="form-group">
                <label class="label">Assign Role</label>
                <select id="usertype" name="usertype">
                    <option value="1">Record Officer</option>
                    <option value="2">Doctor</option>
                    <option value="3">Laboratory Techs</option>
                    <option value="4">Matron</option>
                    <option value="5">Tester</option>
                    <option value="6">Pharmacist</option>
                </select>
                <input type="hidden" name="username" id="username" value="<?php echo $username; ?>" ><button class="btn btn-success" type="submit">Give Permission</button>
            </div>
            
        </form><?php }elseif(!empty($_SESSION['recordoff'])){?>
        <form name="statusupdate" id="statusupdate">
            <div class="form-group">
                <label class="label">Change Status</label>
                <select id="status" name="status">
                    <option value="0">Active</option>
                    <option value="1">Inactive</option>
                    <option value="2">Deceased</option>
                    <option value="3">Rusticated</option>
                </select>
                <input type="hidden" name="card_number" id="card_number" value="<?php echo $pcard_number; ?>" ><button class="btn btn-success" type="submit">Change Status</button>
            </div>
            
        </form><?php }?>
      	<div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>STUDENT'S <span class="semi-bold"> HEALTH </span> INFORMATION DATA (CONFIDENTIAL)</h4>
                  <?php if(!empty($_SESSION['doc'])){?>
                  <a href="addnotation.php?p=<?php echo$_GET['p'];?>" class="btn btn-success">ADD NOTATION</a><a href="viewnotation.php?p=<?php echo$_GET['p'];?>" class="btn btn-primary">VIEW NOTATION</a>
                  
                  <?php }elseif(!empty($_SESSION['recordoff'])){ ?>
                  
                  <a href="editprofile.php?p=<?php echo$_GET['p'];?>" class="btn btn-warning">EDIT PROFILE</a>
                  <?php } 
                  if($pdata['status']==0){
                      echo "<button class='btn btn-primary'>Active</button>";
                  }elseif($pdata['status']==1){
                      echo "<button class='btn btn-info'>Inactive</button>";
                  }elseif($pdata['status']==2){
                      echo "<button class='btn btn-danger'>Deceased(R.I.P.)</button>";
                  }elseif ($pdata['status']==3) {
                      echo "<button class='btn btn-danger'>Rusticated</button>";
                  }


                  ?>

                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                  
                </div>
                <div class="grid-body no-border"> <br>
                
                 <div class="row">
                 <h4>SECTION 1</h4>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">Surname</label>
                            <input id="" type="text" disabled="true" class="form-control" value="<?php echo $surname; ?>"></p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">First Name</label>
                        <input id="" type="text"disabled="true" class="form-control" value="<?php echo $first_name; ?>"></p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">Middle Name</label>
                        <input id="" type="text" disabled="true" class="form-control" value="<?php echo $middle_name; ?>"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">Date Of Birth</label>
                        <input id="" type="text" disabled="true" class="form-control" value="<?php echo $dob; ?>"></p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">Gender</label>
                        <input id="" type="text" disabled="true" class="form-control" value="<?php echo $psex; ?>"></p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="form-group">
                        <label class="form-label">Relationship Status</label>
                        <span class="help">Single / Married</span>
                        <div class="controls">
                        <input id="" type="text" disabled="true" class="form-control" value="<?php echo $prelation; ?>" />
                        </div>
                        </div><input type="hidden" name="redirect" id="redirect" value="<?php echo $_GET['p'];?>">
                      </div>

                      <div class="form-group">
                        <label class="form-label">Program Admitted For</label>
                        <span class="help">Degree/NCE/Pre NCE/PreDegree/Deg.Foundation e.t.c</span>
                        <div class="controls">
                          <input type="text" class="form-control" disabled="true" value="<?php echo $pprogramme; ?>"/>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="form-label">Home Address</label>
                        <div class="controls">
                          <input type="text" class="form-control" disabled="true" value="<?php echo $home_address; ?>"/>
                        </div>
                      </div>

                    <div class="row">
                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <p><label class="form-label">Parent/Guardian/Spouse</label>
                        <input id="" type="text" class='form-control' disabled="true" value="<?php echo $guardian; ?>"></p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">Relationship</label>
                        <input id="" type="text" class="form-control" disabled="true" value="<?php echo $guardian_relationship; ?>"></p>
                      </div>
                    </div>
                      <div class="form-group">
                        <label class="form-label">Address</label>
                           <span class="help">Parent/Guardian/Spouse address</span>
                        <div class="controls">
                          <textarea rows="2" class="form-control" disabled="true"><?php echo $guardian_address; ?></textarea>
                        </div>
                      </div>
                    
                      <h4>Telephone</h4>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p><label class="form-label">Home</label>
                        <input id="" type="text" class="form-control" disabled="true" value="<?php echo $phoneno; ?>"></p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4" style="float:right">
                        <p><label class="form-label">Mobile</label>
                        <input id="" type="text" class="form-control" disabled="true" value="<?php echo $phoneno; ?>"></p>
                      </div>
                    
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h4>MEDICAL HISTORY</h4>
                    <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Have you in the past noted yellowness of your eyes?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio"   <?php if($mh_1 == 0){echo " checked";}  ?> disabled=""/>
                        <label for="yes1">Yes</label>
                        <input type="radio"   <?php if($mh_1 == 1){echo " checked";} ?> disabled="" />
                        <label for="no1">No</label>

                      </div>                                     
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Have you had cough that lasted for up to a month or more?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio"   <?php if($mh_2 == 0){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                        <input type="radio" <?php if($mh_2 == 1){echo " checked";}  ?> disabled=""/>
                        <label for="no">No</label>
                      </div>                                     
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Have you had any penile discharge before?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio"  <?php if($mh_3 == "0"){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                        <input type="radio"   <?php if($mh_3 == "1" or empty($mh_3)){echo " checked";}  ?> disabled="" />
                        <label for="no">No</label>
                      </div>                                     
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Have you had any vaginal itch/discharge before?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio" <?php if($mh_4 == "0"){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                        <input type="radio"  <?php if($mh_4 == "1" or empty($mh_4)){echo " checked";}  ?> disabled=""/>
                        <label for="no">No</label>
                      </div>                                     
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Do you suffer from an form of handicap?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio" <?php if($mh_5 == 0){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                        <input type="radio"  <?php if($mh_5 == 1){echo " checked";}  ?> disabled=""/>
                        <label for="no">No</label>
                      </div>                                     
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Are you a sufferer of sickle cell disease?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio" <?php if($mh_6 == 0){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                        <input type="radio"  <?php if($mh_6 == 1){echo " checked";}  ?> disabled=""/>
                        <label for="no">No</label>
                      </div>                                     
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Are you an asthmatic?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio" <?php if($mh_7 == 0){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                        <input type="radio"  <?php if($mh_7 == 1){echo " checked";}  ?> disabled=""/>
                        <label for="no">No</label>
                      </div>                                     
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <p>Do you have any current or long-term medical problem for which you see orhave seen a doctor on a regular basis? If so, specify; including the name and phone numbers of the doctor</p>
                        <textarea rows="2" class="form-control" placeholder="enter text...." disabled=""><?php if(!empty($mh_8)){echo $mh_8;}else{echo "NONE";}  ?></textarea>
                      </div>  
                    </div>
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <p>Have you ever been admitted overnight in a hospital? Did you have an operation? If so, specify reasons for admission, date and type of surgeries, if any, performed</p>
                        <textarea rows="2" class="form-control" placeholder="enter text...." disabled=""><?php if(!empty($mh_9)){echo $mh_9;}else{echo "NONE";}  ?></textarea>
                      </div>  
                    </div>
                     <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Are there any other medical problems you think the doctor should know?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio" <?php if($mh_10 != 1){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                        <input type="radio"  <?php if($mh_10 == 1){echo " checked";}  ?> />
                        <label for="no">No</label>
                      </div>                                     
                      </div>
                         <?php if($mh_10 != 1){?>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <textarea rows="2" class="form-control" placeholder="specify......" disabled=""><?php if($mh_10 != 1){echo $mh_10;}else{echo "NONE";}  ?></textarea>
                         </div><?php }?>
                    </div>
                     <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Have you had any problems requiring the services of a psychologists or a mental health provider?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio" <?php if($mh_11 == 0){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                        <input type="radio"  <?php if($mh_11 == 1){echo " checked";}  ?> disabled=""/>
                        <label for="no">No</label>
                      </div>                                     
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Have you been tested for HIV?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio" <?php if($mh_12 == 0){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                        <input type="radio"  <?php if($mh_12 == 1){echo " checked";}  ?> disabled=""/>
                        <label for="no">No</label>
                      </div>                                     
                      </div>
                    </div>
                    <?php if($mh_12 == 0){?>
                    <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Specify the result</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio" <?php if($mh_13 == 0){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Positive</label>
                        <input type="radio"  <?php if($mh_13 == 1){echo " checked";}  ?> disabled=""/>
                        <label for="no">Negative</label>
                      </div>                                     
                      </div>
                    </div><?php }?>
                     <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Would you like to be tested for HIV?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio" <?php if($mh_14 == 0){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                        <input type="radio"  <?php if($mh_14 != 0){echo " checked";}  ?> disabled=""/>
                        <label for="no">No</label>
                      </div>                                     
                      </div>
                         <?php if($mh_14 != 0){?>
                      <div class="col-md-12">
                        <p>If NO why</p>
                        <textarea rows="2" class="form-control" placeholder="specify...." disabled=""><?php echo $mh_14;  ?></textarea>
                         </div><?php }?>
                    </div>
                     <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <p>Do you have any visual disturbance?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio" <?php if($mh_15 == 0){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                        <input type="radio"  <?php if($mh_15 == 1){echo " checked";}  ?> disabled="" />
                        <label for="no">No</label>
                      </div>                                     
                      </div>
                    </div>                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h4>SOCIAL HISTORY</h4>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <label class="form-label">What activity do you enjoy in your spare time</label>
                        <div class="controls">
                          <input type="text" class="form-control" <?php if(!empty($sh_1)){echo " value='$sh_1'";}else{ echo " value='I dont do anything'";}  ?> disabled="" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Have you ever represented your school in any sporting events?</label>
                        <div class="md-4 col-sm-4 col-xs-4">
                      <div class="radio">
                          <input type="radio" <?php if($sh_2 != 1){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                        <input type="radio"  <?php if($sh_2 == 1){echo " checked";}  ?> disabled=""/>
                        <label for="no">No</label>
                      </div>                                     
                      </div>
                        <?php if($sh_2 != 1){?>
                      <div class="col-md-12">
                        <p>Specify</p>
                        <textarea rows="2" class="form-control" placeholder="specify...." disabled=""><?php echo $sh_2;  ?></textarea>
                         </div><?php }?>
                      </div>
                      <div class="row">
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p>Do you smoke</p>
                        </div> 
                        <div class="md-4 col-sm-4 col-xs-4">
                        <div class="radio">
                        <input type="radio" <?php if($sh_3 != 1){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                         <input type="radio"  <?php if($sh_3 == 1){echo " checked";}  ?> disabled="" />
                        <label for="no">No</label>
                      </div>                                     
                      </div> 
                          <?php if($sh_3 !=1){?>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                          
                        <div class="form-group">
                        <label class="form-label">Specify</label>
                        <div class="controls">
                          <input type="text" class="form-control" <?php if($sh_3 != 1){echo " value='$sh_3'";}  ?> disabled=""/>
                        </div>
                          </div><?php }?>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <p>Do you take alcohol</p>
                        </div> 
                        <div class="md-4 col-sm-4 col-xs-4">
                        <div class="radio">
                        <input type="radio" <?php if($sh_4 != 1){echo " checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                         <input type="radio"  <?php if($sh_4 == 1){echo " checked";}  ?> disabled="" />
                        <label for="no">No</label>
                      </div>                                     
                      </div> 
                        <?php if($sh_4 != 1){?>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="form-group">
                        <label class="form-label">How often</label>
                        <div class="controls">
                          <input type="text" class="form-control" <?php if($sh_4 != 1){echo " value='$sh_4'";}  ?> disabled=""/>
                        </div>
                      </div>
                        </div><?php }?>
                    </div>
                      </div>
                    </div>

                  </div>

                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <h4>DRUG HISTORY</h4>
                    <div class="row">
                      <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                        <p>Are you currently on any medication? if so, pleaselist </p>
                        <input type="text" class="form-control" <?php if(!empty($dh_1)){echo " value='$dh_1'";}else{echo " value='NONE'";}  ?> disabled="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                        <p>Do you have abnormal reaction (allergy) to any drug? If yes,please specify </p>
                        <input type="text" class="form-control" placeholder="Occasionally, Regularly, Everyday" <?php if(!empty($dh_2)){echo " value='$dh_2'";}  ?> disabled="">
                      </div>
                    </div>
                  </div>
                </div>


                 <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <h4>IMMUNISATION HISTORY</h4>
                    <div class="row">
                      <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                        <p>Have you ever been immunized against the following diseases before? </p>
                        <div class="col-lg-2 cl-md-2 col-sm-2">
                         <div class="row-fluid">
                          <div class="checkbox check-success checkbox-circle">
                              <input  value="1" type="checkbox"><input type="text" class="form-control" <?php if($ih_1 != 1){echo " value='$ih_1'";}  ?> disabled="">
                            <label >tetanus</label>
                          </div>
                        </div>
                        </div>
                         <div class="col-lg-2 cl-md-2 col-sm-2">
                         <div class="row-fluid">
                          <div class="checkbox check-success checkbox-circle">
                            <input  value="1" type="checkbox"><input type="text" class="form-control" <?php if($ih_2 != 1){echo " value='$ih_2'";}  ?> disabled="">
                            <label >meningitis</label>
                          </div>
                        </div>
                        </div>
                        <div class="col-lg-2 cl-md-2 col-sm-2">
                         <div class="row-fluid">
                          <div class="checkbox check-success checkbox-circle">
                            <input  value="1" type="checkbox"><input type="text" class="form-control" <?php if($ih_3 != 1){echo " value='$ih_3'";}  ?> disabled="">
                            <label >yellow fever</label>
                          </div>
                        </div>
                        </div>
                        <div class="col-lg-2 cl-md-2 col-sm-2">
                         <div class="row-fluid">
                          <div class="checkbox check-success checkbox-circle">
                            <input  value="1" type="checkbox"><input type="text" class="form-control" <?php if($ih_4 != 1){echo " value='$ih_4'";}  ?> disabled="">
                            <label >tuberculosis</label>
                          </div>
                        </div>
                        </div>
                        <div class="col-lg-2 cl-md-2 col-sm-2">
                         <div class="row-fluid">
                          <div class="checkbox check-success checkbox-circle">
                            <input  value="1" type="checkbox"><input type="text" class="form-control" <?php if($ih_5 != 1){echo " value='$ih_5'";}  ?> disabled="">
                            <label >typhoid fever</label>
                          </div>
                        </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>

                    <?php if($psex == 'Female'){?>
              <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <h4>FOR FEMALE STUDENTS</h4>
                    <div class="row">
                      <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                        <label>WHEN WAS YOUR LAST MENSTRUAL PERIOD(LMP)</label>
                        <input type="text" class="form-control" <?php if($ffs1 != 1){echo " value='$ffs1'";}  ?> disabled="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                        <p>Are you currently pregnant?</p>
                      </div>
                      <div class="md-4 col-sm-4 col-xs-4">
                        <div class="radio">
                        <input type="radio" <?php if($ffs2 == 0){echo "checked";}  ?> disabled=""/>
                        <label for="yes">Yes</label>
                         <input type="radio"  <?php if($ffs2 == 1){echo "checked";}  ?> disabled="" />
                        <label for="no">No</label>
                      </div>                                     
                      </div> 
                    </div>
                  </div>
                </div>
                    <?php }    ?>
            <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <h4>BODY MASS</h4>
                    <div class="row">
                      <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                      <label>What is your height? (in metres)
                      <input type="text" class="form-control" <?php echo " value='$bm1'";  ?> disabled=""></label> 
                       <label>What is your weight? (in in Kg)
                      <input type="text" class="form-control" <?php echo " value='$bm2'";  ?> disabled=""></label>                                     
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
                  <h4>SECTION <span class="semi-bold"> II</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border"> <br/>
                 <div class="row">
                 <h4>TO BE COMPLETED BY A REGISTERED MEDICAL PRACTITIONER </h4>
                 <div class="row">
                   <div class="col-lg-12 col-md-12">
                     <table class="table table-hover no-more-tables">
                     	<tbody></tbody>
                     		<tr>
                     			<th>Eyes (WITH/WITHOUT GLASSES)</th>
                     			<td><label>L-6</label><input type="text" class="form-control" <?php echo " value='$tt1'";  ?> disabled=""></td>
                     			<td><label>R-6</label><input type="text" class="form-control" <?php echo " value='$tt2'";  ?> disabled=""></td>
                     		</tr>
                     		<tr>
                     			<td><label>Ear</label><input type="text" class="form-control " <?php echo " value='$tt3'";  ?> disabled=""></td>
                     			<td><label>Nose</label><input type="text" class="form-control" <?php echo " value='$tt4'";  ?> disabled="" ></td>
                     			<td><label>Mouth</label><input type="text" class="form-control"<?php echo " value='$tt5'";  ?> disabled="" ></td>
                     		</tr>
                     		<tr>
                     			<th>Chest (X-ray number and report please)</th>
                     			<td><label>Lung field</label><input type="text" class="form-control" <?php echo " value='$tt6'";  ?> disabled=""></td>
                     			<td><label>Heart sounds</label><input type="text" class="form-control" <?php echo " value='$tt7'";  ?> disabled="" ></td>
                     		</tr>
                     		<tr>
                     			<th>Abdomen</th>
                     			<td>
                     				<label>Dimensions</label><input type="text" class="form-control" <?php echo "value='$tt8'";  ?> disabled="" >
                     				<label>Liver</label><input type="text" class="form-control" <?php echo "value='$tt9'";  ?> disabled="">
                     			</td>
                     			<td><label>Kidneys</label><input type="text" class="form-control" <?php echo "value='$tt10'";  ?> disabled="">
                     				<label>Spleen</label><input type="text" class="form-control" <?php echo "value='$tt11'";  ?> disabled="">
                     				<label>Hernia orifices</label><input type="text" class="form-control" <?php echo "value='$tt12'";  ?> disabled="">
                     			</td>
                     		</tr>
                     		<tr>
                     			<td><label>Blood Pressure</label><input type="text" class="form-control" <?php echo "value='$tt13'";  ?> disabled=""></td>
                     			<td><label>Pulse Rate</label><input type="text" class="form-control" <?php echo "value='$tt14'";  ?> disabled=""></td>
                     		</tr>
                     	</tbody></tbody>
                    </table>
                    <label>State other physical findings of significance</label>
                    <textarea rows="2" class="form-control" disabled=""><?php echo $tt15;  ?></textarea> 
                   </div>
                 </div>
                 </div>
                 <br/><br/>
                 <div class="row">
                 	<div class="col-lg-12 col-md-12">
                 		<h4>LABORATORY TESTS</h4>
                 		<div class="row">
                 			<div class="col-lg-12 col-md-12">
                 				<label>Urine Analysis
                 				<input type="text" class="form-control" <?php echo "value='$lt1'";  ?> disabled="">
                 				</label>
                 				<label>Stool Analysis
                 				<input type="text" class="form-control" <?php echo "value='$lt2'";  ?> disabled="">
                 				</label>
                 				<label>PCV
                 				<input type="text" class="form-control" <?php echo "value='$lt3'";  ?> disabled="">
                 				</label>
                 				<label>Blood Group
                 				<input type="text" class="form-control" <?php echo "value='$lt4'";  ?> disabled="">
                 				</label>
                 				<label>Genotype
                 				<input type="text" class="form-control" <?php echo "value='$lt5'";  ?> disabled="">
                 				</label>
                 				<label>HIV
                 				<input type="text" class="form-control" <?php echo "value='$lt6'";  ?> disabled="">
                 				</label>
                 			</div>
                 				<p>(All laboratory results to be attached)</p>
                 			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                 			<label>Full Name of Doctor</label>
                 			<input type="text" class="form-control" <?php echo "value='$lt7'";  ?> disabled="">
                 			</div>
                 			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                 			<label>Hospital Stamp/Date</label>
                 			<input type="text" class="form-control" <?php echo "value='$lt8'";  ?> disabled="">
                 			</div>
                 			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                 			<label>Doctor's signature</label>
                                        <input type="text" class="form-control" disabled="" value="<?php echo $lt7;?>">
                 			</div>
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
                  <h4>SECTION <span class="semi-bold"> III</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border"> <br/>
                 <div class="row">
                 <h4>FOR UNIVERSITY CLINIC ONLY</h4>
                 <div class="row">
                   <div class="col-lg-12 col-md-12">
                   <ol>
                   	<li>Questionnaires checked and passed</li>
                        <li>Comments and other actions on (1) above<textarea class="form-control" rows="2" disabled=""></textarea>
                   	<ol style="list-style-type:lower-alpha ">
                   		<li><label>Further tests (please specify)
                                        <input type="text" class="form-control" disabled="">
                   			 </label>
                   		</li>
                   		<li><label>Treatment ordered as regards (a) above
                                        <input type="text" class="form-control" disabled="">
                   			 </label>
                   		</li>
                   	</ol>
                   	</li>
                   </ol>
                   </div>
                 </div>
                </div>
               </div>
              </div>
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
<!-- END CORE TEMPLATE JS --> 

<!-- END NEED TO WORK ON -->
</body>
</html>