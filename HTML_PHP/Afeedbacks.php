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


</head>
<body>

<div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Department's Feedbacks </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
          <th>SL NO.</th>
          <th>Department Name</th>         
          <th>Feedback</th>
          <th>On Date</th>
          <th>On Time</th>

  </tr >

  <?php
  
  include("DBConnection.php");
  $q = "SELECT * FROM feedback";

  $query = mysqli_query($db,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['sl no.'];  ?> </td>
 <td> <?php echo $res['dept_name'];  ?> </td>
 <td> <?php echo $res['feedback'];  ?> </td>
 <td> <?php echo $res['on_date'];  ?> </td>
 <td> <?php echo $res['on_time'];  ?> </td>
 
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
