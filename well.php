
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FB Anonymous Message</title>
    <link rel="stylesheet" href="home22.css">
    <style type="text/css" > 
     msg {
       color: red;
       font-size:20px;
    background-color: rgb(243, 239, 239);
    border-radius:10px;
    font-family: sans-serif;
     }
     msg1{
        color: green;
    font-size:30px;
    background-color: rgb(255, 250, 250);
    border-radius:10px;
    font-family: sans-serif;
     }
     msg2{
        color: rgb(252, 7, 7);
    font-size:30px;
    background-color: rgb(253, 246, 246);
    border-radius:5px;
    font-family: sans-serif;
    text-align: center;
     }
     
    </style>
</head>
<body>
<a href="home.php"  ><button  style="color: rgb(252, 251, 251); background-color: rgb(75, 74, 74);padding: 5px;border-radius: 3px;" >BACK</button></a>
  <center>
    <div class="box">
  
        <br>
        <h1>WELLCOME !!!</h1>
        <h2>Write your anonymous message to your friend</h2>
        <br><br><br>
    <form action="well.php" method="post">
        <input type="text" placeholder="type your message" class="input" name="input" >
        <br><br><br><br><br>
        <button class="btn" name="submit" style="background-color: rgb(59, 58, 58);color:rgb(251, 251, 248);border-radius: 5px;" >SEND</button>
        <br><br>
    </form>
    </div>
    <br>
  </center>
</body>
</html>

<?php

// else 
// {
// echo 
// "<script type= 'text/javascript'>
//     alert('Error: " . $sql . "<br>" . $conn->error."');
// </script>";
// }


// header('location:well.php');
// $data = $_POST ["input"];  



if (empty ($_POST["input"])) {  
 echo "<center>";
  echo "<msg2>";
    $errMsg = " Enter your message.";  
             echo $errMsg; 
    echo "</msg2>"; 
 echo "</center>";
} else {  
  echo "<center>";
  echo "<msg1>";
    $Msg = "Message sent";
    echo $Msg;
    echo "</msg1>";
echo "</center>"; 




    // if (preg_match ("/^[a-zA-z]*$/", $data) ){

     
       
    
        
  }
    
//     if (!preg_match ("/^[a-zA-z]*$/", $data) ){
        
    
    
       
//  echo "<center>";
//   $ErrMsg = "Text is not valid.Text should contain alphabets only.";  
//   echo "<msg>";
//    echo $ErrMsg;  
//    echo "</msg>";
//  echo "</center>";
    
//                 // if(isset($_POST["submit"])){
    
        
//                 //     echo "
//                 //     <script type= 'text/javascript'>
//                 //         alert('Mesage not sent successfully');
//                 //     </script>";
                    
//     } 
// } 








