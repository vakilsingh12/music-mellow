<?php
$con=mysqli_connect('localhost','root','','music');
if(isset($_REQUEST['vsk']))
{
  $email=$_REQUEST['email'];
  $contact=$_REQUEST['contact'];
  $password=$_REQUEST['password'];
  $cpassword=$_REQUEST['cpassword'];
  if($password!=$cpassword)
  {
    echo "<script>alert('password do not match');</script>";
  }
  else
  {
  $sql="INSERT INTO signup(email,contact,password,cpassword) VALUES('$email','$contact','$password','$cpassword')";
  if(mysqli_query($con,$sql))
  {
    echo "<script>alert('Registraion Successful');</script>";
  }
}
}
?>
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
	<title>Music Player</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
  	.btn1
  	{
  		background: linear-gradient(to right,yellow,green);
  		/*transition: all 1.2s;*/
  		transition-timing-function: ease-in-out;
        font-weight: bold;
        font-size: 20px;
        font-family: verdana;
        float: right;
  	}
  	.btn1:hover
  	{
      background: linear-gradient(to right,red,yellow);
      /*transform: scale(1.2);*/
  	}
  	.btn2
  	{
  		clear: both;
  		list-style-type: none;
  		text-align: center;
  	}
    .error
    {
      color: red;
    }
  	.m2
  	{
  		float: left;
  	}
  	.signup
  	{
  		font-weight: bold;
  		font-family: sans-serif;
  	}
    h3
    {
      font-weight: bold;
    }
    body
    {
      background:url('15.jpg');
      background-attachment: fixed;
      background-size: cover;
    }
     .ad
    {
      width: 100%;
      height: 80px;
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
  <nav class="navbar navbar-expand-md navbar-dark fixed-top ad shadow-lg" style="background:#7f71e3">
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
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 text-light shadow-lg m-5 p-5" style="background-color: #4032a8;border-radius: 10px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
        <form action="signup.php" method="POST">
        <h3>Sign up with your email address</h3><br>
        <div class="row">
          <div class="col-6"><div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control rounded-pill">
        </div></div>
          <div class="col-6"><div class="form-group">
          <label>Contact:</label>
          <input type="text" name="contact" class="form-control rounded-pill">
        </div>
      </div>
        </div>
        <div class="form-group">
          <label>Password:</label>
          <input type="password" name="password" class="form-control rounded-pill">
        </div>
       <div class="form-group">
        <label>Confirm Password:</label>
          <input type="password" name="cpassword" class="form-control rounded-pill">
        </div>
        <hr>
        <div class="form-group">
          <input type="submit" name="vsk" class="form-control rounded-pill btn btn-success signup" value="Sign Up For Music Mellow">
        </div>
        <p style="float: left;">Already have an account?</p>
      </form>
      <a href="signin.php"><input type="submit" name="submit" class="rounded-pill btn1 pl-5 pr-5 m-1 pt-1 pb-1" value="Sign In" style="float: right;"></a>
          </div>
          <div class="col-lg-1"></div>
        </div>
      </div>
			
		</div>
		<div class="col-sm-2"></div>
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