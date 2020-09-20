<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:login.php');
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>ISTE Students Panel</title>


    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="../images/iste.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="css/feather.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome-n.min.css">

    <link rel="stylesheet" href="css/chartist.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/widget.css">
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="index.php">
                             <h3> ISTE TKMCE </h3>
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!"
                                    onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                                    class="waves-effect waves-light" data-cf-modified-d2d1d6e2f87cbebdf4013b26-="">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav-right">
                            <li class="header-notification">
                            <?php 
      $sql = "SELECT * FROM `notification`";
      $query = $dbh -> prepare($sql);
      $cnt=0;
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      if($query->rowCount() > 0)
      {
      foreach($results as $result)
      {	$cnt++;}}?>
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-red"><?php echo htmlentities("$cnt");?> </span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <?php
      if($query->rowCount() > 0)
      {
      foreach($results as $result)
      {	?>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="jpg/avatar-4.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user"><?php echo htmlentities("$result->name");?> </h5>
                                                    <p class="notification-msg"><?php echo htmlentities("$result->description");?></p>
                                                    <span class="notification-time"><?php echo htmlentities("$result->date");?></span>
                                                </div>
                                            </div>
                                        </li>
      <?php }} ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green"></span>
                                    </div>
                                </div>
                            </li>
                            <?php 
      $name=$_SESSION['alogin'];
      $sql = "SELECT * FROM `user` WHERE name=:name";
      $query = $dbh -> prepare($sql);
      $query-> bindParam(':name', $name, PDO::PARAM_STR);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      if($query->rowCount() > 0)
      {
      foreach($results as $result)
      {	?>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="jpg/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span><?php echo htmlentities("$result->username");?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="../index.php">
                                                <i class="feather icon-home"></i> Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login.php">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <?php }} ?>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-search-box">
                                <a class="back_friendlist">
                                    <i class="feather icon-x"></i>
                                </a>
                                <div class="right-icon-control">
                                    <div class="input-group input-group-button">
                                        <input type="text" id="search-friends" name="footer-email" class="form-control"
                                            placeholder="Search Admin">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                                    class="feather icon-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="main-friend-list">
                                <div class="media userlist-box waves-effect waves-light" data-id="1"
                                    data-status="online" data-username="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="jpg/avatar-3.jpg"
                                            alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="2"
                                    data-status="online" data-username="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="jpg/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="3"
                                    data-status="online" data-username="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="jpg/avatar-4.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="4"
                                    data-status="offline" data-username="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="jpg/avatar-3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min
                                                ago</small></div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="5"
                                    data-status="offline" data-username="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="jpg/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min
                                                ago</small></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">Navigation</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu  pcoded-trigger">
                                        <a href="index.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Newsletter</span>
                                            <span class="pcoded-badge label label-warning">NEW</span>
                                        </a>

                                        <ul class="pcoded-submenu">
                                            <li class=" pcoded-hasmenu">
                                            <li class="">
                                                <a href="view.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">View Sample</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="submit.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Submit</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Article</span>
                                            <span class="pcoded-badge label label-warning">NEW</span>
                                        </a>

                                        <ul class="pcoded-submenu">
                                            <li class=" pcoded-hasmenu">
                                            <li class="">
                                                <a href="article.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">View Sample</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="article_sub.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Submit</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="project.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="feather icon-edit"></i>
                                            </span>
                                            <span class="pcoded-mtext">Project Development</span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="server.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="feather icon-layers"></i>
                                            </span>
                                            <span class="pcoded-mtext">Server access</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                            <div class="pcoded-content">

                                <div class="page-header card">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <i class="feather icon-box bg-c-blue"></i>
                                                <div class="d-inline">
                                                    <h5>Previous</h5>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class=" breadcrumb breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index.php"><i class="feather icon-home"></i></a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Articles</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#!">View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pcoded-inner-content">
                                    <div class="main-body">
                                        <div class="page-wrapper">

                                            <div class="page-body">
                                                <div class="row">
                                                    <div class="col-sm-12">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Old Articles</h5>
                                                            </div>
                                                            <div class="row card-block">
                                                                <div class="col-md-12">
                                                                    <ul class="list-view">
                                                                        <li>
                                                                        <?php 
      $sql = "SELECT * FROM `article`";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      if($query->rowCount() > 0)
      {
      foreach($results as $result)
      {	?>
                                                                            <div class="card list-view-media">
                                                                                <div class="card-block">
                                                                                    <div class="media">
                                                                                        <a class="media-left" href="#">
                                                                                            <img style="height:100px; width:100px;" class="media-object card-list-img"
                                                                                                src="../images/iste.png"
                                                                                                alt="Generic placeholder image">
                                                                                        </a>
                                                                                        <div class="media-body">
                                                                                            <div class="col-xs-12">
                                                                                                <h6
                                                                                                    class="d-inline-block">
                                                                                                    <?php echo htmlentities("$result->heading");?></h6>
                                                                                                <label
                                                                                                    class="label label-info"> <?php echo htmlentities("$result->year");?></label>
                                                                                            </div>
                                                                                            
                                                                                            <div class="m-t-15">
                                                                                                <button type="button"
                                                                                                    data-toggle="tooltip"
                                                                                                    title="View"
                                                                                                    class="btn btn-facebook btn-mini waves-effect waves-light">
                                                                                                    <a href=" <?php echo htmlentities("$result->link");?>"><span
                                                                                                        class="icofont icofont-eye">View
                                                                                                        now</span></a>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
      <?php }} ?>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="82da7caf0879d455f12fe258-text/javascript" src="js/jquery.min.js"></script>
                            <script type="82da7caf0879d455f12fe258-text/javascript" src="js/jquery-ui.min.js"></script>
                            <script type="82da7caf0879d455f12fe258-text/javascript" src="js/popper.min.js"></script>
                            <script type="82da7caf0879d455f12fe258-text/javascript" src="js/bootstrap.min.js"></script>

                            <script src="js/waves.min.js" type="82da7caf0879d455f12fe258-text/javascript"></script>

                            <script type="82da7caf0879d455f12fe258-text/javascript"
                                src="js/jquery.slimscroll.js"></script>

                            <script type="82da7caf0879d455f12fe258-text/javascript" src="js/modernizr.js"></script>
                            <script type="82da7caf0879d455f12fe258-text/javascript" src="js/css-scrollbars.js"></script>

                            <script src="js/stroll.js" type="82da7caf0879d455f12fe258-text/javascript"></script>
                            <script type="82da7caf0879d455f12fe258-text/javascript" src="js/list-custom.js"></script>

                            <script src="js/pcoded.min.js" type="82da7caf0879d455f12fe258-text/javascript"></script>
                            <script src="js/vertical-layout.min.js"
                                type="82da7caf0879d455f12fe258-text/javascript"></script>
                            <script src="js/jquery.mcustomscrollbar.concat.min.js"
                                type="82da7caf0879d455f12fe258-text/javascript"></script>
                            <script type="82da7caf0879d455f12fe258-text/javascript" src="js/script.js"></script>

                            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
                                type="82da7caf0879d455f12fe258-text/javascript"></script>
                            <script type="82da7caf0879d455f12fe258-text/javascript">
                                  window.dataLayer = window.dataLayer || [];
                                  function gtag(){dataLayer.push(arguments);}
                                  gtag('js', new Date());
                                
                                  gtag('config', 'UA-23581568-13');
                                </script>
                            <script src="js/rocket-loader.min.js" data-cf-settings="82da7caf0879d455f12fe258-|49"
                                defer=""></script>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:53 GMT -->

</html>
      <?php } ?>