<?php
include("includes/connection.php");
session_start();
$msg = "";
$accountMsg = "";
$accountDeleted = "";
$accountInvalid = "";
if (isset($_POST['login'])) {
	$useraEmail = $_POST['useraEmail'];
	$useraPassword = $_POST['useraPassword'];
	if ($useraEmail == "") {
		$msg = "Email can not be empty.";
	} else if ($useraPassword == "") {
		$msg = "Password can not be empty.";
	} else {
		$sql = "select * from admin where user_email='$useraEmail' and user_password='$useraPassword'";
		$result = mysqli_query($connection, $sql);
		$row = mysqli_fetch_array($result);
		// header("location:adminMain.php");		
		if ($row['user_email'] == "admin" && $row['user_password'] == "3062756") {
			$_SESSION['adminSigned'] = "1";
			header("location:adminMain.php");
		} else {

			header("location:adminLogin.php");
		}
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style-admin.css">
	<link rel="icon" href="img/favicon.png" />
	<script src="https://kit.fontawesome.com/12583d8ffd.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<title>Comfort - Sign In</title>
</head>

<body>
	<div class="container">
		<?php
		include("includes/backHome.php");
		?>
		<div class="login-main">
			<div class="contentBox">
				<div class="loginForm">
					<h1>Sign In</h1>
					<span class="errorClass"><?php echo $accountDeleted; ?></span>
					<form class="loginFormStyle" autocomplete="off" method="POST">
						<input type="text" name="useraEmail" placeholder="Username" required>
						<input type="password" name="useraPassword" placeholder="Password" required>
						<span class="errorClass"><?php echo $accountInvalid; ?></span>
						<input type="submit" name="login" value="Sign In">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>