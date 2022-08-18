<?php
include '../connect.php';

$email = filterRequest('email');
$password = filterRequest('password');

$strt = $cnct->prepare("SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'");

$strt->execute();

$data = $strt->fetch(PDO::FETCH_ASSOC);

$count = $strt->rowCount();

if($count > 0 ) {
    echo json_encode(array("status" => "success" , "data" => $data ));
} else {
    echo json_encode(array("status" => "fail"));
}
?>