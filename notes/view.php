<?php
include '../connect.php';

$userid = filterRequest('id');  

$strt = $cnct->prepare("SELECT * FROM notes WHERE `notes_users` = '$userid'");

$strt->execute();

$data = $strt->fetchAll(PDO::FETCH_ASSOC);

$count = $strt->rowCount();

if($count > 0 ) {
    echo json_encode(array("status" => "success" , "data" => $data));
} else {
    echo json_encode(array("status" => "fail"));
}
?>