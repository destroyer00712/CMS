<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ullasincense</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <div class="navbar">
            <div class="nav-container">
                <img src="https://ullasincense.co.in/images/ullas%20logo.png" class="nav-logo">
                <div class="spacer"></div>
                <div class="link-div">
                    <a href="https://ullasincense.co.in/index.html" class="nav-link">Home</a>
                    <a href="https://ullasincense.co.in/about%20-us.html" class="nav-link">About Us</a>
                    <a href="https://ullasincense.co.in/ullas_main.htm" class="nav-link">Products</a>
                    <a href="https://ullasincense.co.in/ullas-agarbathi-ads.html" class="nav-link">Events</a>
                    <a href="index.html" class="nav-link">Exports</a>
                    <a href="https://ullasincense.co.in/ullas-contact-us.html" class="nav-link">Contact</a>
                </div>
            </div>
        </div>
        <section class="all-sec">
        <div class="product-row">
        <?php
            include("connection.php")
            //fetches the data
            $sql = "SELECT * FROM `product` WHERE row=1;";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query: ". $connection->connect_error());
            }

            while($row = $result->fetch_assoc()){
                echo '
                    <a href="description.php?title=' . $row["title"] . '&img=' . $row["image"] . '&description=' . $row['description'] . '" class="navi-link">
                        <div class="first-product">
                            <img src="'. $row["image"] .'" class="prod-img">
                            <p class="prod-txt">'. $row["title"] . '</p>
                        </div>
                    </a>
            ';
            }
        ?>
            </div>
            <div class="product-row-2">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "CMS";
                
                // Create connection
                $connection = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
                }

                //fetches the data
                $sql = "SELECT * FROM `product` WHERE row=2;";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid query: ". $connection->connect_error());
                }

                while($row = $result->fetch_assoc()){
                    echo '
                        <a href="description.php?title=' . $row["title"] . '" class="navi-link">
                            <div class="first-product">
                                <img src="'. $row["image"] .'" class="prod-img">
                                <p class="prod-txt">'. $row["title"] . '</p>
                            </div>
                        </a>
                ';
                }
            ?>
            </div>
            
            <div class="product-row">
            <?php
                include("connection.php");

                //fetches the data
                $sql = "SELECT * FROM `product` WHERE row=3;";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid query: ". $connection->connect_error());
                }

                while($row = $result->fetch_assoc()){
                    echo '
                        <a href="description.php?title=' . $row["title"] . '" class="navi-link">
                            <div class="first-product">
                                <img src="'. $row["image"] .'" class="prod-img">
                                <p class="prod-txt">'. $row["title"] . '</p>
                            </div>
                        </a>
                    ';
                }
            ?>
            </div>
        </section>
    </body>
</html>
