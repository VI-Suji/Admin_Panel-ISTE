<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

if(isset($_GET['edit']))
	{
		$editid=$_GET['edit'];
	}


	
if(isset($_POST['change']))
  {
	$file = $_FILES['image']['name'];
	$file_loc = $_FILES['image']['tmp_name'];
	$folder="images/";
	$new_file_name = strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);
    
	$name=$_POST['name'];
    $position=$_POST['position'];
    $category=$_POST['category'];
    $image=$_POST['image'];
    
	if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$image=$final_file;
		}
        // echo "<script type='text/javascript'>alert('.$editid.');</script>";
        // echo "<script type='text/javascript'>alert('.$name.');</script>";
        // echo "<script type='text/javascript'>alert('.$position.');</script>";
        // echo "<script type='text/javascript'>alert('.$category.');</script>";
        // echo "<script type='text/javascript'>alert('.$image.');</script>";

	$sql="UPDATE execom SET name=(:name), position=(:position), category=(:category), image=(:image) WHERE id=$editid";
    $query = $dbh->prepare($sql);
	$query-> bindParam(':name', $name, PDO::PARAM_STR);
    $query-> bindParam(':position', $position, PDO::PARAM_STR);
    $query-> bindParam(':category', $category, PDO::PARAM_STR);
	$query-> bindParam(':image', $image, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    echo "<script type='text/javascript'>alert('.$lastInsertId.');</script>";
    if($lastInsertId){
        $msg="Information Updated Successfully";
    }
}    
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="post" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Edit Execom</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

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
		$sql = "SELECT * from execom where id = :editid";
		$query = $dbh -> prepare($sql);
		$query->bindParam(':editid',$editid,PDO::PARAM_INT);
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
						<h3 class="page-title">Edit Execom : <?php echo htmlentities($result->name); ?></h3>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data" name="imgform">
<div class="form-group">
<label class="col-sm-2 control-label">Name<span style="color:red">*</span></label>
<div class="col-sm-5 col-lg-10">
<input type="text" name="name" class="form-control" required value="<?php echo htmlentities($result->name);?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Position</label>
<div class="col-sm-5 col-lg-10">
<input type="text" name="position" class="form-control" required value="<?php echo htmlentities($result->position);?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Category<span style="color:red">*</span></label>
<div class="col-sm-5 col-lg-10">
<select name="category" class="form-control" required >
<option value="">Select</option>
<option value="Senior Execom">Senior Execom</option>
<option value="Junior Execom">Junior Execom</option>
<option value="Web Developer">Web Developer</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Image</label>
<div class="col-sm-5 col-lg-10">
<input type="file" name="image" class="form-control">
</div>
</div>

<div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		<button class="btn btn-primary" name="change" type="submit">Save Changes</button>
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
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
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