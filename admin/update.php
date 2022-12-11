<?php
include("connection.php");
error_reporting(0);

$title = $_GET['title'];
$img = $_GET['img'];
$discription = $_GET['discription'];
$row = $_GET['row'];
$title_n = $_POST["titlefield"];
$img_n = $_POST["imgfield"];
$discription_n = $_POST["discriptionfield"];
$row_n = $_POST["rowfield"];

if (isset($_POST['btn'])){
    $sql = "UPDATE `product` SET `title`='$title_n',`image`='$img_n',`description`='$discription_n',`row`='$row_n' WHERE title = '$title';";
    $result = $connection->query($sql);

    if(!$result){
        die("Invalid query: ". $connection->connect_error());
    }
    else{
        header("Location:main.php");
    };
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
            <input type="text" class="textfield" id="titlefield" name="titlefield" placeholder="Title" value="<?php echo $title; ?>">
            <input type="text" class="textfield" id="imgfield" name="imgfield" placeholder="Image URL" value="<?php echo $img; ?>">
            <textarea type="text" class="textfield" id="discriptionfield" name="discriptionfield" placeholder="Description"><?php echo $discription; ?></textarea >
            <input type="text" class="textfield" id="rowfield" name="rowfield" placeholder="Row" value="<?php echo $row; ?>">
            <input name="btn" type="submit" value="Update" class="enquire-btn-form">
        </form>
    </div>
</body>
</html>