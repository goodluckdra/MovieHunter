<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
session_start();
session_destroy();

header('location: login.html');
?>