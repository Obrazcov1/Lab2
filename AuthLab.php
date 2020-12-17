
<?php
session_start();
// Start the session;
require_once 'dbLab.php';
$res = mysqli_query ($conn, "SELECT users.id, users.first_name, users.last_name, users.email, users.photo, role.title FROM users LEFT JOIN role ON users.id = role.id WHERE users.email='" . $_POST['email']. "' and users.password='" . $_POST['password'] ."'");
$result = mysqli_fetch_array($res);



if (is_array($result)) {
    // output data of each row
   			 $_SESSION['email'] = $row['email'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['first_name'] = $result['first_name'];
			$_SESSION['id'] = $result['id'];
			$_SESSION['title'] = $result['title'];
	header('Location: enterLb.php');
}
else
{	
		
		header('Location: restrictedLab.php');
	
}

?>