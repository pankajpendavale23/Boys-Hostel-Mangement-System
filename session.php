<?php
	error_reporting(E_ALL & E_NOTICE);
	session_start();
	$em=$_SESSION["Email"];
	if(!(isset($_SESSION["$em"])))
	{
		header("location:index.html");
	}
	mysql_connect('localhost','root','');
     mysql_select_db('hostel');

?>
