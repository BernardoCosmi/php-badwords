<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h2>
        FORM
    </h2>
    
    <form method="post" action="process.php">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea><br>
        <label for="word">Parola da censurare:</label><br>
        <input type="text" id="word" name="word"><br><br>
        <input type="submit" value="Invia">
    </form>

</body>
</html>