<?php
session_start();
// ob_start();
if(!isset($_SESSION['email'])){
	
// header("index.php");
	echo "<script type=\"text/javascript\">
window.location.href='index.php';
            </script>"; 
// die();
	// exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME <?php echo $_SESSION['email']; ?></title>
	   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap.min.css" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="bootstrap.min.js"></script>

</head>
<body>
<center>
	<h3 class="d-block p-2 bg-primary text-white">Hello! <?php echo $_SESSION['email']; ?></h3>
<h3 class="d-block p-2 bg-dark text-white">You are logged in now</h3>

<a href="stop.php">LOGOUT!</a>

</center>
	
</body>
</html>
