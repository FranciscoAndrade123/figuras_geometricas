
<?php
include('/xampp/htdocs/POO/libreria/operaciones.php');
$operador = new operaciones();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    echo  "operador suma " . $operador ->  sumar(1,2);
    echo "<br>" ;
    echo  "operador resta " . $operador ->  resta(1,2);
     echo "<br>";
    echo  "operador multiplicacion " . $operador ->  multiplicacion(1,2);
     echo "<br>";
    echo  "operador division " . $operador ->  division(1,2);
    ?>
    
    
</body>
</html>