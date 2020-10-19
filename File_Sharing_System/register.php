

<?php
include('db.php');
$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = "INSERT into 'users' (username, password) VALUES ('$username', '($password)')";

$result = mysqli_query($config, $sql);

if($result){
  header('Location: login.php');
}

?>