<?php
$host="localhost";
$user="root";
$password="";
$db="bookflight";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password"];

	$sql="select * from user_signup where email='".$email."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if ($row['status'] == 0) 
	{
		exit ();
	}
	if($row["role"]=="user")
	{	

		$_SESSION["email"]=$email;

		header("location:home.html");
	}

	elseif($row["role"]=="admin")
	{

		$_SESSION["email"]=$email;
		
		header("location:adminshit\Admin.php");
	}

	else
	{
		echo "username or password incorrect";
	}
}
?>