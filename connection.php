<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "prakweb";

$conn = mysqli_connect($host,$user,$password,$database);
if(!$conn){
    die("Koneksi gagal: ".mysqli_connect_error());
}else{
    echo "1";
}
 ?>