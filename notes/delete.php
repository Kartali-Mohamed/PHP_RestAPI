<?php
include '../connect.php';

$noteid = filterRequest('id');  

$strt = $cnct->prepare("DELETE FROM notes WHERE `notes_id` = '$noteid'");
$strt->execute();

$count = $strt->rowCount();

if($count > 0 ) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));
}
?>