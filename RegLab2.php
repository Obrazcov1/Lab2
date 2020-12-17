
<?php
session_start();
// Start the session;
require_once 'dbLab.php';

$sql = "INSERT INTO users (first_name, last_name, email, password, id_role) VALUES ('".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['email']."', '".$_POST['password']."', ".$_POST['title'].")";
$table = "INSERT INTO role (titile) VALUES ('".$_POST['titile']."')";
if(mysqli_query($conn, $sql) and mysqli_query($conn, $table))
{
	header('Location: Registr.php');
}
else
{
	echo'
	<form action="index.php" method="post">
       <input type="submit" value="Error(" class="btn">
   </form>';
}
mysqli_close($conn);
?>