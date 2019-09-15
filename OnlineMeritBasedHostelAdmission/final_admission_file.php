<?php
// session_start();
include('includes/config.php');

// 1 general
// 2 obc
// 3 sc
//4 st


// THIS QUERY IS FOR FETCHING THE DATA FROM MARKS TABLE SORTED
//$sql = 'SELECT * FROM students_marks_table order by merit DESC';
//mysqli_select_db($mysqli,'final');
$retval = mysqli_query( $mysqli,"SELECT * FROM students_marks_table order by merit DESC");

if(! $retval ) {
   die('Could not get data: ' . mysqli_error());
}


while($row = mysqli_fetch_assoc($retval)) {

  // checking if student already admitted or not
          //   $id_for_check = 'SELECT stid from admitted_students_table ';
          //   $id_check_retrieval = mysqli_query( $mysqli, $id_for_check );
          //   //$id_admitted = mysqli_fetch_row($id_check_retrieval);
          //
          //   foreach( $id_check_retrieval as $id_to_check ) {
          //       if($id_to_check == $row['stid'] )
          //           break;
          //       else {
          //         echo "Student is already admitted <br> ";
          //         goto end;
          //
          //       }
          // }
  echo $row['gender'];
// if male
  if($row['gender'] == 'Male')
  {
        if($row['caid'] ==1)
        {

          // query  for male and general category
          //$sql_hostel = 'SELECT GEN_m FROM hostel_seats where hid= '.$row['hid'] ;
          $seats_retrieval = mysqli_query( $mysqli,"select GEN_m FROM hostel_seats where hid='".$row['hid']."'");
          $seats_no = mysqli_fetch_row($seats_retrieval);
          echo " seats available for General Male  is: {$seats_no[0]} <br>";

                      if($seats_no[0] <=0)
                      {
                        echo "All seats reserved General Male <br>";
                      }
                        else {
                              // data includes student id  , student name ,college name , hostel name , hostel address
                              //$student_name = 'SELECT fname  FROM user_reg where stid= '.$row['stid'] ;
                              $name_retrieval = mysqli_query( $mysqli,"select fname  FROM user_reg where stid='".$row['stid']."'");
                              $name= mysqli_fetch_row($name_retrieval);
                              echo " name of student  is: {$name[0]} <br>";

                              // retrieving name of the college
                              //$college_name = 'SELECT c_name FROM college where cid= '.$row['cid'] ;
                              $college_retrieval = mysqli_query( $mysqli,"select c_name FROM college where cid='".$row['cid']."'");
                              $college = mysqli_fetch_row($college_retrieval);
                              echo " College name is: {$college[0]} <br>";

                              // retrieving name of the hostel

                              //$hostel_name = 'SELECT h_name FROM hostel where hid= '.$row['hid'] ;
                              $hostel_retrieval = mysqli_query( $mysqli,"select h_name FROM hostel where hid='".$row['hid']."'");
                              $hostel1 = mysqli_fetch_row($hostel_retrieval);
                              echo " Hostel name is: {$hostel1[0]} <br>";

                              // retrieving hostel address

                              //$hostel_address = 'SELECT h_address FROM hostel where hid= '.$row['hid'] ;
                              $hostel_address_retrieval = mysqli_query( $mysqli,"select h_address FROM hostel where hid='".$row['hid']."'");
                              $hostel2 = mysqli_fetch_row($hostel_address_retrieval);
                              echo " Hostel address is: {$hostel2[0]} <br> <br><br>";

                              $student_id_insert = $row['stid'];

                              $query="Insert Into admitted_students_table (stid , s_name , c_name , h_name , h_address) values(?,?,?,?,?)";
                        			$stmt = $mysqli->prepare($query);
                        			$rc=$stmt->bind_param('issss',$student_id_insert, $name[0] , $college[0], $hostel1[0],$hostel2[0]);
                        			$stmt->execute();

                              // decrementing the seat value
                              $seats_no[0] = (int)$seats_no[0] -1;
                              $query="Update hostel_seats Set GEN_m=".$seats_no[0]." where hid='".$row['hid']."'";
                              $stmt = $mysqli->prepare($query);
                              $stmt->execute();

                    }
        }
        else if($row['caid'] ==2)
        {
               // query  for male and general category
          //$sql_hostel = 'SELECT GEN_m FROM hostel_seats where hid= '.$row['hid'] ;
          $seats_retrieval = mysqli_query( $mysqli,"select OBC_m FROM hostel_seats where hid='".$row['hid']."'");
          if (!$seats_retrieval) {
    printf("Error: %s\n", mysqli_error($mysqli));
    exit();
}
          $seats_no = mysqli_fetch_row($seats_retrieval);
          echo " seats available for  Obc Male  is: {$seats_no[0]} <br>";

                      if($seats_no[0] <=0)
                      {
                        echo "All seats reserved OBC Male <br>";
                      }
                        else {
                              // data includes student id  , student name ,college name , hostel name , hostel address
                              //$student_name = 'SELECT fname  FROM user_reg where stid= '.$row['stid'] ;
                              $name_retrieval = mysqli_query( $mysqli,"select fname  FROM user_reg where stid='".$row['stid']."'");
                              $name = mysqli_fetch_row($name_retrieval);
                              echo " name of student  is: {$name[0]} <br>";

                              // retrieving name of the college
                              //$college_name = 'SELECT c_name FROM college where cid= '.$row['cid'] ;
                              $college_retrieval = mysqli_query( $mysqli,"select c_name FROM college where cid='".$row['cid']."'");
                              $college = mysqli_fetch_row($college_retrieval);
                              echo " College name is: {$college[0]} <br>";

                              // retrieving name of the hostel

                              //$hostel_name = 'SELECT h_name FROM hostel where hid= '.$row['hid'] ;
                              $hostel_retrieval = mysqli_query( $mysqli,"select h_name FROM hostel where hid='".$row['hid']."'");
                              $hostel1 = mysqli_fetch_row($hostel_retrieval);
                              echo " Hostel name is: {$hostel1[0]} <br>";

                              // retrieving hostel address

                              //$hostel_address = 'SELECT h_address FROM hostel where hid= '.$row['hid'] ;
                              $hostel_address_retrieval = mysqli_query( $mysqli,"select h_address FROM hostel where hid='".$row['hid']."'");
                              $hostel2 = mysqli_fetch_row($hostel_address_retrieval);
                              echo " Hostel address is: {$hostel2[0]} <br> <br><br>";

                              $student_id_insert = $row['stid'];

                              $query="Insert Into admitted_students_table (stid , s_name , c_name , h_name , h_address) values(?,?,?,?,?)";
                              $stmt = $mysqli->prepare($query);
                              $rc=$stmt->bind_param('issss',$student_id_insert, $name[0] , $college[0], $hostel1[0],$hostel2[0]);
                              $stmt->execute();

                              // decrementing the seat value
                              $seats_no[0] = (int)$seats_no[0] -1;
                              $query="Update hostel_seats Set OBC_m=".$seats_no[0]." where hid='".$row['hid']."'";
                              $stmt = $mysqli->prepare($query);
                              $stmt->execute();

                    }

        }
        else if($row['caid'] ==3)
        {
          // query male and SC
          $seats_retrieval = mysqli_query( $mysqli,"select SC_m FROM hostel_seats where hid='".$row['hid']."'");
          $seats_no = mysqli_fetch_row($seats_retrieval);
          echo " seats available for  SC Male  is: {$seats_no[0]} <br>";

                      if($seats_no[0] <=0)
                      {
                        echo "All seats reserved SC Male <br>";
                      }
                        else {
                              // data includes student id  , student name ,college name , hostel name , hostel address
                              //$student_name = 'SELECT fname  FROM user_reg where stid= '.$row['stid'] ;
                              $name_retrieval = mysqli_query( $mysqli,"select fname  FROM user_reg where stid='".$row['stid']."'");
                              $name = mysqli_fetch_row($name_retrieval);
                              echo " name of student  is: {$name[0]} <br>";

                              // retrieving name of the college
                              //$college_name = 'SELECT c_name FROM college where cid= '.$row['cid'] ;
                              $college_retrieval = mysqli_query( $mysqli,"select c_name FROM college where cid='".$row['cid']."'");
                              $college = mysqli_fetch_row($college_retrieval);
                              echo " College name is: {$college[0]} <br>";

                              // retrieving name of the hostel

                              //$hostel_name = 'SELECT h_name FROM hostel where hid= '.$row['hid'] ;
                              $hostel_retrieval = mysqli_query( $mysqli,"select h_name FROM hostel where hid='".$row['hid']."'");
                              $hostel1 = mysqli_fetch_row($hostel_retrieval);
                              echo " Hostel name is: {$hostel1[0]} <br>";

                              // retrieving hostel address

                              //$hostel_address = 'SELECT h_address FROM hostel where hid= '.$row['hid'] ;
                              $hostel_address_retrieval = mysqli_query( $mysqli,"select h_address FROM hostel where hid='".$row['hid']."'");
                              $hostel2 = mysqli_fetch_row($hostel_address_retrieval);
                              echo " Hostel address is: {$hostel2[0]} <br> <br><br>";

                              $student_id_insert = $row['stid'];
                              $query="Insert Into admitted_students_table (stid , s_name , c_name , h_name , h_address) values(?,?,?,?,?)";
                              $stmt = $mysqli->prepare($query);
                              $rc=$stmt->bind_param('issss',$student_id_insert, $name[0] , $college[0], $hostel1[0],$hostel2[0]);
                              
                              $stmt->execute();

                              // decrementing the seat value
                              $seats_no[0] = (int)$seats_no[0] -1;
                              $query="Update hostel_seats Set SC_m=".$seats_no[0]." where hid='".$row['hid']."'";
                              $stmt = $mysqli->prepare($query);
                              $stmt->execute();
                            

                    }
        }
        else if($row['caid'] ==4)
        {
              // query male and ST
              $seats_retrieval = mysqli_query( $mysqli,"select ST_m FROM hostel_seats where hid='".$row['hid']."'");
          $seats_no = mysqli_fetch_row($seats_retrieval);
          echo " seats available for  ST Male  is: {$seats_no[0]} <br>";

                      if($seats_no[0] <=0)
                      {
                        echo "All seats reserved ST Male <br>";
                      }
                        else {
                              // data includes student id  , student name ,college name , hostel name , hostel address
                              //$student_name = 'SELECT fname  FROM user_reg where stid= '.$row['stid'] ;
                              $name_retrieval = mysqli_query( $mysqli,"select fname  FROM user_reg where stid='".$row['stid']."'");
                              $name = mysqli_fetch_row($name_retrieval);
                              echo " name of student  is: {$name[0]} <br>";

                              // retrieving name of the college
                              //$college_name = 'SELECT c_name FROM college where cid= '.$row['cid'] ;
                              $college_retrieval = mysqli_query( $mysqli,"select c_name FROM college where cid='".$row['cid']."'");
                              $college = mysqli_fetch_row($college_retrieval);
                              echo " College name is: {$college[0]} <br>";

                              // retrieving name of the hostel

                              //$hostel_name = 'SELECT h_name FROM hostel where hid= '.$row['hid'] ;
                              $hostel_retrieval = mysqli_query( $mysqli,"select h_name FROM hostel where hid='".$row['hid']."'");
                              $hostel1 = mysqli_fetch_row($hostel_retrieval);
                              echo " Hostel name is: {$hostel1[0]} <br>";

                              // retrieving hostel address

                              //$hostel_address = 'SELECT h_address FROM hostel where hid= '.$row['hid'] ;
                              $hostel_address_retrieval = mysqli_query( $mysqli,"select h_address FROM hostel where hid='".$row['hid']."'");
                              $hostel2 = mysqli_fetch_row($hostel_address_retrieval);
                              echo " Hostel address is: {$hostel2[0]} <br> <br><br>";

                              $student_id_insert = $row['stid'];

                              $query="Insert Into admitted_students_table (stid , s_name , c_name , h_name , h_address) values(?,?,?,?,?)";
                              $stmt = $mysqli->prepare($query);
                              $rc=$stmt->bind_param('issss',$student_id_insert, $name[0] , $college[0], $hostel1[0],$hostel2[0]);
                              $stmt->execute();

                              // decrementing the seat value
                              $seats_no[0] = (int)$seats_no[0] -1;
                              $query="Update hostel_seats Set ST_m=".$seats_no[0]." where hid='".$row['hid']."'";
                              $stmt = $mysqli->prepare($query);
                              $stmt->execute();

                    }

        }
  } // for female
else {
        if($row['caid'] ==1)
        {

          // query  for male and general category
          //$sql_hostel = 'SELECT GEN_m FROM hostel_seats where hid= '.$row['hid'] ;
          $seats_retrieval = mysqli_query( $mysqli,"select GEN_f FROM hostel_seats where hid='".$row['hid']."'");
          $seats_no = mysqli_fetch_row($seats_retrieval);
          echo " seats available for General Female  is: {$seats_no[0]} <br>";

                      if($seats_no[0] <=0)
                      {
                        echo "All seats reserved General Female <br>";
                      }
                        else {
                              // data includes student id  , student name ,college name , hostel name , hostel address
                              //$student_name = 'SELECT fname  FROM user_reg where stid= '.$row['stid'] ;
                              $name_retrieval = mysqli_query( $mysqli,"select fname  FROM user_reg where stid='".$row['stid']."'");
                              $name = mysqli_fetch_row($name_retrieval);
                              echo " name of student  is: {$name[0]} <br>";

                              // retrieving name of the college
                              //$college_name = 'SELECT c_name FROM college where cid= '.$row['cid'] ;
                              $college_retrieval = mysqli_query( $mysqli,"select c_name FROM college where cid='".$row['cid']."'");
                              $college = mysqli_fetch_row($college_retrieval);
                              echo " College name is: {$college[0]} <br>";

                              // retrieving name of the hostel

                              //$hostel_name = 'SELECT h_name FROM hostel where hid= '.$row['hid'] ;
                              $hostel_retrieval = mysqli_query( $mysqli,"select h_name FROM hostel where hid='".$row['hid']."'");
                              $hostel1 = mysqli_fetch_row($hostel_retrieval);
                              echo " Hostel name is: {$hostel1[0]} <br>";

                              // retrieving hostel address

                              //$hostel_address = 'SELECT h_address FROM hostel where hid= '.$row['hid'] ;
                              $hostel_address_retrieval = mysqli_query( $mysqli,"select h_address FROM hostel where hid='".$row['hid']."'");
                              $hostel2 = mysqli_fetch_row($hostel_address_retrieval);
                              echo " Hostel address is: {$hostel2[0]} <br> <br><br>";

                              $student_id_insert = $row['stid'];

                              $query="Insert Into admitted_students_table (stid , s_name , c_name , h_name , h_address) values(?,?,?,?,?)";
                              $stmt = $mysqli->prepare($query);
                              $rc=$stmt->bind_param('issss',$student_id_insert, $name[0] , $college[0], $hostel1[0],$hostel2[0]);
                              $stmt->execute();

                              // decrementing the seat value
                              $seats_no[0] = (int)$seats_no[0] -1;
                              $query="Update hostel_seats Set GEN_f=".$seats_no[0]." where hid='".$row['hid']."'";
                              $stmt = $mysqli->prepare($query);
                              $stmt->execute();

                    }
        }
        else if($row['caid'] ==2)
        {
               // query  for male and general category
          //$sql_hostel = 'SELECT GEN_m FROM hostel_seats where hid= '.$row['hid'] ;
          $seats_retrieval = mysqli_query( $mysqli,"select OBC_f FROM hostel_seats where hid='".$row['hid']."'");
          $seats_no = mysqli_fetch_row($seats_retrieval);
          echo " seats available for  Obc Female  is: {$seats_no[0]} <br>";

                      if($seats_no[0] <=0)
                      {
                        echo "All seats reserved OBC Female <br>";
                      }
                        else {
                              // data includes student id  , student name ,college name , hostel name , hostel address
                              //$student_name = 'SELECT fname  FROM user_reg where stid= '.$row['stid'] ;
                              $name_retrieval = mysqli_query( $mysqli,"select fname  FROM user_reg where stid='".$row['stid']."'");
                              $name = mysqli_fetch_row($name_retrieval);
                              echo " name of student  is: {$name[0]} <br>";

                              // retrieving name of the college
                              //$college_name = 'SELECT c_name FROM college where cid= '.$row['cid'] ;
                              $college_retrieval = mysqli_query( $mysqli,"select c_name FROM college where cid='".$row['cid']."'");
                              $college = mysqli_fetch_row($college_retrieval);
                              echo " College name is: {$college[0]} <br>";

                              // retrieving name of the hostel

                              //$hostel_name = 'SELECT h_name FROM hostel where hid= '.$row['hid'] ;
                              $hostel_retrieval = mysqli_query( $mysqli,"select h_name FROM hostel where hid='".$row['hid']."'");
                              $hostel1 = mysqli_fetch_row($hostel_retrieval);
                              echo " Hostel name is: {$hostel1[0]} <br>";

                              // retrieving hostel address

                              //$hostel_address = 'SELECT h_address FROM hostel where hid= '.$row['hid'] ;
                              $hostel_address_retrieval = mysqli_query( $mysqli,"select h_address FROM hostel where hid='".$row['hid']."'");
                              $hostel2 = mysqli_fetch_row($hostel_address_retrieval);
                              echo " Hostel address is: {$hostel2[0]} <br> <br><br>";

                              $student_id_insert = $row['stid'];

                              $query="Insert Into admitted_students_table (stid , s_name , c_name , h_name , h_address) values(?,?,?,?,?)";
                              $stmt = $mysqli->prepare($query);
                              $rc=$stmt->bind_param('issss',$student_id_insert, $name[0] , $college[0], $hostel1[0],$hostel2[0]);
                              $stmt->execute();

                              // decrementing the seat value
                              $seats_no[0] = (int)$seats_no[0] -1;
                              $query="Update hostel_seats Set OBC_f=".$seats_no[0]." where hid='".$row['hid']."'";
                              $stmt = $mysqli->prepare($query);
                              $stmt->execute();

                    }

        }
        else if($row['caid'] ==3)
        {
          // query male and SC
          $seats_retrieval = mysqli_query( $mysqli,"select SC_f FROM hostel_seats where hid='".$row['hid']."'");
          $seats_no = mysqli_fetch_row($seats_retrieval);
          echo " seats available for  SC Female  is: {$seats_no[0]} <br>";

                      if($seats_no[0] <=0)
                      {
                        echo "All seats reserved SC Female <br>";
                      }
                        else {
                              // data includes student id  , student name ,college name , hostel name , hostel address
                              //$student_name = 'SELECT fname  FROM user_reg where stid= '.$row['stid'] ;
                              $name_retrieval = mysqli_query( $mysqli,"select fname  FROM user_reg where stid='".$row['stid']."'");
                              $name = mysqli_fetch_row($name_retrieval);
                              echo " name of student  is: {$name[0]} <br>";

                              // retrieving name of the college
                              //$college_name = 'SELECT c_name FROM college where cid= '.$row['cid'] ;
                              $college_retrieval = mysqli_query( $mysqli,"select c_name FROM college where cid='".$row['cid']."'");
                              $college = mysqli_fetch_row($college_retrieval);
                              echo " College name is: {$college[0]} <br>";

                              // retrieving name of the hostel

                              //$hostel_name = 'SELECT h_name FROM hostel where hid= '.$row['hid'] ;
                              $hostel_retrieval = mysqli_query( $mysqli,"select h_name FROM hostel where hid='".$row['hid']."'");
                              $hostel1 = mysqli_fetch_row($hostel_retrieval);
                              echo " Hostel name is: {$hostel1[0]} <br>";

                              // retrieving hostel address

                              //$hostel_address = 'SELECT h_address FROM hostel where hid= '.$row['hid'] ;
                              $hostel_address_retrieval = mysqli_query( $mysqli,"select h_address FROM hostel where hid='".$row['hid']."'");
                              $hostel2 = mysqli_fetch_row($hostel_address_retrieval);
                              echo " Hostel address is: {$hostel2[0]} <br> <br><br>";

                              $student_id_insert = $row['stid'];

                              $query="Insert Into admitted_students_table (stid , s_name , c_name , h_name , h_address) values(?,?,?,?,?)";
                              $stmt = $mysqli->prepare($query);
                              $rc=$stmt->bind_param('issss',$student_id_insert, $name[0] , $college[0], $hostel1[0],$hostel2[0]);
                              $stmt->execute();

                              // decrementing the seat value
                              $seats_no[0] = (int)$seats_no[0] -1;
                              $query="Update hostel_seats Set SC_f=".$seats_no[0]." where hid='".$row['hid']."'";
                              $stmt = $mysqli->prepare($query);
                              $stmt->execute();

                    }
        }
        else if($row['caid'] ==4)
        {
              // query male and ST
              $seats_retrieval = mysqli_query( $mysqli,"select ST_f FROM hostel_seats where hid='".$row['hid']."'");
          $seats_no = mysqli_fetch_row($seats_retrieval);
          echo " seats available for  ST Female  is: {$seats_no[0]} <br>";

                      if($seats_no[0] <=0)
                      {
                        echo "All seats reserved ST Female <br>";
                      }
                        else {
                              // data includes student id  , student name ,college name , hostel name , hostel address
                              //$student_name = 'SELECT fname  FROM user_reg where stid= '.$row['stid'] ;
                              $name_retrieval = mysqli_query( $mysqli,"select fname  FROM user_reg where stid='".$row['stid']."'");
                              $name = mysqli_fetch_row($name_retrieval);
                              echo " name of student  is: {$name[0]} <br>";

                              // retrieving name of the college
                              //$college_name = 'SELECT c_name FROM college where cid= '.$row['cid'] ;
                              $college_retrieval = mysqli_query( $mysqli,"select c_name FROM college where cid='".$row['cid']."'");
                              $college = mysqli_fetch_row($college_retrieval);
                              echo " College name is: {$college[0]} <br>";

                              // retrieving name of the hostel

                              //$hostel_name = 'SELECT h_name FROM hostel where hid= '.$row['hid'] ;
                              $hostel_retrieval = mysqli_query( $mysqli,"select h_name FROM hostel where hid='".$row['hid']."'");
                              $hostel1 = mysqli_fetch_row($hostel_retrieval);
                              echo " Hostel name is: {$hostel1[0]} <br>";

                              // retrieving hostel address

                              //$hostel_address = 'SELECT h_address FROM hostel where hid= '.$row['hid'] ;
                              $hostel_address_retrieval = mysqli_query( $mysqli,"select h_address FROM hostel where hid='".$row['hid']."'");
                              $hostel2 = mysqli_fetch_row($hostel_address_retrieval);
                              echo " Hostel address is: {$hostel2[0]} <br> <br><br>";

                              $student_id_insert = $row['stid'];

                              $query="Insert Into admitted_students_table (stid , s_name , c_name , h_name , h_address) values(?,?,?,?,?)";
                              $stmt = $mysqli->prepare($query);
                              $rc=$stmt->bind_param('issss',$student_id_insert, $name[0] , $college[0], $hostel1[0],$hostel2[0]);
                              $stmt->execute();

                              // decrementing the seat value
                              $seats_no[0] = (int)$seats_no[0] -1;
                              $query="Update hostel_seats Set ST_f=".$seats_no[0]." where hid='".$row['hid']."'";
                              $stmt = $mysqli->prepare($query);
                              $stmt->execute();

                    }

        }
}
// DATA PRINTING ON THE WEB PAGE
  // echo "gender  :{$row['gender']}  <br> ".
  //  " caid : {$row['caid']} <br> ".
  //  "hid: {$row['hid']} <br> ".
  //  "seats : {$seats[0]} <br>".
  //  "--------------------------------<br>";
  end:
}

echo "Fetched data successfully\n";

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="0; url=manage-students.php" />
</head>
</html>