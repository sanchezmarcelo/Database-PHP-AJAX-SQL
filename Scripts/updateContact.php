<?php

session_start();

$con = mysqli_connect("xxx.xx.xxx.xxx", "ljohnso8Arden", "webbook", "ljohnso8DBwebbook");

    if (! $con) {
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    die('Could not connect: ' . mysqli_error($con));
    } else {
    echo "Connected to mySQL successfully. <br>";
    }

    $id = $_GET['primaryKey'];
    
    $newFirst = $_GET['newFirst'];
    $newLast = $_GET['newLast'];
    $newPhone = $_GET['newPhone'];
    $newMobile = $_GET['newMobile'];
    $newFax = $_GET['newFax'];
    $newEmail = $_GET['newEmail'];
    $newWeb = $_GET['newWeb'];
    
    
    $sql ="UPDATE ljohnso8DBwebbook.Contacts SET first ='$newFirst', last='$newLast', phone='$newPhone', mobile='$newMobile', fax='$newFax', email='$newEmail', web='$newWeb' WHERE id = '$id'";
    

    
    if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn); 
    }
    
    mysqli_close($con);
?>