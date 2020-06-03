<!DOCTYPE html>
<html>
<body>

<h1> Ejercicio 7</h1>
<form>
    Escriba un numero:
    <input name="Numero" type="text" placeholder="Escriba un numero">
    <input type="submit"  value="Revisar">
</form>

<?php

header  ("Content-type: text/html;charset=\"utf-8\"");


if (is_numeric($_GET['Numero']))
{
    if($_GET['Numero']>1)
    {
        echo "<h2>Numero ingreso valido</h2>";
    }
    else
    {
        echo "<h2>Numero ingresado no valido, es igual o menor a 1</h2>";
   }
}
    else 
    {
        echo "<h2>Ingreso no valido</h2>";
    }


?>

</body>
</html>
