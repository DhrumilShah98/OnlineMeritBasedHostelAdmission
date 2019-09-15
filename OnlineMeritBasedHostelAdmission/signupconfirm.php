<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$aadharno=$_POST['aadharno'];
$fname=$_POST['fname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$contactno=$_POST['contact'];
$emailid=$_POST['email'];
$password=$_POST['password'];
$rs1="SELECT count(*) FROM user_reg WHERE aadharno=? AND fname=?";
		$stmt = $mysqli->prepare($rs1);
		$stmt->bind_param('is',$aadharno,$fname);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
	echo"<script>alert('Student Already Registered');</script>";
}
else
{
		$result ="SELECT count(*) FROM aadhar_data WHERE aadharno=? AND fname=?";
				$stmt = $mysqli->prepare($result);
				$stmt->bind_param('is',$aadharno,$fname);
				$stmt->execute();
		$stmt->bind_result($count);
		$stmt->fetch();
		$stmt->close();
		if($count==1)
		{

			$query="insert into  user_reg(aadharno,fname,dob,gender,contactno,email,password) values(?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('isssiss',$aadharno,$fname,$dob,$gender,$contactno,$emailid,$password);
			$stmt->execute();
			echo"<script>alert('Student Succssfully register');</script>";
		}
		else
		{
			echo "<script style='color:red'>alert('Aadhar Data Not Found. Please Fill It Again With Correct Details .');</script>";
		}
}
}
/*function StudentCode()
  {
      $con = mysqli_connect("localhost", "root", "", "final");
      $rs  = mysqli_query($mysqli,"select CONCAT('OMA',LPAD(RIGHT(ifnull(max(stid),'OMA000000'),5) + 1,5,'0')) from user_reg");
      return mysqli_fetch_array($rs)[0];
  }*/

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="0; url=registration.php" />
</head>
</html>