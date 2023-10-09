<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piedra, Papel, Tijera</title>
</head>
<body>
    <h1>PIEDRA, PAPEL, TIJERA!</h1>

    <?php
        $tabla = [
            [0, 2, 1],
            [1, 0, 2],
            [2, 1, 0]
        ];

        $msg = [
            "Empate",
            "Ha ganado el jugador 1",
            "Ha ganado el jugador 2"
        ];

        $opciones = [
            "piedra" => "&#x1F91C;",
            "papel" => "&#x1F91A;",
            "tijera" => "&#x1F596;"
        ];

        $a = [
            "piedra" => 0,
            "papel" => 1,
            "tijera" => 2,
        ];

        $jugador1 = array_rand($opciones);
        $jugador2 = array_rand($opciones);

        function ganador($jugador1, $jugador2, $tabla, $msg, $a) {
            $resultado = $tabla[$a[$jugador1]][$a[$jugador2]];
            return $msg[$resultado];
        }
    ?>
    <h3>Jugador 1: </h3><?php echo '<span style="font-size: 70px;">' . $opciones[$jugador1] . '</span>'; ?> 
    <h3>Jugador 2: </h3><?php echo '<span style="font-size: 70px;">' . $opciones[$jugador2] . '</span>'; ?> <br><br><br>
    <h3><?php echo ganador($jugador1, $jugador2, $tabla, $msg, $a)?></h3> 

</body>
</html>

