<?php


$SSN=$_GET["SSN"];

require "init.php";

$query="select * from userinfo WHERE SSN='$SSN'";
$result=mysqli_query($con,$query);
if (mysqli_num_rows($result)>0)
{
$response=array();
$code="login_true";
$row=mysqli_fetch_array($result);
//$SSN=$row[1];
$message="login success..welcome ";
//array_push( $response,array("code"=>$code,"message"=>$message));
array_push( $response,array("code"=>$code,"message"=>$message,"SSN"=>$SSN));

echo json_encode(array("server_response"=>$response));
}
else
{
$response=array();
$code="login_false";
$message="login..Try again";
array_push($response,array("code"=>$code,"message"=>$message));
echo json_encode(array("server_response"=>$response));
}
mysqli_close($con);
?>
