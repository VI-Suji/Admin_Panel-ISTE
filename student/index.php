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
<link rel="icon" href="admin/images/GEARFINAL.png" type="image/icon type">
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

    <link rel="icon" href="../../images/iste.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="css/feather.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome-n.min.css">

    <link rel="stylesheet" href="css/chartist.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/test.css">
    <link rel="stylesheet" type="text/css" href="css/widget.css">
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

        <?php include('top.php');?>



                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Dashboard</h5>
                                            <span>Welcome to the ISTE students dashboard</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
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
                    <div class="container d-flex justify-content-center">
        <div class="tcard p-3 py-4">
            <div class="text-center"> <img src="../images/iste.png" width="100" class="rounded-circle">
                <h3 class="mt-4"><?php echo htmlentities("$result->name");?></h3> <span class="mt-1 clearfix"></span> 
                <h5 style="font-weight: bold;" class="mt-10"><?php echo htmlentities("$result->branch");?>,<?php echo htmlentities("$result->batch");?></h5>
                <h5  style="font-weight: bold;" class="mt-10">#<?php echo htmlentities("$result->id");?></h5>
                <div class="social-buttons mt-5"> 
                    <button style="color:black;" class="tneo-button">I</button> 
                    <button style="color:black;" class="tneo-button">S</button> 
                    <button style="color:black;" class="tneo-button">T</button>
                    <button style="color:black;" class="tneo-button">E</button></div>
            </div>
        </div>
    </div>
      <?php }} ?>

      <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-plus bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>GUIDELINES</h5>
                                            <span>About the contents</span>
                                        </div>
                                    </div>
                                </div>
      </div>
      </div>
      </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="content" class="content content-full-width">

                    <!-- begin profile-content -->
                    <div class="profile-content">
                        <!-- begin tab-content -->
                        <div class="tab-content p-0">
                            <!-- begin #profile-post tab -->
                            <div class="tab-pane fade active show" id="profile-post">
                                <!-- begin timeline -->
                                <ul class="timeline">
                                    <li>
                                        <!-- begin timeline-time -->
                                        <!-- <div class="timeline-time">
                                            <span class="date">today</span>
                                            <span class="time">04:20</span>
                                        </div> -->
                                        <!-- end timeline-time -->
                                        <!-- begin timeline-icon -->
                                        <div class="timeline-icon">
                                            <a href="javascript:;">&nbsp;</a>
                                        </div>
                                        <!-- end timeline-icon -->
                                        <!-- begin timeline-body -->
                                        <div class="timeline-body">
                                            <div class="timeline-header">
                                                <span class="userimage"><img src="https://img.icons8.com/plasticine/200/000000/add-open-envelope.png"/></span>
                                                <span class="username"><a href="javascript:;">NEWSLETTER </a>
                                                    <small></small></span>

                                            </div>
                                            <div class="timeline-content">
                                                <p>
                                                    Subscribe to our newsletter containing a list of our most
                                                    interesting content, announcements, and promotions.
                                                </p>
                                                <p>
                                                    You can access
                                                    exclusive links for short checklists to original articles and posts
                                                    where you can study the subject in detail!
                                                </p>
                                            </div>
                                            <!-- end timeline-body -->


                                    </li>

                                    <li>
                                        <!-- begin timeline-time -->
                                        <!-- <div class="timeline-time">
                                            <span class="date">today</span>
                                            <span class="time">04:20</span>
                                        </div> -->
                                        <!-- end timeline-time -->
                                        <!-- begin timeline-icon -->
                                        <div class="timeline-icon">
                                            <a href="javascript:;">&nbsp;</a>
                                        </div>
                                        <!-- end timeline-icon -->
                                        <!-- begin timeline-body -->
                                        <div class="timeline-body">
                                            <div class="timeline-header">
                                                <span class="userimage"><img src="https://img.icons8.com/nolan/256/file.png"/></span>
                                                <span class="username"><a href="javascript:;">ARTICLE </a>
                                                    <small></small></span>

                                            </div>
                                            <div class="timeline-content">
                                                <p>
                                                    ISTE solicits paper and articles of original, principled research
                                                    papers dealing with theoretical, methodological, empirical and
                                                    application-related aspects of technical education
                                                </p>
                                                <p>
                                                    All papers must be submitted electronically to ISTE along with an
                                                    undertaking for the originality, IPR and copyright issues.
                                                </p>
                                                <p>
                                                    The full details of the author and their home institution (if any)
                                                    should be given for correspondence. For any further clarifications
                                                    regarding the submission of the papers kindly contact us at....
                                                </p>
                                            </div>
                                            <!-- end timeline-body -->


                                    </li>

                                    <li>
                                        <!-- begin timeline-time -->
                                        <!-- <div class="timeline-time">
                                            <span class="date">today</span>
                                            <span class="time">04:20</span>
                                        </div> -->
                                        <!-- end timeline-time -->
                                        <!-- begin timeline-icon -->
                                        <div class="timeline-icon">
                                            <a href="javascript:;">&nbsp;</a>
                                        </div>
                                        <!-- end timeline-icon -->
                                        <!-- begin timeline-body -->
                                        <div class="timeline-body">
                                            <div class="timeline-header">
                                                <span class="userimage"><img src="https://img.icons8.com/ios/250/000000/light-on.png"/></span>
                                                <span class="username"><a href="javascript:;">PROJECT DEVELOPMENT </a>
                                                    <small></small></span>

                                            </div>
                                            <div class="timeline-content">
                                                <p>
                                                    Students of who are doing project work
                                                    involving product development, fabrication, design, model studies,
                                                    innovative
                                                    developments, etc. may submit one copy of their Project through this
                                                    portal.
                                                </p>
                                                <p>
                                                    The Project should be the authentic work of a single student or a
                                                    group of students working together on the same project.
                                                </p>
                                            </div>
                                            <!-- end timeline-body -->


                                    </li>

                                    <li>
                                        <!-- begin timeline-time -->
                                        <!-- <div class="timeline-time">
                                            <span class="date">today</span>
                                            <span class="time">04:20</span>
                                        </div> -->
                                        <!-- end timeline-time -->
                                        <!-- begin timeline-icon -->
                                        <div class="timeline-icon">
                                            <a href="javascript:;">&nbsp;</a>
                                        </div>
                                        <!-- end timeline-icon -->
                                        <!-- begin timeline-body -->
                                        <div class="timeline-body">
                                            <div class="timeline-header">
                                                <span class="userimage"><img src="https://img.icons8.com/ios-filled/250/000000/ftp-server.png"/></span>
                                                <span class="username"><a href="javascript:;">SERVER ACCESS </a>
                                                    <small></small></span>

                                            </div>
                                            <div class="timeline-content">
                                                <p>
                                                    Server access allows users to access and manage the actual system
                                                    interfaces and files.
                                                </p>
                                                <p>
                                                    Users can also connect to the network to troubleshoot issues,
                                                    install/uninstall/configure a software, among many more others.
                                                    Apply here with the required information to obtain server access.
                                                </p>
                                            </div>
                                            <!-- end timeline-body -->


                                    </li>

                                </ul>
                                <!-- end timeline -->
                            </div>
                            <!-- end #profile-post tab -->
                        </div>
                        <!-- end tab-content -->
                    </div>
                    <!-- end profile-content -->
                </div>
            </div>
        </div>
    </div>


                        <script data-cfasync="false" src="js/email-decode.min.js"></script>
                        <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/jquery.min.js"></script>
                        <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/jquery-ui.min.js"></script>
                        <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/popper.min.js"></script>
                        <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/bootstrap.min.js"></script>

                        <script src="js/waves.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

                        <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/jquery.slimscroll.js"></script>

                        <script src="js/jquery.flot.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
                        <script src="js/jquery.flot.categories.js"
                            type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
                        <script src="js/curvedlines.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
                        <script src="js/jquery.flot.tooltip.min.js"
                            type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

                        <script src="js/chartist.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

                        <script src="js/amcharts.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
                        <script src="js/serial.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
                        <script src="js/light.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

                        <script src="js/pcoded.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
                        <script src="js/vertical-layout.min.js"
                            type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
                        <script type="d2d1d6e2f87cbebdf4013b26-text/javascript"
                            src="js/custom-dashboard.min.js"></script>
                        <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="js/script.min.js"></script>

                        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
                            type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
                        <script type="d2d1d6e2f87cbebdf4013b26-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
                        <script src="js/rocket-loader.min.js" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49"
                            defer=""></script>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->
<script id="TelegramLiveChatLoader" data-bot="CEB14C86-FC1E-11EA-ADFB-952423E822B5" src="//livechatbot.net/assets/chat/js/loader.js"></script>

</html>
<?php }?>