<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
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
	<title>Student Hostel Registration</title>
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
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Registration </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
										<form method="post" action="confirmhostel.php" class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-4 control-label"><h4 style="color: green" align="left">College & Hostel Related info </h4> </label>
												</div>

												<div class="form-group">
												<label class="col-sm-2 control-label">College Name. </label>
												<div class="col-sm-3">
												<select name="cid" id="cid" class="form-control"  required>
												<option value="">Select College</option>
												<?php $query ="SELECT * FROM college";
												$stmt2 = $mysqli->prepare($query);
												$stmt2->execute();
												$res=$stmt2->get_result();
												while($row=$res->fetch_object())
												{	
												?>
												<option value="<?php echo $row->cid;?>"> <?php echo $row->c_name;?></option>
												<?php } ?>
												</select> 
												</div>
												</div>

													<div class="form-group">
												<label class="col-sm-2 control-label">Hostel Name. </label>
												<div class="col-sm-3">
												<select name="hid" id="hid" class="form-control"  required>
												<option value="">Select Hostel</option>
												<?php $query ="SELECT * FROM hostel";
												$stmt2 = $mysqli->prepare($query);
												$stmt2->execute();
												$res=$stmt2->get_result();
												while($row=$res->fetch_object())
												{	
												?>
												<option value="<?php echo $row->hid;?>"> <?php echo $row->h_name;?></option>
												<?php } ?>
												</select> 
												</div>
												</div>
												<div class="form-group">
												<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Pesrsonal & Marks Related info </h4> </label>
												</div>

												<?php	
												$aid=$_SESSION['id'];
													$ret="select * from user_reg where stid=?";
														$stmt= $mysqli->prepare($ret) ;
													 $stmt->bind_param('i',$aid);

													 $stmt->execute() ;//ok
													 $res=$stmt->get_result();
													 while($row=$res->fetch_object())
													  {
													  	?>	
													  	<div class="form-group">
					<label class="col-sm-2 control-label"> Aadhar Card No : </label>
					<div class="col-sm-8">
						<input type="text" name="aadharno" id="aadharno"  class="form-control" value="<?php echo $row->aadharno;?>" disabled>
						</div>
					</div>

										<div class="form-group">
										<label class="col-sm-2 control-label">Name : </label>
										<div class="col-sm-8">
										<input type="text" name="fname" id="fname"  class="form-control" value="<?php echo $row->fname;?>" disabled >
										</div>
										</div>

										<div class="form-group">
										<label class="col-sm-2 control-label">Date Of Birth: </label>
										<div class="col-sm-8">
										<input type="text" name="dob" id="dob"  class="form-control" value="<?php echo $row->dob;?>" disabled>
										</div>
										</div>

										<div class="form-group">
										<label class="col-sm-2 control-label">Gender : </label>
										<div class="col-sm-8">
										<input type="text" name="gender" id="gender"  class="form-control" value="<?php echo $row->gender;?>" disabled>
										</div>
										</div>

										<div class="form-group">
										<label class="col-sm-2 control-label">Contact No : </label>
										<div class="col-sm-8">
										<input type="text" name="contact" id="contact"  class="form-control" value="<?php echo $row->contactno;?>" disabled>
										</div>
										</div>


										<div class="form-group">
										<label class="col-sm-2 control-label">Email id: </label>
										<div class="col-sm-8">
										<input type="email" name="email" id="email"  class="form-control" /*onBlur="checkAvailability()"*/ value="<?php echo $row->email;?>" disabled >
										<span id="user-availability-status" style="font-size:12px;"></span>
										</div>
										</div>

																		

										<?php } ?> 
										<?php
										$rs1= mysqli_query($mysqli,"select aadharno from user_reg where stid='".$_SESSION['id']."'");
										$n=  mysqli_fetch_array($rs1);
										$rs2= mysqli_query($mysqli,"select * from aadhar_data where aadharno='".$n['aadharno']."'");
										$n1=  mysqli_fetch_array($rs2);
										?>
										<div class="form-group">
										<label class="col-sm-2 control-label">Street: </label>
										<div class="col-sm-8">
										<input type="text"  class="form-control" value="<?php echo $n1['street'];?>" disabled>
										</div>
										</div>
										<div class="form-group">
										<label class="col-sm-2 control-label">Area </label>
										<div class="col-sm-8">
										<input type="text"   class="form-control" value="<?php echo $n1['area'];?>" disabled>
										</div>
										</div>
										<div class="form-group">
										<label class="col-sm-2 control-label">District: </label>
										<div class="col-sm-8">
										<input type="text"  class="form-control" value="<?php echo $n1['street'];?>" disabled>
										</div>
										</div>
										<div class="form-group">
										<label class="col-sm-2 control-label">State : </label>
										<div class="col-sm-8">
										<input type="text"   class="form-control" value="<?php echo $n1['state'];?>" disabled>
										</div>
										</div>
										<div class="form-group">
										<label class="col-sm-2 control-label">Pincode: </label>
										<div class="col-sm-8">
										<input type="text" name="pincode" id="pincode" class="form-control" value="<?php echo $n1['pincode'];?>" disabled>
										</div>
										</div>

										<div class="form-group">
												<label class="col-sm-2 control-label">Caste. </label>
												<div class="col-sm-3">
												<select name="caid" id="caid" class="form-control"  required>
												<option value="">Select Caste</option>
												<?php $query ="SELECT * FROM caste";
												$stmt2 = $mysqli->prepare($query);
												$stmt2->execute();
												$res=$stmt2->get_result();
												while($row=$res->fetch_object())
												{	
												?>
												<option value="<?php echo $row->caid;?>"> <?php echo $row->caste;?></option>
												<?php } ?>
												</select> 
												</div>
												</div>
												<?php
												$rs1= mysqli_query($mysqli,"select per from percentile where stid='".$_SESSION['id']."'");
												$n3=  mysqli_fetch_array($rs1);?>
													<div class="form-group">

												<label class="col-sm-2 control-label">Percentile: </label>
												<div class="col-sm-3">
												<input type="text"  class="form-control" name="per" id="per" value="<?php echo $n3['per'];?>" disabled>
												</div>

												<div class="form-group" hidden="hidden">
												<div class="col-sm-3">
												<input type="text"  class="form-control" name="distance1" id="distance1">
												</div>
											</div>

												<div class="form-group" hidden="hidden"> 
												<div class="col-sm-3">
												<input type="text"  class="form-control" name="merit" id="merit" >
												</div>
											</div>
												
												<div class="col-sm-6 col-sm-offset-4" style=" margin-top: 10px; margin-left: 500px;">
													<input type="submit" name="submit" Value="Submit" class="btn btn-primary btn-md" >
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
</body>
</html>