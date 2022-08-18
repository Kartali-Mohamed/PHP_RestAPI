<?php
include '../connect.php';

$username = filterRequest('username');
$email = filterRequest('email');
$password = filterRequest('password');

$strt = $cnct->prepare("INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')");
$strt->execute();

$count = $strt->rowCount();

if($count > 0 ) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));
}
?>