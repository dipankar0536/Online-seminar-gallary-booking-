<!DOCTYPE html>
<html>
<head>
  <title>Booking of a event</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="..\css\Bookevent.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
 
  
   <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
        type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script language="javascript">
       $(function(){
        $( "#datepicker" ).datepicker({minDate: -0, maxDate: "52M +31D"});
       });
    </script>

  <script>
   
   function getSelectvalue()
    {
      var selectvalue = document.getElementById("list").value;
      console.log(selectvalue);
    }
   getSelectValue();

</script>   

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
         <li><a href="book-a-event.php" class="active" >BOOK - EVENT</a></li>    
         <li><a href="table1.php" >BOOKING HISTORY</a></li>
         <li><a href="feedback.php" >FEEDBACK</a></li>
         <li><a href="javascript:confirmalert()" >LOGOUT</a></li>                           
                                    
        </ul>
  </div>
        <a href="#" id="iconbar" onclick="responsive_menu()"><i class="fa fa-bars"></i></a> 
        </div>


<form class="loginbox" id="second" action="pbook-a-evnt.php" method="post">
      <table class="assult">
          <h2>BOOK-AN-EVENT</h2>

        <tr>
          <th id="edi">
               Event Type:
           </th>
           <td>
            <select class="pssd" id="list" name="eventtype" onchange="getSelectValue();" required>
              
          <option value="" disabled selected><-Please select your option-></option>
          
              <option value="SEMINAR">SEMINAR</option>
              <option value="CLASS (AV)">CLASS (AV)</option>
              <option value="CULTURAL CELEBRATION">CULTURAL CELEBRATION</option>
              <option value="GUEST LECTURE">GUEST LECTURE</option>
            </select>
           </td>  
        </tr>
     
       <tr>
          <th id="edi">
               Event Date:
          </th>
         
        <td class="ssd">
              <input  type="text" placeholder="MM-DD-YYYY" name="date" id="datepicker" required >
            
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
   



