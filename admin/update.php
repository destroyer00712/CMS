<?php
include("connection.php");
error_reporting(0);

$title = $_GET['title'];
$img = $_GET['img'];
$discription = $_GET['discription'];
$row = $_GET['row'];
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
            <input type="text" class="textfield" id="titlefield" name="titlefield" placeholder="Title" value="<?php echo $title; ?>">
            <input type="text" class="textfield" id="imgfield" name="imgfield" placeholder="Image URL" value="<?php echo $img; ?>">
            <textarea type="text" class="textfield" id="descriptfield" name="desriptfield" placeholder="Description"><?php echo $discription; ?></textarea >
            <input type="text" class="textfield" id="rowfield" name="rowfield" placeholder="Row" value="<?php echo $row; ?>">
            <input name="btn" type="submit" value="Update" class="enquire-btn-form">
        </form>
    </div>
</body>
</html>