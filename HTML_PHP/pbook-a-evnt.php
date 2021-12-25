<?php
 
 session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') 
  {  
    include("DBConnection.php"); 
      $mydept = $_SESSION["dept"];  
      $myevent = $_POST["eventtype"];
      $mydate = $_POST["date"];
 
 //link of current date   
     date_default_timezone_set('Asia/Calcutta');
     $date = date('Y-m-d-H-i-s');
    
//exploding  date.....
   $result=explode('/', $mydate);
   $mdate=$result[1].'-'.$result[0].'-'.$result[2];
   
//current date and time exploading.....

   $resul=explode('-', $date);
   $date1=$resul[2].'-'.$resul[1].'-'.$resul[0];
   $time=$resul[3].':'.$resul[4].':'.$resul[5];
     
 
  $sql1 = "SELECT * FROM alleventbooking WHERE event_date='$mdate'";
   $result1 = mysqli_query($db,$sql1);
  
      $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
 
    
    $result_check1 = mysqli_num_rows($result1);
   
    
       function generateRandomString($length){ 
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $charsLength = strlen($characters) -1;
        $string = "";
        for($i=0; $i<$length; $i++){
        $randNum = mt_rand(0, $charsLength);
        $string .= $characters[$randNum];
    }
    return $string;
    }
       $mybookingid=generateRandomString(10);
   
     
    if($result_check1 <= 0 ){
      $sql1 = "INSERT INTO alleventbooking (dept_name,booking_id, event_type, event_date,booking_date,booking_time) VALUES ('$mydept','$mybookingid', '$myevent', '$mdate',' $date1',' $time')";

        $run_query = mysqli_query($db, $sql);
         $run_query = mysqli_query($db, $sql1);
        $_SESSION['id'] = $mybookingid ;

        $message = "Your booking is succesfull, click ok.";
         echo "<script type='text/javascript'>alert('$message');
             window.location.href = 'table0.php';
             </script>";

    }else
       {             
           $message = "Sorry the date is already booked,please try another date, click ok.";
           echo "<script type='text/javascript'>alert('$message');
             window.location.href = 'book-a-event.php';
            </script>";  

    }
   
  }
    
?>
      