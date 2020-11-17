<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MC Web Console</h1>
    <h2><em>V: 0.0.1</em></h2>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="submit" name="mcStart" value="Start">
        <input type="text" name="cmd">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
require('settings/functions.php');
require('src/config.php');
?>