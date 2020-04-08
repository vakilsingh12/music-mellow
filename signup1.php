<?php
session_start();
$email = "";
$contact = "";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'music');
if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $contact= mysqli_real_escape_string($db, $_POST['contact']);
  $password1= mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  if (empty($email)) { array_push($errors, "Username is required"); }
  if (empty($contact)) { array_push($errors, "Email is required"); }
  if (empty($password1)) { array_push($errors, "Password is required"); }
  if ($password1 != $password2) {
	array_push($errors, "The two passwords do not match");
  }
$sql = "SELECT * FROM signup WHERE email='$email' OR contact='$contact' LIMIT 1";
  $result = mysqli_query($db, $sql);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['email'] === $contact) {
      array_push($errors, "Email already exists");
    }
  }
  if (count($errors) == 0) {
  	$password = md5($password1);
  	$query = "INSERT INTO signup (email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}