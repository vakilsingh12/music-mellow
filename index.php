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
	<title>Music Mellow Player</title>
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
  	body
  	{
  		background: url('main.png');
  		background-repeat: no-repeat;
  		background-size: cover;
  		background-position: 
  		box-sizing: border-box;
  		background-color:#87CEEB;
  		filter: alpha(opacity=60);
  		max-height: 900px;
  	}
  	.error {color: #FF0000;}
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
.head1
{
	margin-top: 80px;
	font-size: 65px;
	font-family: arial,helvetica,verdana;
	text-shadow: 2px 2px red,2px 2px 1px green,4px 4px 1px blue;
	font-weight: bolder;
}
.head2
{
	text-shadow: 1px 1px #555;
	font-style: italic;
	font-family: 'Simonetta';
	font-size: 25px;
}
.b1
{
	font-family: verdana;
	font-size: 20px;
	padding-left: 10px;
	padding-right: 10px;
	background-color: red;
	color:white;
	font-weight: bold;
}
.b2
{
	font-family: verdana;
	background-color: white;
	font-size: 20px;
	margin-left: 40px;
	padding-left: 10px;
	padding-right: 10px;
	color: black;
	font-weight: bold;
}
@media only screen and (max-width: 500px)
{
  .ad
  {
   background-color: #555;
  }
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
  <script type="text/javascript">
  	$(document).ready(function()
  	{
  		$(window).scroll(function()
  		{
  			if ($(document).scrollTop()>50) {
  				$(".fixed-top").css("background-color","#f8f8f8");
  			}
  			else
  			{
  				$('.fixed-top').css("background-color","transparent");
  			}
  		});
  	});

  </script>
</head>
<body oncopy="return false" onpaste="return false" oncut="return false">
<nav class="navbar navbar-expand-md navbar-dark fixed-top ad">
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
	</nav>
<main>
		<div class="hr1"></div>
		<div class="container">
			<div class="row">
				<h1 class="text-dark head1">MUSIC FOR EVERYONE</h1><hr>
				<div class="col-6 col-sm-6 col-md-6">
					<br>
					<p class="text-dark head2">Please Login and SignUp for Enjoy The Music</p><hr><br>
					<a href="signin.php"><button class="b1 pl-4 pr-4 pb-2 pt-2 rounded-pill">SIGN IN</button></a>
					<a href="signup.php"><button class="b2 pl-4 pr-4 pb-2 pt-2 rounded-pill">START FREE TRIAL</button></a>
				</div>
				<div class="col-6 col-sm-6 col-md-6"></div>
				<!-- <div class="col-4"></div> -->
			</div>
		</div>
	<br>
<br>
</main>
<br><br><br><br><br><br><br><br>
<div class="bg-light">
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-lg-6 text-center"><h1 class="display-4 font-weight-bold m-5">Unlimited Access to 100K tracks</h1></div>
		<div class="col-sm-6 col-lg-6">
			<p class="m-5">
				We need to entertain our leisure time with our lovely entertainment zone  , people prefer songs over other entertainment criteria , because that's disturbance free can get the soup of their taste! to such mobility based entertainment  , must me user Satisfying! With the special access, user can have an access to all the 100k tracks , which includes multiple languages and multiple theme in songs. 
			</p>
			<a href="signup.php"><button class="mx-5  px-4 py-3 rounded-pill font-weight-bold" style="font-size: 20px;font-family: verdana;background:red;">TRY IT NOW</button></a>
				<br><br>
		</div>
	</div>
</div>
</div>
<div class="div3">
<div class="container"><br><br>
	<h1 class="display-4 font-weight-bold mb-5">How it works</h1><br>
	<div class="row">
		<div class="col-lg-4 mb-5">
			<!-- <span class="rounded-circle bg-danger"></span> -->
			<div class="icon"></div>
			<img src="brain.png" class="mb-2" style="z-index: 1;position: relative;">
			
			<h2 class="font-weight-bold">Create an account</h2>
			<p>To get along with the easy usage and lifetime access and membership , you are expected to create an account.</p>
		</div>
		<div class="col-lg-4">
			<div class="icon"></div>
			<img src="pointer.png" style="z-index: 1;position: relative;">
			<h1>Choose a plan</h1>
			<p>Not always you're stuck between the same phase of free time , to make it flexible, you. Can switch between plans accordingly.</p>
		</div>
		<div class="col-lg-4">
			<div class="icon"></div>
			<img src="smartphone.png" style="z-index: 1;position: relative;">
			<h1>Download a Music</h1>
			<p>With our special access, you can download songs irrespective of your location or your plans , you enjoy anywhere anytime! </p>
		</div>
	</div>
</div>
</div>

<div class="bg-light">
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-lg-6 text-center"><h1 class="display-4 font-weight-bold m-5">Our Concept & artists</h1></div>
		<div class="col-sm-6 col-lg-6">
			<p class="m-5">
				To provide music to everyone , that's our moto! What we mainly focus is the usage that an user does , we keep a track of what the user searches and with that data we can easily predict what the user is going to search and we can make searches at an ease! And when we look into artists almost more than 100 artists per state , such that every popular and non popular gets covered and user gets to listen to his /her favourite song at any time.
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 mb-4 col-xl-3">
		<div class="card border-0 shadow">
			<img src="a3.jpg" class="card-img-top" alt="vakil image" style="border-radius: 15px;">
		</div>
	    </div>
	    <div class="col-md-6 mb-4 col-xl-3">
		<div class="card border-0 shadow">
			<img src="a2.jpg" class="card-img-top" alt="..." style="border-radius: 15px;">
		</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-0 shadow">
			<img src="a1.jpg" class="card-img-top" alt="" style="border-radius: 15px;">
		</div>
	</div>
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card shadow border-0">
			<img src="a5.jpg" class="card-img-top" alt="" style="border-radius: 15px;">
		</div>
	</div>
</div>	
</div>
</div>
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<h1 class="display-4 font-weight-bold">Subscription from $15/month</h1>
			<h2 style="color: red;" class="font-weight-bold">Start a free trial now</h2><br>
			<p style="font-style: italic;">If want to avail such benifits under some doubts. You can very well look upon our trail version where you'd get to know the features you would be getting when you subscribe.
And the monthly subscription plan is starting from 15$/ month, yes you read it right ,. It's only 15$ a month, so all you need to do is grab your favourite plans before it's too late:)
</p>
			<a href="signin.php"><button class="font-weight-bold px-4 py-2 my-4 rounded-pill m-2" style="background-color: red;">START NOW</button></a>
		</div>
		<div class="col-lg-6 shadow mb-2" style="border: 1px solid #c1f9f9;border-radius: 25px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-7 m-5" style="font-style: verdana;font-size: 24px;">
						<img src="check-icon.png">&nbsp;&nbsp;<span>Play any track</span><br><br>
						<img src="check-icon.png">&nbsp;&nbsp;<span>Listen offline</span><br><br>
						<img src="check-icon.png">&nbsp;&nbsp;<span>No ad interruptions</span><br><br>
						<img src="check-icon.png">&nbsp;&nbsp;<span>Unlimited skips</span><br><br>
						<img src="check-icon.png">&nbsp;&nbsp;<span>High quality audio</span><br><br>
						<img src="check-icon.png">&nbsp;&nbsp;<span>Shuffle play</span>
						
					</div>
					<div class="col-lg-3"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>
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
