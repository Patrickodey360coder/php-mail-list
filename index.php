<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addemail.php" method="post">
        <label for="firstname">Firstname: </label>
        <input type="text" name="firstname" id="firstname"><br><br>

        <label for="lastname">Lastname: </label>
        <input type="text" name="lastname" id="lastname"><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email"><br><br><br><br>

        <input type="submit" name="submit" value="send">
    </form>

	<a href="sendemail.html">send email</a>
</body>
</html>
