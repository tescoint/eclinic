<?php
ob_start();
session_start();
require("includes/db.php");
if(empty($_SESSION['labtech'])){
    header("location:login.php");
}
/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
// Trying to get patients details
//Including the read file
$pagename = "alrun";
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
<form id="alrun" name="alrun">
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
                                                <input name="date" id="date" type="text" class="form-control" placeholder="DATE" disabled="" value="<?php echo $date; ?>"/>
                                                            <input type="hidden" name="stid" id="stid" value="<?php echo $pid;  ?>" >
                                                            <input type="hidden" name="doc_id" id="doc_id" value="<?php echo $lrfdoc_id; ?>" >
                                                            <input type="hidden" name="lab_req_id" id="lab_req_id" value="<?php echo $lrfid; ?>" >
                                                            <input type="hidden" name="notation_id" id="notation_id" value="<?php echo $lrfnotation_id ?>" >
                                            </div>
                            </div></th>
</tr>
<tr>
    <th><input type="text" name="address" id="address" class="form-control" placeholder="ADDRESS" disabled="" value="<?php echo $paddress; ?>"/></th>
    <th><input type="text" name="specimen" id="specimen" class="form-control" placeholder="SPECIMEN" disabled="" value="<?php echo $lrfsample; ?>"/></th>
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
                                                            <input id="h1" value="1" type="checkbox">
                                                            <label for="h1"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>HB</p></td>
                            <td class="v-align-middle"><span class="help">(11.0 - 18.0)</span>
                                            <div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h1" name="h1" class="form-control" placeholder="" type="text">
                                                            <span class="add-on">gm/dl</span> </div></td>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h2" value="1" type="checkbox">
                                                            <label for="h2"></label>
                                            </div></td>
                                    <td class="v-align-middle"><p>DIFF NUETR</p></td>
                            <td class="v-align-middle"><span class="help">(44 - 75)</span>
                                            <div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h2" name="h2" class="form-control" placeholder="" type="text">
                                                            <span class="add-on">%</span> </div></td>

            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h3" value="1" type="checkbox">
                                                            <label for="h3"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>PCV</p></td>
                            <td class="v-align-middle"><div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h3" name="h3" class="form-control" placeholder="" type="text">
                                                            <span class="add-on">%</span> </div></td>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h4" value="1" type="checkbox">
                                                            <label for="h4"></label>
                                            </div></td>
                                    <td class="v-align-middle"><p>LYM</p></td>
                            <td class="v-align-middle"><span class="help">(20 - 45)</span>
                                            <div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h4" name="h4" class="form-control" placeholder="" type="text">
                                                            <span class="add-on">%</span> </div></td>

            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h5" value="1" type="checkbox">
                                                            <label for="h5"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>WBC</p></td>
                            <td class="v-align-middle"><span class="help">(4,000 - 11,000)</span>
                            <input id="h5" name="h5" class="form-control" placeholder="" type="text">
                            </td>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h6" value="1" type="checkbox">
                                                            <label for="h6"></label>
                                            </div></td>
                                    <td class="v-align-middle"><p>EOS</p></td>
                            <td class="v-align-middle"><span class="help">(0 - 6)</span>
                                            <div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h6" name="h6" class="form-control" placeholder="" type="text">
                                                            <span class="add-on">%</span> </div></td>

            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h7" value="1" type="checkbox">
                                                            <label for="h7"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>ESR</p></td>
                            <td class="v-align-middle"><span class="help">MM<sup>3</sup>/HR</span>
                                    <input id="h7" name="h7" class="form-control" placeholder="" type="text">
                            </td>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h8" value="1" type="checkbox">
                                                            <label for="h8"></label>
                                            </div></td>
                                    <td class="v-align-middle"><p>MONO</p></td>
                            <td class="v-align-middle"><span class="help">(0 - 3)</span>
                                            <div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h8" name="h8" class="form-control" placeholder="" type="text">
                                                            <span class="add-on">%</span> </div></td>

            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h9" value="1" type="checkbox">
                                                            <label for="h9"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>RBC</p></td>
                            <td class="v-align-middle"><span class="help">(4 - 6 million)</span>
                                    <input id="h9" name="h9" class="form-control" placeholder="" type="text">
                            </td>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h10" value="1" type="checkbox">
                                                            <label for="h10"></label>
                                            </div></td>
                                    <td class="v-align-middle"><p>BAS</p></td>
                            <td class="v-align-middle"><span class="help">(0 - 1)</span>
                                            <div class="input-append col-md-10 col-sm-10 primary">
                                                            <input id="h10" name="h10" class="form-control" placeholder="" type="text">
                                                            <span class="add-on">%</span> </div></td>

            </tr>
