<?php
ob_start();
session_start();
require ("includes/db.php");
if(empty($_SESSION['director']) and empty($_SESSION['doc']) and empty($_SESSION['matron']) and empty($_SESSION['tester']) and empty($_SESSION['recordoff'])){
    header("location:login.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pagename = "tester";
require ("includes/read.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-CLINIC || ADD TEST FOR</title>
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
                 <h4>TO BE COMPLETED BY A REGISTERED MEDICAL PRACTITIONER </h4>
                 <div class="row">
                   <div class="col-lg-12 col-md-12">
                   <form name="tester" id="tester">
                     <table class="table table-hover no-more-tables">
                     	<tbody></tbody>
                     		<tr><input type="hidden" name="refresh" id="refresh" value="<?php echo $_GET['p'];?>">
                     			<th>Eyes (WITH/WITHOUT GLASSES)</th>
                                        <td><label>L-6</label><input  name="tt1" id="tt1" type="text" class="form-control" <?php if($tt1 != ""){echo "disabled='' value='$tt1' ";}  ?>></td>
                                        <td><label>R-6</label><input name="tt2" id="tt2" type="text" class="form-control" <?php if($tt2 != ""){echo "disabled='' value='$tt2' ";}  ?>></td>
                     		</tr>
                     		<tr>
                                    <td><label>Ear</label><input name="tt3" id="tt3" type="text" class="form-control " <?php if($tt3 = ""){echo "disabled='' value='$tt3' ";}  ?>></td>
                                    <td><label>Nose</label><input name="tt4" id="tt4" type="text" class="form-control " <?php if($tt4 != ""){echo "disabled='' value='$tt4' ";}  ?>></td>
                                    <td><label>Mouth</label><input name="tt5" id="tt5" type="text" class="form-control " <?php if($tt5 != ""){echo "disabled='' value='$tt5' ";}  ?>></td>
                     		</tr>
                     		<tr>
                     			<th>Chest (X-ray number and report please)</th>
                                        <td><label>Lung field</label><input name="tt6" id="tt6" type="text" class="form-control" <?php if($tt6 != ""){echo "disabled='' value='$tt6' ";}  ?>></td>
                                        <td><label>Heart sounds</label><input name="tt7" id="tt7" type="text" class="form-control" <?php if($tt7 != ""){echo "disabled='' value='$tt7' ";}  ?>></td>
                     		</tr>
                     		<tr>
                     			<th>Abdomen</th>
                     			<td>
                     				<label>Dimensions</label><input type="text" class="form-control ">
                                                <label>Liver</label><input name="tt8" id="tt8" type="text" class="form-control " <?php if($tt8 != ""){echo "disabled='' value='$tt8' ";}  ?>>
                     			</td>
                                        <td><label>Kidneys</label><input name="tt9" id="tt9" type="text" class="form-control " <?php if($tt9 != ""){echo "disabled='' value='$tt9' ";}  ?>>
                                            <label>Spleen</label><input name="tt10" id="tt10" type="text" class="form-control " <?php if($tt10 != ""){echo "disabled='' value='$tt10' ";}  ?>>
                                            <label>Hernia orifices</label><input name="tt11" id="tt11" type="text" class="form-control " <?php if($tt11 != ""){echo "disabled='' value='$tt11' ";}  ?>>
                     			</td>
                     		</tr>
                     		<tr>
                                    <td><label>Blood Pressure</label><input name="tt12" name="tt12" type="text" class="form-control" <?php if($tt12 != ""){echo "disabled='' value='$tt1' ";}  ?>></td>
                                    <td><label>Pulse Rate</label><input name="tt13" id="tt13" type="text" class="form-control"></td>
                     		</tr>
                     	</tbody></tbody>
                    </table>
                    <label>State other physical findings of significance</label>
                    <textarea rows="2" class="form-control" name="tt14" id="tt14"></textarea> 
                    <br>
                    <center><button name="submit" type="submit" id="submit " class="btn btn-primary">UPDATE</button><center>
                    </form>
                   </div>
                 </div>
                 </div>
                 <br/><br/>
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