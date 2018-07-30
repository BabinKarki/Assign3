
<?php
include_once 'database_connection.php';
$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

echo $password;
//$hashed_password = password_hash($password, PASSWORD_DEFAULT);
//var_dump($hashed_password);


$stmt=$conn->prepare(
    "INSERT INTO user (name, username, email,  password) VALUES (?, ?, ? , ?)");
$stmt->bind_param(
    "ssss",$name, $username, $email, $password );

$stmt->execute();
$stmt->close();
$conn->close();

?>