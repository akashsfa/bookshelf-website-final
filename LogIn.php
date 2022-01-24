<?php
session_start();

include('config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$phone = $_POST['phone'];
	$pass = $_POST['pass'];
	$type = $_POST['type'];

	$s = "select * from {$type} where Phone = '$phone' && Passcode = '$pass'";
	$result = mysqli_query($conn, $s );
	$num = mysqli_num_rows($result);
	if($num == 1){
		$_SESSION['logged_in'] = TRUE;

		if ($type=="admininfo") {
			header("location: admin.php");
		}else{
			header('location: Home.php');
		}

	}else{

		$_SERVER['error']['message'] = "No acount found";
		//header('location: LogIn.php');
		
	}
}

			 
?>
<html>
<head>

    <head>
        <title>LogIn | Book Market</title>
        
    </head>	

</head>
<body>
	<?php include('navbar.php'); ?>
	<h1> Login Page</h1>
	<hr>
	<fieldset>
		<legend>Login Form</legend>
		<?php
		if (isset($_SERVER['error']['message'])) {
			echo "<b>".$_SERVER['error']['message']."</b>";
			unset($_SERVER['error']['message']);
		}
		?>
		<form method="post">
		<p><input type="text" name="phone" placeholder="Phone" required=""></p>
		<p><input type="password" name="pass" placeholder="Password" required=""></p>
		<select name="type">
			<option value="information">Customer</option>
			<option value="winformation">Writer</option>
			<option value="pinformation">Publisher</option>
			<option value="admininfo">Admin</option>
		</select>

		<input type="submit" name="submit" value="Login">
        <br><br>
    
        Don't Have Account?: <a href="CreateNew-copy.php">Click here</a>
  
    </fieldset>      


	
	

</body>
</html>


