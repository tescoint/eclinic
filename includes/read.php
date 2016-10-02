<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//The First Condition Below checks if there's a patient already searched and selected if not it redirects to search page to conduct a search

if(!empty($_GET['p'])){
$patient = $_GET['p'];
$pquery = "SELECT * FROM users where card_number = '$patient'";
$prun_query = mysqli_query($dbc, $pquery);
if($prun_query){
    $pdata = mysqli_fetch_assoc($prun_query);
    $pid = $pdata['id'];
    $username = $pdata['username'];
    $pname = "$pdata[surname] $pdata[first_name] $pdata[middle_name]";
    $paddress = $pdata['home_address'];
    $pcard_number = $pdata['card_number'];
    $pnextkin = $pdata['guardian'];
    $pnextkinadd = $pdata['guardian_address'];
    $pphone = $pdata['phoneno'];
    $pnextkinphone = $pdata['guardian_phoneno'];
    $relationship_status = $pdata['relationship_status'];
    if($relationship_status == 0){
        $prelation = 'Single';
    }elseif($relationship_status == 1){
        $prelation = 'Married';
    }elseif ($relationship_status == 2) {
        $prelation = 'Divorced';    
        }
    $programme = $pdata['programme'];
    if($programme == 1){
        $pprogramme = 'Degree';
    }elseif ($programme == 2) {
        $pprogramme = 'Direct Entry';    
        }elseif ($programme == 3) {
         $pprogramme = 'Part Time';   
        }elseif ($programme == 4) {
            $pprogramme = 'Post Graduate';
        }
    $year = "SELECT YEAR('$pdata[dob]')";
    $year = mysqli_query($dbc, $year);
    $year = mysqli_fetch_array($year);
    $year = $year[0];
    $age = 2015 - $year;
    $sex = $pdata['gender'];
    if($sex == 1){
        $psex = "Male";
    }elseif ($sex == 2) {
        $psex = "Female";
    }
}
// Basically Now Am Going to be needing the patient detail everywhere on all the pages in this project so I kinda made it a global scope
//And that ends up there below now will be a condition to know which query to pull upon page load using a pagename set on each pages

///////////////////////////////////////////////START OF ADD LABREPORT UPDATE NOTATION/////////////////////////////////////////////////////////////
                                                                                                                                              //
                if($pagename == 'alrun'){                                                                                                    //
                //Okay We gonna be needing to pull record from the lab request form                                                         //
                $lrfquery = "SELECT * FROM labform where stid = $pid and notation_id = $_GET[notation_id] ORDER BY id DESC";                                                    //
                $lrfrun_query = mysqli_query($dbc,$lrfquery);                                                                             //
                if($lrfrun_query){                                                                                                       //
                    $lrfdata = mysqli_fetch_assoc($lrfrun_query);                                                                       //
                    $lrfdoc_id = $lrfdata['doc_id'];                                                                                    //
                    $lrfnotation_id = $lrfdata['notation_id'];                                                                           //
                    $lrfsample = $lrfdata['sample'];                                                                                     //
                    $lrfinvestigation = $lrfdata['investigation'];                                                                      //
                    $date = $lrfdata['edate'];                                                                                          //
                    $lrfid = $lrfdata['id'];                                                                                            //
                    // So Now I have assembled details from lab request form table now lets proceed in using those details              //
                }                                                                                                                     //
                //Lets Try to query the db for um doctors detail                                                                     //
                $dquery = "SELECT * FROM users where id = $lrfdoc_id";                                                               //
                $drun_query = mysqli_query($dbc, $dquery);                                                                           //
                if($drun_query){                                                                                                      //
                    $ddata = mysqli_fetch_assoc($drun_query);                                                                           //
                    $doc_name = "Dr. $ddata[surname] $ddata[first_name] $ddata[middle_name]";                                             //
                }                                                                                                                            //
                                                                                                                                          //
                                                                                                                                              //
                                                                                                                                              //
                                                                                                                                              //
///////////////////////////////////////////END OF ADDLABORATORY UPDATE NOTATION PAGE ///////////////////////////////////////////////////////////
                            }elseif($pagename == 'alt'){    
////////////////////////////////////////////Start of Add Lab Test Tester//////////////////////////////////////////////////////////////////////////          
                             $lt1 = $pdata['lt1'];                                                                                           ////
                             $lt2 = $pdata['lt2'];                                                                                           ////
                             $lt3 = $pdata['lt3'];                                                                                          ////
                             $lt4 = $pdata['lt4'];                                                                                          ///
                             $lt5 = $pdata['lt5'];                                                                                       /////
                             $lt6 = $pdata['lt6'];                                                                                      //////                                     
///////////////////////////////////////END OF ADD LAB TEST TESTER////////////////////////////////////////////////////////////////////////////
                            }elseif($pagename == 'addn'){
//////////////////////////////////////START OF ADDNOTATION/////////////////////////////////////////////////////////////////////////////////////                                
                           
                                
                                
                                
                            }elseif($pagename == 'editp'){
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                
                                
                                
                            }elseif($pagename == 'profile'){
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                $status = $pdata['status'];                                                                 
                                $surname = $pdata['surname'];
                                $first_name = $pdata['first_name'];
                                $middle_name = $pdata['middle_name'];
                                $c_name = $pdata['c_name'];
                                $c_address = $pdata['c_address'];
                                $c_phone = $pdata['c_phone'];
                                $dob = $pdata['dob'];
                                $gender = $pdata['gender'];
                                
                                
                                $home_address = $pdata['home_address'];
                                $guardian = $pdata['guardian'];
                                $guardian_relationship = $pdata['guardian_relationship'];
                                $guardian_address = $pdata['guardian_address'];
                                $phoneno = $pdata['phoneno'];
                                $guardian_phoneno = $pdata['guardian_phoneno'];
                                $mh_1 = $pdata['mh_1'];
                                $mh_2 = $pdata['mh_2'];
                                $mh_3 = $pdata['mh_3'];
                                $mh_4 = $pdata['mh_4'];
                                $mh_5 = $pdata['mh_5'];
                                $mh_6 = $pdata['mh_6'];
                                $mh_7 = $pdata['mh_7'];
                                $mh_8 = $pdata['mh_8'];
                                $mh_9 = $pdata['mh_9'];
                                $mh_10 = $pdata['mh_10'];
                                $mh_11 = $pdata['mh_11'];
                                $mh_12 = $pdata['mh_12'];
                                $mh_13 = $pdata['mh_13'];
                                $mh_14 = $pdata['mh_14'];
                                $mh_15 = $pdata['mh_15'];
                                $sh_1 = $pdata['sh_1'];
                                $sh_2 = $pdata['sh_2'];
                                $sh_3 = $pdata['sh_3'];
                                $sh_4 = $pdata['sh_4'];
                                $dh_1 = $pdata['dh_1'];
                                $dh_2 = $pdata['dh_2'];
                                $ih_1 = $pdata['ih_1'];
                                $ih_2 = $pdata['ih_2'];
                                $ih_3 = $pdata['ih_3'];
                                $ih_4 = $pdata['ih_4'];
                                $ih_5 = $pdata['ih_5'];
                                $ffs1 = $pdata['ffs1'];
                                $ffs2 = $pdata['ffs2'];
                                $bm1 = $pdata['bm1'];
                                $bm2 = $pdata['bm2'];
                                $tt1 = $pdata['tt1'];
                                $tt2 = $pdata['tt2'];
                                $tt3 = $pdata['tt3'];
                                $tt4 = $pdata['tt4'];
                                $tt5 = $pdata['tt5'];
                                $tt6 = $pdata['tt6'];
                                $tt7 = $pdata['tt7'];
                                $tt8 = $pdata['tt8'];
                                $tt9 = $pdata['tt9'];
                                $tt10 = $pdata['tt10'];
                                $tt11 = $pdata['tt11'];
                                $tt12 = $pdata['tt12'];
                                $tt13 = $pdata['tt13'];
                                $tt14 = $pdata['tt14'];
                                $tt15 = $pdata['tt15'];
                                $tt16 = $pdata['tt16'];
                                $lt1  = $pdata['lt1'];
                                $lt2  = $pdata['lt2'];
                                $lt3  = $pdata['lt3'];
                                $lt4  = $pdata['lt4'];
                                $lt5  = $pdata['lt5'];
                                $lt6  = $pdata['lt6'];
                                $lt7  = $pdata['lt7'];
                                $lt8  = $pdata['lt8'];
///////////////////////////////////////////END OF PROFILE//////////////////////////////////////////////////////////////////////////////////////                                
                            }elseif($pagename == "vn"){
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                
                          $query = "SELECT * FROM notation where stid = $pid and id = $_GET[id] ORDER BY id DESC ";
                          $run_query = mysqli_query($dbc, $query);
                          $vndata = mysqli_fetch_assoc($run_query);
                          $vnotation = $vndata['notation'];
                          $vprescription = $vndata['prescription'];
                          $vlab = $vndata['lab_required'];
                          $vdate = $vndata['edate'];
                                
                                
 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                               
                            }elseif($pagename == "vl"){
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                           




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                            }elseif ($pagename == "prescription") {
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                
                                # code...

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                            }elseif($pagename == "editn"){
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                $query = "SELECT * FROM notation where id = $_GET[id]";
                                $run_query = mysqli_query($dbc,$query);
                                $edata = mysqli_fetch_assoc($run_query);



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                            } elseif ($pagename == "tester") {
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                
                             $tt1 = $pdata['tt1'];                                                                                           ////
                             $tt2 = $pdata['tt2'];                                                                                           ////
                             $tt3 = $pdata['tt3'];                                                                                          ////
                             $tt4 = $pdata['tt4'];                                                                                          ///
                             $tt5 = $pdata['tt5'];                                                                                       /////
                             $tt6 = $pdata['tt6']; 
                             $tt7 = $pdata['tt7']; 
                             $tt8 = $pdata['tt8']; 
                             $tt9 = $pdata['tt9']; 
                             $tt10 = $pdata['tt10']; 
                             $tt11 = $pdata['tt11']; 
                             $tt12 = $pdata['tt12']; 
                             $tt13 = $pdata['tt13'];      

          



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


                            }elseif($pagename == "alr"){
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                     if(empty($_GET['id'])){
                        header("location:viewlab.php?p=$_GET[p]");
                     }      
                             //Okay We gonna be needing to pull record from the lab request form                                                         //
                $lrfquery = "SELECT * FROM labreport where stid = $pid and id = $_GET[id] ORDER BY id DESC";                                                    //
                $lrfrun_query = mysqli_query($dbc,$lrfquery);                                                                             //
                if($lrfrun_query){                                                                                                       //
                    $lrfdata = mysqli_fetch_assoc($lrfrun_query);                                                                       //
                    $lrfdoc_id = $lrfdata['doc_id'];                                                                                    //
                    $lrfnotation_id = $lrfdata['notation_id'];                                                                           //                                                                            //
                    $lrfid = $lrfdata['id'];                                                                                            //
                    // So Now I have assembled details from lab request form table now lets proceed in using those details              //
                }else{
                    header("location:viewlab.php?p=$_GET[p]");
                }                                                                                                                     //
                //Lets Try to query the db for um doctors detail                                                                     //
                $dquery = "SELECT * FROM users where id = $lrfdoc_id";                                                               //
                $drun_query = mysqli_query($dbc, $dquery);                                                                           //
                if($drun_query){                                                                                                      //
                    $ddata = mysqli_fetch_assoc($drun_query);                                                                           //
                    $doc_name = "Dr. $ddata[surname] $ddata[first_name] $ddata[middle_name]";                                             //
                }    
                //Trying To GET LAB FORM DATAS
                $lfquery = "SELECT * FROM labform where notation_id = $lrfnotation_id ORDER BY id DESC";
                $lfrun_query = mysqli_query($dbc,$lfquery);
                $lfdata = mysqli_fetch_assoc($lfrun_query);
                $lfsample = $lfdata['sample'];
                $lfedate = $lfdata['edate'];
                $lfinvestigation = $lfdata['investigation'];

                $h1 = $lrfdata['h1'];
                $h2 = $lrfdata['h2'];
                $h3 = $lrfdata['h3'];
                $h4 = $lrfdata['h4'];
                $h5 = $lrfdata['h5'];
                $h6 = $lrfdata['h6'];
                $h7 = $lrfdata['h7'];
                $h8 = $lrfdata['h8'];
                $h9 = $lrfdata['h9'];
                $h10 = $lrfdata['h10'];
                $h11 =  $lrfdata['h11'];
                $h12 = $lrfdata['h12'];
                $h13 = $lrfdata['h13'];
                $h14 = $lrfdata['h14'];
                $h15 = $lrfdata['h15'];
                $h16 = $lrfdata['h16'];
                $h17 = $lrfdata['h17'];
                $h18 = $lrfdata['h18'];
                $h19 = $lrfdata['h19'];
                $h20 = $lrfdata['h20'];
                $bt1 = $lrfdata['bt1'];
                $bt2 = $lrfdata['bt2'];
                $bt3 = $lrfdata['bt3'];
                $bt3_1 = $lrfdata['bt3_1'];
                $bt4 = $lrfdata['bt4'];
                $bt4_1 = $lrfdata['bt4_1'];
                $bt5 = $lrfdata['bt5'];
                $bt5_1 = $lrfdata['bt5_1'];
                $mb1_o = $lrfdata['mb1_o'];
                $mb1_h = $lrfdata['mb1_h'];
                $mb2_o = $lrfdata['mb2_o'];
                $mb2_h = $lrfdata['mb2_h'];
                $mb3_o = $lrfdata['mb3_o'];
                $mb3_h = $lrfdata['mb3_h'];
                $mb4_o = $lrfdata['mb4_o'];
                $mb4_h = $lrfdata['mb4_h'];
                $mbcomment = $lrfdata['mbcomment'];
                $mbparasite = $lrfdata['mbparasite'];
                $mb5 = $lrfdata['mb5'];
                $mb6 = $lrfdata['mb6'];
                $mb7 = $lrfdata['mb7'];
                $mb8 = $lrfdata['mb8'];
                $mb9 = $lrfdata['mb9'];
                $mb10 = $lrfdata['mb10'];
                $mb11 = $lrfdata['mb11'];
                $mb12 = $lrfdata['mb12'];
                $mb13 = $lrfdata['mb13'];
                $mb14 = $lrfdata['mb14'];
                $mb15 = $lrfdata['mb15'];
                $mb16 = $lrfdata['mb16'];
                $mb17 = $lrfdata['mb17'];
                $mb18 = $lrfdata['mb18'];
                $mb19 = $lrfdata['mb19'];
                $mb20 = $lrfdata['mb20'];
                $mb21 = $lrfdata['mb21'];
                $mb22 = $lrfdata['mb22'];
                $mb23 = $lrfdata['mb23'];
                $mb24 = $lrfdata['mb24'];                 








////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                                
                            }    
                                                                      
                                            
                                            
}elseif($pagename == 'clinicstat'){

        //Writing the code to grab total number of student in Database..
        $tnosquery = "SELECT * FROM users where username = '' and password = '' ";
        $tnosrun_query = mysqli_query($dbc,$tnosquery);
        $tnos = mysqli_num_rows($tnosrun_query);
        //Have Gotten the total number of student stored in a variable
        //Next Now Am trying to grab total number of student by year
        if(!empty($_POST['mode']) and !empty($_POST['year'])){
        if($_POST['mode'] == 'tnosby' and !empty($_POST['year'])){
            $year = mysqli_real_escape_string($dbc,$_POST['year']);
            $tnosbyquery = "SELECT * FROM users where edate = '$year'";
            $tnosbyrun_query = mysqli_query($dbc,$tnosbyquery);
            $tnosby = mysqli_num_rows($tnosbyrun_query);
            $_SESSION['tnosby'] = "$tnosby";
            $_SESSION['ytnosby'] = $year;
            echo "success";
        }
    }
        //Have written the query to grab number of student by year
        //Next is to grab total number of fully registered student
        $tnofrsquery = "SELECT * FROM users where mh_1 != '' and mh_3 != '' and tt1 !='' and lt1 != '' ";
        $tnofrsrun_query = mysqli_query($dbc,$tnofrsquery);
        $tnofrs = mysqli_num_rows($tnofrsrun_query);
        //That's done
        //Gonna Grab Total number of fully registered student by year
        if(!empty($_POST['mode'])){
            if($_POST['mode'] == 'tnofrsby' and !empty($_POST['year'])){
                $year = mysqli_real_escape_string($dbc,$_POST['year']);
                $tnofrsbyquery = "SELECT * FROM users where mh_1 != '' and mh_3 != '' and tt1 !='' and lt1 != '' and edate = '$year' ";
                $tnofrsbyrun_query = mysqli_query($dbc,$tnofrsbyquery);
                $tnofrsby = mysqli_num_rows($tnofrsbyrun_query);
                $_SESSION['tnofrsby'] = $tnofrsby;
                $_SESSION['ytnofrsby'] = $year;
                echo "success";
                echo $_SESSION['tnofrsby'];
            }
        }
        //Ok seems am done with total number of student, moving on to total number of student treated today and by day/by doctor
        $date = date("Y-m-d");
        $tnosttquery = "SELECT * FROM notation where edate = '$date' ";
        $tnosttrun_query = mysqli_query($dbc,$tnosttquery);
        $tnostt = mysqli_num_rows($tnosttrun_query);
        // Now I have That stored in a variable total number of student treated today
        //Now Let me get total number of student treated byday
         if(!empty($_POST['mode']) and !empty($_POST['day'])){
         if($_POST['mode'] == 'tnostbd' and !empty($_POST['day'])){
            $day = mysqli_real_escape_string($dbc, $_POST['day']);
            $tnostbdquery = "SELECT * FROM notation where edate = '$day' ";
            $tnostbdrun_query = mysqli_query($dbc, $tnostbdquery);
            $tnostbd = mysqli_num_rows($tnostbdrun_query);
            $_SESSION['tnostbd'] = $tnostbd;
            $_SESSION['ytnostbd'] = $day;
            echo "success";
         }
     }
         //Now I have the number stored in a variable
         // Next Lets get the total number of student treated by a doctor today
      if(!empty($_POST['mode'])){
         if($_POST['mode'] == 'tnosttbd' and !empty($_POST['doc'])){
            $doc = mysqli_real_escape_string($dbc,$_POST['doc']);
            $day = date("Y-m-d");
            $tnosttbdquery = "SELECT * FROM notation where edate = '$day' and doc_id = '$doc' ";
            $tnosttbdrun_query = mysqli_query($dbc,$tnosttbdquery);
            $tnosttbd = mysqli_num_rows($tnosttbdrun_query);
            $dquery = "SELECT * FROM users where id = $doc";
            $drun_query = mysqli_query($dbc,$dquery); 
            $ddata = mysqli_fetch_assoc($drun_query);
            $dname = "Dr. $ddata[surname] $ddata[first_name] $ddata[middle_name]";
            $_SESSION['dname'] = "$dname";
            $_SESSION['tnosttbd'] = $tnosttbd;
            echo "success";           
         }

         // Okay So Query is done now Lets move on
         //Now getting total number of student treated by doctor by day
         if($_POST['mode'] == 'tnosttbdbd' and !empty($_POST['day']) and !empty($_POST['doc'])){
            $doc = mysqli_real_escape_string($dbc,$_POST['doc']);
            $day = mysqli_real_escape_string($dbc, $_POST['day']);
            $tnosttbdbdquery = "SELECT * FROM notation where doc_id = '$doc' and edate = '$day' ";
            $tnosttbdbdrun_query = mysqli_query($dbc,$tnosttbdbdquery);
            $tnosttbdbd = mysqli_num_rows($tnosttbdbdrun_query);
            $dquery = "SELECT * FROM users where id = $doc";
            $drun_query = mysqli_query($dbc,$dquery); 
            $ddata = mysqli_fetch_assoc($drun_query);
            $ddname = "Dr. $ddata[surname] $ddata[first_name] $ddata[middle_name]";
            $_SESSION['ddname'] = "$ddname";
            $_SESSION['tnosttbdbd'] = $tnosttbdbd;
            $_SESSION['ytnosttbdbd'] = $day;
            echo "success";           
         }
     }
         //Thats Done. Moving On
         //Now I think we've gotten All the statistics we can get about a patients visit though we can still get more like student 
         //who visits the clinic alot and some other ones but I will leave that for another day hopefully If I get gingered to the right mood 

         //So now lets get the total number of medical personel we have
         $tnompquery = "SELECT * FROM users where username != '' and password !='' ";
         $tnomprun_query = mysqli_query($dbc,$tnompquery);
         $tnomp = mysqli_num_rows($tnomprun_query);
         //Now I have that let's now limit it to the number of doctors we have
         $tnodquery = "SELECT * FROM users where usertype = 2";
         $tnodrun_query = mysqli_query($dbc,$tnodquery);
         $tnod = mysqli_num_rows($tnodrun_query);
         //Now I have that let's now limit it to the number of labtech we have
         $tnolpquery = "SELECT * FROM users where usertype = 3";
         $tnolprun_query = mysqli_query($dbc,$tnolpquery);
         $tnolp = mysqli_num_rows($tnolprun_query);
         //Okay I have That Now Moving on
         //Okay Why dont we get number of users who have access to the platform
         $tnoaquery = "SELECT * FROM users where usertype != '' ";
         $tnoarun_query = mysqli_query($dbc,$tnoaquery);
         $tnoa = mysqli_num_rows($tnoarun_query);
         //Ok All Done With Medical Personel Statistics Lets Move On To LAB STATS

         //Firstly lets grab numberof lab test requested today 
         $tnoltrtquery = "SELECT * FROM labform where edate = '$date'";
         $tnoltrtrun_query = mysqli_query($dbc,$tnoltrtquery);
         $tnoltrt = mysqli_num_rows($tnoltrtrun_query);
         //Gotten Moving ON
         //Now Getting Labtest Requested by day
         if(!empty($_POST['mode'])){
         if($_POST['mode'] == 'tnoltrbd' and !empty($_POST['day'])){
            $day = mysqli_real_escape_string($dbc, $_POST['day']);
            $tnoltrbdquery = "SELECT * FROM labform where edate = '$day'";
            $tnoltrbdrun_query = mysqli_query($dbc,$tnoltrbdquery);
            $tnoltrbd = mysqli_num_rows($tnoltrbdrun_query);
            $_SESSION['tnoltrbd'] = $tnoltrbd;
            $_SESSION['ytnoltrbd'] = $day;
         }
     }
         //Now I have that lets proceed to lab report
         //Dealing With Lab Report Stats Now
         //Trying to get lab report done today
         $tnolrgtquery = "SELECT * FROM labreport where edate = '$date'";
         $tnolrgtrun_query = mysqli_query($dbc,$tnolrgtquery);
         $tnlrgt = mysqli_num_rows($tnolrgtrun_query);
         //Have Gotten That Trying TO get For Lab Report Generated by day
         if(!empty($_POST['mode'])){
         if($_POST['mode'] == 'tnolrgbd' and !empty($_POST['day'])){
            $day = mysqli_real_escape_string($dbc,$_POST['day']);
            $tnolrgbdquery = "SELECT * FROM labreport where edate = '$day'";
            $tnolrgbdrun_query = mysqli_query($dbc,$tnolrgbdquery);
            $tnolrgbd = mysqli_num_rows($tnolrgbdrun_query);
            $_SESSION['tnolrgbd'] = $tnolrgbd;
            $_SESSION['ytnolrgbd'] = $day;

         }
     }
         //Okay Now I have That Moving On To PHARMACY
         //Getting Total number of drugs prescribed today am kinda getting bored now
         $tnodptquery = "SELECT * FROM notation where prescription != '' and edate = '$date'";
         $tnodptrun_query = mysqli_query($dbc,$tnodptquery);
         $tnodpt = mysqli_num_rows($tnodptrun_query);
         //Thats done and finally for now cause have thought of adding upto 4 statistics more
         //Getting prescribed drug by day.
         if(!empty($_POST['mode'])){
         if($_POST['mode'] == 'tnodpbd' and !empty($_POST['day'])){
            $day = mysqli_real_escape_string($dbc, $_POST['day']);
            $tnodpbdquery = "SELECT * FROM notation where prescription != '' and edate = '$day'";
            $tnodpbdrun_query = mysqli_query($dbc,$tnodpbdquery);
            $tnodpbd = mysqli_num_rows($tnodpbdrun_query);
            $_SESSION['tnodpbd'] = $tnodpbd;
            $_SESSION['ytnodpbd'] = $day;
         }
     }
         // OKAY THATS ALL FOR NOW ABOUT 16 STATS THAT CAN BE GENERATED NOW LETS CODE THE FRONT END
     //Trying To PERFORM Some MAdemathics
     //Wanna get the percentage of people the medical personell can treat amongst all patience
    $averagecantreat = ceil($tnos / $tnomp);
    //Calculation Of STudent Treated PEr DAy
    $tpd = ($tnostt / $tnomp) * 100;
    //Calculation For Total Number Of Registered Student
    $trsp = ($tnofrs / $tnos)*100;
    //Calculation for total number of access to software
    $tap = ($tnoa / $tnomp)*100;
    //Calculation For Percentage of Lab Request OF student Treated
    if($tnoltrt != 0){
    $ltrp = ($tnoltrt / $tnostt)*100;
    }else{
        $ltrp = 0;
    }
    if($tnlrgt != 0){
        $lfgp = ($tnoltrt / $tnlrgt)*100;
    }else{
        $lfgp = 0;
    }
    //Calculation For Percentage Of Drugs PRESCRIBED
    if($tnodpt !=0){
    $dp = ($tnodpt / $tnostt)*100;
    }else{
        $dp = 0;
    }
}
else{
    header("location:index.php");
}
