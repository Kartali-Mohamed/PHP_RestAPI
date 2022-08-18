<?php 
$dsn = "mysql:host=localhost;dbname=noteapp" ; 
$user = "root" ;
$pass = "" ; 
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8" // FOR Arabic
);
try {

    $cnct = new PDO($dsn , $user , $pass , $option ); 
    $cnct->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION) ;
    include 'functions.php';
    
} catch(PDOException $e){
    echo $e->getMessage() ;      // -> == .   
}
?>