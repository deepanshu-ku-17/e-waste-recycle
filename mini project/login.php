<?php
$con = mysqli_connect('localhost','root',);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

mysqli_select_db($con,'miniproject' );

$user_name=$_POST['user_name'];
$email = $_POST['email'];
$password=$_POST['password'];

$query = "INSERT INTO login( user_name, email, password)
values('$user_name','$email','$password')";
mysqli_query($con,$query);
?>