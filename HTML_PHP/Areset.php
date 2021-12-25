<?php

session_start();
include("DBConnection.php");
$myadmin = $_SESSION["admin"];
$myemail = $_SESSION["email"];

if($_SERVER['REQUEST_METHOD'] == 'POST') 
  { 
      $mypassword1 = $_POST["password1"]; 
      $mypassword2 = $_POST["password2"];

      if($mypassword1 == $mypassword2){
          
         $sql = "UPDATE admin SET password='$mypassword1' WHERE email='$myemail'"; 
         $result = mysqli_query($db,$sql);
         
         if($result){
          $message = "Password reset successfully,click ok to go admin login page.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'admin.php';
        </script>";
         }
         else{
          $message = "Sorry we seems some technical problem at the moment,click ok.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Areset.php';
        </script>";
         }

                  
      }
       else{
        $message = "Please enter same password,click ok.";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href = 'Areset.php';
        </script>";
       }

  }

mysqli_close($db);
?>

<!DOCTYPE html>
<html>
<head>
   <title>Admin password reset page</title>
   <link rel="stylesheet" type="text/css" href="..\css\reset.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>     
     <form class="loginbox" action="" method="post" >
      <table class="assult">
     	
           <center> <h1> password reset</h1></center>

             <tr>
     			<th >
     			    Admin-Name :
         		</th>
     		 
            	<td class="pssd">
     		    	<input type="text" placeholder="<?php echo $myadmin;?>" name="admin_name"  readonly>
     	        </td>
             </tr>

             <tr>   
                <th >
     			     New password :
         		</th>
     		 
            	<td class="pssd2">
     		    	<input type="password" placeholder="New Password"  name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters." required>
     	        </td>
     	     </tr>

     	     <tr>   
                <th >
                     Confirm password :
                </th>
             
                <td class="pssd2">
                    <input type="password"  placeholder="Confirm-Password" name="password2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Re-enter the password,pls!." required>
                </td>
             </tr>

             <tr>   
     	        <th>
     			     Email-id :
         		</th>
     		 
            	<td class="pssd1">
     		    	<input type="text" placeholder="<?php echo $myemail;?>" name="email" readonly>
     	        </td>
             </tr>
           
           
             <tr>   
                <td>
                    <button class="btn" type="submit" name="submit"><span>Submit</span></button>
                </td>
             </tr>
           
          
     </table>
  </form>




</body>
</html>
