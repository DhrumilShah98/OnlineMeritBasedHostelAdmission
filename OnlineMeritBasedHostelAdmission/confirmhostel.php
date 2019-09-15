<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$stid=$_SESSION['id'];
$cid=$_POST['cid'];
$hid=$_POST['hid'];
$caid=$_POST['caid'];
$rs3= mysqli_query($mysqli,"select gender from user_reg where stid='".$_SESSION['id']."'");
$n2=  mysqli_fetch_array($rs3);										
$gender=$n2['gender'];
$per=$_POST['per'];
$rs1= mysqli_query($mysqli,"select aadharno from user_reg where stid='".$_SESSION['id']."'");
										$n=  mysqli_fetch_array($rs1);
										$rs2= mysqli_query($mysqli,"select * from aadhar_data where aadharno='".$n['aadharno']."'");
										$n1=  mysqli_fetch_array($rs2);
$pincode= $n1['pincode'];
$distance1=$_POST['distance1'];
$merit=$_POST['merit'];
$rs1="SELECT count(*) FROM students_marks_table WHERE stid=?";
		$stmt = $mysqli->prepare($rs1);
		$stmt->bind_param('i',$aid);
		$stmt->execute();
		$stmt->bind_result($count);
		$stmt->fetch();
		$stmt->close();
if($count>0)
{
	echo"<script>alert('You Already Applied For Hostel');</script>";
}
else
{
		$rs1= mysqli_query($mysqli,"select h_pincode from hostel where hid='".$_POST['hid']."'");
		$n= mysqli_fetch_array($rs1);
		include('distance.php');
	/*$zipcode1=$n['h_pincode'];
    $zipcode2=$pincode;
    $url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$zipcode1."&sensor=false";
    $details=file_get_contents($url);
    $result = json_decode($details,true);

    $lat1=$result['results'][0]['geometry']['location']['lat'];

    $lng1=$result['results'][0]['geometry']['location']['lng'];

    echo "Latitude :" .$lat1;
    echo '<br>';
    echo "Longitude :" .$lng1;
	
	echo '<br>';
	echo '<br>';
	
	$url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$zipcode2."&sensor=false";
    $details=file_get_contents($url);
    $result = json_decode($details,true);

    $lat2=$result['results'][0]['geometry']['location']['lat'];

    $lng2=$result['results'][0]['geometry']['location']['lng'];

    echo "Latitude :" .$lat2;
    echo '<br>';
    echo "Longitude :" .$lng2;
		
	function distance($lat1, $lon1, $lat2, $lon2, $unit) {

	  $theta = $lon1 - $lon2;
	  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
	  $dist = acos($dist);
	  $dist = rad2deg($dist);
	  $miles = $dist * 60 * 1.1515;
	  $unit = strtoupper($unit);

	  if ($unit == "K") {
		return ($miles * 1.609344);
	  } else if ($unit == "N") {
		return ($miles * 0.8684);
	  } else {
		return $miles;
	  }
	}

	$distance1=50;*/

	$merit = $distance1*0.4+$per*0.6;
	$query="insert into  students_marks_table (stid,cid,hid,caid,gender,percentile,distance,merit) values(?,?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('iiiisddd',$stid,$cid,$hid,$caid,$gender,$per,$distance1,$merit);
			$stmt->execute();
			echo"<script>alert('Hostel Added Succssfully');</script>";
	/*echo '<br>';
	echo '<br>';
	echo distance($lat1, $lng1, $lat2, $lng2, "M"). " Miles<br>";
	echo distance($lat1, $lng1, $lat2, $lng2, "K"). " Kilometers<br>";
	echo distance($lat1, $lng1, $lat2, $lng2, "N"). " Nautical Miles<br>";*/

	
		/*$result ="SELECT count(*) FROM aadhar_data WHERE aadharno=? AND fname=?";
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
		}*/
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
	<meta http-equiv="refresh" content="0; url=dashboard.php" />
</head>
</html>