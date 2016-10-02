<?php
ob_start();
session_start();
if(!empty($_SESSION['labtech']) || !empty($_SESSION['director']) || !empty($_SESSION['doc']) || !empty($_SESSION['matron']) || !empty($_SESSION['pharma']) || !empty($_SESSION['tester']) || !empty($_SESSION['recordoff'])){
    header("location:index.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Login - E-Clinic</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="TechHuB" name="author" />
<?php require('includes/header.php'); ?>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top">
<div class="container">
  <div class="row login-container ">  
        <!-- <div class="col-md-5 col-md-offset-1">
        <br><br>
          <img src="assets/img/eclinic.png" width="300px">
        </div> -->
        <div class="col-md-5 log"> <br>
		 <form id="login" class="login" name="login">
		 <div class="row">
     <img src="assets/img/eclinic.png" width="400px">
		 <div class="form-group col-md-10">
            <label class="form-label">Username</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
                    <input type="text" name="username" id="username" class="form-control" required="">                                 
				</div>
            </div>
          </div>
          </div>
		  <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Password</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
                    <input type="password" name="password" id="password" class="form-control" required="">                                 
				</div>
            </div>
          </div>
          </div>
		  <div class="row">
          </div>
          <div class="row">
            <div class="col-md-10">
              <button class="btn btn-primary btn-cons pull-right" type="submit">Login</button>
            </div>
          </div>
		  </form>
        </div>
     
    
  </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<?php require('includes/footer.php'); ?>

<!-- END CORE TEMPLATE JS -->
</body>
</html>
