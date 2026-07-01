<?php

include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "
SELECT *
FROM pengguna
WHERE username='$username'
AND password='$password'
";

$query = mysqli_query($koneksi,$sql);

if(mysqli_num_rows($query) > 0){

    session_start();

    $_SESSION['username'] = $username;

    header("Location: admin/dashboard.php");

}else{

    header("Location: login.php");

}