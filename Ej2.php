<!DOCTYPE html>
<html>
<head>
    <title>Duplicados sin funciones</title>
</head>
<body>
    <h1>Duplicados sin funciones</h1>
    <?php

$duplicados = [1, 2, 3, 6, 4, 5, 6, 3, 7, 8];
print_r($duplicados);

$tamano = count($duplicados);

$duplicadosEncontrados = [];

for ($i = 0; $i < $tamano - 1; $i++) {
    for ($j = $i + 1; $j < $tamano; $j++) {
        if ($duplicados[$i] == $duplicados[$j] && !in_array($duplicados[$i], $duplicadosEncontrados)) {
           $duplicadosEncontrados[] = $duplicados[$i]; 
        }
    }
}

echo "Elementos duplicados: ";
foreach ($duplicadosEncontrados as $duplicado) {
    echo $duplicado ." ";
}

?>
</body>
</html>