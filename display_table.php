<?php
/**
 * Created by PhpStorm.
 * User: babin
 * Date: 7/28/18
 * Time: 9:22 PM
 */

include_once 'database_connection.php';
?>

<html>
<style>
</style>
<p align="right"> <a href="logout.php">Logout</a></p>

<table border="2">
    <tr>
        <th>Code</th>
        <th>Title</th>
        <th>Description</th>
        <th>Type</th>
        <th>Size</th>
    </tr>

    <?php
    $sql= "SELECT * FROM clothing_store";
    $result = $conn->query($sql);

    if ($result -> num_rows > 0) {
        for($i = 0; $row = $result -> fetch_assoc(); $i++){
            ?>
            <tr>
                <td><?php echo $row ["code"] ?> </td>
                <td><?php echo $row ["title"] ?> </td>
                <td><?php echo $row ["description"] ?> </td>
                <td><?php echo $row ["type"] ?> </td>
                <td><?php echo $row ["size"] ?> </td>
            </tr>

            <?php
        }
    }else {
        echo "0 results";
    }






    $conn->close();
    ?>

</table>

<a href="Form.html"> Add product</a>
