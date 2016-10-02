<!-- BEGIN MENU -->
<div class="page-sidebar" id="main-menu">
<div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper"> 
<!-- BEGIN MINI-PROFILE -->
<div class="user-info-wrapper">
<div class="profile-wrapper"> <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" /> </div>
<div class="user-info">
<div class="greeting">Welcome</div>
<div class="username"><?php echo $sname;?></div>
<div class="status">Status<a href="#">
<div class="status-icon green"></div>
Online</a></div>
</div>
</div>
<!-- END MINI-PROFILE --> 
<!-- BEGIN SIDEBAR MENU -->
<p class="menu-title">BROWSE<span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
<ul>
<!-- BEGIN SELECTED LINK -->
<li <?php if($pagename=='index'){echo " class='start active'"; }?> > <a href="index.php"> <i class="icon-custom-home"></i> <span class="title">Search</span> </a> </li>
<!-- END SELECTED LINK --> 
<!-- BEGIN SINGLE LINK -->
<?php if(!empty($_SESSION['doc']) || !empty($_SESSION['director'])){?>
<li <?php if($pagename=='clnicstat'){echo " class='start active'"; }?> > <a href="clinicstat.php"> <i class="fa fa-bar-chart"></i> <span class="title">Clinic Statistics</span> </a> </li>
<?php }?>
<?php if(!empty($_GET['p']) and !empty($_SESSION['director']) || !empty($_SESSION['recordoff']) || !empty($_SESSION['matron']) || !empty($_SESSION['doc'])){?>
<li <?php if($pagename=='profile'){echo " class='start active'"; }?> > <a href="profile.php?p=<?php echo $_GET['p'];?>"> <i class="fa fa-user"></i> <span class="title">View Profile For Patient</span> </a> </li>
<li <?php if($pagename=='prescription'){echo " class='start active'"; }?> > <a href="viewprescription.php?p=<?php echo $_GET['p'];?>"> <i class="fa fa-coffee"></i> <span class="title">View Prescription History For Patient</span> </a> </li>
<li <?php if($pagename=='vl'){echo " class='start active'"; }?> > <a href="viewlab.php?p=<?php echo $_GET['p'];?>"> <i class="fa fa-flask"></i> <span class="title">View Lab Request History For Patient</span> </a> </li>
<li <?php if($pagename=='vnn'){echo " class='start active'"; }?> > <a href="viewnotation.php?p=<?php echo $_GET['p'];?>"> <i class="fa fa-pencil"></i> <span class="title">View Notation History For Patient</span> </a> </li>
<?php }?>
<?php if(!empty($_GET['p']) and !empty($_SESSION['labtech'])){?>
<li <?php if($pagename=='vl'){echo " class='start active'"; }?> > <a href="viewlab.php?p=<?php echo $_GET['p'];?>"> <i class="fa fa-flask"></i> <span class="title">View Lab Request History For Patient</span> </a> </li>
<li <?php if($pagename=='alt'){echo " class='start active'"; }?> > <a href="addlabtest.php?p=<?php echo $_GET['p'];?>"> <i class="fa fa-plus"></i> <span class="title">Add First Lab Test For Patient</span> </a> </li>
<?php }?>
<?php if(!empty($_GET['p']) and !empty($_SESSION['tester'])){?>
<li <?php if($pagename=='tester'){echo " class='start active'"; }?> > <a href="tester.php?p=<?php echo $_GET['p'];?>"> <i class="fa fa-plus"></i> <span class="title">Add First Tests Result For Patient</span> </a> </li>
<?php }?>
<?php if(!empty($_GET['p']) and !empty($_SESSION['pharma'])){?>
<li <?php if($pagename=='prescription'){echo " class='start active'"; }?> > <a href="viewprescription.php?p=<?php echo $_GET['p'];?>"> <i class="fa fa-coffee"></i> <span class="title">View Prescription History For Patient</span> </a> </li>
<?php }?>

<!-- END SINGLE LINK --> 
</ul>
<!-- END SIDEBAR MENU --> 
</div>
</div>
<!-- BEGIN SCROLL UP HOVER --> 
<a href="#" class="scrollup">Scroll</a> 
<!-- END SCROLL UP HOVER --> 
<!-- END MENU --> 
<!-- BEGIN SIDEBAR FOOTER WIDGET -->
<div class="footer-widget">
<div class="progress transparent progress-small no-radius no-margin">
<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar"></div>
</div>
<div class="pull-right">
<div class="details-status"> <span data-animation-duration="560" data-value="86" class="animate-number"></span>% </div>
<a href="logout.php"><i class="fa fa-power-off"></i></a> </div>
</div>
<!-- END SIDEBAR FOOTER WIDGET --> 