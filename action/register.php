<?php
session_start();
$conn = mysqli_connect(getenv('OPENSHIFT_MYSQL_DB_HOST'), getenv('OPENSHIFT_MYSQL_DB_USERNAME'), getenv('OPENSHIFT_MYSQL_DB_PASSWORD'), getenv('OPENSHIFT_APP_NAME'));

$name = $_POST['name'];
$name = $conn->real_escape_string($name);
$email = $_POST['email'];
$email = $conn->real_escape_string($email);
$github = $_POST['github'];
$github = $conn->real_escape_string($github);
if ($github == '') {
  $github = '[undefined]';
}
$phone = $_POST['phone'];
$phone = $conn->real_escape_string($phone);
$problem = $_POST['problem'];
$other = $_POST['other'];
$other = $conn->real_escape_string($other);
if ($other == '') {
$other = '[undefined]';
}
$team = $_POST['team'];
$team = $conn->real_escape_string($team);
if ($team == '') {
$team = '[undefined]';
}
$sql = "INSERT INTO registrations(Name, Email, Github, Phone, Problem, Other, Team) VALUES('$name', '$email', '$github', '$phone', '$problem', '$other', '$team')";
if (mysqli_query($conn, $sql)) {
  header('Location: ../');
}
else {
echo mysqli_error($conn);
}
?>
