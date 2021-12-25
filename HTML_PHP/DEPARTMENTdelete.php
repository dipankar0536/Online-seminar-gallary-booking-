<?php

include("DBConnection.php");
$mydept = $_GET['id'];
$q = "DELETE FROM user WHERE dept_name='$mydept'";
$q1 = "DELETE FROM feedback WHERE dept_name='$mydept'";
$q2 = "DELETE FROM alleventbooking WHERE dept_name='$mydept'";

$result=mysqli_query($db,$q);
$result1=mysqli_query($db,$q1);
$result2=mysqli_query($db,$q2);


 if(!$result){
  	$message = "$mydept DEPARTMENT account and all its details deletion can not be done ,unsuccesfull";
    echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'Adepartments.php';
        </script>";
  } 
  else
  {
  	$message = "$mydept DEPARTMENT account and all its details deleted succesfully";
    echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'Adepartments.php';
        </script>";
  }
?>