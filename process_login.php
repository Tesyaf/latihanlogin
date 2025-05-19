<?php
session_start();
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM akun WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn,$query);
$user = mysqli_fetch_assoc($result);
if($user){
    $_SESSION['user_id'] = $user['id'];
    $_SESSION["username"] = $user["username"];
    header("Location:home.php");
    exit();
}else{
    header("Location: index.php?error=1");
    exit();
}
?>