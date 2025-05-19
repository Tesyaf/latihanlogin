<?php
session_start();
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO akun (username, password) 
          VALUES ('$username', '$password')";

$result = mysqli_query($conn,$query);
$user = mysqli_fetch_assoc($result);
if($user){
    $_SESSION["username"] = $user["username"];
    header("Location:home.php");
}else{
    echo '<script>alert("signup gagal");</script>';
    header("Location:index.php");
}
?>