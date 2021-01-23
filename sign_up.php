<?php

$full_name=$_GET["full_name"];
$SSN=$_GET["SSN"];
$phone_number=$_GET["phone_number"];
$infected=$_GET["infected"];
$longitude=$_GET["longitude"];
$latitude=$_GET["latitude"];
require "init.php";


$query="insert into userinfo(full_name, SSN, phone_number,infected,longitude,latitude) values ('".$full_name."','".$SSN."','".$phone_number."','".$infected."','".$longitude."','".$latitude."')";
$m=mysqli_query($con,$query);
if (!mysqli_query($con,$query))
{
$response=array();
$code="sign_up_true";


$message="sign_up success. ";

array_push( $response,array("code"=>$code,"message"=>$message,"full_name"=>$full_name,"SSN"=>$SSN,"phone_number"=>$phone_number,"infected"=>$infected,"longitude"=>$longitude,"latitude"=>$latitude));

echo json_encode(array("server_response"=>$response));
}
else
{
$response=array();
$code="sign_up_false";
$message="sign_up..Try again";
array_push($response,array("code"=>$code,"message"=>$message));
echo json_encode(array("server_response"=>$response));
}
mysqli_close($con);
?>

