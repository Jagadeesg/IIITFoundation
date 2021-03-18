<?php
session_start();
if(!empty($_POST["login_btn"])) {
	$conn = mysqli_connect("localhost", "pratibha", "coepdus", "coepdus");
	$sql = "Select * from users where email = '" . $_POST["email"] . "' and password = '" . $_POST["password"] . "'";
	$result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["id"]		   = $user["id"];
			$_SESSION['email'] = $user['email'];
			$_SESSION['password'] = $user['password'];
			$_SESSION['loggin_time'] = time();
				header("location:AdminDashboard.php");
			if(!empty($_POST["remember"])) {
				setcookie ("login",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
				header("location:AdminDashboard.php");
			} else {
				if(isset($_COOKIE["login"])) {
					setcookie ("login","");
				}
				if(isset($_COOKIE["password"])) {
					setcookie ("password","");
				}
				if(isset($_SESSION["id"])){
					header("Location:AdminDashboard.php");
				}
			}
	} else {
		echo "<script>alert('username and password is incorrect')</script>";
		echo "<script> window.location.href='index.php'</script>";
	}
}
?>