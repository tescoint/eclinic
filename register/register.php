<?php
/* 
 * This php script was witten by Tes Sal, Php Web DevelopEr TecHhuB
 * The script is for processing a very long form *winks
 * Copyright TecHhuB
 */

ob_start();
//Basically Am Including the database file here (below)
require ('../includes/db.php');
    // So Am collecting all the info sent from the form and the filtering them for unwanted elements or input using php function
    $surname = mysqli_real_escape_string($dbc,$_POST['surname']);
    $first_name = mysqli_real_escape_string($dbc,$_POST['first_name']);
    $middle_name = mysqli_real_escape_string($dbc,$_POST['middle_name']);
    $c_name = mysqli_real_escape_string($dbc,$_POST['c_name']);
    $c_address = mysqli_real_escape_string($dbc,$_POST['c_address']);
    $c_phone = mysqli_real_escape_string($dbc,$_POST['c_phone']);
    $dob = mysqli_real_escape_string($dbc,$_POST['dob']);
    $gender = mysqli_real_escape_string($dbc,$_POST['gender']);
    $relationship_status = mysqli_real_escape_string($dbc,$_POST['relationship_status']);
    $programme = mysqli_real_escape_string($dbc,$_POST['programme']);
    $home_address = mysqli_real_escape_string($dbc,$_POST['home_address']);
    $guardian = mysqli_real_escape_string($dbc,$_POST['guardian']);
    $guardian_relationship = mysqli_real_escape_string($dbc,$_POST['guardian_relationship']);
    $guardian_address = mysqli_real_escape_string($dbc,$_POST['guardian_address']);
    $phoneno = mysqli_real_escape_string($dbc,$_POST['phoneno']);
    $guardian_phoneno = mysqli_real_escape_string($dbc,$_POST['guardian_phoneno']);
    $mh_1 = mysqli_real_escape_string($dbc,$_POST['mh_1']);
    $mh_2 = mysqli_real_escape_string($dbc,$_POST['mh_2']);
    $mh_3 = mysqli_real_escape_string($dbc,$_POST['mh_3']);
    if(isset($_POST['mh_4'])){
    $mh_4 = mysqli_real_escape_string($dbc,$_POST['mh_4']);
  }else{
    $mh_4 = '';
  }
    $mh_5 = mysqli_real_escape_string($dbc,$_POST['mh_5']);
    $mh_6 = mysqli_real_escape_string($dbc,$_POST['mh_6']);
    $mh_7 = mysqli_real_escape_string($dbc,$_POST['mh_7']);
    $mh_8 = mysqli_real_escape_string($dbc,$_POST['mh_8']);
    $mh_9 = mysqli_real_escape_string($dbc, $_POST['mh_9']);
    $mh_10 = mysqli_real_escape_string($dbc, $_POST['mh_10']);
    $mh_11 = mysqli_real_escape_string($dbc, $_POST['mh_11']);
    $mh_12 = mysqli_real_escape_string($dbc, $_POST['mh_12']);
    if(isset($_POST['mh_13'])){
    $mh_13 = mysqli_real_escape_string($dbc, $_POST['mh_13']);
  }else{
    $mh_13 = '';
  }
    $mh_14 = mysqli_real_escape_string($dbc, $_POST['mh_14']);
    $mh_15 = mysqli_real_escape_string($dbc, $_POST['mh_15']);
    $sh_1 = mysqli_real_escape_string($dbc, $_POST['sh_1']);
    $sh_2 = mysqli_real_escape_string($dbc, $_POST['sh_2']);
    $sh_3 = mysqli_real_escape_string($dbc, $_POST['sh_3']);
    $sh_4 = mysqli_real_escape_string($dbc, $_POST['sh_4']);
    $dh_1 = mysqli_real_escape_string($dbc, $_POST['dh_1']);
    $dh_2 = mysqli_real_escape_string($dbc, $_POST['dh_2']);
    $ih_1 = mysqli_real_escape_string($dbc, $_POST['ih_1']);
    $ih_2 = mysqli_real_escape_string($dbc, $_POST['ih_2']);
    $ih_3 = mysqli_real_escape_string($dbc, $_POST['ih_3']);
    $ih_4 = mysqli_real_escape_string($dbc, $_POST['ih_4']);
    $ih_5 = mysqli_real_escape_string($dbc, $_POST['ih_5']);
    $ffs1 = mysqli_real_escape_string($dbc, $_POST['ffs1']);
    if(isset($_POST['ffs2'])){
    $ffs2 = mysqli_real_escape_string($dbc, $_POST['ffs2']);
  }else{
    $ffs2 = '';
  }
    $vquery = "SELECT * FROM users where surname = '$surname' and first_name = '$first_name' and middle_name = '$middle_name' and dob = '$dob' and home_address = 'home_address'";
    $vrun_query = mysqli_query($dbc, $vquery);
    $verify = mysqli_num_rows($vrun_query);
    $date = date("Y");
    $date2 = date("Y") + 1;
    $session = "$date/$date2";
    if($verify == 0){
    $query = "INSERT INTO users (edate,surname,first_name,middle_name,c_name,c_address,c_phone,dob,gender,relationship_status,programme,home_address,guardian,guardian_relationship,guardian_address,phoneno,guardian_phoneno,mh_1,mh_2,mh_3,mh_4,mh_5,mh_6,mh_7,mh_8,mh_9,mh_10,mh_11,mh_12,mh_13,mh_14,mh_15,sh_1,sh_2,sh_3,sh_4,dh_1,dh_2,ih_1,ih_2,ih_3,ih_4,ih_5,ffs1,ffs2) VALUES ('$session','$surname','$first_name','$middle_name','$c_name','$c_address','$c_phone','$dob','$gender','$relationship_status','$programme','$home_address','$guardian','$guardian_relationship','$guardian_address','$phoneno','$guardian_phoneno','$mh_1','$mh_2','$mh_3','$mh_4','$mh_5','$mh_6','$mh_7','$mh_8','$mh_9','$mh_10','$mh_11','$mh_12','$mh_13','$mh_14','$mh_15','$sh_1','$sh_2','$sh_3','$sh_4','$dh_1','$dh_2','$ih_1','$ih_2','$ih_3','$ih_4','$ih_5','$ffs1','$ffs2')";
      $run_query = mysqli_query($dbc, $query);
      //So basically after successfully adding the new patient to the database then I want to generate a card number for him
      //using some of the details he provided to us, so am getting his details back from the details using home_address as a search query
      if($run_query){
          $iquery = "SELECT * FROM users where home_address = '$home_address' ";
          $irun_query = mysqli_query($dbc, $iquery);
          $idata = mysqli_fetch_assoc($irun_query);
          $id = $idata['id']; 
          $programme = $idata['programme'];
          $year = date("Y");
          //So far have gotten most information needed to generate the card number remains the type of programme the user is admitted for
          if($programme == 1){
              $code = "D";
      }elseif($programme == 2){
              $code = "DE";
      }elseif($programme == 3){
              $code = "PT";
      }elseif($programme == 4){
              $code = "PG";
      }
      //No The information needed has been gotten successfully merging them together to give our patient a card number
         $card_number = "$code/"."$year/"."$id";
        // So briefly I wanna upload the image sent here
          if($_FILES["passport"]["size"] !== 0)
	{
	$ds = DIRECTORY_SEPARATOR; //1
	
	$storeFolder = 'passport'; //2
	$ext = pathinfo($_FILES['passport']['name'], PATHINFO_EXTENSION);
  $card_numberi = "$code"."$year"."$id";
	$name = $card_numberi.'.'.$ext;

	$query = "UPDATE users set passport = '$name' where id = '$id' ";
	$run_query = mysqli_query($dbc,$query);
	
	if (!empty($_FILES)) {
	
	$tempFile = $_FILES['passport']['tmp_name']; //3

	$targetPath = dirname('_FILE_') . $ds. $storeFolder . $ds; //4

	$targetFile = $targetPath. $name; //5

	move_uploaded_file($tempFile, $targetFile); //
		}
	}
        //Done
       $cquery = "UPDATE users set card_number = '$card_number' where id = $id ";
       $crun_query = mysqli_query($dbc, $cquery);
       if($crun_query){
           echo "success";
        session_start();
        $_SESSION['name'] = "$surname $first_name $middle_name";
        $_SESSION['card_number'] = $card_number;
        $_SESSION['dob'] = $dob;
        $_SESSION['phoneno'] = $phoneno;
        $_SESSION['session'] = $session;
        $_SESSION['pics'] = $name;
        header("location:card_details.php");
       }else{
           echo "failed";
       }
}else{
    echo 'failed '.mysqli_error($dbc);
}   
}else{
    echo 'duplicate';
}













?>
