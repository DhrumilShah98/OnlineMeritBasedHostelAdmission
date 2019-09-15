<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if($_POST['submit'])
{
$h_name=$_POST['h_name'];
$h_address=$_POST['h_address'];
$h_pincode=$_POST['h_pincode'];
$seats=$_POST['seats'];
$GEN_m=$_POST['GEN_m'];
$GEN_f=$_POST['GEN_f'];
$OBC_m=$_POST['OBC_m'];
$OBC_f=$_POST['OBC_f'];
$SC_m=$_POST['SC_m'];
$SC_f=$_POST['SC_f'];
$ST_m=$_POST['ST_m'];
$ST_f=$_POST['ST_f'];
$id=$_GET['id'];
$add=$GEN_m+$GEN_f+$OBC_m+$OBC_f+$SC_m+$SC_f+$ST_m+$ST_f;
if($seats==$add)
{

$query="update hostel set h_name=?,h_address=?,h_pincode=?,seats=?,GEN_m=?,GEN_f=?,OBC_m=?,OBC_f=?,SC_m=?,SC_f=?,ST_m=?,ST_f=? where hid=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssiiiiiiiiiii',$h_name,$h_address,$h_pincode,$seats,$GEN_m,$GEN_f,$OBC_m,$OBC_f,$SC_m,$SC_f,$ST_m,$ST_f,$id);
$stmt->execute();
echo"<script>alert('Hostel Details has been Updated successfully');</script>";
	
}
else
{
	echo"<script>alert('Total seats doesn't match');</script>";

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
	<title>Edit Hostel Details</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Edit Hostel Details </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit Hostel Details</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
												<?php	
												$id=$_GET['id'];
	$ret="select * from hostel where hid=?";
		$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
						<div class="hr-dashed"></div>
						<div class="form-group">
						<label class="col-sm-2 control-label">Hostel Name  </label>
					<div class="col-sm-8">
					<input type="text"  name="h_name" value="<?php echo $row->h_name;?>"  class="form-control"> </div>
					</div>
					<div class="form-group">
<label class="col-sm-2 control-label">Address</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="h_address" id="h_address" value="<?php echo $row->h_address;?>" required="required">
</div>
</div>
				 <div class="form-group">
				<label class="col-sm-2 control-label">Hostel Pincode </label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="h_pincode" id="h_pincode" value="<?php echo $row->h_pincode;?>" >
	
						 </div>
						</div>
<div class="form-group">
									<label class="col-sm-2 control-label">Total Seats</label>
									<div class="col-sm-8">
									<input type="text" class="form-control" name="seats" value="<?php echo $row->seats;?>" >
												</div>
											</div>

									<div class="form-group" >
										<label class="col-sm-2 control-label">General male</label>
										<div class="col-sm-8">
											<input type="number" class="form-control" name="GEN_m" id="GEN_m" value="<?php echo $row->GEN_m;?>" >
										</div>
									</div>
									<div class="form-group" >
<label class="col-sm-2 control-label">General female</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="GEN_f" id="GEN_f" value="<?php echo $row->GEN_f;?>" >
</div>
</div>
<div class="form-group" >
<label class="col-sm-2 control-label">OBC male</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="OBC_m" id="OBC_m" value="<?php echo $row->OBC_m;?>" >
</div>
</div>
<div class="form-group" >
<label class="col-sm-2 control-label">OBC female</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="OBC_f" id="OBC_f" value="<?php echo $row->OBC_f;?>" >
</div>
</div>
<div class="form-group" >
<label class="col-sm-2 control-label">SC male</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="SC_m" id="SC_m" value="<?php echo $row->SC_m;?>" >
</div>
</div>
<div class="form-group" >
<label class="col-sm-2 control-label">SC female</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="SC_f" id="SC_f" value="<?php echo $row->SC_f;?>" >
</div>
</div>
<div class="form-group" >
<label class="col-sm-2 control-label">ST male</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="ST_m" id="ST_m" value="<?php echo $row->ST_m;?>" >
</div>
</div>
<div class="form-group" >
<label class="col-sm-2 control-label">ST female</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="ST_f" id="ST_f" value="<?php echo $row->ST_f;?>" >
</div>
</div>



<?php } ?>
												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Update Hostel">
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
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</script>
</body>

</html>