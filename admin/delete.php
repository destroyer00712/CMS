<?php
include("connection.php");
$title = $_GET["title"];

$sql = "DELETE FROM `product` WHERE title = '$title';";
$result = $connection->query($sql);

if(!$result){
    die("Invalid query: ". $connection->connect_error());
}
else{
    header("Location:main.php");
};
?>