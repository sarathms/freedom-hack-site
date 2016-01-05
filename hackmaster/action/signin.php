<?php
session_start();
$conn = mysqli_connect('localhost','root','','freedomhack');
$username = $_POST['username'];
$username = $conn->real_escape_string($username);
$password = $_POST['password'];
$password = $conn->real_escape_string($password);
$output = mysqli_query($conn, "SELECT * FROM users WHERE Username='$username'");
while ($row = mysqli_fetch_object($output)) {
  if (password_verify($password, $row->Password)) {
    $_SESSION['login_check'] = 1;
    header('Location: ../');
  }
  else {
    $_SESSION['login_check'] = 0;
    echo "wut";
    //header('Location: ../signin.php');
  }
}
?>
