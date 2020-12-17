<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="Rec">
<p class="T1">User information</p>
</header>
<div class="vignette">
    <img src="assets\img\Picture.png">
</div>
   <style>
       .container {
           width: 400px;
		   text-align: center;
       }
	   .Rec
	{
	background-color: #1f1f1f;
	width: 100%;
	height: 50px;
	margin: 0;
	display: fles;
	align-items: center;
	}
	.T1
	{
		font-size: 30px;
		color: white;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
	}
	* {box-sizing: border-box;}
	.vignette {
	  width: 150px;
	  margin: 30px auto 0;
	  position: relative;

	}
	.vignette img{
	  border-radius: 50%;
	  max-width: 100%;
	  height: auto;
	  display: block;
	}
	.vignette:after  {
	  position: absolute;
	  content: "";
	  width: 100%;
	  height: 100%;
	  top: 0;
	  left: 0;
	  background: radial-gradient(50% 50%, hsla(0, 0%, 100%, 0) 50%, #F1EBDF 100%);
	}

   </style>
</head>


</body>
</html>




<?php

session_start();
// Start the session;
require_once 'dbLab.php';

$id = $_GET['id'];


$user = mysqli_query($conn, "SELECT users.id, users.first_name, users.last_name, users.email, users.photo, users.password, role.title FROM users LEFT JOIN role ON users.id = role.id WHERE users.id='" . $id . "'");
$check_user = mysqli_fetch_array($user);

$first_name = $check_user['first_name'];
$last_name = $check_user['last_name'];
$email = $check_user['email'];
$password = $check_user['password'];
$photo = $check_user['photo'];
$title = $check_user['title'];
    echo '<table align="center">';
    echo '<tr>';
    echo '<td class="photo">';
    echo "<img src = " . $photo . " alt='User photo' width='250' height='200' >";
    echo '</td>';
    if ((isset($_SESSION['title']) and ($_SESSION['title'] == 'admin' or $id == $_SESSION['id']))) {
        echo '<td>';
        echo '<form action="ChangeUserLab.php?id=' . $id .'" method="post" enctype="multipart/form-data">';
        echo '<input  type="text" name="first_name" value=' . $first_name . '>';
        echo '<input  type="text" name="last_name" value=' . $last_name . '>';
        if ($_SESSION['title'] == 'admin') {
			
            echo '<input class="admin_inform" list="Role" name="title" value=' . $title . '>
            <datalist id="Role">
                <option value="Admin">
                <option value="User">
            </datalist>';
        }
        echo '<input type="email" name="email" value=' . $email . '>';
        echo ' <input  type="password" name="password" value=' . $password . '>';
        echo '<input  type="password" name="repassword" value=' . $password . '>';
        echo ' <p align="center">Select image to upload</p>
                    <input  type="file" name="fileToUpload">';
        echo '';
        
        
        if ($_SESSION['title'] == 'admin') {
            echo '<a  href="deletePage.php?id=' . $id . '" >Delete</a>';
        }
        echo ' <input type="submit" name="submit" value="Edit">';
        echo '</form>';
        echo '</td>';
    } else {
        echo '<td>';
        echo '<p >' . $check_user["first_name"] . '</p>';
        echo '<p > ' . $check_user["last_name"] . '</p>';
        echo '<p >' . $check_user["email"] . '</p>';
        echo '<p >' . $check_user["title"] . '</p>';
 

        echo '</td>';
    }
    echo '</tr>';
    echo '</table>';
   ?>

