<?php

session_start();
session_destroy();
header("Location: ../../view/transportation/adminlogin.php");
?>