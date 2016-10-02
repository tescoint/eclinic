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
// Trying to get patients details
//Including the read file
$pagename = "alr";
require ("includes/read.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>E-CLINIC || ADD LAB REPORT</title>
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
<?php
if($sdata['id'] == $lrfdoc_id and $lrfdata['checked'] != 1){
    $checkcquery = "UPDATE labreport set checked = 1 where id = $_GET[id]";
    $checkcrun_query = mysqli_query($dbc,$checkcquery);
}


?>
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
<h4><span class="semi-bold">LABORATORY REPORT FORM</span></h4>
<div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
</div>
<div class="grid-body no-border"> <br>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table table-hover no-more-tables">
<tbody>
<tr>
    <th><input type="text" class="form-control" placeholder="NAME" id="name" name="name" disabled="" value="<?php echo $pname;?>"/></th>
            <th><div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <input name="age" id="age" type="text" class="form-control" placeholder="AGE" disabled="" value="<?php echo $age; ?>"/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <input name="sex" id="sex" type="text" class="form-control" placeholder="SEX" disabled="" value="<?php echo $psex; ?>"/>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <input name="date" id="date" type="text" class="form-control" placeholder="DATE" disabled="" value="<?php echo $lfedate; ?>"/>
                                            </div>
                            </div></th>
</tr>
<tr>
    <th><input type="text" name="address" id="address" class="form-control" placeholder="ADDRESS" disabled="" value="<?php echo $paddress; ?>"/></th>
    <th><input type="text" name="specimen" id="specimen" class="form-control" placeholder="SPECIMEN" disabled="" value="<?php echo $lfsample; ?>"/></th>
</tr>
<tr>
            <!-- <th><input type="text" class="form-control" placeholder="CLINICAL DETAILS"/></th> -->
    <th><input name="doc_name" id="doc_name" type="text" class="form-control" placeholder="DOCTOR'S NAME" disabled="" value="<?php echo $doc_name; ?>"/></th>
</tr>
<tr>
            <th></th>
            <!-- <th><input type="text" class="form-control" placeholder="HOSP./CLINIC"/></th> -->
</tr>
</tbody>
</table>
</div>
<h4>PLEASE CHECK THE APPROPRIATE BOX</h4>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12">
<table class="table no-more-tables">
<thead>
<th colspan="4">HEAMATOLOGY</th>
            <th colspan="4">FULL BLOOD COUNT</th>
                            </thead>
<tbody>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h1" value="1" type="checkbox" disabled=""<?php if(!empty($h1)){echo " checked"; }?>>
                                                            <label for="h1"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>HB</p></td>
                            <td class="v-align-middle"><span class="help">(11.0 - 18.0)</span>
                                            <div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h1" name="h1" class="form-control" placeholder="" type="text" value=" <?php if(!empty($h1)){echo $h1; }?>" disabled="" >
                                                            <span class="add-on">gm/dl</span> </div></td>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h2" value="1" type="checkbox" <?php if(!empty($h2)){echo " checked"; }?> disabled="">
                                                            <label for="h2"></label>
                                            </div></td>
                                    <td class="v-align-middle"><p>DIFF NUETR</p></td>
                            <td class="v-align-middle"><span class="help">(44 - 75)</span>
                                            <div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h2" name="h2" class="form-control" placeholder="" type="text" value='<?php if(!empty($h2)){echo "$h2"; }?>' disabled="">
                                                            <span class="add-on">%</span> </div></td>

            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h3" value="1" type="checkbox" <?php if(!empty($h3)){echo " checked"; }?> disabled="">
                                                            <label for="h3"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>PCV</p></td>
                            <td class="v-align-middle"><div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h3" name="h3" class="form-control" placeholder="" type="text" value='<?php if(!empty($h3)){echo "$h3"; }?>' disabled="" >
                                                            <span class="add-on">%</span> </div></td>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h4" value="1" type="checkbox" <?php if(!empty($h4)){echo " checked"; }?> disabled="" >
                                                            <label for="h4"></label>
                                            </div></td>
                                    <td class="v-align-middle"><p>LYM</p></td>
                            <td class="v-align-middle"><span class="help">(20 - 45)</span>
                                            <div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h4" name="h4" class="form-control" placeholder="" type="text" value='<?php if(!empty($h4)){echo "$h4"; }?>' disabled="">
                                                            <span class="add-on">%</span> </div></td>

            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h5" value="1" type="checkbox" <?php if(!empty($h5)){echo " checked"; }?> disabled="">
                                                            <label for="h5"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>WBC</p></td>
                            <td class="v-align-middle"><span class="help">(4,000 - 11,000)</span>
                            <input id="h5" name="h5" class="form-control" placeholder="" type="text" value='<?php if(!empty($h5)){echo "$h5"; }?>' disabled="">
                            </td>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h6" value="1" type="checkbox" <?php if(!empty($h6)){echo " checked"; }?> disabled="">
                                                            <label for="h6"></label>
                                            </div></td>
                                    <td class="v-align-middle"><p>EOS</p></td>
                            <td class="v-align-middle"><span class="help">(0 - 6)</span>
                                            <div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h6" name="h6" class="form-control" placeholder="" type="text" value='<?php if(!empty($h6)){echo "$h6"; }?>' disabled="">
                                                            <span class="add-on">%</span> </div></td>

            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h7" value="1" type="checkbox" <?php if(!empty($h7)){echo " checked"; }?> disabled="">
                                                            <label for="h7"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>ESR</p></td>
                            <td class="v-align-middle"><span class="help">MM<sup>3</sup>/HR</span>
                                    <input id="h7" name="h7" class="form-control" placeholder="" type="text" value='<?php if(!empty($h7)){echo "$h7"; }?>' disabled="">
                            </td>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h8" value="1" type="checkbox" <?php if(!empty($h8)){echo " checked"; }?> disabled="" >
                                                            <label for="h8"></label>
                                            </div></td>
                                    <td class="v-align-middle"><p>MONO</p></td>
                            <td class="v-align-middle"><span class="help">(0 - 3)</span>
                                            <div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h8" name="h8" class="form-control" placeholder="" type="text" value='<?php if(!empty($h8)){echo "$h8"; }?>' disabled="">
                                                            <span class="add-on">%</span> </div></td>

            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h9" value="1" type="checkbox" <?php if(!empty($h9)){echo " checked"; }?> disabled="">
                                                            <label for="h9"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>RBC</p></td>
                            <td class="v-align-middle"><span class="help">(4 - 6 million)</span>
                                    <input id="h9" name="h9" class="form-control" placeholder="" type="text" value='<?php if(!empty($h9)){echo "$h9"; }?>' disabled="">
                            </td>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h10" value="1" type="checkbox" <?php if(!empty($h10)){echo " checked"; }?> disabled="">
                                                            <label for="h10"></label>
                                            </div></td>
                                    <td class="v-align-middle"><p>BAS</p></td>
                            <td class="v-align-middle"><span class="help">(0 - 1)</span>
                                            <div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h10" name="h10" class="form-control" placeholder="" type="text" value='<?php if(!empty($h10)){echo "$h10"; }?>' disabled="">
                                                            <span class="add-on">%</span> </div></td>

            </tr>
</tbody>
</table>
<br/>
<p>BLOOD FILM REPORT</p>
<textarea  placeholder="Enter text ..." class="form-control textarea1" rows="5" id="h11" name="h11" disabled=""><?php if(!empty($h10)){echo "$h11"; }?></textarea>
<br/>

<h4>MICROBIOLOGY/PARASITOLOGY/SEROLOGY</h4>
<table class="table no-more-tables">
<thead>
<tr class="">
    <th></th>
    <th colspan="2" class="v-align-right">TITRE</th>
</tr>
</thead>
<tbody>
<tr>
    <td><p>ANTIGEN</p></td>
    <td><p>O</p></td>
    <td><p>H</p></td>
</tr>
<tr>
    <td><p>SALMONELLA</p></td>
    <td><input id="mb1_o" name="mb1_o" type="text" value='<?php if(!empty($mb1_o)){echo "$mb1_o"; }?>' disabled=""></td>
    <td><input id="mb1_h" name="mb1_h" type="text" value='<?php if(!empty($mb1_h)){echo "$mb1_h"; }?>' disabled=""></td>
</tr>
<tr>
    <td><p>S.PARATYPHI A</p></td>
    <td><input id="mb2_o" name="mb2_o" type="text" value='<?php if(!empty($mb2_o)){echo "$mb2_o"; }?>' disabled="" ></td>
    <td><input id="mb2_h" name="mb2_h" type="text" value='<?php if(!empty($mb2_h)){echo "$mb2_h"; }?>' disabled="" ></td>
</tr>
<tr>
    <td><p>S.PARATYPHI B</p></td>
    <td><input name="mb3_o" id="mb3_o" type="text" value='<?php if(!empty($mb3_o)){echo "$mb3_o"; }?>' disabled=""></td>
    <td><input name="mb3_h" id="mb3_h" type="text" value='<?php if(!empty($mb3_h)){echo "$mb3_h"; }?>' disabled=""></td>
</tr>
<tr>
    <td><p>S.PARATYPHI C</p></td>
    <td><input name="mb4_o" id="mb4_o" type="text" value='<?php if(!empty($mb4_o)){echo "$mb4_o"; }?>' disabled=""></td>
    <td><input name="mb4_h" id="mb4_h" type="text" value='<?php if(!empty($mb4_h)){echo "$mb4_h"; }?>' disabled=""></td>
</tr>
</tbody>
</table>
<br/>
<p>COMMENT<textarea  placeholder="Enter text ..." class="form-control textarea2" rows="5" name="mbcomment" id="mbcomment" disabled=""><?php if(!empty($mbcomment)){echo "$mbcomment"; }?></textarea></p>
<label>MALARIA PARASITE</label>
<input name="mbparasite" id="mbparasite" type="text" class="form-control" value='<?php if(!empty($mbparasite)){echo "$mbparasite"; }?>' disabled="" />
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
<table class="table no-more-tables">
<tbody>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h12" value="1" type="checkbox" <?php if(!empty($h12)){echo " checked"; }?> disabled="">
                                                            <label for="h12"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>GENOTYPE</p></td>
                            <td class="v-align-middle"><input id="h12" name="h12" type="text" class="form-control" value='<?php if(!empty($h12)){echo "$h12"; }?>' disabled=""></td>
            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h13" value="1" type="checkbox" <?php if(!empty($h13)){echo " checked"; }?> disabled="" >
                                                            <label for="h13"></label>
                                            </div></td>
                            <td class="v-align-middle">BLOOD GROUP</td>
                            <td class="v-align-middle"><input id="h13" name="h13" type="text" class="form-control" value='<?php if(!empty($h13)){echo "$h13"; }?>' disabled=""></td>
            </tr>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h14" value="1" type="checkbox" <?php if(!empty($h14)){echo " checked"; }?> disabled="">
                                                            <label for="h14"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>PROTHROMBIN TIME</p></td>
                            <td class="v-align-middle"><span class="help">(10 - 14sec)</span>
                                            <input id="h14" name="h14" class="form-control" type="text" value='<?php if(!empty($h14)){echo "$h14"; }?>' disabled=""></td>
            </tr>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h15" value="1" type="checkbox" <?php if(!empty($h15)){echo " checked"; }?> disabled="">
                                                            <label for="h15"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>RETICS</p></td>
                            <td class="v-align-middle"><span class="help">(0 - 2%)</span>
                                            <input id="h15" name="h15" class="form-control" type="text" value='<?php if(!empty($h15)){echo "$h15"; }?>' disabled=""></td>
            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h16" value="1" type="checkbox" <?php if(!empty($h16)){echo " checked"; }?> disabled="">
                                                            <label for="h16"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>BLEEDING TIME</p></td>
                            <td class="v-align-middle"><span class="help">(5 - 9mins)</span>
                                            <input id="h16" name="h16" class="form-control" type="text" value='<?php if(!empty($h16)){echo "$h16"; }?>' disabled=""></td>
            </tr>
            <tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h17" value="1" type="checkbox" <?php if(!empty($h17)){echo " checked"; }?> disabled="">
                                                            <label for="h17"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>CLOTTING TIME</p></td>
                            <td class="v-align-middle"><span class="help">(5 - 11mins)</span>
                                            <input id="h17" name="h17" class="form-control" type="text" value='<?php if(!empty($h17)){echo "$h17"; }?>' disabled=""></td>
            </tr>
            <tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h18" value="1" type="checkbox" <?php if(!empty($h18)){echo " checked"; }?> disabled="">
                                                            <label for="h18"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>PLATELET TIME</p></td>
                            <td class="v-align-middle"><span class="help">(150,000-400,000m)</span>
                                            <input name="h18" id="h18" class="form-control" type="text" value='<?php if(!empty($h18)){echo "$h18"; }?>' disabled=""></td>
            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h19" value="1" type="checkbox" <?php if(!empty($h19)){echo " checked"; }?> disabled="">
                                                            <label for="h19"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>COMB'S TEST</p></td>
                            <td class="v-align-middle"><input id="h19" name="h19" type="text" class="form-control" value='<?php if(!empty($h19)){echo "$h19"; }?>' disabled=""></td>
            </tr>
            <tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h20" value="1" type="checkbox" <?php if(!empty($h20)){echo " checked"; }?> disabled="" >
                                                            <label for="h20"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>SICKLING</p></td>
                            <td class="v-align-middle"><input id="h20" name="h20" type="text" class="form-control" value='<?php if(!empty($h20)){echo "$h20"; }?>' disabled=""></td>
            </tr>
</tbody>
</table>
<br/>
<h4>BLOOD TRANSFUTION</h4>
<table class="table no-more-tables">
<tbody>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt1" value="1" type="checkbox" <?php if(!empty($bt1)){echo " checked"; }?> disabled="">
                                                            <label for="bt1"></label>
                                            </div></td>
                            <th><p>BLOOD GROUP</p></th>
                            <th colspan="3"><input name="bt1" id="bt1" type="text" class="form-control" value='<?php if(!empty($bt1)){echo "$bt1"; }?>' disabled=""></th>
            </tr>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt2" value="1" type="checkbox" <?php if(!empty($bt2)){echo " checked"; }?> disabled="">
                                                            <label for="bt2"></label>
                                            </div></td>
                            <th><p>CROSSMATCH</p></th>
                            <th colspan="3"><input name="bt2" id="bt2" type="text" class="form-control" value='<?php if(!empty($bt2)){echo "$bt2"; }?>' disabled=""></th>
            </tr>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt3" value="1" type="checkbox" <?php if(!empty($bt3)){echo " checked"; }?> disabled="">
                                                            <label for="bt3"></label>
                                            </div></td>
                            <th><p>NO. OF UNIT</p></th>
                            <th><input id="bt3" name="bt3" type="text" class="form-control" value='<?php if(!empty($bt3)){echo "$bt3"; }?>' disabled=""></th>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt3_1" value="1" type="checkbox" <?php if(!empty($bt3_1)){echo " checked"; }?> disabled="">
                                                            <label for="bt3_1"></label>
                                            </div></td>
                            <th><p>WHOLE BLOOD</p></th>
            </tr>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt4" value="1" type="checkbox" <?php if(!empty($bt4)){echo " checked"; }?> disabled="">
                                                            <label for="bt4"></label>
                                            </div></td>
                            <th><p>HIV SCREENING</p></th>
                            <th><input name="bt4" id="bt4" type="text" class="form-control" value='<?php if(!empty($bt4)){echo "$bt4"; }?>' disabled=""></th>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt4_1" value="1" type="checkbox" <?php if(!empty($bt4_1)){echo " checked"; }?> disabled="">
                                                            <label for="bt4_1"></label>
                                            </div></td>
                            <th><p>PACKED CELL</p></th>
            </tr>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt5" value="1" type="checkbox" <?php if(!empty($bt5)){echo " checked"; }?> disabled="">
                                                            <label for="bt5"></label>
                                            </div></td>
                            <th><p>HSBAg</p></th>
                            <th><input id="bt5" name="bt5" type="text" class="form-control" value='<?php if(!empty($bt5)){echo "$bt5"; }?>' disabled=""></th>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt5_1" value="1" type="checkbox" <?php if(!empty($bt5_1)){echo " checked"; }?> disabled="">
                                                            <label for="bt5_1"></label>
                                            </div></td>
                            <th><p>PLASMA</p></th>
            </tr>
</tbody>
</table>
<br>
<br>
<table class="table no-more-tables">
<tbody>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb5" value="1" type="checkbox" <?php if(!empty($mb5)){echo " checked"; }?> disabled="">
                                                            <label for="mb5"></label>
                                            </div></td>
    <td><p>VDR/KHAN TEST</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb6" value="1" type="checkbox" <?php if(!empty($mb6)){echo " checked"; }?> disabled="">
                                                            <label for="mb6"></label>
                                            </div></td>
    <td><p>PREGNANCY TEST</p></td>
    <td><input name="mb6" id="mb6" type="text" value='<?php if(!empty($mb6)){echo "$mb6"; }?>' disabled=""></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb7" value="1" type="checkbox" <?php if(!empty($mb7)){echo " checked"; }?> disabled="">
                                                            <label for="mb7"></label>
                                            </div></td>
    <td><p>RHEUMATOID FACTOR</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb8" value="1" type="checkbox" <?php if(!empty($mb8)){echo " checked"; }?> disabled="">
                                                            <label for="mb8"></label>
                                            </div></td>
    <td><p>RETROVIAL SCREENING</p></td>
    <td><input name="mb8" id="mb8" type="text" value='<?php if(!empty($mb8)){echo "$mb8"; }?>' disabled=""></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb9" value="1" type="checkbox" <?php if(!empty($mb9)){echo " checked"; }?> disabled="">
                                                            <label for="mb9"></label>
                                            </div></td>
    <td><p>AUSTRALIAN ANTEGEN</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb10" value="1" type="checkbox" <?php if(!empty($mb10)){echo " checked"; }?> disabled="">
                                                            <label for="mb10"></label>
                                            </div></td>
    <td><p>STOOL EXAMINATION</p></td>
    <td><input id="mb10" name="mb10" type="text" value='<?php if(!empty($mb10)){echo "$mb10"; }?>' disabled=""></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb11" value="1" type="checkbox" <?php if(!empty($mb11)){echo " checked"; }?> disabled="">
                                                            <label for="mb11"></label>
                                            </div></td>
    <td><p>A.S.O TITRE</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb12" value="1" type="checkbox" <?php if(!empty($mb12)){echo " checked"; }?> disabled="">
                                                            <label for="mb12"></label>
                                            </div></td>
    <td><p>OCCULT BLOOD TEST</p></td>
    <td><input name="mb12" id="mb12" type="text" value='<?php if(!empty($mb12)){echo "$mb12"; }?>' disabled=""></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb13" value="1" type="checkbox" <?php if(!empty($mb13)){echo " checked"; }?> disabled="">
                                                            <label for="mb13"></label>
                                            </div></td>
    <td><p>RH TITRE</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb14" value="1" type="checkbox" <?php if(!empty($mb14)){echo " checked"; }?> disabled="">
                                                            <label for="mb14"></label>
                                            </div></td>
    <td><p>FUNGAL EXAMINATION</p></td>
    <td><input name="mb14" id="mb14" type="text" value='<?php if(!empty($mb14)){echo "$mb14"; }?>' disabled=""></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb15" value="1" type="checkbox" <?php if(!empty($mb15)){echo " checked"; }?> disabled="">
                                                            <label for="mb15"></label>
                                            </div></td>
    <td><p>MANTOUX TEST</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb16" value="1" type="checkbox" <?php if(!empty($mb16)){echo " checked"; }?> disabled="">
                                                            <label for="mb16"></label>
                                            </div></td>
    <td><p>SPUTUM TEST (AFB)</p></td>
    <td><input name="mb16" id="mb16" type="text" value='<?php if(!empty($mb16)){echo "$mb16"; }?>' disabled=""></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb17" value="1" type="checkbox" <?php if(!empty($mb17)){echo " checked"; }?> disabled="">
                                                            <label for="mb17"></label>
                                            </div></td>
    <td><p>BLOOD CULTURE</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb18" value="1" type="checkbox" <?php if(!empty($mb18)){echo " checked"; }?> disabled="">
                                                            <label for="mb18"></label>
                                            </div></td>
    <td><p>SEMEN ANALYSIS</p></td>
    <td><input name="mb18" id="mb18" type="text" value='<?php if(!empty($mb18)){echo "$mb18"; }?>' disabled=""></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb19" value="1" type="checkbox" <?php if(!empty($mb19)){echo " checked"; }?> disabled="">
                                                            <label for="mb19"></label>
                                            </div></td>
    <td><p>BLOOD MICROFILARIA</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb20" value="1" type="checkbox" <?php if(!empty($mb20)){echo " checked"; }?> disabled="">
                                                            <label for="mb20"></label>
                                            </div></td>
    <td><p>FOOD HANDLERS TEST</p></td>
    <td><input name="mb20" id="mb20" type="text" value='<?php if(!empty($mb20)){echo "$mb20"; }?>' disabled=""></td>
</tr>
<tr><input type="hidden" name="refresh" id="refresh" value="<?php echo $_GET['p'];?>">
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb21" value="1" type="checkbox" <?php if(!empty($mb21)){echo " checked"; }?> disabled="">
                                                            <label for="mb21"></label>
                                            </div></td>
    <td><p>SKIN SNIP</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb22" value="1" type="checkbox" <?php if(!empty($mb22)){echo " checked"; }?> disabled="">
                                                            <label for="mb22"></label>
                                            </div></td>
    <td><p>WATER ANALYSIS</p></td>
    <td><input name="mb22" id="mb22" type="text" value='<?php if(!empty($mb22)){echo "$mb22"; }?>' disabled=""></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb23" value="1" type="checkbox" <?php if(!empty($mb23)){echo " checked"; }?> disabled="">
                                                            <label for="mb23"></label>
                                            </div></td>
    <td><p>URINE ANALYSIS</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb24" value="1" type="checkbox" <?php if(!empty($mb24)){echo " checked"; }?> disabled="">
                                                            <label for="mb24"></label>
                                            </div>
    </td>
    <td><p>G.6 PD</p></td>
    <td><input name="mb24" id="mb24" type="text" value='<?php if(!empty($mb24)){echo "$mb24"; }?>' disabled=""></td>
</tr>
</tbody>

</table>

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
<script type="text/javascript">$(".textarea1").wysihtml5();</script>
<script type="text/javascript">$(".textarea2").wysihtml5();</script>
<!-- END CORE TEMPLATE JS --> 

<!-- END NEED TO WORK ON -->
</body>
</html