<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="suma.php" method= "POST"> <!-- Este archivo va a tomar los datos y los va a sumar, el method es para enviar la inormación y capturarr info -->

    <label for="">Número1</label><input type="text" name="num1">
    <label for="">Número2</label><input type="text"name="num2">
    <input type="submit" value= "Enviar"> <!-- Siempre con PHP se trabaja input tipo submit y el value Enviar -->

    </form>
</body>
</html>