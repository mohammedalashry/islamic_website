<?php
session_start();
if (isset($_SESSION['userlogin']) ){
	session_unset();
	session_destroy();
	header("location:/");
}
else{
	header("location:error");
}
?>