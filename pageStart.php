
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
<p class="T1">Information</p>
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
		font-size: 20px;
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

<div class="container">
	<input type="submit" onclick="showPopUp()" value="Sign In" class="btn">
   <form action="Registr.php" method="post">
   <tr>
   <input type="submit" value="Sign Up" class="btn">
   </tr>
	</form>
	
<div class="popup" id="sign-in-window" hidden>
    <div class="popup-content">
        <p align="right"><button onclick="hidePopUp()" class="close-button">Close</button></p>

        <hr>

        <form action="AuthLab.php" method="post">

            <div class="form-table">
                <div class="field">
                    <label for="email">Email</label><input type="email" name="email" required><br>
                </div>
                <div class="field">
                    <label for="password">Password</label><input type="password" name="password" required><br>
                </div>
            </div>


            <hr>

            <p align="right"><input type="submit" class="btn" value="Sign In"></p>


    </div>
</div>
<script>
let signInWindow = document.getElementById('sign-in-window');

function showPopUp()
{
    signInWindow.removeAttribute("hidden");
}

function hidePopUp()
{
    signInWindow.setAttribute("hidden","");
}
</script>
</body>
</html>






<?php
session_start();
require_once 'dbLab.php';

$sql = "SELECT users.id, users.first_name, users.last_name, users.email, users.photo, role.title FROM users LEFT JOIN role ON users.id = role.id";


		
echo '<table border="1" cellpadding="6" cellspacing="0" align="center">';
echo	"<tr><td>#</td>
	<td>fisrt_name</td>
	<td>last_name</td>
	<td>Email</td>
	<td>Role</td>";
	$res = mysqli_query ($conn, $sql);
    // output data of each row
		while($row = $res->fetch_assoc()) 
		{
		echo "<tr>
		<td><a href='UserLab.php?id=".$row['id']."'>".$row['id']."</a></td>
		<td>".$row['first_name']."</td>
		<td>".$row['last_name']."</td>
		<td>".$row['email']."</td>
		<td>".$row['title']."</td>";
			
			"</tr>";
    }
	echo "</table>";
	//header('Location: .php');
?>
