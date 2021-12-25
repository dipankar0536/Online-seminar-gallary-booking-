
<?php 
session_start();
 include("DBConnection.php"); 

if($_SERVER['REQUEST_METHOD'] == 'POST') 
  {  
      $mydept = $_POST["department_name"];
      $myphone = $_POST["phone"];
      $myemail = $_POST["email"];
      
  
      $sql = "SELECT * FROM user WHERE dept_name='$mydept'";
      $sql1 = "SELECT * FROM user WHERE contact='$myphone'";
      $sql2 = "SELECT * FROM user WHERE email='$myemail'";

      
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $result_check = mysqli_num_rows($result);
 
      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
      $result_check1 = mysqli_num_rows($result1);

      $result2 = mysqli_query($db,$sql2);
      $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
      $result_check2 = mysqli_num_rows($result2);

        
         if($result_check < 0 || $result_check1 < 0 || $result_check2 < 0)
       {
         $message = "The password or the department name or email is wrong.Click ok to redirect to the page.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'forgotpass.php';
        </script>";
        
       }else 
       {
         if( ($row['password'] == $row1['password']) && ($row1['password'] == $row2['password']) && ($row['password'] == $row2['password']))
            {  
            $_SESSION['dname'] = $row['dept_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phone'] = $row['contact'];    
                    require('textlocal.class.php');

                    define("API_KEY", ' mwDpFo9977k-EzuMM2FHnVmb1tq27fGGwEMuQmXPwb');

                    $textlocal = new Textlocal(false,false,API_KEY);

                    $numbers = array($myphone);
                    $sender = 'TXTLCL';
                    $myotp=mt_rand(10000, 99999);
                     
                     $sql2 = "UPDATE user SET otp='$myotp' WHERE dept_name='$mydept'";       
                     $result2 =  mysqli_query($db,$sql2);
                    
                    $message = "Wellcome  to malda college seminar gallary"."This is OTP:".$myotp ;

                    try {
                      $result = $textlocal->sendSms($numbers, $message, $sender);

                      $message1 = "OTP send successfully to the mobile number.Please check your mobile to get the otp pin for PASSWORD RESET.";

                      echo "<script type='text/javascript'>alert('$message1');
                      window.location.href = 'otp.php';
                      </script>"; 

                    } catch (Exception $e) {
                      die('Error: ' . $e->getMessage());
                    }

           
            }else
           {
              $message = "The information for corrosponding account in not matched.,click ok to redirect to the  page.";
              echo "<script type='text/javascript'>alert('$message');
               window.location.href = 'forgotpass.php';
              </script>";

           }
       }

  }

 mysqli_close($db);
 ?>      