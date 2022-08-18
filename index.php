<?php 
include "connect.php";

/*
// Select Data
$stmt = $cnct->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count = $stmt->rowCount();

if($count > 0) {
    echo json_encode($users);
} else {
    echo "not found";
}
*/


/*
// Insert Data

$stmt = $cnct->prepare("INSERT INTO `users`(`email`, `username`) VALUES ('wael','wael@gmail.com')");
$stmt->execute();

$count = $stmt->rowCount();
if($count > 0) {
    echo "success";
} else {
    echo "fail" ;
}
*/


/*
// Update Data
$stmt = $cnct->prepare("UPDATE `users` SET `email`='wael@gmail.com',`username`='wael'  WHERE id = 3");
$stmt->execute();

$count = $stmt->rowCount();
if($count > 0) {
    echo "success";
} else {
    echo "fail" ;
}
*/


/*
// Delete Data
$stmt = $cnct->prepare("DELETE FROM `users` WHERE id = 3");
$stmt->execute();

$count = $stmt->rowCount();
if($count > 0) {
    echo "success";
} else {
    echo "fail" ;
}
*/
?>