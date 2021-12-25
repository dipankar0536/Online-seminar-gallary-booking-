
<?php 
 session_start();
 include("DBConnection.php"); 

if($_SERVER['REQUEST_METHOD'] == 'POST') 
  {   $myusername =  $_SESSION["dept"];
      $mypassword = $_POST["password"];
      $myphone = $_POST["phone"];
      $myemail = $_POST["email"];
      
      
  
    if(empty($mypassword) && empty($myphone) && empty($myemail)){
        $message = "Nothing updated,click ok to redirect to the page.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'event.php';
        </script>";
  
    }
     else if(empty($myphone) && empty($myemail)){
        $sql = "UPDATE user SET password='$mypassword' WHERE dept_name='$myusername'"; 
        $result = mysqli_query($db,$sql);
        if($result){
         $message = "Password updated successfully,click ok to go login page.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'login.php';
        </script>";
        
        }
        
      }
    else if(empty($mypassword) && empty($myemail)){
        $sql1 = "UPDATE user SET contact='$myphone' WHERE dept_name='$myusername'";       
        $result1 =  mysqli_query($db,$sql1);
        if($result1){
        $message = "Phone number updated successfully,click ok to redirect to the page.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'event.php';
        </script>";
  
        } 
      }
     else if(empty($mypassword) && empty($myphone)){
        $sql2 = "UPDATE user SET email='$myemail' WHERE dept_name='$myusername'";       
        $result2 =  mysqli_query($db,$sql2);
        if($result2){
          $message = "Email updated successfully,click ok to redirt to the page,";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'event.php';
        </script>";
        }       
      }
     else if(empty($mypassword)){
        $sql2 = "UPDATE user SET email='$myemail',contact='$myphone' WHERE dept_name='$myusername'";       
        $result2 =  mysqli_query($db,$sql2);
        if($result2){
          $message = "Phone number and Email updated successfully,click ok to redirt to the page,";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'event.php';
        </script>";
        }
      }
     else if(empty($myphone)){
        $sql2 = "UPDATE user SET email='$myemail',password='$mypassword' WHERE dept_name='$myusername'";       
        $result2 =  mysqli_query($db,$sql2);
        if($result2){
           $message = "Password  and Email updated successfully,click ok to redirt to the login page,";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'login.php';
        </script>";
        }
      }
     else if(empty($myemail)){
        $sql2 = "UPDATE user SET contact='$myphone',password='$mypassword' WHERE dept_name='$myusername'";       
        $result2 =  mysqli_query($db,$sql2);
        if($result2){
           $message = "Password and Phone number updated successfully,click ok to redirt to the login page,";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'login.php';
        </script>";
        }
      }

     else{
        $sql = "UPDATE user SET password='$mypassword',contact='$myphone',email='$myemail' WHERE dept_name='$myusername'"; 
        $result = mysqli_query($db,$sql);
        if($result){
           $message = "Password,Phone number and Email updated successfully,click ok to redirt to the login page,";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'login.php';
        </script>";
        }
      }

   }

 mysqli_close($db);
 ?>      