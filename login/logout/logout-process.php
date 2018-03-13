<?php
session_start();
$_SESSION = array();
session_destroy();

header("location: ../login.php");
?>

<!DOCTYPE html>

<html>
<head>
<title>Logout</title>
</head>
<body>
</body>
</html>