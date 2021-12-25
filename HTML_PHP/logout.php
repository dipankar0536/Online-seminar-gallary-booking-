  <?php  
         session_start();
         mysqli_close($db);
         session_unset();
         session_destroy();
         header("Location: firstpage.php");
         exit();
   ?> 