<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	if(isset($_POST['upload'])){
	$link=$_POST['link'];
	echo "<script type='text/javascript'>alert('.$link.');</script>";
	$sql ="INSERT INTO `newsletter`(`link`) VALUES(:link)";
	$query= $dbh -> prepare($sql);
	$query-> bindParam(':link', $link, PDO::PARAM_STR);
	$query->execute();
	$lastInsertId = $dbh->lastInsertId();
	if($lastInsertId)
	{
	echo "<script type='text/javascript'>alert('Event Updated Succesfully');</script>";
	echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
	}
	else 
	{
		echo "<script type='text/javascript'>alert('Something went wrong. Please fill and try again');</script>";
	}
	
	}}
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Newsletter</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="admin/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="admin/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="admin/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="admin/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="admin/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="admin/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="admin/css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="admin/css/style.css">

	<script type= "text/javascript" src="../vendor/countries.js"></script>
	<style>
	.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
	background: #dd3d36;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
	background: #5cb85c;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>


</head>

<body>
<?php
        $email = $_SESSION['alogin'];
        $id=1;
		$sql = "SELECT * from tbl_info where id = (:email);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $id, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
?>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
        <div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div style="background-color:black;" class="panel-heading"><?php echo htmlentities("NEWSLETTER"); ?></div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div style="text-align: center; background-color:black" class="panel-body">
                                        <img style="height:650px; width:600px; align:center;" src="images/newsletter.png"/>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div style="background-color:black;" class="panel panel-default">
									<div style="background-color:black;" class="panel-heading"><?php echo htmlentities("Details"); ?></div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div style="background-color:black;" class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group">
	<div class="col-sm-4">
	</div>
	<!-- <div class="col-sm-4 text-center">
		<img src="images/<?php echo htmlentities($result->image);?>" style="width:200px; border-radius:50%; margin:10px;">
		<input type="file" name="image" class="form-control">
		<input type="hidden" name="image" class="form-control" value="<?php echo htmlentities($result->image);?>">
	</div> -->
	<div class="col-sm-4">
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Name<span style="color:red">*</span></label>
	<div class="col-sm-4">
    <p class="form-control"><?php echo htmlentities($result->name);?></p>
	<!-- <input type="text" name="name" class="form-control" required value=""> -->
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Date<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<p class="form-control"><?php echo htmlentities($result->date);?></p>
	</div>
</div>
<!-- <div class="form-group">
	<label class="col-sm-2 control-label">Status<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<p class="form-control"><?php echo htmlentities("PENDING...");?></p>
	</div>

	<label class="col-sm-2 control-label">Designation<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<p class="form-control"><?php echo htmlentities("ISTE MEMBER");?></p>
	</div>
</div> -->

<!-- <div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		<button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
	</div>
</div> -->

</form>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div style="background-color:black;" class="panel panel-default">
									<div style="background-color:black;" class="panel-heading"><?php echo htmlentities("Submit your contribution"); ?></div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div style="background-color:black;" class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group">
	<label class="col-sm-2 control-label">Link<span style="color:red">*</span></label>
	<div class="col-sm-4 col-lg-6">
	<input type="link" name="link" class="form-control" required value="">
	</div>
</div>

<div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		<button class="btn btn-primary" name="upload" type="submit">Upload your Contribution</button>
	</div>
</div>

</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="admin/js/jquery.min.js"></script>
	<script src="admin/js/bootstrap-select.min.js"></script>
	<script src="admin/js/bootstrap.min.js"></script>
	<script src="admin/js/jquery.dataTables.min.js"></script>
	<script src="admin/js/dataTables.bootstrap.min.js"></script>
	<script src="admin/js/Chart.min.js"></script>
	<script src="admin/js/fileinput.js"></script>
	<script src="admin/js/chartData.js"></script>
	<script src="admin/js/main.js"></script>
	<script type="text/javascript">
				 $(document).ready(function () {          
					setTimeout(function() {
						$('.succWrap').slideUp("slow");
					}, 3000);
					});
	</script>
</body>
</html>