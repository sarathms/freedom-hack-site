<?php
session_start();
$conn = mysqli_connect(getenv('OPENSHIFT_MYSQL_DB_HOST'), getenv('OPENSHIFT_MYSQL_DB_USERNAME'), getenv('OPENSHIFT_MYSQL_DB_PASSWORD'), getenv('OPENSHIFT_APP_NAME'), getenv('OPENSHIFT_MYSQL_DB_PORT'));
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
