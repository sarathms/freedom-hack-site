<?php
session_start();
$conn = mysqli_connect('localhost','root','','freedomhack');
$username = $_POST['username'];
$username = $conn->real_escape_string($username);
$password = $_POST['password'];
$password = $conn->real_escape_string($password);
$hashed_pw = password_hash($password, PASSWORD_BCRYPT);
if (mysqli_query($conn, "INSERT INTO users(Username, Password) values('$username', '$hashed_pw')")) {
echo "success";
}
else {
  echo mysqli_error($conn);
}

?>
