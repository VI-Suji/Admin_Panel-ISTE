<?php
session_start();
include('../includes/config.php');
if(isset($_POST['login']))
{
	// echo "<script type='text/javascript'>alert('1 Updated Succesfully');</script>";

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$branch=$_POST['branch'];
$batch=$_POST['batch'];
$year=$_POST['year'];
$type=$_POST['type'];
$link=$_POST['upload'];

$sql ="INSERT INTO `user_article` (name, email, phone, branch, batch, year, type, link) VALUES(:name, :email, :phone, :branch, :batch, :year, :type, :link)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':name', $name, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':phone', $phone, PDO::PARAM_STR);
$query-> bindParam(':branch', $branch, PDO::PARAM_STR);
$query-> bindParam(':batch', $batch, PDO::PARAM_STR);
$query-> bindParam(':year', $year, PDO::PARAM_STR);
$query-> bindParam(':type', $type, PDO::PARAM_STR);
$query-> bindParam(':link', $link, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script type='text/javascript'>alert('Your entry has updated');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
else 
{
	echo "<script type='text/javascript'>alert('Something went wrong. Please fill and try again');</script>";
}

}
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

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

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
                                                    <h5 class="notification-user">
                                                        <?php echo htmlentities("$result->name");?> </h5>
                                                    <p class="notification-msg">
                                                        <?php echo htmlentities("$result->description");?></p>
                                                    <span
                                                        class="notification-time"><?php echo htmlentities("$result->date");?></span>
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
      $sql = "SELECT * FROM `admin`";
      $query = $dbh -> prepare($sql);
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
                                        <i class="feather icon-server bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Articles</h5>
                                            <span>Submit your entry now!</span>
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
                                                <a href="#!">Submit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form method="POST">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Details</h4>
                                            </div>
                                            <div class="card-block">

                                                <div class="m-b-10">
                                                    <h4 class="sub-title">Basic Details</h4>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-1 col-form-label">Name</label>
                                                        <div class="col-sm-8 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text">#</label>
                                                                </span>
                                                                <input type="text" name="name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <label class="col-sm-4 col-lg-1 col-form-label">Email</label>
                                                        <div class="col-sm-8 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text">#</label>
                                                                </span>
                                                                <input type="text" name="email" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-1 col-form-label">Phone</label>
                                                        <div class="col-sm-8 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text">#</label>
                                                                </span>
                                                                <input type="number" name="phone" class="form-control">
                                                            </div>
                                                        </div>
                                                        <label class="col-sm-4 col-lg-1 col-form-label">Branch</label>
                                                        <div class="col-sm-8 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text">#</label>
                                                                </span>
                                                                <input type="text" name="branch" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-1 col-form-label">Batch</label>
                                                        <div class="col-sm-8 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text">#</label>
                                                                </span>
                                                                <input type="text" name="batch" class="form-control">
                                                            </div>
                                                        </div>
                                                        <label class="col-sm-4 col-lg-1 col-form-label">Year</label>
                                                        <div class="col-sm-8 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text">#</label>
                                                                </span>
                                                                <input type="number" name="year" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <label class="col-sm-4 col-lg-1 col-form-label">Type</label>
                                                        <div class="col-sm-8 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text">#</label>
                                                                </span>
                                                                <select name="type" class="form-control">
                                                                    <option name="CS" value="CS">CS</option>
                                                                    <option name="EC" value="EC">EC</option>
                                                                    <option name="EEE" value="EEE">EEE</option>
                                                                    <option name="Others" value="Others">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    <label class="col-sm-1 col-form-label">Article</label>
                                                        <div class="col-sm-8 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text">#</label>
                                                                </span>
                                                                <input type="link" name="upload" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row m-t-30">
                                                            <div class="col-md-12">
                                                                <button name="login" type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">SUBMIT</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="styleSelector">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


        <script type="461d1add94eeb239155d648f-text/javascript" src="js/jquery.min.js"></script>
        <script type="461d1add94eeb239155d648f-text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="461d1add94eeb239155d648f-text/javascript" src="js/popper.min.js"></script>
        <script type="461d1add94eeb239155d648f-text/javascript" src="js/bootstrap.min.js"></script>

        <script type="461d1add94eeb239155d648f-text/javascript" src="js/jquery.slimscroll.js"></script>

        <script src="js/waves.min.js" type="461d1add94eeb239155d648f-text/javascript"></script>

        <script type="461d1add94eeb239155d648f-text/javascript" src="js/modernizr.js"></script>
        <script type="461d1add94eeb239155d648f-text/javascript" src="js/css-scrollbars.js"></script>

        <script src="js/pcoded.min.js" type="461d1add94eeb239155d648f-text/javascript"></script>
        <script src="js/vertical-layout.min.js" type="461d1add94eeb239155d648f-text/javascript"></script>
        <script src="js/jquery.mcustomscrollbar.concat.min.js" type="461d1add94eeb239155d648f-text/javascript"></script>
        <script type="461d1add94eeb239155d648f-text/javascript" src="js/script.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
            type="461d1add94eeb239155d648f-text/javascript"></script>
        <script type="461d1add94eeb239155d648f-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
        <script src="js/rocket-loader.min.js" data-cf-settings="461d1add94eeb239155d648f-|49" defer=""></script>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/form-elements-add-on.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:13 GMT -->

</html>