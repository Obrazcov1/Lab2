<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
	   .btn {
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

</body>
</html>

<?php
session_start();

echo'
<body style="padding-top: 3rem;">
<div align="center">
	<form action="index.php" method="post">
       <input type="submit" value="Go to registration" class="btn">
   </form>
   </div>';

?>