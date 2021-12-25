<!DOCTYPE html>
<html>
<head>
   <title>forgot pasword page</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <link rel="stylesheet" type="text/css" href="..\css\Forgotpas1.css">
</head>
<body>       
   <form class="loginbox"- action="pforgotpass.php" method="post">
     <table class="assult">
     	      <h3><u>forgot password</u> ?</h3>
              <tr>
     			<th >
     			    Department-name:
         		</th>
     		 
            	<td class="pssd">
     		    	<input type="text" placeholder="Department name" name="department_name" required>
     	        </td>
              </tr>

              <tr>   
                <th >
     			     Phone-no:
         		</th>
     		 
            	<td class="pssd1">
     		    	<input type="text" placeholder="Enter registered phone no." name="phone" required>
     	        </td>
     	      </tr>

     	      <tr>   
     	        <th >
     			     Email-id:
         		</th>
     		 
            	<td class="pssd1">
     		    	<input type="text" placeholder="Enter registered email-id" name="email" required>
     	        </td>
              </tr>

              <tr>   
                <td>
                     <button class="btn" type="submit" name="submit"><span>Send OTP</span></button> 
                </td>
             </tr>
          
     </table>
  </form>

</body>
</html>