<!DOCTYPE html>
<html>
<head>
    <title>Separar valores</title>
</head>
<body>
    <h1>Separar valores</h1>
    <?php

$paroimpar = [1, 2, 3, 4, 3, 3, 4, 1, 5];
$tam = count($paroimpar);
$par = [];
$impar = [];

foreach ($paroimpar as $elem){
    if ($elem % 2 == 0){
        array_push($par, $elem);
    } else {
        array_push($impar, $elem);
    }
}

echo "El array original: ";
echo implode (" - ", $paroimpar);
echo "<br>";
echo "El array de pares: ";
echo implode (" - ", $par);
echo "<br>";
echo "El array de impares: ";
echo implode (" - ", $impar);
echo "<br>";

?>

</body>
</html>