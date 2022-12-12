<?php
$description = $_GET['description'];
$title = $_GET['title'];
$img = $_GET['img'];
if (isset($_POST['btn'])) {
    $name = $_POST['namefield'];
    $email = $_POST['emailfield'];
    $phone = $_POST['phonefield'];
    $quantity = $_POST['quantityfield'];

}
$to      = 'namansetty02@gmail.com';
$subject = 'the subject';
$message = 'hello this is a test message';
$headers = array(
'From' => 'aravinda.setty@gmail.com',
'Reply-To' => 'namanbhoggaram@gmail.com',
'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);

echo "<script>alert('email sent ;)');</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dirgin de montserrat</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .descript-img{
            width: 32em;
        }
    </style>
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

        <div class="discript">
        <div class="descript-container-description">
            <img src="<?php echo $img;?>"  class="descript-img">
            <div class="spacer"></div>
            <div class="description">
                <form method="post">
                <p class="descript-text">
                    <p><?php echo $description;?></p>
                </p>
                    <input type="text" class="textfield" id="namefield" name="namefield" placeholder="Name">
                    <input type="text" class="textfield" id="emailfield" name="emailfield" placeholder="Email">
                    <input type="text" class="textfield" id="phonefield" name="phonefield" placeholder="Phone">
                    <input type="text" class="textfield" id="quantityfield" name="quantityfield" placeholder="Quantity">
                    <input type="submit" value="Enquire" class="enquire-btn-form" name="btn">
                </form>
            </div>
        </div>
    </div>    
    </body>
</html>