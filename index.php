<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="here to login">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1>login Now</h1>
        <form action="index.php" method="post">
            <input type="text" name="username" id="USER" placeholder="username => 'root'">
            <input type="password" name="password" id="PASS" placeholder="password => 'empty'">
            <input id="btn" type="submit" value="login" name="processing">
        </form>
        </div>
        <?php include("process.php")?>
    </body>
</html>
