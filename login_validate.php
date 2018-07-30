<?php
/**
 * Created by PhpStorm.
 * User: babin
 * Date: 7/28/18
 * Time: 8:21 AM
 */


include_once 'database_connection.php';
session_start();

if(isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "select * from user where username = '$username' && password = '$password'";
    $db_host="localhost";  $db_user="root";  $db_password="root";  $db="php_class";
    $con = mysqli_connect($db_host,$db_user,$db_password,$db);
    $result = mysqli_query ( $con , $query);
    $count=mysqli_num_rows($result);

    if($count == 1){
        $_SESSION["LoggedIn"] = TRUE;
        header('Location: ' . 'display_table.php');
    }else{
        header('Location:' . 'Login.html');
        echo 'Invalid Details';
    }
}
else
{
    header('Location:' . 'Login.html');
}
?>



