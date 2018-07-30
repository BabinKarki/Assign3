<?php
/**
 * Created by PhpStorm.
 * User: babin
 * Date: 7/28/18
 * Time: 8:54 PM
 */

include_once 'database_connection.php';
    $code = $_POST['code'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $size = $_POST['size'];
    print_r($_POST);

    $stmt = $conn->prepare(
        " insert into clothing_store (code, title, description, type , size ) VALUES ( ? , ? , ? , ? , ? ) "
    );

    $stmt->bind_param(
        "sssss", $code, $title, $description, $type, $size);



header('Location: '. 'display_table.php');
$stmt->execute();
$stmt->close();
$conn->close();



?>

