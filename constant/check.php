<?php
session_start();
//echo $_SESSION['email'];exit;
if(!isset($_SESSION["email"]))
{
	//echo $_SESSION['alogin'];exit;
	header("location:../index.php");


}
?>