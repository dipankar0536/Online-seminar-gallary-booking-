<?php
session_start();
 include("DBConnection.php");
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
       $gototp = $_POST["otp"];
       $mydept = $_SESSION['dname'];
       $myphn = $_SESSION['phone'];
       $myemail = $_SESSION['email'];
	
     $sql = "SELECT otp FROM user WHERE dept_name='$mydept'"; 
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      

      $sql1 = "SELECT otp FROM user WHERE contact='$myphone'";  
      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
     

      
        if( ($row['otp'] == $gototp) || ($row1['otp'] == $gototp) )
      {   
      	$_SESSION["dept"] = $mydept;
        $_SESSION["email"] = $myemail;
         
        $message = "OTP verified successfully,Click ok.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'reset.php';
        </script>";

      }
      else{
      	$message = "OTP is not verified ,Click ok.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'otp.php';
        </script>";
      }
   
  }

mysqli_close($db);
?>