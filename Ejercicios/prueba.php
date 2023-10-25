<?php
// Inicializar las variables
if (isset($_GET['horas'])) {
    $horas = $_GET['horas'];
} else {
    $horas = 0;
}

if (isset($_GET['minutos'])) {
    $minutos = $_GET['minutos'];
} else {
    $minutos = 0;
}

if (isset($_GET['segundos'])) {
    $segundos = $_GET['segundos'];
} else {
    $segundos = 0;
}

if (isset($_GET['start'])) {
    $segundos++;
    if ($segundos == 60) {
        $segundos = 0;
        $minutos++;
        if ($minutos == 60) {
            $minutos = 0;
            $horas++;
            if ($horas == 24) {
                $horas = 0;
            }
        }
    }
} elseif (isset($_GET['reset'])) {
    $segundos = 0;
    $minutos = 0;
    $horas = 0;
}

// Encabezado Refresh para recargar la página cada segundo
header("Refresh: 1");

?>

<?= $horas ?>:<?= $minutos ?>:<?= $segundos ?><br>

<form action="" method="get">
    <input type="submit" name="start" value="Start"/>
    <input type="submit" name="stop" value="Stop"/>
    <input type="submit" name="reset" value="Reset"/>
</form>
