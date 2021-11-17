<?php
session_start();
if(isset($_POST[logout_btn]))
{
	session_destroy();

	unset($_SESSION['auth']);
	unset($_SESSION['auth_role']);
	unset($_SESSION['auth_users']);
		$_SESSION['message']="Logged Out Successfully";
		header("Location: login.php");
		exit(0);

}
?>