<?php

include 'rugged.php';

$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$zone = $_POST['zone'];
$lga = $_POST['lga'];
$duty = $_POST['duty'];
$lang = $_POST['lang'];


mysqli_query($conn,"INSERT INTO `registration` (`Name`,`Gender`,`Phone Number`,`Zone`,`LGA`,`Duty`,`Language`) VALUES ('".$name."','".$gender."','".$phone."','".$zone."','".$lga."','".$duty."','".$lang."')");


?>