<?php require 'conn1.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
</head>
<body>
<div class="w3-col m7">
    
    <div class="w3-row-padding">
      <div class="w3-col m12">
        <div class="w3-card w3-round w3-white">
          <div class="w3-container w3-padding">
            <h6 class="w3-opacity">Guide Information</h6>
           <!-- <input type="text" name="search" placeholder="Search by City or District" >
            <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i> Search</button> -->
          </div>
        </div>
      </div>
    </div>
    <!--
    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      <img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <span class="w3-right w3-opacity">1 min</span>
      <h4>John Doe</h4><br>
      <hr class="w3-clear">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="w3-row-padding" style="margin:0 -16px">
          <div class="w3-half">
            <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
          </div>
          <div class="w3-half">
            <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
        </div>
      </div>
      <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
      <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
    </div>
-->
    
    <?php

    $sql="SELECT * FROM guide_info";
    $result=mysqli_query($conn1,$sql);


    if(mysqli_num_rows($result)>0){
      while($guide=mysqli_fetch_assoc($result)){

      ?>
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      <img src="/w3images/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <span class="w3-right w3-opacity">16 min</span>
      <h4>Name:<?php echo $guide['g_name'];?></h4><br>
      <h4>City:<?php echo $guide['g_city'];?></h4>
      <h4>District:<?php echo $guide['g_dist'];?></h4>
      <!--<h4>contury:<?php echo $guide['g_istrict'];?></h4>-->
      <h4>Contact:<?php echo $guide['g_contact'];?></h4>
      <h4>Language:<?php echo $guide['g_lan'];?></h4>
      <hr class="w3-clear">
      <p>Information of guide</p>
      <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
      <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
    </div> 
    <?php
      }
    }
    
    ?> 
<!--
    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      <img src="/w3images/avatar6.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <span class="w3-right w3-opacity">32 min</span>
      <h4>Angie Jane</h4><br>
      <hr class="w3-clear">
      <p>Have you seen this?</p>
      <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
      <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
    </div> 
    
   End Middle Column -->
  
  </div>
</body>
</html>