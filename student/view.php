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

        <?php include('top.php');?>
                            <div class="pcoded-content">

                                <div class="page-header card">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <i class="feather icon-box bg-c-blue"></i>
                                                <div class="d-inline">
                                                    <h5>NewsLetter</h5>
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
                                                    <li class="breadcrumb-item"><a href="#!">Newsletter</a>
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
                                                                <h5>Coming Soon...</h5>
                                                            </div>
                                                            <div class="row card-block">
                                                                <div class="col-md-12">
                                                                    
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