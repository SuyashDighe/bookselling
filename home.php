<?php require 'conn.php';?>
<?php require 'conn1.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home_page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- style for model form -->
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
    <nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <!-- <form class="d-flex mx-2">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
        <div mx-2>
        
            <button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Login for Customer</button>
            <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Register for Customer</button>
            <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login for Seller</button>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register for Seller</button>
        </div>
      </div>
    </div>
  </nav>
    </nav>Register for Tourist
    


    <div>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="book.avif" height="600" width="100%" alt="">
          <div class="carousel-caption d-none d-md-block link-dark">
            <h2>Key Of Knowledge</h2>
            <p>discover new Books with us</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image.jpg" height="600" width="100%" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h2>Key Of Knowledge</h2>
            <p>discover new Books with us</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="book.avif" height="600" width="100%" alt="">
          <div class="carousel-caption d-none d-md-block link-light">
            <h2>Key Of Knowledge</h2>
            <p>discover new Books with us</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



    <div class="container my-4">
      <div class="row mb-2">
        <div class="col-md-6">
          <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <p class="card-text mb-auto">“I am not a great book, I am not a great artist, but I love art and I love food, so I am the perfect traveller.” </p>
              <a href="https://en.wikipedia.org/wiki/Times_Square" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img class="bd-placeholder-img" width="200" height="250"
                src="book3.jpg"
                alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success">Modern day tourism</strong>

              <p class="mb-auto">“He who does not travel does not know the value of men.”</p>
              <a href="https://en.wikipedia.org/wiki/Tourism#Modern_day_tourism" class="stretched-link">Continue
                reading</a>

            </div>
            <div class="col-auto d-none d-lg-block">
              <img class="bd-placeholder-img" width="200" height="250"
                src="book4.avif"
                alt="">

            </div>
          </div>
        </div>
      </div>

      
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-danger">Recent developments</strong>
              <p class="card-text mb-auto">“Certainly, travel is more than the seeing of sights; it is a change that goes on, deep and permanent, in the ideas of living.” .</p>
              <a href="https://en.wikipedia.org/wiki/Tourism#Recent_developments" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img class="bd-placeholder-img" width="200" height="250" src="book2.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-warning">Growth</strong>
              <p class="mb-auto">“Travel is fatal to prejudice, bigotry, and narrow-mindedness, and many of our people need it sorely on these accounts. Broad, wholesome, charitable views of men and things cannot be acquired by vegetating in one little corner of the earth all one’s lifetime. </p>
              <a href="https://en.wikipedia.org/wiki/Tourism#Growth" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" width="200" height="250" src="book1.jpg" alt="">

            </div>
          </div>
        </div>
      </div>
</div>
     
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2020-2021 iCoder, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Resister</button>-->
<!--<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>-->


<!--Resister page for guide-->

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="icons8-login-67.png " style="width:40px;" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="u_username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="u_username" required>

      <label for="u_pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="u_pass" required>
        
      <button type="submit" name="u_res">Next</button>
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
            //echo "<script>alert('Register successfully');</script>";
            echo "<script>window.location.href='suyash.php';</script>";
            
        }else{
            echo "Error".$sql."<br>".mysqli_error($conn);
        }
    }
    ?>
<!--Login page for guide-->
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="icons8-login-67.png " style="width:40px;" alt="Avatar" class="avatar">
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

<!--Resister page for tourist-->

<div id="id03" class="modal">
  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="icons8-login-67.png " style="width:40px;" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="U_username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="U_username" required>

      <label for="U_pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="U_pass" required>
        
      <button type="submit" name="u_res_t">Register</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!--resister page connected to database--> 
<?php
    if(isset($_POST['u_res_t'])){
        $U_username=$_POST['U_username'];
        $U_pass=($_POST['U_pass']);
        //echo $u_name;
        //echo $password;

        $sql1="INSERT INTO login_tourist(U_username,U_pass) VALUES('$U_username','$U_pass')";
        if(mysqli_query($conn,$sql1)){
            //<script>alert("Resister successfully");</script>
            echo "<script>alert('Register successfully');</script>";
            echo "<script>window.location.href='smtp/index2.php';</script>";
            //echo "<script>window.location.href='login_home.php';</script>";
        }else{
            echo "Error".$sql1."<br>".mysqli_error($conn);
        }
    }
    ?>
<!--Login page for tourist-->
<div id="id04" class="modal">
  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="icons8-login-67.png " style="width:40px;" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      
      <label for="U_username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="U_username" required>

      <label for="U_pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="U_pass" required>
        
      <button type="submit" name="login_t">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<?php

    if(isset($_POST['login_t'])){
        $U_username=$_POST['U_username'];
        $U_pass=($_POST['U_pass']);

        $sql1="SELECT * FROM login_tourist WHERE U_username='$U_username' ";
        $result1=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result1)>0){
            while($user1=mysqli_fetch_assoc($result1)){
                if($U_username==$user1['U_username'] && $U_pass==$user1['U_pass']){
                  echo "<script>window.location.href='login_home.php';</script>";
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
var modal3 = document.getElementById('id03');
var modal4 = document.getElementById('id04');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
}
</script>



</body>
</html>