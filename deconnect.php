<?php
/**
 * Created by PhpStorm.
 * User: jdelagorce
 * Date: 28/10/14
 * Time: 13:04
 */
session_start();
session_destroy();
header('Location:index.php');

?>