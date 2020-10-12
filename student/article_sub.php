<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:login.php');
}
else{
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
<?php } ?>