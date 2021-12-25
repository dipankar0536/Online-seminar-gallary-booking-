<!DOCTYPE html>
<html>
<head>
       <title>Add Department</title>
       <link rel="stylesheet" type="text/css" href="../css/ADDepartments.css">
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
     <li> <a href="Adminpanel.php" id="gap" class="dactive">ADMIN PROFILE</a> </li> 
      <li> <a href="ADDepartment.php" class="active" >ADD DEPARTMENT</a> 
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

    <form class="loginbox" id="second" action="ADDingdepartment.php" method="post">
      <h2>New Department</h2>
        <table class="assult">
     	
     		<tr>
     			  <th >
     			   Department-Name:
     		    </th>
     		  	<td class="pssd">
     		    	<input type="text" placeholder="Department Name" name="newdept" required>
     		    </td> 
     		</tr>
     
     
     		<tr>
     			<th >
     			    Password:
     		 </th>
     		 <td class="pssd1">
     		    	<input type="password" placeholder="Password" name="password1"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more charecters." required>
     		 </td> 
     		</tr>

            <tr>
                <th >
                  Confirm Password:
             </th>
             <td class="pssd1">
                    <input type="password" placeholder="Confirm Password" name="password2"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more charecters." required>
             </td> 
            </tr>

     		<tr>
     			<th >
     			     Phone No:
     		    </th>
     		    <td class="pssd1">
     		    	<input type="long number" placeholder="Phone No." name="phone" pattern="^\d{10}$" title="Enter 10 digit mobile number." required>
     		    </td>
            
     		</tr>

     		<tr>
     			<th >
     			     Email-Id:
     		    </th>
     		    <td class="pssd1">
     		    	<input type="text" placeholder="Email Id" name="email" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" title="Please valid email id !!!" required>
     		    </td>
     		</tr>    

      <tr>
          <td>     
          <button class="btn" type="submit" name="submit"><span>Submit</span></button>    
          </td>
       </tr>

      </table>
    </form>
  </header>

</body>
</html>
