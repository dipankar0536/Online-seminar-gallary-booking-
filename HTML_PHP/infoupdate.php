<?php
 session_start();
 include("DBConnection.php");

 $myusername = $_SESSION["fname"];
 $_SESSION["dept"]= $myusername;
 $sql = "SELECT * FROM user WHERE dept_name ='$myusername'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Booking page</title>
	<link rel="stylesheet" type="text/css" href="../css/Infoupdate1.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>
 <header>
  <div class="header_menu" id="first">
        <div class="logo"> 
        <img src="../pic/logo.jpg" alt="collagelogo"> 
        </div>
        <h1> MALDA COLLAGE</h1>
         <div class="menu_list"  id="menu_small"> 
        <ul>
         <li> <a href="event.php" class="active">DETAILS</a></li>
         <li><a href="book-a-event.php"  >BOOK - EVENT</a></li>    
         <li><a href="table1.php" >BOOKING HISTORY</a></li>
         <li><a href="feedback.php" >FEEDBACK</a></li>
         <li><a href="javascript:confirmalert()" >LOGOUT</a></li>                                           
        </ul>
  </div>
        <a href="#" id="iconbar" onclick="responsive_menu()"><i class="fa fa-bars"></i></a>  
  </div>


  <form class="loginbox" id="second" action="pevent.php" method="post">
    <h2>modify - details</h2>
      <table class="assult">
     	
     		<tr>
     			  <th >
     			   Department-Name:
     		    </th>
     		  	<td class="pssd">
     		    	<input type="text" placeholder="<?php echo $row['dept_name'];?>" name="" readonly>
     		    </td> 
     		</tr>
     
     
     		<tr>
     			<th >
     			    Password:
     		 </th>
     		 <td class="pssd1">
     		    	<input type="password" placeholder="<?php echo $row['password'];?>" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more charecters.">
     		 </td> 
     		</tr>

     		<tr>
     			<th >
     			     Phone No:
     		    </th>
     		    <td class="pssd1">
     		    	<input type="long number" placeholder="<?php echo $row['contact'];?>" name="phone" pattern="^\d{10}$" title="Enter 10 digit mobile number." >
     		    </td>
            
     		</tr>

     		<tr>
     			<th >
     			     Email-Id:
     		    </th>
     		    <td class="pssd1">
     		    	<input type="text" placeholder="<?php echo $row['email'];?>" name="email" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" title="Please valid email id !!!">
     		    </td>
     		</tr>
    
    <tr>
      <th>
       <button class="btn1" type="submit" onclick="window.location.href='event.php';"><span> Back</span></button>
      </th>
      <td>     
      <button class="btn" type="submit" name="update"><span>Update</span></button>    
      </td>
    </tr>

     </table>
 
   
      
   </form>
 </header>   
 

</body>
</html>

