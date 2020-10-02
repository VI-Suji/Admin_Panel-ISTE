<?php
session_start();
error_reporting(0);
include('admin/includes/config.php');
if(isset($_POST['search']))
{
	$user=$_POST['username'];
	$sql ="SELECT * FROM `certificate` WHERE id=:user";
	$query= $dbh -> prepare($sql);
	$query-> bindParam(':user', $user, PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
      foreach($results as $result)
      {	
		  $eve="$result->name_event";
		  $msg="$result->name";
		  $gra="$result->grade";
	  }
	}else{
		$error="No user exists";
	}
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
	
	<title>Certificate verification</title>

    <link rel="stylesheet" href="admin/csss/styles.css">
    <link rel="stylesheet" href="admin/csss/style.css">
    <link rel="stylesheet" href="admin/csss/trial.css" />
    <link rel="stylesheet" href="admin/csss/fileinput.min.css">
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

	<script type= "text/javascript" src="admin/vendor/countries.js"></script>
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

<body >
	<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8  mx-auto">
						<h3 class="page-title">ISTE Certificate Verification</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Web development and Design workshop</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap" style="font-size:16px;"><strong>Username</strong>&nbsp;&nbsp;&nbsp;<?php echo htmlentities($msg); ?>&nbsp;&nbsp;&nbsp;<BR><strong>Event&nbsp;&nbsp;&nbsp;</strong><?php echo htmlentities($eve); ?><BR><strong>Grade</strong>&nbsp;&nbsp;&nbsp;<?php echo htmlentities($gra); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Certificate ID<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="username" class="form-control" placeholder="Certificate ID">
</div>
<!-- <label class="col-sm-2 control-label">name<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="name" name="name" class="form-control" required value="">
</div> -->
</div>


<div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		<button class="btn btn-primary" style="font-size:12px;" name="search" type="submit">Search</button>
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
</body>
</html>