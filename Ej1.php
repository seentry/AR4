<!DOCTYPE html>
<html>
<head>
    <title>Orden inverso</title>
</head>
<body>
    <h1>Orden inverso</h1>
    <?php

$orden = [1, 5, 6, 3, 7, 9];
print_r($orden);
$tamano = count($orden);
$max = $tamano - 1;

while ($max >= 0) {
    echo $orden [$max], " - ";
    $max--;
}

?>
</body>
</html>