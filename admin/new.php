<?php
$title = $_POST['titlefield'];
$img = $_POST['imgfield'];
$discription = $_POST['discriptionfield'];
$row = $_POST['rowfield'];

if (isset($_POST['btn'])){
    include("connection.php");

    $sql = "SELECT * FROM `product`";
    $result = $connection->query($sql);

    if(!$result){
        die("Invalid query: ". $connection->connect_error());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ullas Agarbathis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post">
            <input type="text" class="textfield" id="titlefield" name="titlefield" placeholder="Title">
            <input type="text" class="textfield" id="imgfield" name="imgfield" placeholder="Image URL">
            <textarea type="text" class="textfield" id="descriptfield" name="desriptfield" placeholder="Description"></textarea>
            <input type="text" class="textfield" id="rowfield" name="rowfield" placeholder="Row">
            <input name="btn" type="submit" value="Update" class="enquire-btn-form">
        </form>
    </div>
</body>
</html>