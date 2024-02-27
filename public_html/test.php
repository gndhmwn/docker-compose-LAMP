<?php  
       $dbhost = 'p:www-db:3306';
       $dbuser = 'docker';
       $dbpass = 'docker';
       $db='docker';

       $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die ("could not connect to mysql");      

       // mysqli_select_db("users") or die ("no database");  

       if(! $conn ) {
              die('Could not connect: ' . mysqli_error($conn));
       }else{
              echo 'Connected successfully';
       }
?>