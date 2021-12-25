<!DOCTYPE html>
<html>
<head>
	<title>Admin login Page</title>
	 <link rel="stylesheet" type="text/css" href="../css/Admin.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				<li><a href="firstpage.php" >home</a></li>
				<li><a href="login.php">login</a> </li>
				<li><a href="admin.php" class="active">admin</a></li>
				<li><a href="t&c.html">t&c</a></li>
				<li><a href="contact.html">contact</a></li>
			  </ul>
	   	  </div>
        <a href="#" id="iconbar" onclick="responsive_menu()"><i class="fa fa-bars"></i></a> 
        </div>
  <form  class="loginbox" id="second" action="padmin.php" method="post">
  	  <img src="..\pic\avatar3.png" class="avatar"/>
  	  <h2>ADMIN LOGIN</h2>    
  	<div class="textbox">
  	<i class="fa fa-user-circle-o"></i>
     <input type="text" placeholder="Admin name" name="admin" required="" >		
  	</div>
  	<div class="textbox1">
     <i class="fa fa-lock"></i>
     <input type="password" placeholder="Password" name="pass" required="" >		
  	</div>
  	 <button class="btn" type="submit" name="login"><span>Login</span></button> 
     <a href="Aforgotpass.php" class="wax"><u>forgot password</u>? <u class="wax1">click here</u>.</a>
   </form>
  </header>
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








