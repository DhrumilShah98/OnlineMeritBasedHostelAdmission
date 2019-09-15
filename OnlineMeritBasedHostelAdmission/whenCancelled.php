<?php
session_start();
include('includes/config.php');

// 1 general
// 2 obc
// 3 sc
//4 st

//getting the id
$stid_now = $_SESSION['id'];

// following query is for retrieving students basic data
$get_hostel_info = mysqli_query( $mysqli , "select * from students_marks_table where  stid =".$stid_now);
$row_data = mysqli_fetch_assoc($get_hostel_info);

if(! $row_data ) {
        die('Could not get data: ' . mysqli_error());
}
    // getting individual data
    $hid = $row_data['hid'];
    $caid = $row_data['caid'];
    $gender = $row_data['gender'];

    //following query is for deleting the student who  has cancelled the admission
    $retval = mysqli_query( $mysqli,"delete from admitted_students_table  where stid= ".$stid_now);
    if(! $retval ) {
       die('Could not delete the given data: ' . mysqli_error());
    }

  // categorizing on the basis of gender and caste
if($gender == 'Male')
{
          if($caid ==1)
          {

                // query  for male and general category
                $seats_retrieval = mysqli_query( $mysqli,"select GEN_m FROM hostel_seats where hid=".$hid);
                $seats_no = mysqli_fetch_row($seats_retrieval);
                //echo " seats available for General Male  is: {$seats_no[0]} <br>";

                           
                                    // decrementing the seat value
                                    $seats_no[0] = (int)$seats_no[0] +1;
                                    $query="Update hostel_seats Set GEN_m=".$seats_no[0]." where hid=".$hid;
                                    $stmt = $mysqli->prepare($query);
                                    $stmt->execute();
                          //         echo " incremented ";

          }
          else if($caid ==2)
          {
                 // query  for male and obc category
                $seats_retrieval = mysqli_query( $mysqli,"select OBC_m FROM hostel_seats where hid=".$hid);
                if (!$seats_retrieval) {
                printf("Error: %s\n", mysqli_error($mysqli));
                exit();
                }
                $seats_no = mysqli_fetch_row($seats_retrieval);
             //   echo " seats available for  Obc Male  is: {$seats_no[0]} <br>";

                              

                                    // decrementing the seat value
                                    $seats_no[0] = (int)$seats_no[0] +1;
                                    $query="Update hostel_seats Set OBC_m=".$seats_no[0]." where hid=".$hid;
                                    $stmt = $mysqli->prepare($query);
                                    $stmt->execute();
                          
               //        echo " incremented ";

          }
          else if($caid ==3)
          {
                  // query male and SC
              $seats_retrieval = mysqli_query( $mysqli,"select SC_m FROM hostel_seats where hid=".$hid);
                 if (!$seats_retrieval) {
              printf("Error: %s\n", mysqli_error($mysqli));
              exit();
              }
              $seats_no = mysqli_fetch_row($seats_retrieval);
              //echo " seats available for  sc Male  is: {$seats_no[0]} <br>";


                                 // decrementing the seat value
                                 $seats_no[0] = (int)$seats_no[0] +1;
                                 $query="Update hostel_seats Set SC_m=".$seats_no[0]." where hid=".$hid;
                                 $stmt = $mysqli->prepare($query);
                                 $stmt->execute();

                     //            echo " incremented ";


          }
          else if($caid ==4)
          {
                  // for male and st
                  //$sql_hostel = 'SELECT GEN_m FROM hostel_seats where hid= '.$row['hid'] ;
                  $seats_retrieval = mysqli_query( $mysqli,"select ST_m FROM hostel_seats where hid=".$hid);
                  if (!$seats_retrieval) {
                  printf("Error: %s\n", mysqli_error($mysqli));
                  exit();
                  }
                  $seats_no = mysqli_fetch_row($seats_retrieval);
                //  echo " seats available for  ST Male  is: {$seats_no[0]} <br>";

                                 

                                      // decrementing the seat value
                                      $seats_no[0] = (int)$seats_no[0] +1;
                                      $query="Update hostel_seats Set ST_m=".$seats_no[0]." where hid=".$hid;
                                      $stmt = $mysqli->prepare($query);
                                      $stmt->execute();

                          //           echo " incremented ";

         }
    } 
