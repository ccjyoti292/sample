<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	header ('location:admin.php');
}?>

<?php
include('header.php');
?>
<html>
<head>
<title>admin dash</title>
<h1 align="center">Welcome to Admin Dashboard</h1>
</head>
<body background="b.jpg">
<a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">log out</a>
<table align="center">
<h3><a href="view.php" style="color:dodgeblue;">View Notification</a></h3>
<h3><a href="add.php" style="color:dodgeblue;">Insert Apartment</a></h3>
<h3><a href="delete.php" style="color:dodgeblue;">Delete Information</a></h3>
<h3><a href="update.php" style="color:dodgeblue;">Update Information</a></h3>
</body>
</html>



