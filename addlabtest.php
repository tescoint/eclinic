<?php
ob_start();
session_start();
require("includes/db.php");
if(empty($_SESSION['labtech']) and empty($_SESSION['director']) and empty($_SESSION['doc']) and empty($_SESSION['matron']) and empty($_SESSION['recordoff'])){
    header("location:login.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Including the read file
$pagename = "alt";
require ("includes/read.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-CLINIC || ADD LAB TEST FOR </title>
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
<div class="row">
             <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>SECTION <span class="semi-bold"> II</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border"> <br/>
                 <div class="row">
                 <div class="row"><input type="hidden" name="redirect" id="redirect" value="<?php echo $_GET['p'];?>">
                 	<div class="col-lg-12 col-md-12">
                 		<h4>LABORATORY TESTS</h4>
                 		<div class="row">
                 			<div class="col-lg-12 col-md-12">
                                            <form id="labreg" <?php if($lt3 != ''){echo "name='labregdone'";}else{ echo "name='labreg'" ;} ?>>
                 				<label>Urine Analysis
                                                    <input type="hidden" name="card_number" id="card_number" value="<?php echo $pcard_number;?>">
                                                <input name="lt1" id="lt1" type="text" class="form-control" <?php if($lt1 != ""){echo "disabled='' value='$lt1' ";}  ?> >
                 				</label>
                 				<label>Stool Analysis
                 				<input name="lt2" id="lt2" type="text" class="form-control" <?php if($lt2 != ""){echo "disabled='' value='$lt2' ";}  ?>>
                 				</label>
                 				<label>PCV
                 				<input name="lt3" id="lt3" type="text" class="form-control" <?php if($lt3 != ""){echo "disabled='' value='$lt3' ";}  ?>>
                 				</label>
                 				<label>Blood Group
                 				<input  name="lt4" id="lt4" type="text" class="form-control" <?php if($lt4 != ""){echo "disabled='' value='$lt4' ";}  ?>>
                 				</label>
                 				<label>Genotype
                 				<input name="lt5" id="lt5" type="text" class="form-control" <?php if($lt5 != ""){echo "disabled='' value='$lt5' ";}  ?>>
                 				</label>
                 				<label>HIV
                 				<input name="lt6" id="lt6" type="text" class="form-control" <?php if($lt6 != ""){echo "disabled='' value='$lt6' ";}  ?>>
                 				</label>
                 			</div>
                 				
                                               
                                   <?php if(!empty($_SESSION['labtech']) and empty($lt2)){?> <center><button type="submit" name="submit" class="btn btn-primary">Add Test</button></center>   
                                             <?php }?>   </form>
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