</tbody>
</table>
<br/>
<p>BLOOD FILM REPORT</p>
<textarea  placeholder="Enter text ..." class="form-control textarea1" rows="5" id="h11" name="h11"></textarea>
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
    <td><input id="mb1_o" name="mb1_o" type="text"></td>
    <td><input id="mb1_h" name="mb1_h" type="text"></td>
</tr>
<tr>
    <td><p>S.PARATYPHI A</p></td>
    <td><input id="mb2_o" name="mb2_o" type="text"></td>
    <td><input id="mb2_h" name="mb2_h" type="text"></td>
</tr>
<tr>
    <td><p>S.PARATYPHI B</p></td>
    <td><input name="mb3_o" id="mb3_o" type="text"></td>
    <td><input name="mb3_h" id="mb3_h" type="text"></td>
</tr>
<tr>
    <td><p>S.PARATYPHI C</p></td>
    <td><input name="mb4_o" id="mb4_o" type="text"></td>
    <td><input name="mb4_h" id="mb4_h" type="text"></td>
</tr>
</tbody>
</table>
<br/>
<p>COMMENT<textarea  placeholder="Enter text ..." class="form-control textarea2" rows="5" name="mbcomment" id="mbcomment"></textarea></p>
<label>MALARIA PARASITE</label>
<input name="mbparasite" id="mbparasite" type="text" class="form-control" />
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
<table class="table no-more-tables">
<tbody>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h12" value="1" type="checkbox">
                                                            <label for="h12"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>GENOTYPE</p></td>
                            <td class="v-align-middle"><input id="h12" name="h12" type="text" class="form-control"></td>
            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h13" value="1" type="checkbox">
                                                            <label for="h13"></label>
                                            </div></td>
                            <td class="v-align-middle">BLOOD GROUP</td>
                            <td class="v-align-middle"><input id="h13" name="h13" type="text" class="form-control"></td>
            </tr>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h14" value="1" type="checkbox">
                                                            <label for="h14"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>PROTHROMBIN TIME</p></td>
                            <td class="v-align-middle"><span class="help">(10 - 14sec)</span>
                                            <input id="h14" name="h14" class="form-control" type="text"></td>
            </tr>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h15" value="1" type="checkbox">
                                                            <label for="h15"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>RETICS</p></td>
                            <td class="v-align-middle"><span class="help">(0 - 2%)</span>
                                            <input id="h15" name="h15" class="form-control" type="text"></td>
            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h16" value="1" type="checkbox">
                                                            <label for="h16"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>BLEEDING TIME</p></td>
                            <td class="v-align-middle"><span class="help">(5 - 9mins)</span>
                                            <input id="h16" name="h16" class="form-control" type="text"></td>
            </tr>
            <tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h17" value="1" type="checkbox">
                                                            <label for="h17"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>CLOTTING TIME</p></td>
                            <td class="v-align-middle"><span class="help">(5 - 11mins)</span>
                                            <input id="h17" name="h17" class="form-control" type="text"></td>
            </tr>
            <tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h18" value="1" type="checkbox">
                                                            <label for="h18"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>PLATELET TIME</p></td>
                            <td class="v-align-middle"><span class="help">(150,000-400,000m)</span>
                                            <input name="h18" id="h18" class="form-control" type="text"></td>
            </tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h19" value="1" type="checkbox">
                                                            <label for="h19"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>COMB'S TEST</p></td>
                            <td class="v-align-middle"><input id="h19" name="h19" type="text" class="form-control"></td>
            </tr>
            <tr>
            <tr class="">
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="h20" value="1" type="checkbox">
                                                            <label for="h20"></label>
                                            </div></td>
                            <td class="v-align-middle"><p>SICKLING</p></td>
                            <td class="v-align-middle"><input id="h20" name="h20" type="text" class="form-control"></td>
            </tr>
