
<?php 
 session_start();
 include("DBConnection.php"); 

if($_SERVER['REQUEST_METHOD'] == 'POST') 
  {   $myadminname = $_SESSION["adname"];
      $mypassword = $_POST["password"];
      $myphone = $_POST["phone"];
      $myemail = $_POST["email"];
      
       
    if(empty($mypassword) && empty($myphone) && empty($myemail)){
        $message = "Nothing updated,click ok to redirect to the page.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Adminpanel.php';
        </script>";
  
    }
     else if(empty($myphone) && empty($myemail)){
        $sql = "UPDATE admin SET password='$mypassword' WHERE admin_name='$myadminname'"; 
        $result = mysqli_query($db,$sql);
        if($result){
         $message = "Password updated successfully,click ok to go login page.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'admin.php';
        </script>";
        
        }
        
      }
    else if(empty($mypassword) && empty($myemail)){
        $sql1 = "UPDATE admin SET contact='$myphone' WHERE admin_name='$myadminname'";       
        $result1 =  mysqli_query($db,$sql1);
        if($result1){
        $message = "Phone number updated successfully,click ok to redirect to the page.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Adminpanel.php';
        </script>";
  
        } 
      }
     else if(empty($mypassword) && empty($myphone)){
        $sql2 = "UPDATE admin SET email_id='$myemail' WHERE admin_name='$myadminname'";       
        $result2 =  mysqli_query($db,$sql2);
        if($result2){
          $message = "Email updated successfully,click ok to redirt to the page,";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Adminpanel.php';
        </script>";
        }       
      }
     else if(empty($mypassword)){
        $sql2 = "UPDATE admin SET email_id='$myemail',contact='$myphone' WHERE admin_name='$myadminname'";       
        $result2 =  mysqli_query($db,$sql2);
        if($result2){
          $message = "Phone number and Email updated successfully,click ok to redirt to the page,";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Adminpanel.php';
        </script>";
        }
      }
     else if(empty($myphone)){
        $sql2 = "UPDATE admin SET email_id='$myemail',password='$mypassword' WHERE admin_name='$myadminname'";       
        $result2 =  mysqli_query($db,$sql2);
        if($result2){
           $message = "Password  and Email updated successfully,click ok to redirt to the admin login page,";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'admin.php';
        </script>";
        }
      }
     else if(empty($myemail)){
        $sql2 = "UPDATE admin SET contact='$myphone',password='$mypassword' WHERE admin_name='$myadminname'";       
        $result2 =  mysqli_query($db,$sql2);
        if($result2){
           $message = "Password and Phone number updated successfully,click ok to redirt to the admin login page,";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'admin.php';
        </script>";
        }
      }

     else{
        $sql = "UPDATE admin SET password='$mypassword',contact='$myphone',email_id='$myemail' WHERE admin_name='$myadminname'"; 
        $result = mysqli_query($db,$sql);
        if($result){
           $message = "Password,Phone number and Email updated successfully,click ok to redirt to the admin login page,";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'admin.php';
        </script>";
        }
      }

   }

 mysqli_close($db);
 ?>      