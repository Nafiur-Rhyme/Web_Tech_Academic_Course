<?php

session_start();
session_destroy();
header("Location: ../../view/admin/adminlogin.php");
?>