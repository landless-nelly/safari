<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<form action="userSaveProcess.php" method="post"><br>
    <legend>
        <a href="viewUsers.php">view users</a>
    </legend>
    <input type="text" name="x" placeholder="Name" required><br>
    <input type="email" name="y" placeholder="Email" required><br>
    <input type="password" name="z" placeholder="Password"required><br>
    <input type="submit" name="btnsubmit" value="save">
    <input type="reset" name="btnreset" value="Refresh">
</form>
</body>
</html>
