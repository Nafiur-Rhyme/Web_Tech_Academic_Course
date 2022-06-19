<?php

session_start();
session_destroy();
header("Location: ../../view/transportation/transportationlogin.php");
?>