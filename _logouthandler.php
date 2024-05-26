<?php
session_start();
session_unset();
session_destroy();
header("location:/LOGINSYSTEM_PHP/index.php");
?>