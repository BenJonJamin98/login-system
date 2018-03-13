<!DOCTYPE HTML>
<html>
<head>
<title> List of patients </title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<ul>

<li><a href="../logout/logout-process.php"> Logout </a></li>    
</ul>
<?php

foreach ($patients as $patient) {
    echo "<p>";
    echo "<a href='patient/patients.php?id=".$patient["id"]."'>";
    echo "<p>".$patient["lastName"]." ".$patient["firstName"]."</p>";
    echo "</a>";
    echo "</p>";
}
?>
</body>
</html>

<!--Working-->