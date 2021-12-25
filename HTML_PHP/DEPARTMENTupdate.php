<?php
 session_start();
 if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
  include("DBConnection.php");
  $myusername = $_GET['id'];
  $mypassword = $_POST['password'];
  $myphone = $_POST['phone'];
  $myemail = $_POST['email'];

 
  if(empty($mypassword) && empty($myphone) && empty($myemail)){
        $message = "Nothing updated,click ok to redirect to the page.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Adepartments.php';
        </script>";
  
    }
     else if(empty($myphone) && empty($myemail)){
        $sql = "UPDATE user SET password='$mypassword' WHERE dept_name='$myusername'"; 
        $result = mysqli_query($db,$sql);
        if($result){
         $message = "Password updated successfully,click ok .";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Adepartments.php';
        </script>";
        
        }
        
      }
    else if(empty($mypassword) && empty($myemail)){
        $sql1 = "UPDATE user SET contact='$myphone' WHERE dept_name='$myusername'";       
        $result1 =  mysqli_query($db,$sql1);
        if($result1){
        $message = "Phone number updated successfully,click ok to redirect to the page.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Adepartments.php';
        </script>";
  
        } 
      }
     else if(empty($mypassword) && empty($myphone)){
        $sql2 = "UPDATE user SET email='$myemail' WHERE dept_name='$myusername'";       
        $result2 =  mysqli_query($db,$sql2);
        if($result2){
          $message = "Email updated successfully,click ok to redirt to the page,";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Adepartments.php';
        </script>";
        }       
      }
     else if(empty($mypassword)){
        $sql2 = "UPDATE user SET email='$myemail',contact='$myphone' WHERE dept_name='$myusername'";       
        $result2 =  mysqli_query($db,$sql2);
        if($result2){
          $message = "Phone number and Email updated successfully,click ok to redirt to the page,";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Adepartments.php';
        </script>";
        }
      }
     else if(empty($myphone)){
        $sql2 = "UPDATE user SET email='$myemail',password='$mypassword' WHERE dept_name='$myusername'";       
        $result2 =  mysqli_query($db,$sql2);
        if($result2){
           $message = "Password  and Email updated successfully,click ok.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Adepartments.php';
        </script>";
        }
      }
     else if(empty($myemail)){
        $sql2 = "UPDATE user SET contact='$myphone',password='$mypassword' WHERE dept_name='$myusername'";       
        $result2 =  mysqli_query($db,$sql2);
        if($result2){
           $message = "Password and Phone number updated successfully,click ok .";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Adepartments.php';
        </script>";
        }
      }

     else{
        $sql = "UPDATE user SET password='$mypassword',contact='$myphone',email='$myemail' WHERE dept_name='$myusername'"; 
        $result = mysqli_query($db,$sql);
        if($result){
           $message = "Password,Phone number and Email updated successfully,click ok .";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Adepartments.php';
        </script>";
        }
      }

 }

?>



<!DOCTYPE html>
<html>
<head>
  <title> MOdify department details </title>
  <link rel="stylesheet" type="text/css" href="../css/DEPARTMENTupdate.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>
 <header>

  <form class="loginbox" id="second" action="" method="post">
    <h2>Modify details</h2>
      <table class="assult">
      
        <tr>
            <th >
             Department-Name:
            </th>
            <td class="pssd">
              <input type="text" placeholder="<?php echo $_SESSION['dept'];  ?>" name=""  readonly >
            </td> 
        </tr>
     
     
        <tr>
          <th >
              Password:
         </th>
         <td class="pssd1">
              <input type="password" placeholder="Enter New Password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more charecters.">
         </td> 
        </tr>

        <tr>
          <th >
               Phone No:
            </th>
            <td class="pssd1">
              <input type="long number" placeholder="Enter New Phone No." name="phone" pattern="^\d{10}$" title="Enter 10 digit mobile number.">
            </td>
            
        </tr>

        <tr>
          <th >
               Email-Id:
            </th>
            <td class="pssd1">
              <input type="text" placeholder="Enter New Email Id" name="email" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" title="Please valid email id !!!" >
            </td>
        </tr>
       
       <tr>
          <td>     
          <button class="btn" type="submit" name="update"><span>Update</span></button>    
          </td>
      </tr>

     </table>

   </form>
 </header> 

</body>
</html>
