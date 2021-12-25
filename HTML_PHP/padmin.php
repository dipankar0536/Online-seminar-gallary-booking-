<?php 
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') 
  { 
     include("DBConnection.php");
     
      $myusername = $_POST["admin"]; 
      $mypassword = $_POST["pass"];
  
      $sql = "SELECT * FROM admin WHERE admin_name='$myusername'";
      $sql1= "SELECT * FROM admin WHERE password='$mypassword'";
      
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $result_check = mysqli_num_rows($result);

      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
      $result_check1 = mysqli_num_rows($result1);

       if($result_check < 0 || $result_check1 < 0)
       {
        $message = "The password or the admin-id is wrong,click ok.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'admin.php';
        </script>";    
       }
       elseif($mypassword == $row["password"])
           {
             $_SESSION["adname"] =$myusername;  
            header("location:Adminpanel.php");
           }
           else
           {
             $message = "The password or the admin-id is wrong,click ok.";
             echo "<script type='text/javascript'>alert('$message');
             window.location.href = 'admin.php';
             </script>";
           }
   }

 mysqli_close($db);
?>      