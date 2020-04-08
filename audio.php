<?php
session_start();
if($_SESSION['uid'])
{
	// echo $_SESSION['uid'];
}else
{
	header("location:signin.php");
}
?>

<?php
if(!empty($_GET['file'])){
$mp3 ='C:\xampp\htdocs\audio\audio1/taare.mp3';
if(file_exists($mp3)) {
  header('Content-Type: audio/mpeg');
  header('Content-Disposition: attachment; filename="taare.mp3"');
  header('Content-length: '. filesize($mp3));
  header('Cache-Control: no-cache');
  header('Content-Transfer-Encoding: chunked'); 
  readfile($mp3);
  exit;
}
else{
        echo 'The file does not exist.';
    }
}

if(!empty($_GET['file1'])){
$mp3 ='C:\xampp\htdocs\audio\audio1/khariyat.mp3';
if(file_exists($mp3)) {
  header('Content-Type: audio/mpeg');
  header('Content-Disposition: attachment; filename="khariyat.mp3"');
  header('Content-length: '. filesize($mp3));
  header('Cache-Control: no-cache');
  header('Content-Transfer-Encoding: chunked'); 
  readfile($mp3);
  exit;
}
else{
        echo 'The file does not exist.';
    }
}
if(!empty($_GET['file2'])){
$mp3 ='C:\xampp\htdocs\audio\audio1/asalmein.mp3';
if(file_exists($mp3)) {
  header('Content-Type: audio/mpeg');
  header('Content-Disposition: attachment; filename="asalmein.mp3"');
  header('Content-length: '. filesize($mp3));
  header('Cache-Control: no-cache');
  header('Content-Transfer-Encoding: chunked'); 
  readfile($mp3);
  exit;
}
else{
        echo 'The file does not exist.';
    }
}
if(!empty($_GET['file3'])){
$mp3 ='C:\xampp\htdocs\audio\audio1/bezubaan.mp3';
if(file_exists($mp3)) {
  header('Content-Type: audio/mpeg');
  header('Content-Disposition: attachment; filename="bezubaan.mp3"');
  header('Content-length: '. filesize($mp3));
  header('Cache-Control: no-cache');
  header('Content-Transfer-Encoding: chunked'); 
  readfile($mp3);
  exit;
}
else{
        echo 'The file does not exist.';
    }
}
if(!empty($_GET['file4'])){
$mp3 ='C:\xampp\htdocs\audio\audio1/bhuladunga.mp3';
if(file_exists($mp3)) {
  header('Content-Type: audio/mpeg');
  header('Content-Disposition: attachment; filename="bhuladunga.mp3"');
  header('Content-length: '. filesize($mp3));
  header('Cache-Control: no-cache');
  header('Content-Transfer-Encoding: chunked'); 
  readfile($mp3);
  exit;
}
else{
        echo 'The file does not exist.';
    }
}
if(!empty($_GET['file5'])){
$mp3 ='C:\xampp\htdocs\audio\audio1/duakaro.mp3';
if(file_exists($mp3)) {
  header('Content-Type: audio/mpeg');
  header('Content-Disposition: attachment; filename="duakaro.mp3"');
  header('Content-length: '. filesize($mp3));
  header('Cache-Control: no-cache');
  header('Content-Transfer-Encoding: chunked'); 
  readfile($mp3);
  exit;
}
else{
        echo 'The file does not exist.';
    }
}
if(!empty($_GET['file6'])){
$mp3 ='C:\xampp\htdocs\audio\audio1/dusbahane.mp3';
if(file_exists($mp3)) {
  header('Content-Type: audio/mpeg');
  header('Content-Disposition: attachment; filename="dusbahane.mp3"');
  header('Content-length: '. filesize($mp3));
  header('Cache-Control: no-cache');
  header('Content-Transfer-Encoding: chunked'); 
  readfile($mp3);
  exit;
}
else{
        echo 'The file does not exist.';
    }
}
if(!empty($_GET['file7'])){
$mp3 ='C:\xampp\htdocs\audio\audio1/gabru.mp3';
if(file_exists($mp3)) {
  header('Content-Type: audio/mpeg');
  header('Content-Disposition: attachment; filename="gabru.mp3"');
  header('Content-length: '. filesize($mp3));
  header('Cache-Control: no-cache');
  header('Content-Transfer-Encoding: chunked'); 
  readfile($mp3);
  exit;
}
else{
        echo 'The file does not exist.';
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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Music Mellow</title>
    <style>
    	body{
    		background-color: #f7f7f7;
    		font-family: Open sans;
    	}
    	.error
    	{
    		color: red;
    	}
    	img{
    		width: 100%;
    		min-height: 250px;
    	}
    	.main{
    		padding: 40px 0;
    	}
    	.col-md-3{
    		margin-bottom: 40px;
    	}
    	.album-poster{
    		position: relative;
    		display: block;
    		border-radius: 7px;
    		overflow: hidden;
    		box-shadow: 0 15px 35px #3d2173a1;
    		transition: all ease 0.4s;
    	}
    	.album-poster:hover{
    		box-shadow: none;
    		transform: scale(0.98) translateY(5px);
    	}
    	h3{
    		font-size: 34px;
    		margin-bottom: 34px;
    		border-bottom: 4px solid #e6e6e6;
    		padding-bottom: 15px;
    	}
    	p{
    		font-size: 15px;
    	}
    	.h{
    		font-size: 16px;
    		text-transform: uppercase;
    		margin-top: 15px;
    		font-weight: 700;
    	}
		#aplayer{
			position: fixed;
			bottom: -100%;
			left: 0;
			width: 100%;
			margin: 0;
			box-shadow: 0 -2px 2px #dadada;
			background-color: #fff;
			transition: all ease 0.5s;
		}
		#aplayer.showPlayer{
			bottom: 0;
		}
		span1{
			color: #000 !important;
			font-size: 16px;
		}
		.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-loaded{
			background: #e0e0e0;
    		height: 4px;
		}
		.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played{
			height: 4px;
			background-color: #2196F3 !important;
		}
		.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played .aplayer-thumb{
			background-color: #2196F3 !important;
		}

		.aplayer .aplayer-icon{
			width: 20px;
			height: 20px;
		}
		.aplayer .aplayer-info .aplayer-controller .aplayer-time .aplayer-icon path {
		    fill: #000;
		}
		.aplayer .aplayer-info .aplayer-music{
			margin-bottom: 5px;
		}
	.ad
  	{
  		width: 100%;
  		height: 80px;
  	}
  	.a1
  	{
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
<!-- <script type="text/javascript">
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
</script> -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top ad shadow" style="background:#7f71e3">
<div class="container">

<a href="#" class="navbar-brand text-dark font-weight-bold a1">
<span style="font-size: 25px;" class="text-danger">MUSIC</span>
Mellow
</a>

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
<br><br><br>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>New Releasess</h3>
			</div>
			<div class="col-md-3">
				<a href="javascript:void();" class="album-poster" data-switch="0">
					<img src="https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
					<h5><a href="audio.php?file=audio1/taare.mp3">Download Here</a></h5>
				</a>
				<h4 class="h">New Punjabi Song</h4>
				<p>Taare full song  Aatish -mp3 2017</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="1">
					<img src="https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h5><a href="audio.php?file1=audio1/khariyat.mp3">Download Here</a></h5>
				<h4 class="h">New Hindi Song</h4>
				<p>khairiyat-mp3 2019</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="2">
					<img src="https://images.pexels.com/photos/838696/pexels-photo-838696.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h5><a href="audio.php?file2=audio1/asalmein.mp3">Download Here</a></h5>
				<h4 class="h">New Hindi Song</h4>
				<p>Asal Mein-mp3 2020</p>
			</div>

			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="3">
					<img src="https://images.pexels.com/photos/1047442/pexels-photo-1047442.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h5><a href="audio.php?file3=audio1/bezubaan.mp3">Download Here</a></h5>
				<h4 class="h">New Hindi Song</h4>
				<p>Bezubaan Kab Se-mp3 2020</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="4">
					<img src="https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h5><a href="audio.php?file4=audio1/bhuladunga.mp3">Download Here</a></h5>
				<h4 class="h">New Hindi Song</h4>
				<p>Bhula Dunga mp3- 2019</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="5">
					<img src="https://images.pexels.com/photos/210922/pexels-photo-210922.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h5><a href="audio.php?file5=audio1/duakaro.mp3">Download Here</a></h5>
				<h4 class="h">New Hindi Song</h4>
				<p>Duakaro mp3- 2020</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster" data-switch="6">
					<img src="https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h5><a href="audio.php?file6=audio1/dusbahane.mp3">Download Here</a></h5>
				<h4 class="h">New Hindi Song</h4>
				<p>Dus Bahane mp3- 2010</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="album-poster">
					<img src="https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h5><a href="audio.php?file7=audio1/gabru.mp3">Download Here</a></h5>
				<h4 class="h">New Punjabi Song</h4>
				<p>Gabru mp3 - 2020</p>
			</div>
			
		</div>


		<div class="row">
			<div class="col-md-12">
				<h3>coming soon</h3>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster">
					<img src="https://images.pexels.com/photos/2272854/pexels-photo-2272854.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h4 class="h">Lorem ipsum</h4>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster">
					<img src="https://images.pexels.com/photos/838702/pexels-photo-838702.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h4 class="h">Repellat illo</h4>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster">
					<img src="https://images.pexels.com/photos/894156/pexels-photo-894156.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h4 class="h">adipisicing elit</h4>
			</div>
			
			<div class="col-md-2">
				<a href="#" class="album-poster">
					<img src="https://images.pexels.com/photos/2118046/pexels-photo-2118046.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h4 class="h">Atque ab</h4>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster">
					<img src="https://images.pexels.com/photos/1735240/pexels-photo-1735240.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h4 class="h" >Fugiat Silly</h4>
			</div>
			<div class="col-md-2">
				<a href="#" class="album-poster">
					<img src="https://images.pexels.com/photos/2272854/pexels-photo-2272854.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
				</a>
				<h4 class="h">veniam expedita</h4>
			</div>
		</div>


	</div>
</div>

	<div id="aplayer"></div>

	<!-- Jquery Link -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<!-- Bootstrap Link -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- APlayer Jquery link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>	

	<script>
		$(".album-poster").on('click', function(e){
			var dataSwitchId = $(this).attr('data-switch');

			ap.list.switch(dataSwitchId); 
			ap.play();
			$("#aplayer").addClass('showPlayer');
		});

		const ap = new APlayer({
		    container: document.getElementById('aplayer'),
		    listFolded: true,
		    audio: [
		    {
		        name: 'Taare Full Song Latest Punjabi Songs 2017 mp3',
		        artist: 'Aatish',
		        url: 'audio1/taare.mp3',
		        cover: '12.jpg'
		    },
		     {
		        name: 'Khairiyat | Chhichhore | Nitesh Tiwari',
		        artist: 'Arjit Singh',
		        url: 'audio1/khariyat.mp3',
		        cover: '12.jpg'
		    },
            {
				name: 'Asal Mein | Hindi mp3',
				artist: 'Darshan Raval',
				url: 'audio1/asalmein.mp3',
				cover:'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'Bezubaan Kab Se|Hindi mp3',
				artist: 'Jubin Nautyal',
				url: 'audio1/bezubaan.mp3',
				cover:'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',

			},
			{
				name: 'Bhula Dunga |Hindi mp3',
				artist: 'Darshan Raval',
				url: 'audio1/bhuladunga.mp3',
				cover:'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'Dua Karo |Hindi mp3',
				artist: 'Arjit Singh',
				url: 'audio1/duakaro.mp3',
				cover:'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'Dus Bahane |Hindi mp3',
				artist: 'KK',
				url: 'audio1/dusbahane.mp3',
				cover:'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'Pyaar Tenu Karda Gabru |Punjabi mp3',
				artist: 'Romy',
				url: 'audio1/gabru.mp3',
				cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'Genda Phool |Hindi mp3',
				artist: 'Baadshah',
				url: 'audio1/gendaphool.mp3',
				cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'Humraah |Hindi mp3',
				artist: 'Sachet Tandon',
				url: 'audio1/humraah.mp3',
				cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'Illegal Weapon |Punjabi mp3',
				artist: 'Garry Sandhu',
				url: 'audio1/illegalweapon.mp3',
				cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'Kehndi Haan Kehndi Na |Punjabi mp3',
				artist: 'Prakriti Kakkar',
				url: 'audio1/kehndihaan.mp3',
				cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'Manna Dil |Hindi mp3',
				artist: 'B Praak',
				url: 'audio1/maanadil.mp3',
				cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
                name: 'Mere Angne Mein |Hindi mp3',
				artist: 'Neha Kakkar',
				url: 'audio1/mereangnemein.mp3',
				cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'NaJa Tu |Hindi mp3',
				artist: 'Dhvani Bhanuishali',
				url: 'audio1/najatu.mp3',
				cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'Phir Na Milein |Hindi mp3',
				artist: 'Arijit Singh',
				url: 'audio1/phirnamilein.mp3',
				cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'Shayad |Hindi mp3',
				artist: 'Arjit Singh',
				url: 'audio1/shayad.mp3',
				cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},

		    ]
		});
	</script>

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