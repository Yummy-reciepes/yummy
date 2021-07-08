<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LOGIN</title>
<!-- Bootstrap css link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Bootstrap js link -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style type="text/css">
  .active{
  background-color:#ff9933;

}
.card {
height:600px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background:red;
background-color: rgba(0,0,0,0.5)!important;
}
.container{
height: 100%;
align-content: center;
}
.image
{
  height: 150px;
  width: 150px;
  align:center;
  border-radius: 50%;
  border: 2px solid red;
}
.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

span.psw {
  float: right;
  padding-top: 16px;
}
/* The Modal (background) */
.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}
.remember{
color:#FFC312;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;

}

.links{
color:red;
}
.links a{
margin-left: 4px;
font-size:20px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }

}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for all buttons */
#okbtn,#ok1btn {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

#okbtn:hover,#ok1btn:hover {
  opacity:1;
}
#canbtn,#can1btn {
  background-color: #f44336;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

#canbtn:hover,#can1btn:hover {
  opacity:1;
}


/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn,.changepassword {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
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
  background-color: #ddd;
  padding-top: 50px;
}



/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color:red;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s;
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn .changepassword {
     width: 100%;
  }
}
@media screen and (min-width: 601px) {

  .image
  {
    width:100px;
    height:100px;
  }
  .card{
    max-width: 400px;
    height:490px;
  }
  .links a{
    font-size:15px;
  }
}

/* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
@media screen and (max-width: 600px) {

  .image
  {
    width:70px;
    height:70px;
  }
  .card{
    height:490px;
    max-width:300px;
  }
  .links a{
    font-size:12px;
  }

}


</style>
</head>
<body style="background-image: url(./images/logincover.jpg);">

  <!-- Navbar begins -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <img style="width: 70px;height: 70px;border-radius: 50%;" src="./images/Yummy-logo.jpeg">
   <h2  style="color: orange;font-size: 30px;">YUMMY</h2>


</nav>

<!-- Navbar ends -->
<br>
<br>

 <div class="container">

   <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-center">
        <img src="./images/login_logo.png"alt="reciepes" class="image">
        </div>
      </div>
      <div class="card-body">
        <form method="post" action="sign up.php">
          <?php include('errors.php');?>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="username"placeholder="username">

          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="email" class="form-control" name="email"placeholder="Email">

          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" name="password_1"placeholder="password">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" name="password_2"placeholder="Confirm password">
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">
          <input type="submit" value="Register"name="reg_user" class="btn float-right login_btn">
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div style="color: inherit;color: white" class="d-flex justify-content-center links">
          <a href="Sign in.php" style="width:auto;cursor:pointer;color: inherit;color: white;font-size: 18px;">Already have an account? Sign in</a>
        </div>
        <div class="d-flex justify-content-center">
          <a onclick="document.getElementById('id02').style.display='block'" style="width:auto;cursor:pointer;color: inherit;color: white;font-size: 18px;">Forgot your password?</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- forget begins -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content">
    <div class="container">
      <h1>Forgot Password</h1>
      <p>Please fill this form to reset your password.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>New Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="psw-repeat" required>


      <p>By creating reseting your password you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button id="can1btn" type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button id="ok1btn" type="submit" class="signupbtn" onclick="myFunction1">SUBMIT</button>
      </div>
    </div>
  </form>
</div>
<!-- forget ends -->

<br>
<br>

<div style="background-color: orange;text-align: center;padding: 10px;">
  <h2 style="margin: 15px;color: white;">YUMMY RECIPES</h2>
  <p style="color: white;">All Rights Reserved @2021</p>
</div>

</body>
<script>
  function redirect() {
      window.location.href = "index.html";
    }
function myFunction1() {
  alert("Suceessfully created your account");
}
function myFunction2() {
  alert("Suceessfully  your password is changed");
}
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script>

</body>
</html>
