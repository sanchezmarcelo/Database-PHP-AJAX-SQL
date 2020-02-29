<?php
session_start();

$con = mysqli_connect("xxx.x.xxx.xxx", "ljohxxxxArxxen", "wxxxook", "ljohnso8DBwebbook");
if (! $con) {
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    die('Could not connect: ' . mysqli_error($con));
} else {
    echo "Connected to mySQL successfully. <br>";}

$first = $_GET['first'];
$last = $_GET['last'];
$phone = $_GET['phone'];
$mobile = $_GET['mobile'];
$fax = $_GET['fax']; 
$email = $_GET['email'];
$web = $_GET['web'];

$sql = "INSERT INTO xjxxxsoxxxook.Contacts (`first`, `last`, `phone`, `mobile`, `fax`, `email`, `web`)
VALUES ('$first', '$last', '$phone', '$mobile', '$fax', '$email', '$web')";

//$result = mysqli_query($con, $sql);

if(mysqli_query($con, $sql)){
      echo "New record created succesfully";
}else{
echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>