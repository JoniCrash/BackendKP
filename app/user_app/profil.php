<?php
include('../../conf/config.php');
$username = $_GET['username'];
$password = $_GET['password'];
$sql = mysqli_query($koneksi,"SELECT * FROM user_app WHERE username = '$username' AND password = '$password'");
?>