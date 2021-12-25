<?php
session_start();
include("DBConnection.php");
$bookid = $_GET['id'];

 $q = "DELETE  FROM alleventbooking WHERE booking_id='$bookid'";

 $result=mysqli_query($db,$q);


 if(!$result){
  	$message = "Cancellation can not be done ,unsuccesfull.Please try again";
    echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'book-a-event.php';
        </script>";
  } 
  else
  {
      $sql1 = "SELECT * FROM alleventbooking WHERE booking_id='$bookid'";
      $result1 = mysqli_query($db,$sql1);
      $row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
      $date2 = $row['event_date'];  
    

  	$message = "The upcoming  event on $date2 cancelled successfuly,click ok .";
    echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'book-a-event.php';
        </script>";
  }

 mysqli_close(); 
?>