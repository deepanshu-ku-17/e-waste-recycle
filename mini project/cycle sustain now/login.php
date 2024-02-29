<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <!-- CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style_ind.css">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\mini project\cycle sustain now\css\style.css">

        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        
    </head>
<body>



<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'miniproject');


$username = $_POST['username'];
$password = $_POST['password'];


$query = "INSERT INTO login(username, password) 
VALUES ('$username','$password')";
mysqli_query($con,$query);

?>

<nav>
            <div class="nav__logo">
            <a href="#"><img src="Cycle sustain now (3).png" alt="logo" /></a>
            </div>
            <ul class="nav__links">
            <li class="link"><a href="home.html">Home</a></li>
            <li class="link"><a href="a.html">Locator</a></li>
            <li class="link"><a href="index.html">Contact us</a></li>
            <li class="link"><a href="login.html">Login</a></li>
            <li class="link"><a href="quiz.html">Quiz</a></li>
            </ul>
        </nav>
        <div class="form signin">
        <header style="color: rgb(255, 255, 255)" >Quiz</header>
            <a href="quiz.html">START QUIZ</a>
        </div>    

</body>
</html>