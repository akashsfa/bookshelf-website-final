<?php
    $servername='localhost';
    $username='root';
    $Password='';
    $dbname = "userinfo";
    $conn=mysqli_connect($servername,$username,$Password);

    mysqli_select_db($conn,$dbname);

      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>