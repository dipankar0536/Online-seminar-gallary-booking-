<?php 
 define('DB_SERVER', 'localhost:3306');
 define('DB_USERNAME', 'root');  
 define('DB_PASSWORD', ''); 
 define('DB_DATABASE', 'maldacollege'); 
 
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
      
   if(!$db){

   	alert("server is unablw to fetch the data at the moment,please try later!!!!!.");
   }
 
?>



