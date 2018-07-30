<?php
/**
 * Created by PhpStorm.
 * User: babin
 * Date: 7/28/18
 * Time: 7:31 PM
 */

session_start();
session_destroy();
header('Location: Login.html');
exit;

?>