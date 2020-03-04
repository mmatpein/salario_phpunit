<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
require "../vendor/autoload.php";
use aprendophpunit\modelo\Salario;
$salario = new Salario();
echo "El aumento de salario es ".$salario->incrementoSalario(2000);
?>
</body>
</html>