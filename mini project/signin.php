<?php
$con = mysqli_connect('localhost','root',);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

mysqli_select_db($con,'miniproject' );

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$user_name=$_POST['user_name'];
$email = $_POST['e-mail'];
$password=$_POST['password'];

$query = "INSERT INTO login( first_name,last_name,user_name, email, password)
values('$first_name','$last_name','$user_name','$email','$password')";
mysqli_query($con,$query);
?>