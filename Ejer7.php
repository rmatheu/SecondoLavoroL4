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
    for ($i=1; $i<=100; $i++) {
        if (primo($i)) {
            echo "<br>El número ".$i." es primo";
        } else {
            echo "<br>El número ".$i." no es primo";
    
           
        }
    }
    function primo($num)
    {
        if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
           
            
           return True;
        } else {
            
            // comprobamos si es par
            if ($num % 2 != 0) {
                // comprobamos solo por los impares
                for ($i = 3; $i <= sqrt($num); $i += 2) {
                    if ($num % $i == 0) {
                        return False;
                    }
                }
                return True;
            }
        }
        return False;
    
    }
       


?>

</body>
</html>
