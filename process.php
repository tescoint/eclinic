<?php
ob_start();
//Starting the session because am gonna be using it for verification somewhere below
//in some of the functiins
session_start();
require ('includes/db.php');
$mode = $_POST['mode'];
//Wanna Get The id of student stored in a variable and also that of the doctor
if(!empty($_SESSION['doc'])){
    $docuser = $_SESSION['doc'];
    $query = "SELECT * FROM users where username = '$docuser' ";
    $run_query = mysqli_query($dbc, $query);
    $docdata = mysqli_fetch_assoc($run_query);
    $doc_id = $docdata['id'];
}
if(!empty($_POST['card_number'])){
    $card_number = $_POST['card_number'];
    $cquery = "SELECT * FROM users where card_number = '$card_number'";
    $crun_query = mysqli_query($dbc, $cquery);
    $carddata = mysqli_fetch_assoc($crun_query);
    $stid = $carddata['id'];
}
if(!empty($_SESSION['labtech'])){
    $labtech = $_SESSION['labtech'];
    $query = "SELECT * FROM users where username = '$labtech' ";
    $run_query = mysqli_query($dbc, $query);
    $labdata = mysqli_fetch_assoc($run_query);
    $labtech_id = $labdata['id'];
}
//Since this file is probably gonna handle all the php create/update function of the
//project, then we gonna need a way to knowwhich script to use which is why am using
//the mode to distinguish which function to use/call so well let's start
if($mode == 'notation' and !empty($_SESSION['doc'])){
    AddNotation($doc_id,$stid,$dbc);
}elseif($mode == 'alun' and !empty ($_SESSION['doc'])){
    AddUpdateLabForm($stid,$doc_id,$dbc);
    
}elseif($mode == 'alrun' and !empty ($_SESSION['labtech']) ){
    AddLabReportUpdateNotation($dbc);
    
}elseif($mode == 'userpermission' and !empty ($_SESSION['director'])){
    UserRoleType($dbc);
    
}elseif($mode == 'statusupdate' and !empty ($_SESSION['recordoff'])){
    UpdateStatus($dbc);
}elseif($mode == 'recordupdate' and !empty($_SESSION['recordoff'])){
    UpdateRecord($stid, $dbc);
}elseif($mode == 'tester' and !empty ($_SESSION['tester'])){
    UpdateTester($stid, $dbc);
}elseif($mode == 'labreg' and !empty($_SESSION['labtech'])){
    UpdateLabReg($stid, $dbc, $labtech_id);
}elseif($mode == 'login'){
    LoginCheck($dbc);
    
}elseif($mode == 'drugupdate' and !empty ($_SESSION['pharma'])){
    DrugCollected($dbc);
}elseif($mode == 'search' ){
    SearhHandler($dbc);    
}elseif($mode == 'editnotation' and !empty($_SESSION['doc'])){
    EditNotation($dbc);
}
// This function adds a new notation into the database
function AddNotation($doc_id,$stid,$dbc){
    if(!empty($_POST['lab_required'])){
    $lab_required = mysqli_real_escape_string($dbc, $_POST['lab_required']);
    }else{
        $lab_required = "";
    }
    $prescription = mysqli_real_escape_string($dbc, $_POST['prescription']);
    $notation = mysqli_real_escape_string($dbc, $_POST['notation']);
    $date = date("Y-d-m");
    $query = "INSERT INTO notation (doc_id,stid,lab_required,prescription,notation,edate) VALUES ('$doc_id','$stid','$lab_required','$prescription','$notation','$date')";
    $run_query = mysqli_query($dbc, $query);
    if($run_query){
        if(!empty($lab_required)){
            echo 'lab';
        }else{
            echo "success";
        }
    }else{
        echo "failed";
    }
    
}
function AddUpdateLabForm($stid,$doc_id,$dbc){
    //Wanna get the notation id now by querying the notationtable and selecting the last item there
    $nquery = "SELECT * FROM notation where stid = $stid ORDER BY id DESC";
    $nrun_query = mysqli_query($dbc, $nquery);
    $ndata = mysqli_fetch_assoc($nrun_query);
    $notation_id = $ndata['id'];
    $investigation = mysqli_real_escape_string($dbc, $_POST['investigation']);
    $sample = mysqli_real_escape_string($dbc,$_POST['sample']);
    $date = date("Y-m-d");
    $query = "INSERT INTO labform (stid,doc_id,notation_id,investigation,sample,edate) VALUES ('$stid','$doc_id','$notation_id','$investigation','$sample','$date')";
    $run_query = mysqli_query($dbc, $query);
    if($run_query){
        //Now Am trying to update notation table with this lab form id
    $lfquery = "SELECT * FROM labform where notation_id = $notation_id";
    $lfrun_query = mysqli_query($dbc, $lfquery);
    $lfdata = mysqli_fetch_assoc($lfrun_query);
    $lfid = $lfdata['id'];
    // So now updating the table
    if(!empty($lfid)){
        $unquery = "UPDATE notation set lab_req_id = $lfid where id = $notation_id";
        $unrun_query = mysqli_query($dbc, $unquery);
        if($run_query){
            echo "success";
        }else{
            echo "failed";
        }
    }else{
        echo "failed";
    }
    }else{
        echo "failed";
    }
}
function AddLabReportUpdateNotation($dbc){
    //Wanna Create The report for a labtest and then update notation with the id of this report
    $stid = $_POST['stid'];
    $doc_id = $_POST['doc_id'];
    $lab_req_id = $_POST['lab_req_id'];
    $notation_id = $_POST['notation_id'];
    $date = date("Y-m-d");
    $h1 = mysqli_real_escape_string($dbc, $_POST['h1']);
    $h2 = mysqli_real_escape_string($dbc, $_POST['h2']);
    $h3 = mysqli_real_escape_string($dbc, $_POST['h3']);
    $h4 = mysqli_real_escape_string($dbc, $_POST['h4']);
    $h5 = mysqli_real_escape_string($dbc, $_POST['h5']);
    $h6 = mysqli_real_escape_string($dbc, $_POST['h6']);
    $h7 = mysqli_real_escape_string($dbc, $_POST['h7']);
    $h8 = mysqli_real_escape_string($dbc, $_POST['h8']);
    $h9 = mysqli_real_escape_string($dbc, $_POST['h9']);
    $h10 = mysqli_real_escape_string($dbc, $_POST['h10']);
    $h11 = mysqli_real_escape_string($dbc, $_POST['h11']);
    $h12 = mysqli_real_escape_string($dbc, $_POST['h12']);
    $h13 = mysqli_real_escape_string($dbc, $_POST['h13']);
    $h14 = mysqli_real_escape_string($dbc, $_POST['h14']);
    $h15 = mysqli_real_escape_string($dbc, $_POST['h15']);
    $h16 = mysqli_real_escape_string($dbc, $_POST['h16']);
    $h17 = mysqli_real_escape_string($dbc, $_POST['h17']);
    $h18 = mysqli_real_escape_string($dbc, $_POST['h18']);
    $h19 = mysqli_real_escape_string($dbc, $_POST['h19']);
    $h20 = mysqli_real_escape_string($dbc, $_POST['h20']);
    $bt1 = mysqli_real_escape_string($dbc, $_POST['bt1']);
    $bt2 = mysqli_real_escape_string($dbc, $_POST['bt2']);
    $bt3 = mysqli_real_escape_string($dbc, $_POST['bt3']);
    if(!empty($_POST['bt3_1'])){
     $bt3_1 = mysqli_real_escape_string($dbc, $_POST['bt3_1']);   
     }else{
        $bt3_1 = '';
     }    
    $bt4 = mysqli_real_escape_string($dbc, $_POST['bt4']);
    if(!empty($_POST['bt4_1'])){
     $bt4_1 = mysqli_real_escape_string($dbc, $_POST['bt4_1']);   
     }else{
        $bt4_1 = '';
     }
    $bt5 = mysqli_real_escape_string($dbc, $_POST['bt5']);
    if(!empty($_POST['bt5_1'])){
     $bt5_1 = mysqli_real_escape_string($dbc, $_POST['bt5_1']);   
     }else{
        $bt5_1 = '';
     }
    $mb1_o = mysqli_real_escape_string($dbc, $_POST['mb1_o']);
    $mb1_h = mysqli_real_escape_string($dbc, $_POST['mb1_h']);
    $mb2_o = mysqli_real_escape_string($dbc, $_POST['mb2_o']);
    $mb2_h = mysqli_real_escape_string($dbc, $_POST['mb2_h']);
    $mb3_o = mysqli_real_escape_string($dbc, $_POST['mb3_o']);
    $mb3_h = mysqli_real_escape_string($dbc, $_POST['mb3_h']);
    $mb4_o = mysqli_real_escape_string($dbc, $_POST['mb4_o']);
    $mb4_h = mysqli_real_escape_string($dbc, $_POST['mb4_h']);
    $mbcomment = mysqli_real_escape_string($dbc, $_POST['mbcomment']);
    $mbparasite = mysqli_real_escape_string($dbc, $_POST['mbparasite']);
    if(!empty($_POST['mb5'])){
     $mb5 = mysqli_real_escape_string($dbc, $_POST['mb5']);   
     }else{
        $mb5 = '';
     }
    $mb6 = mysqli_real_escape_string($dbc, $_POST['mb6']);
    if(!empty($_POST['mb7'])){
     $mb7 = mysqli_real_escape_string($dbc, $_POST['mb7']);   
     }else{
        $mb7 = '';
     }
    $mb8 = mysqli_real_escape_string($dbc, $_POST['mb8']);
    if(!empty($_POST['mb9'])){
     $mb9 = mysqli_real_escape_string($dbc, $_POST['mb9']);   
     }else{
        $mb9 = '';
     }
    $mb10 = mysqli_real_escape_string($dbc, $_POST['mb10']);
    if(!empty($_POST['mb11'])){
     $mb11 = mysqli_real_escape_string($dbc, $_POST['mb11']);   
     }else{
        $mb11 = '';
     }
    $mb12 = mysqli_real_escape_string($dbc, $_POST['mb12']);
    if(!empty($_POST['mb13'])){
     $mb13 = mysqli_real_escape_string($dbc, $_POST['mb13']);   
     }else{
        $mb13 = '';
     }
    $mb14 = mysqli_real_escape_string($dbc, $_POST['mb14']);
    if(!empty($_POST['mb15'])){
     $mb15 = mysqli_real_escape_string($dbc, $_POST['mb15']);   
     }else{
        $mb15 = '';
     }
    $mb16 = mysqli_real_escape_string($dbc, $_POST['mb16']);
    if(!empty($_POST['mb17'])){
     $mb17 = mysqli_real_escape_string($dbc, $_POST['mb17']);   
     }else{
        $mb17 = '';
     }
    $mb18 = mysqli_real_escape_string($dbc, $_POST['mb18']);
    if(!empty($_POST['mb19'])){
     $mb19 = mysqli_real_escape_string($dbc, $_POST['mb19']);   
     }else{
        $mb19 = '';
     }
    $mb20 = mysqli_real_escape_string($dbc, $_POST['mb20']);
    if(!empty($_POST['mb21'])){
     $mb21 = mysqli_real_escape_string($dbc, $_POST['mb21']);   
     }else{
        $mb21 = '';
     }
    $mb22 = mysqli_real_escape_string($dbc, $_POST['mb22']);
    if(!empty($_POST['mb23'])){
     $mb23 = mysqli_real_escape_string($dbc, $_POST['mb23']);   
     }else{
        $mb23 = '';
     }
    $mb24 = mysqli_real_escape_string($dbc, $_POST['mb24']);
    $query = "INSERT INTO labreport (edate,stid,doc_id,lab_req_id,notation_id,h1,h2,h3,h4,h5,h6,h7,h8,h9,h10,h11,h12,h13,h14,h15,h16,h17,h18,h19,h20,bt1,bt2,bt3,bt3_1,bt4,bt4_1,bt5,bt5_1,mb1_o,mb1_h,mb2_o,mb2_h,mb3_o,mb3_h,mb4_o,mb4_h,mbcomment,mbparasite,mb5,mb6,mb7,mb8,mb9,mb10,mb11,mb12,mb13,mb14,mb15,mb16,mb17,mb18,mb19,mb20,mb21,mb22,mb23,mb24) VALUES ('$date','$stid','$doc_id','$lab_req_id','$notation_id','$h1','$h2','$h3','$h4','$h5','$h6','$h7','$h8','$h9','$h10','$h11','$h12','$h13','$h14','$h15','$h16','$h17','$h18','$h19','$h20','$bt1','$bt2','$bt3','$bt3_1','$bt4','$bt4_1','$bt5','$bt5_1','$mb1_o','$mb1_h','$mb2_o','$mb2_h','$mb3_o','$mb3_h','$mb4_o','$mb4_h','$mbcomment','$mbparasite', '$mb5' ,'$mb6','$mb7','$mb8','$mb9','$mb10','$mb11','$mb12','$mb13','$mb14','$mb15','$mb16','$mb17','$mb18','$mb19','$mb20','$mb21','$mb22','$mb23','$mb24')";
    $run_query = mysqli_query($dbc, $query);
    if($run_query){
        $lrquery = "SELECT * FROM labreport where notation_id = $notation_id";
        $lrrun_query = mysqli_query($dbc, $lrquery);
        $lrdata = mysqli_fetch_assoc($lrrun_query);
        $lrid = $lrdata['id'];
        if(!empty($lrid)){
        $unquery = "UPDATE notation set lab_report_id = $lrid where id = $notation_id";
            $unrun_query = mysqli_query($dbc, $unquery);
            if($unrun_query){
                echo "success";
            }else{
                echo "failed";
            }
        }else{
        echo "failed";
    }
    }else{
        echo "failed ";
    }
    
}
//Function TO Give MedicalStaff Their Role
function UserRoleType($dbc){
    // I wanna give the clinic director ability to give staff their role, maybe labtech,matron,or others sha
    $usertype = mysqli_real_escape_string($dbc, $_POST['usertype']);
    $username = mysqli_real_escape_string($dbc, $_POST['username']);
    $query = "UPDATE users set usertype = $usertype where username = '$username'";
    $run_query = mysqli_query($dbc, $query);
    if($run_query){
        echo "success";
    }  else {
        echo "failed";
    }
}
//Function To Change Patient Status
function UpdateStatus($dbc){
    $status = mysqli_real_escape_string($dbc, $_POST['status']);
    $card_number = mysqli_real_escape_string($dbc, $_POST['card_number']);
    $query = "UPDATE users set status = $status where card_number = '$card_number'";
    $run_query = mysqli_query($dbc, $query);
    if($run_query){
        echo "success";
    }  else {
        echo "failed";
    }
}
//Function to Update User Details By RecordOfficer
function   UpdateRecord($stid,$dbc){
    $surname = mysqli_real_escape_string($dbc, $_POST['surname']);
    $first_name = mysqli_real_escape_string($dbc, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($dbc, $_POST['middle_name']);
    $c_name = mysqli_real_escape_string($dbc, $_POST['c_name']);
    $c_address = mysqli_real_escape_string($dbc, $_POST['c_address']);
    $c_phone = mysqli_real_escape_string($dbc, $_POST['c_phone']);
    $dob = mysqli_real_escape_string($dbc, $_POST['dob']);
   // $gender = mysqli_real_escape_string($dbc, $_POST['gender']);
    $relationship_status = mysqli_real_escape_string($dbc, $_POST['relationship_status']);
    $home_address = mysqli_real_escape_string($dbc, $_POST['home_address']);
    $guardian = mysqli_real_escape_string($dbc, $_POST['guardian']);
    $guardian_relationship = mysqli_real_escape_string($dbc, $_POST['guardian_relationship']);
    $guardian_address = mysqli_real_escape_string($dbc, $_POST['guardian_address']);
    $phoneno = mysqli_real_escape_string($dbc, $_POST['phoneno']);
    $guardian_phoneno = mysqli_real_escape_string($dbc, $_POST['guardian_phoneno']);
    $query = "UPDATE users set surname = '$surname', first_name = '$first_name', middle_name = '$middle_name', c_name = '$c_name', c_address = '$c_address', c_phone = '$c_phone', dob = '$dob', relationship_status = '$relationship_status', home_address = '$home_address', guardian = '$guardian', guardian_relationship = '$guardian_relationship', guardian_address = '$guardian_address', phoneno = '$phoneno',  guardian_phoneno = '$guardian_phoneno' where id = $stid ";
    $run_query = mysqli_query($dbc, $query);
    if($run_query){
        echo "success";
    }else{
        echo "failed";
    }
}
//Function To Update Student Details By TesTers During Registration
function UpdateTester($stid,$dbc){
    $bm1 = mysqli_real_escape_string($dbc, $_POST['bm1']);
    $bm2 = mysqli_real_escape_string($dbc, $_POST['bm2']);
    $tt1 = mysqli_real_escape_string($dbc, $_POST['tt1']);
    $tt2 = mysqli_real_escape_string($dbc, $_POST['tt2']);
    $tt3 = mysqli_real_escape_string($dbc, $_POST['tt3']);
    $tt4 = mysqli_real_escape_string($dbc, $_POST['tt4']);
    $tt5 = mysqli_real_escape_string($dbc, $_POST['tt5']);
    $tt6 = mysqli_real_escape_string($dbc, $_POST['tt6']);
    $tt7 = mysqli_real_escape_string($dbc, $_POST['tt7']);
    $tt8 = mysqli_real_escape_string($dbc, $_POST['tt8']);
    $tt9 = mysqli_real_escape_string($dbc, $_POST['tt9']);
    $tt10 = mysqli_real_escape_string($dbc, $_POST['tt10']);
    $tt11 = mysqli_real_escape_string($dbc, $_POST['tt11']);
    $tt12 = mysqli_real_escape_string($dbc, $_POST['tt12']);
    $tt13 = mysqli_real_escape_string($dbc, $_POST['tt13']);
    $tt14 = mysqli_real_escape_string($dbc, $_POST['tt14']);
    $tt15 = mysqli_real_escape_string($dbc, $_POST['tt15']);
    $tt16 = mysqli_real_escape_string($dbc, $_POST['tt16']);
    $query = "UPDATE users set bm1 = '$bm1', bm2 = '$bm2', tt1 = '$tt1', tt2 = '$tt2', tt3 = '$tt3', tt4 = '$tt4', tt5 = '$tt5', tt6 = '$tt6', tt7 = '$tt7', tt8 = '$tt8', tt9 = '$tt9', tt10 = '$tt10', tt11 = '$tt11', tt12 = '$tt12', tt13 = '$tt13', tt14 = '$tt14', tt15 = '$tt15', tt16 = '$tt16' where id = $stid";
    $run_query = mysqli_query($dbc, $query);
    if($run_query){
        echo "success";
    }else{
        echo "failed";
    }
    
}
//Function To Update Students Details By LabTEchs For LabReg
function UpdateLabReg($stid,$dbc,$labtech_id){
    $lt1 = mysqli_real_escape_string($dbc, $_POST['lt1']);
    $lt2 = mysqli_real_escape_string($dbc, $_POST['lt2']);
    $lt3 = mysqli_real_escape_string($dbc, $_POST['lt3']);
    $lt4 = mysqli_real_escape_string($dbc, $_POST['lt4']);
    $lt5 = mysqli_real_escape_string($dbc, $_POST['lt5']);
    $lt6 = mysqli_real_escape_string($dbc, $_POST['lt6']);
    $lt7 = $labtech_id;
    $lt8 = date("Y-m-d");
    $query = "UPDATE users set lt1 = '$lt1',lt2 = '$lt2',lt3 = '$lt3',lt4 = '$lt4',lt5 = '$lt5',lt6 = '$lt6',lt7 = '$lt7',lt8 = '$lt8' where id = $stid";
    $run_query = mysqli_query($dbc, $query);
    if($run_query){
        echo "success";
    }else{
        echo "failed";
    }
}
//Function Processing Login Form
function LoginCheck($dbc){
    $username = mysqli_real_escape_string($dbc,$_POST['username']);
    $password = mysqli_real_escape_string($dbc,$_POST['password']);
    $password = md5($password);
    $query = "SELECT * FROM users where username = '$username' and password = '$password' and status = 0 ";
    $run_query = mysqli_query($dbc, $query);
    $count = mysqli_num_rows($run_query);
    if($count == 1){
        $sdata = mysqli_fetch_assoc($run_query);
       $usertype = $sdata['usertype'];
       if($usertype == 0){
           $_SESSION['director'] = $username;
           echo "success";
       }elseif($usertype == 1){
           $_SESSION['recordoff'] = $username;
           echo "success";
       }elseif($usertype == 2){
           $_SESSION['doc'] = $username;
           echo "success";
       }elseif($usertype == 3){
           $_SESSION['labtech'] = $username;
           echo "success";
       }elseif($usertype == 4){
           $_SESSION['matron'] = $username;
           echo "success";
       }elseif($usertype == 5){
           $_SESSION['tester'] = $username;
           echo "success";
       }elseif($usertype == 6){
           $_SESSION['pharma'] = $username;
           echo "success";
       }else{
           echo "failed";
       }
    }  else {
        echo "failed";
    }
}
    //Function That Allows Pharma People To mark A drug/drugs as collected
function DrugCollected($dbc){
    $collected = mysqli_real_escape_string($dbc, $_POST['collected']);
    $notation_id = mysqli_real_escape_string($dbc, $_POST['notation_id']);
    $query = "UPDATE notation set collected = '$collected' where id = $notation_id";
    $run_query = mysqli_query($dbc, $query);
    if($run_query){
        echo "success";
    }else{
        echo "failed";
    }
}
// Function To Handle Search Request
function SearhHandler($dbc){
    $searchquery = mysqli_real_escape_string($dbc,$_POST['searchquery']);
    $query = "SELECT * FROM users where surname like '%$searchquery%' OR card_number like '%$searchquery%' OR first_name like '%$searchquery%'";
    $run_query = mysqli_query($dbc, $query);
    $count = mysqli_num_rows($run_query);
    if($count >= 1){
        $searchdata = array();
        while ($sdata = mysqli_fetch_assoc($run_query)) {
            $searchdata[] =($sdata);
        }
        echo json_encode($searchdata);
        
    }  else {
        echo "failed";
    }
}

//Function To Edit Notation
function EditNotation($dbc){
    $prescription = $_POST['prescription'];
    $id = $_POST['id'];
    $notation = $_POST['notation'];
    $query = "UPDATE notation set prescription = '$prescription', notation = '$notation'where id = $id";
    $run_query = mysqli_query($dbc, $query);
    if($run_query){
        echo "success";
    }else{
        echo "failed";
    }
}
?>