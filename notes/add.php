<?php
include '../connect.php';

$notetitle = filterRequest('title');
$notecontent = filterRequest('content');
$userid = filterRequest('id');

$strt = $cnct->prepare("INSERT INTO `notes`(`notes_title`, `notes_content`, `notes_users`) VALUES ('$notetitle','$notecontent','$userid')");
$strt->execute();

$count = $strt->rowCount();

if($count > 0 ) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));
}
?>