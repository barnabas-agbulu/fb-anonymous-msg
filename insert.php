<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FB Anonymous Message</title>

   <style>
      msg{
         background-color:   background-image: linear-gradient(purple,rgb(66, 66, 235));;
      }
      body{
         background-color: rgb(82, 82, 248);
      }
   </style>
</head>
<body>
   




   
<center>
   <div  style="background-color: white;color: rgb(8, 8, 8);max-width: 25%;padding-bottom: 40px;padding-top: 40px;border-radius: 15px;margin-top: 100px;font-weight: bolder;font-family: sans-serif;">
      <?php
      include_once 'db.php';
      if(isset($_POST['submit']))
      {    
         $fname = $_POST['fname'];
         $lname = $_POST['lname'];
         $phone = $_POST['phone'];
         $country = $_POST['country'];
      //    $passcode = $_POST['passcode'];
      
           $sqli = "INSERT INTO  people  (fname,lname,phone,password)
           VALUES ('$fname','$lname','$phone','$country')";
           if (mysqli_query($conn,$sqli)) {
            echo"<center>";
            echo "<msg>"; 
            echo " Successful !!!";
              echo "</msg>";
            echo"</center>";
            
           } else {
              echo "Error: " . $sqli . ":-" . mysqli_error($conn);
           }
          }
           mysqli_close($conn);
      
      ?>

   </div>
   <a href="well.php" style="text-decoration: none;">
      <div style="max-width: 15%;border-radius: 5px;color: white;background-color: rgb(46, 214, 46);font-weight: bold;font-family: sans-serif;
      margin-top: 50px;padding: 10px;">
         <?php
         echo"<center>";
            echo "<msg>"; 
            echo " Continue";
              echo "</msg>";
            echo"</center>";
         ?>
      </div>
   </a>
</center>
<script>
      submitHandler: function () {
            console.log("inside valid");
            window.location.reload(true);
            window.location.href = '../anonymous msg/well.php';
</script>





</body>
</html>








