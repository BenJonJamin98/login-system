<!DOCTYPE HTML>
<html>
<head>
<title> Appointment </title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<ul>

<li><a href="../../logout/logout-process.php"> Logout </a></li>
</ul>

<?php

if($patient){
	echo "<h1>".$patient['firstName']." ".$patient['lastName']."</h1>";
	echo "<p>First name: ".$patient['firstName']."</p>";
	echo "<p>Last name: ".$patient['lastName']."</p>";
	echo "<p>Appointment date: ".$patient['appointmentDate']."</p>";
	echo "<p>Appointment time: ".$patient['appointmentTime']."</p>";
}
else
{
	echo "<p> Can't find any appointments </p>";
}
?>

</body>
</html>

<!--working-->