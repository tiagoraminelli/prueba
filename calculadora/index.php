<?php

$resultado = 0;
$numero1 = '';
$numero2 = '';
$operador = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operador = $_POST['operador'];

    switch ($operador) {
        case 'sumar':
            $resultado = $numero1 + $numero2;
            break;
        case 'restar':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicar':
            $resultado = $numero1 * $numero2;
            break;
        case 'dividir':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = 'Error: División por cero';
            }
            break;
        default:
            $resultado = 'Operador no válido';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    
</head>
<body>

<div class="calculadora">
    <h2>Calculadora</h2>

    <form method="post">
        <input type="number" name="numero1" class="form-control" placeholder="Número 1" value="<?php echo $numero1; ?>" required>
        <input type="number" name="numero2" class="form-control" placeholder="Número 2" value="<?php echo $numero2; ?>" required>
        
        <select name="operador" class="form-control">
            <option value="sumar" <?php echo ($operador == 'sumar') ? 'selected' : ''; ?>>Sumar</option>
            <option value="restar" <?php echo ($operador == 'restar') ? 'selected' : ''; ?>>Restar</option>
            <option value="multiplicar" <?php echo ($operador == 'multiplicar') ? 'selected' : ''; ?>>Multiplicar</option>
            <option value="dividir" <?php echo ($operador == 'dividir') ? 'selected' : ''; ?>>Dividir</option>
        </select>

        <button type="submit" class="btn">Calcular</button>
    </form>

    <h3>Resultado:</h3>
    <p><?php echo $resultado; ?></p>
</div>

</body>
</html>
