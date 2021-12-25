<?php
session_start();
 include("DBConnection.php");
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
       $gototp = $_POST["otp"];
       $myadmin = $_SESSION['aname'];
       $myphn = $_SESSION['phone'];
       
	
     $sql = "SELECT otp FROM admin WHERE admin_name='$myadmin'"; 
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      

      $sql1 = "SELECT otp FROM admin WHERE contact='$myphone'";  
      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
     

      
    if( ($row['otp'] == $gototp) || ($row1['otp'] == $gototp) )
      {   
      	$_SESSION["admin"] = $myadmin;
        $_SESSION["email"] = $myemail;
         
        $message = "OTP verified successfully,Click ok.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Areset.php';
        </script>";

      }
      else{
      	$message = "OTP is not verified ,Click ok.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Aotp.php';
        </script>";
      }
   
  }

mysqli_close($db);
?>