<?php
// SUMA (GET)
if (isset($_GET['primerNumeroS']) && isset($_GET['segundoNumeroS'])) {
    $primerNumeroS = $_GET['primerNumeroS'];
    $segundoNumeroS = $_GET['segundoNumeroS'];
    $resultadoSuma = intval($primerNumeroS) + intval($segundoNumeroS);
    echo "La suma de $primerNumeroS + $segundoNumeroS es: $resultadoSuma<br>";
}

// RESTA (POST)
if (isset($_POST['primerNumeroR']) && isset($_POST['segundoNumeroR'])) {
    $primerNumeroR = $_POST['primerNumeroR'];
    $segundoNumeroR = $_POST['segundoNumeroR'];
    $resultadoResta = intval($primerNumeroR) - intval($segundoNumeroR);
    echo "La resta de $primerNumeroR - $segundoNumeroR es: $resultadoResta<br>";
}

// MULTIPLICACIÓN (GET)
if (isset($_GET['primerNumeroM']) && isset($_GET['segundoNumeroM'])) {
    $primerNumeroM = $_GET['primerNumeroM'];
    $segundoNumeroM = $_GET['segundoNumeroM'];
    $resultadoMultiplicacion = intval($primerNumeroM) * intval($segundoNumeroM);
    echo "La multiplicación de $primerNumeroM * $segundoNumeroM es: $resultadoMultiplicacion<br>";
}

// DIVISIÓN (POST)
if (isset($_POST['primerNumeroD']) && isset($_POST['segundoNumeroD'])) {
    $primerNumeroD = $_POST['primerNumeroD'];
    $segundoNumeroD = $_POST['segundoNumeroD'];
    if (intval($segundoNumeroD) != 0) {
        $resultadoDivision = intval($primerNumeroD) / intval($segundoNumeroD);
        echo "La división de $primerNumeroD / $segundoNumeroD es: $resultadoDivision<br>";
    } else {
        echo "Error: división por cero no permitida.<br>";
    }
}
?>
