<?php
session_start();

$con = mysqli_connect("xxx.x.xxx.xxx", "lxxxxxArden", "webbook", "lxxxxxxDBwebbook");
if (! $con) {
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    die('Could not connect: ' . mysqli_error($con));
} else {
    echo "Connected to mySQL successfully. <br>";}

$id = $_GET['primaryKey'];
$sqlDelete = "DELETE FROM ljohxxoxDBxxxxxx.Contacts WHERE id='$id'";
 if(mysqli_query($con, $sqlDelete)){
     echo "Record deleted succesfully";
 }else{
     echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>