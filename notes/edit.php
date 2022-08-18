<?php
include '../connect.php';

$noteid = filterRequest('id');
$notetitle = filterRequest('title');
$notecontent = filterRequest('content');

$strt = $cnct->prepare("UPDATE `notes` Set `notes_title` = '$notetitle', `notes_content` = '$notecontent' WHERE `notes_id` = '$noteid'");
$strt->execute();

$count = $strt->rowCount();

if($count > 0 ) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));
}
?>