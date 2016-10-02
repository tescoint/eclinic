<?php

if(!empty($_SESSION['director'])){

}elseif(!empty($_SESSION['doc'])){
    $username = $_SESSION['doc'];
}elseif (!empty($_SESSION['recordoff'])) {
    $username = $_SESSION['recordoff'];
}elseif (!empty($_SESSION['matron'])) {
    $username = $_SESSION['matron'];
}elseif (!empty($_SESSION['labtech'])) {
    $username = $_SESSION['labtech'];
}elseif (!empty($_SESSION['pharma'])) {
    $username = $_SESSION['pharma'];
}elseif (!empty($_SESSION['tester'])) {
    $username = $_SESSION['tester'];
}
if(!empty($_SESSION['doc']) || !empty($_SESSION['director']) || !empty($_SESSION['matron']) || !empty($_SESSION['recordoff']) || !empty($_SESSION['tester']) || !empty($_SESSION['labtech']) || !empty($_SESSION['pharma'])){
$squery = "SELECT * FROM users where username = '$username'";
$srun_query = mysqli_query($dbc,$squery);
$sdata = mysqli_fetch_assoc($srun_query);
$scard_number = $sdata['card_number'];
if($sdata['usertype'] == 0){
    $sname = "Dr. $sdata[surname] $sdata[first_name] $sdata[middle_name]";
}elseif ($sdata['usertype'] == 2) {
   $sname = "Dr. $sdata[surname] $sdata[first_name] $sdata[middle_name]";
}else{
    $sname = "$sdata[surname] $sdata[first_name] $sdata[middle_name]";
}

}


?>
<div class="header navbar navbar-inverse"> 
<!-- BEGIN TOP NAVIGATION BAR -->
<div class="navbar-inner"> 
<!-- BEGIN NAVIGATION HEADER -->
<div class="header-seperation"> 
<!-- BEGIN MOBILE HEADER -->
<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
<li class="dropdown"> <a id="main-menu-toggle" href="#main-menu" class="">
<div class="iconset top-menu-toggle-white"></div>
</a> </li>
</ul>
<!-- END MOBILE HEADER --> 
<!-- BEGIN LOGO --> 
<a href="#"><center><h3 style="color:white;">TASUED E-CLINIC</h3></center> <!-- <img src="assets/img/logo.png" class="logo" alt="" data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" width="106" height="21"/> --> </a> 
<!-- END LOGO --> 
<!-- BEGIN LOGO NAV BUTTONS -->
<!-- <ul class="nav pull-right notifcation-center"> -->
<!-- <li class="dropdown" id="header_task_bar"> <a href="#" class="dropdown-toggle active" data-toggle="">
<div class="iconset top-home"></div>
</a> </li>
<li class="dropdown" id="header_inbox_bar"> <a href="#" class="dropdown-toggle">
<div class="iconset top-messages"></div>
<span class="badge" id="msgs-badge">2</span> </a> </li> -->
<!-- BEGIN MOBILE CHAT TOGGLER
<li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle">
<div class="iconset top-chat-white"></div>
</a> </li>
<!-- END MOBILE CHAT TOGGLER
<!-- </ul> --> 
<!-- END LOGO NAV BUTTONS --> 
</div>
<!-- END NAVIGATION HEADER --> 
<!-- BEGIN CONTENT HEADER -->
<div class="header-quick-nav"> 
<!-- BEGIN HEADER LEFT SIDE SECTION -->
<div class="pull-left"> 
<!-- BEGIN SLIM NAVIGATION TOGGLE -->
<ul class="nav quick-section">
<li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle">
<div class="iconset top-menu-toggle-dark"></div>
</a> </li>
</ul>
<!-- END SLIM NAVIGATION TOGGLE --> 
<!-- BEGIN HEADER QUICK LINKS -->
<ul class="nav quick-section">
<!-- li class="quicklinks"><a href="#" class="">
<div class="iconset top-reload"></div>
</a></li> -->
<!-- <li class="quicklinks"><span class="h-seperate"></span></li>
<li class="quicklinks"><a href="#" class="">
<div class="iconset top-tiles"></div>
</a></li> -->
<!-- BEGIN SEARCH BOX -->
<form name="searchpage" id="searchpage" action="searchpage.php" method="POST">
<li class="m-r-10 input-prepend inside search-form no-boarder"> <span class="add-on"><span class="iconset top-search"></span></span>
<input name="searchpage" type="text" class="no-boarder" placeholder="Search Patients" style="width:350px;">
</li>
</form>
<!-- END SEARCH BOX -->
</ul>
<!-- BEGIN HEADER QUICK LINKS --> 
</div>
<!-- END HEADER LEFT SIDE SECTION --> 
<!-- BEGIN HEADER RIGHT SIDE SECTION -->
<div class="pull-right">
<div class="chat-toggler"> 
<!-- BEGIN NOTIFICATION CENTER --> 
<?php
$nquery = "SELECT * FROM labreport where doc_id = $sdata[id] and checked = '' ORDER BY id DESC ";
$nrun_query = mysqli_query($dbc,$nquery);
$ncount = mysqli_num_rows($nrun_query);


?>

<a href="viewnotification.php" class="dropdown-toggle">
<div class="user-details">
<div class="username"> <?php if($ncount !=0 ){ ?> <span class="badge badge-important"><?php echo $ncount;?></span><?php }?>&nbsp; <?php echo $sname;?> </div>
</div>
<div class="iconset top-down-arrow"></div>
</a>
<!-- <div id="notification-list" style="display:none">
<div style="width:300px"> 
<!-- BEGIN NOTIFICATION MESSAGE -->
<!-- <div class="notification-messages info">
<div class="user-profile"> <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35"> </div>
<div class="message-wrapper">
<div class="heading">Title of Notification</div>
<div class="description">Description...</div>
<div class="date pull-left">A min ago</div>
</div>
<div class="clearfix"></div>
</div> -->
<!-- END NOTIFICATION MESSAGE --> 
<!-- </div>
</div> --> 
<!-- END NOTIFICATION CENTER --> 
<!-- BEGIN PROFILE PICTURE -->
<div class="profile-pic"> <img src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> </div>
<!-- END PROFILE PICTURE --> 
</div>
<!-- BEGIN HEADER NAV BUTTONS -->
<ul class="nav quick-section">
<!-- BEGIN SETTINGS -->
<li class="quicklinks"> <a data-toggle="dropdown" class="dropdown-toggle pull-right" href="#" id="user-options">
<div class="iconset top-settings-dark"></div>
</a>
<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="user-options">
<li><a href="profile.php?p=<?php echo $scard_number;?>">Profile</a></li>
<li class="divider"></li>
<li><a href="logout.php"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a></li>
</ul>
</li>
<!-- END SETTINGS -->
</ul>
<!-- END HEADER NAV BUTTONS --> 
</div>
<!-- END HEADER RIGHT SIDE SECTION --> 
</div>
<!-- END CONTENT HEADER --> 
</div>
<!-- END TOP NAVIGATION BAR --> 
</div>