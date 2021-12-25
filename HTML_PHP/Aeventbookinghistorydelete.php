 <?php
 session_start();
 include("DBConnection.php");
 $bookid = $_GET['id'];
 
  $sql1 = "SELECT * FROM alleventbooking WHERE booking_id='$bookid'";
  $result1 = mysqli_query($db,$sql1);
  $row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
  
 date_default_timezone_set('Asia/Calcutta');
  $date = date('Y-m-d-H-i-s');
  $resul=explode('-', $date);
  $date1=$resul[2].'-'.$resul[1].'-'.$resul[0];

  $date2 = $row['event_date'];
  echo  $date2;
  echo "<br>";
  echo  $date1;
  echo "<br>";
  $dateTimestamp1 = strtotime($date1);
  $dateTimestamp2 = strtotime($date2);
  
  if ($dateTimestamp1 > $dateTimestamp2){
    $message = "You can not delete any history of events only can cancel upcoming events.Thank you.";
         echo "<script type='text/javascript'>alert('$message');
             window.location.href = 'Aeventbookhistory.php';
             </script>";
  }
 else if($dateTimestamp1 == $dateTimestamp2)
   {
   $sql = "DELETE  FROM alleventbooking WHERE booking_id='$bookid'";

     $result = mysqli_query($db,$sql);
        if($result)
         $message = "The event  of today ($date2)  cancelled successfuly,click ok .";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href = 'Aeventbookhistory.php';
        </script>";
        
   }
   else{

      $sql = "DELETE  FROM alleventbooking WHERE booking_id='$bookid'";

      $result = mysqli_query($db,$sql);
        if($result)
         $message = "The upcoming  event on $date2 cancelled successfuly,click ok .";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href = 'Aeventbookhistory.php';
        </script>";
   }
 
 mysqli_close($db);
?>