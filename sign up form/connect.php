<?php

$conn = mysqli_connect('localhost','root','','registration');
 if (!$conn){
     echo 'not connected to the server';
 }
if (!mysqli_select_db($conn,'registration'))
{
    echo'database not selected';
}

$fname=$_POST["name"];
$email=$_POST["email"];
$pswrd=$_POST["ps"];
$mob=$_POST["mob"];
$uni=$_POST["uni"];
$acdmic=$_POST["ac"];

$sql = "INSERT INTO user(Name,Email,Password,Mobile,University,Acadmic) VALUES ('$fname','$email','$pswrd','$mob','$uni','$acdmic')";

if(!mysqli_query($conn,$sql)){
    echo 'not inserted';
}
else{
    echo 'inserted';
}
?>