<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
?>
<html>
  <head>
    <title> Final output </title>
  </head>
  <body >
      <!--<h1 style="margin-top:30px;" align="center"> Cogratulations Your Addmission has been Accepted! </h1>-->
      <?php 
         $aid=$_SESSION['id'];
        $ret="select count(*) from admitted_students_table where stid=?";
        $stmt= $mysqli->prepare($ret) ;
        $stmt->bind_param('i',$aid);
        $stmt->execute() ;//ok
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();
        
        if($count==0)
        {
          ?><h1 style="color: red; text-align: center;">Sorry you didn't get hostel admission!!!</h1>
            <?php
        }
        else
        {
        $aid=$_SESSION['id'];
        $ret="select * from admitted_students_table where stid=?";
        $stmt= $mysqli->prepare($ret) ;
        $stmt->bind_param('i',$aid);
        $stmt->execute() ;//ok
        $res=$stmt->get_result();
        
        while($row=$res->fetch_object())
          {
            ?>
        <h1 style="margin-top:30px; color:green " align="center"> Congratulations Your Addmission has been Accepted! </h1>
      <form>
          <fieldset>
            <legend>Addmission Details</legend><br>
              Name <input type="text" name="n" value="<?php echo $row->s_name;?>" /> <br><br><br><br>
              College Name<input type="text" name="c" value="<?php echo $row->c_name;?>" /> <br><br><br><br>
              Hostel Name <input type="text" name="hn" value="<?php echo $row->h_name;?>" /> <br><br><br><br>
              Hostel Address <input type="text" name="ha" value="<?php echo $row->h_address;?>" /> <br><br><br><br>
              <button class="btn btn-primary"><a href=".php">Confirm</a></button>
              <button class="btn btn-primary"><a href="whenCancelled.php">Cancel</a></button>
          </fieldset> 
      </form>
      <?php } }?>
  </body>
</html>
