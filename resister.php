<?php require 'conn.php';?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Resister</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>
<!--Resister page-->

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="u_username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="u_username" required>

      <label for="u_pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="u_pass" required>
        
      <button type="submit" name="u_res">Resister</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!--resister page connected to database--> 
<?php
    if(isset($_POST['u_res'])){
        $u_username=$_POST['u_username'];
        $u_pass=($_POST['u_pass']);
        //echo $u_name;
        //echo $password;

        $sql="INSERT INTO login_guide(u_username,u_pass) VALUES('$u_username','$u_pass')";
        if(mysqli_query($conn,$sql)){
            //<script>alert("Resister successfully");</script>
            echo "<script>alert('Resister successfully');</script>";
        }else{
            echo "Error".$sql."<br>".mysqli_error($conn);
        }
    }
    ?>
<!--Login page-->
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      
      <label for="u_username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="u_username" required>

      <label for="u_pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="u_pass" required>
        
      <button type="submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<?php

    if(isset($_POST['login'])){
        $u_username=$_POST['u_username'];
        $u_pass=($_POST['u_pass']);

        $sql="SELECT * FROM login_guide WHERE u_username='$u_username' ";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($user=mysqli_fetch_assoc($result)){
                if($u_username==$user['u_username'] && $u_pass==$user['u_pass']){
                  echo "<script>window.location.href='suyash.php';</script>";
                  //header('location: dash1.php');
                }else{
                  echo "<script>alert('Invalid username and password');</script>";
                }
            }
        }
    }
  ?>
<!--javascript-->
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal1.style.display = "none";
    }
}
</script>

</body>
</html>