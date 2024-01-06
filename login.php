<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" lang="us">
    <link rel="stylesheet" type="text/css" href="css/universal.css">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="index.php" method="post">
        Name: <input type="text" name="name" pattern="[a-zA-Z0-9_-]">
        <input type="submit">
    </form>
    <h2>The Characters allowed are a-z, A-Z, 0-9, ., _, and -</h2>
</body>

</html>