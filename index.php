<?php
    session_start();

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

if (isset($_GET['error'])) {
    echo "<script>alert('Login gagal');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>SIGN UP</h1>
    <form method="POST" action="/post/process_signup.php">
        <input type="text" name="username" placeholder="Masukkan Username">
        <input type="password" name="password" placeholder="Masukkan Password">
        <button type="submit">SUBMIT</button>
    </form>
    <h1>LOGIN</h1>
    <form method="POST" action="/post/process_login.php">
        <input type="text" name="username" placeholder="Masukkan Username">
        <input type="password" name="password" placeholder="Masukkan Password">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>