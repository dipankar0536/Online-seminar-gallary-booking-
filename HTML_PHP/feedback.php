<?php
 session_start();
  include("DBConnection.php"); 
  $mydept = $_SESSION["dept"]; 
 
   
     date_default_timezone_set('Asia/Calcutta');
     $date = date('Y-m-d-H-i-s');

   $resul=explode('-', $date);
   $date1=$resul[2].'-'.$resul[1].'-'.$resul[0];
   $time=$resul[3].':'.$resul[4].':'.$resul[5];   

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{   
    $myfeedback = $_POST["feedback"]; 
       
        $sql="INSERT INTO feedback(dept_name,feedback,on_time,on_date) values('$mydept','$myfeedback','$time','$date1')";

        $result = mysqli_query($db,$sql);
    
         if($result){
            $message = "Your feedback is send.Thank you for sharing your feedback..";
            echo "<script type='text/javascript'>alert('$message');
             window.location.href = 'feedback.php';
            </script>";
            }
             else{
              $message = "Sorry we seems some technical problem at the moment,click ok.";
             echo "<script type='text/javascript'>alert('$message');
             window.location.href = 'feedback.php';
            </script>";
             }
    
  }
 mysqli_close($db);
?>




<!DOCTYPE html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Feedback</title>
  <link rel="stylesheet" type="text/css" href="../css/Feedback1.css">
  <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  



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
         <li> <a href="event.php" >DETAILS</a></li>
         <li><a href="book-a-event.php"  >BOOK - EVENT</a></li>    
         <li><a href="table1.php" >BOOKING HISTORY</a></li>
         <li><a href="feedback.php" class="active">FEEDBACK</a></li>
         <li><a href="javascript:confirmalert()" >LOGOUT</a></li>                           
                                    
        </ul>
      </div>
         <a href="#" id="iconbar" onclick="responsive_menu()"><i class="fa fa-bars"></i></a> 
        </div>
    
<form action="" class="feedback" method="post" id="second"  >
  	<div class="feedback-box">
	   <h1>Feedback</h1>
	        
         <textarea  name="feedback"  required> </textarea>
 	
     <button class="btn" type="submit" name="send"><span> Send </span>
     </button>  
     <button class="btn1" type="button" onclick="window.location.href='feedback.php';"><span> Cancel</span></button>
  </div>	
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

<script type="text/javascript">
    function confirmalert(){
    var userselection = confirm("Are you sure you want to logout?");
    if (userselection == true){
        alert("You are looged out");
        window.location.href = 'logout.php';
                  
      }
    else{
        alert("Your account is not logged out!");
        window.location.href = 'event.php';
    }    
    }
</script>