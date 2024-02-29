<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'miniproject');


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "INSERT INTO contact_form(id, name, email, subject, message) 
VALUES ('[value-1]','$name','$email','$subject','$message')";
mysqli_query($con,$query);


?>
    <div class="container" style="color: rgb(255, 255, 255)" align="center" >
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="home.html">homepage</a>.</p>
        
    </div>
</body>
</html>