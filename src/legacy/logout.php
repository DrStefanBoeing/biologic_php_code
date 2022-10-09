<?php
session_start();
unset($_SESSION['auth']);
unset($_SESSION['username']);
session_destroy();
header("Location: ../bioLOGIC_portal/index.php");

?>