<!DOCTYPE html>
<html>
<head>
    <title>Transposición array bi-dimensional</title>
</head>
<body>
    <h1>Transposición array bi-dimensional</h1>
<?php

$arr = [
    [1, 5, 8, 5],
    [7, 3, 2, 4],
    [1, 6, 2, 4],
];

echo "Array original: <br>";
foreach ($arr as $fila) {
    echo implode(",", $fila) . "<br>";
}

echo "Paso de filas a columnas: <br>";

$arrTrans = [];
for ($i = 0; $i < count($arr[0]); $i++) {
    array_push($arrTrans, []);
    for ($j = 0; $j < count($arr); $j++) {
        array_push($arrTrans[$i], $arr[$j][$i]);
    }
}

foreach ($arrTrans as $fila) {
    echo implode(",", $fila) . "<br>";
}
?>
</body>
</html>