<?php
include('../../conf/config.php');
// $username = $_GET['username'];
// $email = $_GET['email'];
// $pass = $_GET['pass'];

$id = isset($_POST['id']) ? $_POST['id'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['pass']) ? $_POST['nama'] : '';

$query = mysqli_query($koneksi,"INSERT INTO user_app(id,username,email,pass) VALUES('','$username','$email','$pass')");

// $query = mysqli_query($koneksi,"INSERT INTO user_app (id,username,email,pass) VALUES(0,'".$username."','".$email."','".$pass."')");

header('Location: ../index.php?page=data-pelanggan');
?>