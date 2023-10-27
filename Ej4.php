<!DOCTYPE html>
<html>
<head>
    <title>Array bi-dimensional</title>
</head>
<body>
    <h1>Array bi-dimensional</h1>
    <?php

$paroimpar = [1, 2, 3, 4, 3, 3, 4, 1, 5];
$tam = count($paroimpar);
$bidi = [[]];

$pospar = 0;
$posimpar = 0;

foreach ($paroimpar as $elem){
    if ($elem % 2 == 0){
        $bidi[0][$pospar] = $elem;
        $pospar++;
    } else{
        $bidi[1][$posimpar] = $elem;
        $posimpar++;
    }
}

echo "Array par del array: ";
echo implode("-", $bidi[0]);
echo "<br>";
echo "Array impar del array: ";
echo implode("-", $bidi[0]);
echo "<br>";

?>
</body>
</html>