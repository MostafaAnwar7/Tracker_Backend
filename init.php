<?php
$host="localhost";
$user="root";
$password="";
$dbname="Users";

$con=mysqli_connect($host,$user,$password,$dbname);

if(!$con)
{
	die ("Erroe in database connection".mysqli_connect_error());
}
?>