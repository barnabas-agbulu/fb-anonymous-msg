<?php
// include_once 'call.php';
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "data";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>