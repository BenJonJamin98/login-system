<!DOCTYPE html>
<html>
<head>
    <title> Login Page </title>
</head>
<body>
    
<form action="process/controller-process.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for="password" >Password:</label>
    <input type="password" id="password" name="password">
    <input type="submit" name="login" value="Login">
</form>
    
</body>
</html>