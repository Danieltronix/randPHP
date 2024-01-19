<html>
<head>
    <title>PHP</title>
</head>
<body>
    <h1>Funcion RAND() EN PHP numero aleatorio</h1>
<?php
$num = rand(1,100);

if ($num>=50)
{
 echo $num." es mayor a 50";
}
else
{
 echo $num." es menor a 50";
}
?>
</body>
</html> 