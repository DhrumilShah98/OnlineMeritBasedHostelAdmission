<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if(isset($_POST['submit']))
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
/*$sql="SELECT room_no FROM rooms where room_no=?";
$stmt1 = $mysqli->prepare($sql);
$stmt1->bind_param('i',$roomno);
$stmt1->execute();
$stmt1->store_result(); 
$row_cnt=$stmt1->num_rows;;
if($row_cnt>0)
{
echo"<script>alert('Room already exist');</script>";
}
else
{*/

	$GEN_m=$seats/4;
	$GEN_f=$seats/4;
	$OBC_m=$seats*0.135;
	$OBC_f=($seats*0.135)+1;
	$SC_m=$seats*0.065;
	$SC_f=($seats*0.065)+1;
	$ST_m=($seats*0.045)+1;
	$ST_f=($seats*0.045)+1;

$query="insert into hostel (h_name,h_address,h_pincode,seats,GEN_m,GEN_f,OBC_m,OBC_f,SC_m,SC_f,ST_m,ST_f) values (?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssiiiiiiiiii',$h_name,$h_address,$h_pincode,$seats,$GEN_m,$GEN_f,$OBC_m,$OBC_f,$SC_m,$SC_f,$ST_m,$ST_f);
$stmt->execute();
echo"<script>alert('Hostel has been added successfully');</script>";

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
	<title>Add Hostel</title>
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
					
						<h2 class="page-title">Add a Hostel </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add a Hostel</div>
									<div class="panel-body">
									<?php if(isset($_POST['submit']))
{ ?>
<p style="color: red"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg']=""); ?></p>
<?php } ?>
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Hostel Name  </label>
												<div class="col-sm-8">
												<input type="text" name="h_name" id="h_name" class="form-control" required="required">

</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Address</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="h_address" id="h_address" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Pincode</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="h_pincode" id="h_pincode" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Total Seats</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="seats" id="seats" value="" required="required">
</div>
</div>
<div class="form-group" hidden="hidden">
<label class="col-sm-2 control-label">General male</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="GEN_m" id="GEN_m" value="" >
</div>
</div>
<div class="form-group" hidden="hidden">
<label class="col-sm-2 control-label">General female</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="GEN_f" id="GEN_f" value="" >
</div>
</div>
<div class="form-group" hidden="hidden">
<label class="col-sm-2 control-label">OBC male</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="OBC_m" id="OBC_m" value="" >
</div>
</div>
<div class="form-group" hidden="hidden">
<label class="col-sm-2 control-label">OBC female</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="OBC_f" id="OBC_f" value="" >
</div>
</div>
<div class="form-group" hidden="hidden">
<label class="col-sm-2 control-label">SC male</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="SC_m" id="SC_m" value="" >
</div>
</div>
<div class="form-group" hidden="hidden">
<label class="col-sm-2 control-label">SC female</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="SC_f" id="SC_f" value="" >
</div>
</div>
<div class="form-group" hidden="hidden">
<label class="col-sm-2 control-label">ST male</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="ST_m" id="ST_m" value="" >
</div>
</div>
<div class="form-group" hidden="hidden">
<label class="col-sm-2 control-label">ST female</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="ST_f" id="ST_f" value="" >
</div>
</div>
<div class="col-sm-8 col-sm-offset-2">
<input class="btn btn-primary" type="submit" name="submit" value="Add Hostel ">
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