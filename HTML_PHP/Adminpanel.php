<?php
 session_start();
 include("DBConnection.php");

 $myusername = $_SESSION["adname"];
 $sql = "SELECT * FROM admin WHERE admin_name ='$myusername'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin profile page</title>
	<link rel="stylesheet" type="text/css" href="../css/Adminpanel.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>
 <header>
  <div class="header_menu" id="first">
    <div class="logo"> 
    <img src="../pic/1st.jpg" alt="collagelogo" alt="collagelogo"> 
    </div >
    <h1 id="las"> MALDA COLLAGE</h1>

  <div class="menu_list" id="menu_small">
  <ul>
   <div class="astr"> 
     <li> <a href="Adminpanel.php" id="gap" class="active" >ADMIN PROFILE</a> </li> 
      <li> <a href="ADDepartment.php" class="dactive" >ADD DEPARTMENT</a> 
     </li>  
     <li> <a href="Adepartments.php" class="dactive" >ALL DEPARTMENT</a> 
     </li>  
     <li> <a href="Aeventbookhistory.php" class="dactive">BOOK HISTORY</a> </li>
     <li> <a href="Afeedbacks.php" class="dactive">FEEDBACKS</a> </li>         
     <li> <a href="javascript:confirmalert()" class="dactive">LOGOUT</a> </li>  
    </div>  
  </ul>
  
        </div>
        <a href="#" id="iconbar" onclick="responsive_menu()"><i class="fa fa-bars"></i></a> 
        </div>


  <form class="loginbox" id="second" action="" method="post">
    <h2>Admin profile</h2>
      <table class="assult">
     	
     		<tr>
     			  <th >
     			   Admin-Name:
     		    </th>
     		  	<td class="pssd">
     		    	<input type="text" placeholder="<?php echo $row['admin_name'];?>" name=""  readonly >
     		    </td> 
     		</tr>
     
     
     		<tr>
     			<th >
     			    Password:
     		 </th>
     		 <td class="pssd">
     		    	<input type="password" placeholder="<?php echo $row['password'];?>" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more charecters." readonly>
     		 </td> 
     		</tr>

     		<tr>
     			<th >
     			     Phone No:
     		    </th>
     		    <td class="pssd">
     		    	<input type="long number" placeholder="<?php echo $row['contact'];?>" name="phone" pattern="^\d{10}$" title="Enter 10 digit mobile number." readonly>
     		    </td>
            
     		</tr>

     		<tr>
     			<th >
     			     Email-Id:
     		    </th>
     		    <td class="pssd">
     		    	<input type="text" placeholder="<?php echo $row['email_id'];?>" name="email" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" title="Please valid email id !!!" readonly>
     		    </td>
     		</tr>        
     </table>
      
       <a class="arrow" href="AInfoupdate.php"><span>Update Info...<span></a>

   </form>
 </header>

<script type="text/javascript">
    function confirmalert(){
    var userselection = confirm("Are you sure you want to logout?");
    if (userselection == true){
        alert("You are looged out");
        window.location.href = 'logout.php';
                  
      }
    else{
        alert("Your account is not logged out!");
        window.location.href = 'Adminpanel.php';
    }    
    }
</script>    
 

</body>
</html>


<script>
  function responsive_menu(){
    var e = document.getElementById('menu_small');
    if(e.className === 'menu_list'){
        e.className += " responsive";
    }
    else
    {
      e.className = 'menu_list';
    }
}
</script>
