<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
    <tr>
        <th><b>Title</b></th>
        <th><b>Image Url</b></th>
        <th><b>Description</b></th>
        <th><b>Row</b></th>
        <th><b>Update</b></th>
        <th><b>Delete</b></th>
    </tr>
    <?php
            include("connection.php");
            //fetches the data
            $sql = "SELECT * FROM `product`";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query: ". $connection->connect_error());
            }

            while($row = $result->fetch_assoc()){
                echo '
                <tr>
                    <th>'. $row['title'] .'</th>
                    <th>'. $row['image'] .'</th>
                    <th>'. $row['description'] .'</th>
                    <th>'. $row['row'] .'</th>
                    <th><a href="update.php?title='. $row['title'] . '&img=' . $row['image'] . '&discription=' . $row['description'] . '&row=' . $row['row'] .'">Update</a></th>
                    <th><a href="">Delete</a></th>
                </tr>
            ';
            }
        ?>
        <tr>
            <th>
                <a href="new.php">New Product</a>
            </th>
        </tr>
        <tr>
        <th>
                <a href="">New Row</a>
            </th>
        </tr>
    </table>
</body>
</html>