<?php
$namer = $emailr = $mobiler= "";
$name = $email = $mobile ="";
$con=mysqli_connect('localhost','root','','music');
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  if (empty($_POST["name"])) {
    $namer = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["mobile"])) {
    $mobiler = "Mobile number is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_REQUEST['submit']))
{
  $name=$_REQUEST['name'];
  $email=$_REQUEST['email'];
  $mobile=$_REQUEST['mobile'];
  $sql="INSERT into footer(name,email,mobile) VALUES('$name','$email','$mobile')";
  if(mysqli_query($con,$sql))
  {
    echo "<script>alert('Thanks for Contact Us')</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Music Mellow</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Simonetta&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    .ad
    {
      width: 100%;
      height: 80px;
    }
    .error
    {
      color: red;
    }
    .a1
    {
      color: white;
      font-size: 25px;

      text-shadow: 1px 1px;
    }
    .ac
    {
      line-height:5px;
      font-size: 24px;
      font-family: arial;
      word-spacing: 25px;
      text-shadow: 1px 1px;
      transition: 0.3s;
      font-weight: bold;
    }
    .ac:hover
    {
      text-decoration:none;
      transform: scale(1.2);
    }
    .active {
      text-decoration: none;
      position: relative;
  }
    .active:after {
      content: '';
      width: 100%;
      position: absolute;
      left: 0;
      bottom: -6px;
      border-width: 0 0 2px;
      border-style: solid;
     /*clear: both;*/
   }
.hr1
{
   border-bottom: 1px solid white;
     height: 100px;
}
.li2
    {
      list-style-type: none;
    }
    .btn1
    {
      background:linear-gradient(to left,red,yellow);
    }
    .btn1:hover
    {
      background:linear-gradient(to left,yellow,red);
    }
    .li2 a
    {
      /*font-weight: bold;*/
      font-size: 20px;
      font-family: verdana;
      line-height: 1.8;
    }
    .li1
    {
      display: inline-block;

    }
 i
{
 background-color: white;
 border: 1x solid grey;
 padding:12px;
 box-sizing: border-box;
border-radius: 50%;
height: 40px;
width: 40px;
}
footer
{
  background:url('footer.jpg');
  background-color: cyan;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
.div3
{
    background-image: url('how.jpg');
    background-size:cover;
    background-repeat:no-repeat;
    background-attachment:fixed;
    color: white;
}
.icon
{
  width: 40px;
  height: 40px;
  border-radius: 100%;
  background-color: red;
  position: relative;
  right: 20px;
  top:20px;
}
  </style>
</head>
<body>
   <nav class="navbar navbar-expand-md navbar-dark fixed-top ad shadow-lg bg-primary">
<div class="container">
<a href="#" class="navbar-brand text-dark font-weight-bold a1"><span style="color:red;font-size: 25px;">MUSIC</span>Mellow</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navbarcollapse">
      <ul class="navbar-nav ml-auto">
        <li class="navbar-item "><a href="index.php" class="nav-link text-dark ac active">Home</a></li>
        <li class="navbar-item"><a href="audio.php" class="nav-link text-dark ac">Audio</a></li>
        <li class="navbar-item"><a href="ourteam.php" class="nav-link text-dark ac">OurTeam</a></li>
        <li class="navbar-item"><a href="contact.php" class="nav-link text-dark ac">AboutUs</a></li>
        <li class="navbar-item"><a href="#c1" class="nav-link text-dark ac">Contact</a></li>
        <li class="navbar-item"><a href="signup.php" class="nav-link text-dark ac">Login/Register</a></li>
      </ul> 
      </div>
    </div>
  </nav><br><br><br>
<header class="bg-primary text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white"><b>Meet the Team</b></h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">WEB DESIGNER</h5>
          <div class="card-text text-black-50">Siddarth</div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">FRONT-END</h5>
          <div class="card-text text-black-50">Naman Waliya</div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">BACK-END</h5>
          <div class="card-text text-black-50">Vakil Singh</div>
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Photographer</h5>
          <div class="card-text text-black-50">R Aswath</div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-light bg-dark" id="c1">
<div class="container">
<div class="row">
  <div class="col-sm-4 col-md-4 col-lg-5"><br><br>
    <h4><b><span style="color: red;">MUSIC</span>Mellow</b></h4><br>
    <p>This is probably the best and newly growing music player , where you can have an access to your favourite songs from anywhere and everywhere!</p><br>
    <!-- <ul class="ul1"> -->
      <li class="li1"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
      &nbsp;&nbsp;&nbsp;
      <li class="li1"><a href="#"><i class="fa fa-instagram"></i></a></li>
      &nbsp;&nbsp;&nbsp;
      <li class="li1"><a href="#"><i class="fa fa-youtube"></i></a></li>
      &nbsp;&nbsp;&nbsp;
      <li class="li1"><a href="#"><i class="fa fa-linkedin"></i></a></li>
      &nbsp;&nbsp;&nbsp;
        <li class="li1"><a href="#"><i class="fa fa-twitter"></i></a></li>
    <!-- </ul> -->
  </div>
  <div class="col-sm-4 col-md-4 col-lg-2"><br><br>
    <h4><b>Our Service</b></h4><br>
    <!-- <ul> -->
      <li class="li2"><a href="" class=" text-light">Home</a></li>
      <li class="li2"><a href=""class=" text-light">Audio</a></li>
      <!-- <li class="li2"><a href=""class=" text-light">Video</a></li> -->
      <li class="li2"><a href=""class=" text-light">Gallery</a></li>
      <li class="li2"><a href=""class=" text-light">About Us</a></li>
      <li class="li2"><a href=""class=" text-light">Join Us</a></li>
    <!-- </ul> -->
  </div>
  <div class="col-sm-4 col-lg-2"><br><br>
    <h4><b>PRODUCTS</b></h4><br>
    <!-- <ul> -->
      <li class="li2"><a href="" class=" text-light">Music</a></li>
      <li class="li2"><a href=""class=" text-light">Subscription</a></li>
      <li class="li2"><a href=""class=" text-light">Custom Music</a></li>
      <li class="li2"><a href=""class=" text-light">Footage</a></li>
    <!-- </ul> -->
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3">
 <form method="POST"><br><br>
      <h4><b>CONTACT US</b></h4><br>
      <div class="form-group">
      <label>Name *</label>
      <input type="text" name="name" class="form-control rounded-pill">
      <span class="error"><?php echo $namer; ?></span>
        </div>
        <div class="form-group">
      <label>Email *</label>
      <input type="email" name="email" class="form-control rounded-pill">
      <span class="error"><?php echo $emailr; ?></span>
        </div>
        <div class="form-group">
      <label>Mobile *</label>
      <input type="text" name="mobile" class="form-control rounded-pill">
      <span class="error"><?php echo $mobiler; ?></span>
        </div>
        <!-- <button type="button" class="btn1 btn-lg rounded-pill">Submit</button><br><br> -->
        <input type="submit" name="submit" class="btn1 btn-lg rounded-pill pl-5 pr-5" value="Submit"><br><br>
    </form>
  </div>
</div>
</div>
<p class="text-center">&copy;copyright:2020 Design By: <b>Vakil Singh</b></p><br>
</footer>
</body>
</html>