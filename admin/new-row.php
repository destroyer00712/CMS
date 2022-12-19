<?php
include("connection.php");


if (isset($_POST['btn'])){
    $row = $_POST["rowfield"];

    $sql = "INSERT INTO `row_num`(`row`) VALUES ('$row')";
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
            <input type="text" class="textfield" id="rowfield" name="rowfield" placeholder="Row">
            <input name="btn" type="submit" value="Add Row" class="enquire-btn-form">
        </form>
    </div>
</body>
</html>