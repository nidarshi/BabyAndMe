
HOME
TUTORIAL, HTML, MYSQL, PHP
LOGIN SYSTEM USING PHP WITH MYSQL DATABASE WITH SESSION
22
Sep
Login System using PHP with MySql Database with Session
User login system tutorial using HTML, PHP, MySql, Session and CSS on which user can log in to the profile page and log out. This is a very basic but effective tutorial. Where I do not only focus what it gives but also focus on how it gives. After watching this, I hope you will learn about HTML, PHP, MySql and also Session.

index.php
<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>

