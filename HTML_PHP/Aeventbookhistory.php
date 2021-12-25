
<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<body>

<div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" >ALL EVENT BOOKING DETAILS </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
  <th>DEPARTMENT NAME</th>         
  <th>EVENT TYPE</th>
  <th>BOOKING ID</th>
  <th>EVENT DATE</th>
  <th>ON DATE</th>
  <th>ON TIME</th>
  <th> DELETE </th>


  </tr >

  <?php
  session_start();
  include("DBConnection.php");
  $q = "SELECT * FROM alleventbooking";

  $query = mysqli_query($db,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['dept_name'];  ?> </td>
 <td> <?php echo $res['event_type'];  ?> </td>
 <td> <?php echo $res['booking_id'];  ?> </td>
 <td> <?php echo $res['event_date'];  ?> </td>
 <td> <?php echo $res['booking_date'];  ?> </td>
 <td> <?php echo $res['booking_time'];  ?> </td>
 
 <td> <button class="btn-danger btn"> <a href="Aeventbookinghistorydelete.php?id=<?php echo $res['booking_id'];?>" class="text-white"><i class="fas fa-trash-alt"></i> </a> </button>
</td>
 
</tr>

  <?php 
  }
  ?>
   
  </div>
 </div>
 
  

  <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
</body>
</html>
