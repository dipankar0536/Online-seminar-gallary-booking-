<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Mc Seminar Gallary</title>
      <link rel="stylesheet" href="../css/Firstpage1.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
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
        <li><a href="firstpage.php" class="active">home</a></li>
        <li><a href="login.php" >login</a> </li>
        <li><a href="admin.php" >admin</a></li>
        <li><a href="t&c.html">t&c</a></li>
        <li><a href="contact.html">contact</a></li>
        </ul>
        </div>
        <a href="#" id="iconbar" onclick="responsive_menu()"><i class="fa fa-bars"></i></a> 
        </div>
           

      <img class="mySlides " src="../pic/3.jpg" >
      <img class="mySlides " src="../pic/1.jpg" >
      <img class="mySlides " src="../pic/2.jpg" >
      <img class="mySlides " src="../pic/4.jpg" >
      <img class="mySlides " src="../pic/5.jpg" >
      <img class="mySlides " src="../pic/8.jpg" >
       
       <h2>Wellcome To Malada College Seminar Gallary</h2>        

  </header>
            

            <script>
                var myIndex = 0;
                carousel();

                 function carousel() 
                 {
                      var i;
                      var x = document.getElementsByClassName("mySlides");
                       
                       for (i = 0; i < x.length; i++) 
                        {
                        x[i].style.display = "none";  
                        }
                     
                      myIndex++;
                      if (myIndex > x.length) {myIndex = 1}    
                      x[myIndex-1].style.display = "block";  
                      setTimeout(carousel, 3000); // Change image every 3 seconds
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