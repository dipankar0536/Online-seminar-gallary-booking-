
<?php 
session_start();
 include("DBConnection.php"); 

if($_SERVER['REQUEST_METHOD'] == 'POST') 
  { 
      $myusername = $_POST["username"]; 
      $mypassword = $_POST["password"];
  
      $sql = "SELECT * FROM user WHERE dept_name='$myusername'";
      $sql1= "SELECT * FROM user WHERE password='$mypassword'";
      
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $result_check = mysqli_num_rows($result);

      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
      $result_check1 = mysqli_num_rows($result1);

       if($result_check < 0 || $result_check1 < 0)
        {
         $message = "The password or the department id is wrong,click ok.";
         echo "<script type='text/javascript'>alert('$message');
          window.location.href = 'login.php';
         </script>";
        }
         elseif($mypassword == $row["password"])
          {
          $_SESSION['fname'] = $myusername;
          header("location:event.php");            
          }
           else
           {
              $message = "The password or the department id is wrong,click ok.";
              echo "<script type='text/javascript'>alert('$message');
               window.location.href = 'login.php';
              </script>";
           }
  }

 mysqli_close($db);
?>      