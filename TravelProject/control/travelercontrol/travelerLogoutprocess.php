<?php

session_start();
session_destroy();
header("Location: ../../view/traveler/travelerLogin.php");
?>