else
{
  if($caid ==1)
          {

                // query  for male and general category
                //$sql_hostel = 'SELECT GEN_m FROM hostel_seats where hid= '.$row['hid'] ;
                $seats_retrieval = mysqli_query( $mysqli,"select GEN_f FROM hostel_seats where hid=".$hid);
                $seats_no = mysqli_fetch_row($seats_retrieval);
                //echo " seats available for General Male  is: {$seats_no[0]} <br>";

                           
                                    // decrementing the seat value
                                    $seats_no[0] = (int)$seats_no[0] +1;
                                    $query="Update hostel_seats Set GEN_f=".$seats_no[0]." where hid=".$hid;
                                    $stmt = $mysqli->prepare($query);
                                    $stmt->execute();
            //                       echo " incremented ";

                          
          }
          else if($caid ==2)
          {
                 // query  for male and obc category
                //$sql_hostel = 'SELECT GEN_m FROM hostel_seats where hid= '.$row['hid'] ;
                $seats_retrieval = mysqli_query( $mysqli,"select OBC_f FROM hostel_seats where hid=".$hid);
                if (!$seats_retrieval) {
                printf("Error: %s\n", mysqli_error($mysqli));
                exit();
                }
                $seats_no = mysqli_fetch_row($seats_retrieval);
               // echo " seats available for  Obc Male  is: {$seats_no[0]} <br>";

                              

                                    // decrementing the seat value
                                    $seats_no[0] = (int)$seats_no[0] +1;
                                    $query="Update hostel_seats Set OBC_f=".$seats_no[0]." where hid=".$hid;
                                    $stmt = $mysqli->prepare($query);
                                    $stmt->execute();
                      //             echo " incremented ";


          }
          else if($caid ==3)
          {
                  // query male and SC
              //$sql_hostel = 'SELECT GEN_m FROM hostel_seats where hid= '.$row['hid'] ;
              $seats_retrieval = mysqli_query( $mysqli,"select SC_f FROM hostel_seats where hid=".$hid);
                 if (!$seats_retrieval) {
              printf("Error: %s\n", mysqli_error($mysqli));
              exit();
              }
              $seats_no = mysqli_fetch_row($seats_retrieval);
              //echo " seats available for  sc Male  is: {$seats_no[0]} <br>";


                                 // decrementing the seat value
                                 $seats_no[0] = (int)$seats_no[0] +1;
                                 $query="Update hostel_seats Set SC_f=".$seats_no[0]." where hid=".$hid;
                                 $stmt = $mysqli->prepare($query);
                                 $stmt->execute();

                  //     echo " incremented ";


          }
          else if($caid ==4)
          {
                  // for male and st
                  //$sql_hostel = 'SELECT GEN_m FROM hostel_seats where hid= '.$row['hid'] ;
                  $seats_retrieval = mysqli_query( $mysqli,"select ST_f FROM hostel_seats where hid=".$hid);
                  if (!$seats_retrieval) {
                  printf("Error: %s\n", mysqli_error($mysqli));
                  exit();
                  }
                  $seats_no = mysqli_fetch_row($seats_retrieval);
               //   echo " seats available for  ST Male  is: {$seats_no[0]} <br>";

                                 

                                      // decrementing the seat value
                                      $seats_no[0] = (int)$seats_no[0] +1;
                                      $query="Update hostel_seats Set ST_f=".$seats_no[0]." where hid=".$hid;
                                      $stmt = $mysqli->prepare($query);
                                      $stmt->execute();
                                      //echo " incremented ";
                            
         }


}



//echo " doneeeeeee";

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="3; url=dashboard.php" />
  <script type="text/javascript">alert('Admission Is Cancelled');</script>
</head>
</html>