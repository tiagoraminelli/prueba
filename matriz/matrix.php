<?php
class Matriz{
function matrizIdentidaCualquiera($matriz2) {
        for ($i = 0; $i < 3; $i++) {
            echo "<br>";
            for ($j = 0; $j < 3; $j++) {
                if ($i == $j) {
                    $matriz2[$i][$j] = 1;
                }
                echo $matriz2[$i][$j] . " "; // Imprimir el valor con un espacio entre ellos
            }
        }
        return $matriz2; // Devolver la matriz modificada
    }

function matrizIdentidad($n) {
    $matriz = array_fill(0, $n, array_fill(0, $n, 0));
    for ($i = 0; $i < $n; $i++) {
        $matriz[$i][$i] = 1;
    }
    return $matriz;
}

}
$n=3;
$m = new matriz();
//$matrizIdentidad = $m->matrizIdentidad($N);

$matriz2=[
[19,79,97],
[89,99,99],
[99,89,99 ]
];


$matrizIdentidad2 = $m->matrizIdentidaCualquiera($matriz2);


echo "<pre>";
print_r($matrizIdentidad2);
echo "</pre>";   





?>