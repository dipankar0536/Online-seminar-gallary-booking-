<?php 
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') 
  { 
     include("DBConnection.php");
     
      $mydept = $_POST["newdept"]; 
      $mypassword1 = $_POST["password1"];
      $mypassword2 = $_POST["password2"];
      $myphone = $_POST["phone"];
      $myemail = $_POST["email"];
  
      if($mypassword1 == $mypassword2)
      {   
          //for department name checking      
          $sql = "SELECT * FROM user where dept_name='$mydept'";  
          $result = mysqli_query($db,$sql);    
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          $result_check = mysqli_num_rows($result);
           
           //for email checking

           $sql1 = "SELECT * FROM user where email='$myemail'";
           $result1 = mysqli_query($db,$sql1);
           $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
           $result_check1 = mysqli_num_rows($result1);  



             if($result_check == 0) 
             {
                if($result_check1 == 0)
                  {
                   $sql3 = "INSERT into user(dept_name,password,contact,email) VALUES('$mydept','$mypassword1','$myphone','$myemail') "; 
                   $result3 =  mysqli_query($db,$sql3);
                   
                     if($result3){
                        $message = "$mydept Department is added .click ok.";
                        echo "<script type='text/javascript'>alert('$message');
                         window.location.href = 'Adminpanel.php';
                        </script>";
                     }                      


                  }
                 else{
                    $message = "Sorry! email id must be unique,your entered mail id already exist,can not be added.click ok.";
                    echo "<script type='text/javascript'>alert('$message');
                     window.location.href = 'ADDepartment.php';
                    </script>";
                 }

             }
              else{
                $message = "Sorry! Department name already exist,can not be added.click ok.";
                echo "<script type='text/javascript'>alert('$message');
                 window.location.href = 'ADDepartment.php';
                </script>";
              }
      }
       else{
       $message = "The password mis-matched,click ok.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'ADDepartment.php';
        </script>";
       }
   }

 mysqli_close($db);
?>      