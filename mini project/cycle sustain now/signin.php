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
$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn,'miniproject');

$name = $_POST['name'];
$email = $_POST['email'];

$checkQuery = "SELECT * FROM signin WHERE email = '$email'";
$result = $conn->query($checkQuery);

if ($result->num_rows > 0) {
    // Duplicate entry found, handle accordingly (e.g., show an error message)
    echo '<p style="color: red; text-align: center">
    Email already exists!</p>';
} else {
    // No duplicate entry, proceed with the insertion
    $insertQuery = "INSERT INTO signin (email) VALUES ('$email')";
    if ($conn->query($insertQuery) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
}
}
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO signin(id, name,email,username,password)
VALUES ('[value-1]','$name','$email','$username','$password')";
mysqli_query($conn,$query);
$conn->close();

?>


<nav>
            <div class="nav__logo">
            <a href="#"><img src="Cycle sustain now (3).png" alt="logo" /></a>
            </div>
            <ul class="nav__links">
            <li class="link"><a href="home.html">Home</a></li>
            <li class="link"><a href="#Locator">Locator</a></li>
            <li class="link"><a href="index.html">Contact us</a></li>
            <li class="link"><a href="login.html">Login</a></li>
            <li class="link"><a href="quiz.html">Quiz</a></li>
            </ul>
        </nav>
        <div class="form signin">
        <header style="color: rgb(255, 255, 255)" >Login</header>
            <a href="login.html">Login</a>
        </div>    

</body>
</html>