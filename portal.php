<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	
if(isset($_POST['submit']))
  {	
	$file = $_FILES['image']['name'];
	$file_loc = $_FILES['image']['tmp_name'];
	$folder="images/";
	$new_file_name = strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobileno=$_POST['mobile'];
	$designation=$_POST['designation'];
	$idedit=$_POST['editid'];
	$image=$_POST['image'];

	if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$image=$final_file;
		}

	$sql="UPDATE users SET name=(:name), email=(:email), mobile=(:mobileno), designation=(:designation), Image=(:image) WHERE id=(:idedit)";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':name', $name, PDO::PARAM_STR);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
	$query-> bindParam(':designation', $designation, PDO::PARAM_STR);
	$query-> bindParam(':image', $image, PDO::PARAM_STR);
	$query-> bindParam(':idedit', $idedit, PDO::PARAM_STR);
	$query->execute();
	$msg="Information Updated Successfully";
}    
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
	
	<title>Edit Profile</title>

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
									<div style="background-color:black;" class="panel-heading"><?php echo htmlentities("WELCOME TO ISTE STUDENTS PORTAL"); ?></div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div style="text-align: center; background-color:black" class="panel-body">
                                        <img style="height:250px; width:250px; align:center;" src="images/iste.png"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
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

	<label class="col-sm-2 control-label">Email<span style="color:red">*</span></label>
	<div class="col-sm-4">
    <p class="form-control"><?php echo htmlentities($result->description);?></p>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Mobile<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<p class="form-control"><?php echo htmlentities($result->date);?></p>
	</div>

	<label class="col-sm-2 control-label">Designation<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<p class="form-control"><?php echo htmlentities("ISTE MEMBER");?></p>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Status<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<p class="form-control"><?php echo htmlentities("PENDING...");?></p>
	</div>

	<!-- <label class="col-sm-2 control-label">Designation<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<p class="form-control"><?php echo htmlentities("ISTE MEMBER");?></p>
	</div> -->
</div>
<input type="hidden" name="editid" class="form-control" required value="<?php echo htmlentities($result->id);?>">

<!-- <div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		<button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
	</div>
</div> -->

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
<?php } ?>