<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 1</title>
</head>
<body>
    <form action="ejercicio1.php" method="POST">
        <label>Nota 1</label><input type="number" name="uno">
        <label>Nota 2</label><input type="number" name="dos">
        <label>Nota 3</label><input type="number" name="tres">
        <input type="submit" value="Calcular Promedio">
    </form>
</body>
</html>

<?php
        $notaUno = "{$_POST["uno"]}";
        $notaDos = "{$_POST["dos"]}";
        $notaTres = "{$_POST["tres"]}";
        $total = ($notaUno + $notaDos + $notaTres)/3;
        echo "<br>";
        echo "Tu promedio es: {$total}<br>";
    if ($total <= 3.9){
        echo "Estudie";
    } else {
        echo "Becado";
    };
?>