</tbody>
</table>
<br/>
<h4>BLOOD TRANSFUTION</h4>
<table class="table no-more-tables">
<tbody>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt1" value="1" type="checkbox">
                                                            <label for="bt1"></label>
                                            </div></td>
                            <th><p>BLOOD GROUP</p></th>
                            <th colspan="3"><input name="bt1" id="bt1" type="text" class="form-control"></th>
            </tr>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt2" value="1" type="checkbox">
                                                            <label for="bt2"></label>
                                            </div></td>
                            <th><p>CROSSMATCH</p></th>
                            <th colspan="3"><input name="bt2" id="bt2" type="text" class="form-control"></th>
            </tr>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt3" value="1" type="checkbox">
                                                            <label for="bt3"></label>
                                            </div></td>
                            <th><p>NO. OF UNIT</p></th>
                            <th><input id="bt3" name="bt3" type="text" class="form-control"></th>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt3_1" value="1" name="bt3_1" type="checkbox">
                                                            <label for="bt3_1"></label>
                                            </div></td>
                            <th><p>WHOLE BLOOD</p></th>
            </tr>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt4" value="1" type="checkbox">
                                                            <label for="bt4"></label>
                                            </div></td>
                            <th><p>HIV SCREENING</p></th>
                            <th><input name="bt4" id="bt4" type="text" class="form-control"></th>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt4_1" value="1" name="bt4_1" type="checkbox">
                                                            <label for="bt4_1"></label>
                                            </div></td>
                            <th><p>PACKED CELL</p></th>
            </tr>
            <tr>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt5" value="1" type="checkbox">
                                                            <label for="bt5"></label>
                                            </div></td>
                            <th><p>HSBAg</p></th>
                            <th><input id="bt5" name="bt5" type="text" class="form-control"></th>
                            <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="bt5_1" name="bt5_1" value="1" type="checkbox">
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
                                                            <input id="mb5" name="mb5" value="1" type="checkbox">
                                                            <label for="mb5"></label>
                                            </div></td>
    <td><p>VDR/KHAN TEST</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb6" value="1" type="checkbox">
                                                            <label for="mb6"></label>
                                            </div></td>
    <td><p>PREGNANCY TEST</p></td>
    <td><input name="mb6" id="mb6" type="text"></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb7" name="mb7" value="1" type="checkbox">
                                                            <label for="mb7"></label>
                                            </div></td>
    <td><p>RHEUMATOID FACTOR</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb8" value="1" type="checkbox">
                                                            <label for="mb8"></label>
                                            </div></td>
    <td><p>RETROVIAL SCREENING</p></td>
    <td><input name="mb8" id="mb8" type="text"></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb9" name="mb9" value="1" type="checkbox">
                                                            <label for="mb9"></label>
                                            </div></td>
    <td><p>AUSTRALIAN ANTEGEN</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb10" value="1" type="checkbox">
                                                            <label for="mb10"></label>
                                            </div></td>
    <td><p>STOOL EXAMINATION</p></td>
    <td><input id="mb10" name="mb10" type="text"></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb11" name="mb11" value="1" type="checkbox">
                                                            <label for="mb11"></label>
                                            </div></td>
    <td><p>A.S.O TITRE</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb12" value="1" type="checkbox">
                                                            <label for="mb12"></label>
                                            </div></td>
    <td><p>OCCULT BLOOD TEST</p></td>
    <td><input name="mb12" id="mb12" type="text"></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb13" name="mb13" value="1" type="checkbox">
                                                            <label for="mb13"></label>
                                            </div></td>
    <td><p>RH TITRE</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb14" value="1" type="checkbox">
                                                            <label for="mb14"></label>
                                            </div></td>
    <td><p>FUNGAL EXAMINATION</p></td>
    <td><input name="mb14" id="mb14" type="text"></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb15" name="mb15" value="1" type="checkbox">
                                                            <label for="mb15"></label>
                                            </div></td>
    <td><p>MANTOUX TEST</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb16" value="1" type="checkbox">
                                                            <label for="mb16"></label>
                                            </div></td>
    <td><p>SPUTUM TEST (AFB)</p></td>
    <td><input name="mb16" id="mb16" type="text"></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb17" name="mb17" value="1" type="checkbox">
                                                            <label for="mb17"></label>
                                            </div></td>
    <td><p>BLOOD CULTURE</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb18" value="1" type="checkbox">
                                                            <label for="mb18"></label>
                                            </div></td>
    <td><p>SEMEN ANALYSIS</p></td>
    <td><input name="mb18" id="mb18" type="text"></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb19" name="mb19" value="1" type="checkbox">
                                                            <label for="mb19"></label>
                                            </div></td>
    <td><p>BLOOD MICROFILARIA</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb20" value="1" type="checkbox">
                                                            <label for="mb20"></label>
                                            </div></td>
    <td><p>FOOD HANDLERS TEST</p></td>
    <td><input name="mb20" id="mb20" type="text"></td>
</tr>
<input type="hidden" name="redirect" id="redirect" value="<?php echo $_GET['p'];?>">
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb21" name="mb21" value="1" type="checkbox">
                                                            <label for="mb21"></label>
                                            </div></td>
    <td><p>SKIN SNIP</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb22" value="1" type="checkbox">
                                                            <label for="mb22"></label>
                                            </div></td>
    <td><p>WATER ANALYSIS</p></td>
    <td><input name="mb22" id="mb22" type="text"></td>
</tr>
<tr>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb23" value="1" name="mb23" type="checkbox">
                                                            <label for="mb23"></label>
                                            </div></td>
    <td><p>URINE ANALYSIS</p></td>
    <td class="v-align-middle"><div class="checkbox check-default">
                                                            <input id="mb24" value="1" type="checkbox">
                                                            <label for="mb24"></label>
                                            </div>
    </td>
    <td><p>G.6 PD</p></td>
    <td><input name="mb24" id="mb24" type="text"></td>
</tr>
</tbody>

</table>
<button type="submit" id="submit" class="btn btn-primary">Add Report</button>
</form>
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
</html>