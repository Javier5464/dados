<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    $dado =[
        "dado1" => "&#9856",
        "dado2" => "&#9857",
        "dado3" => "&#9858",
        "dado4" => "&#9859",
        "dado5" => "&#9860",
        "dado6" => "&#9861"
    ];

    $a =[
        "dado1" => 1,
        "dado2" => 2,
        "dado3" => 3,
        "dado4" => 4,
        "dado5" => 5,
        "dado6" => 6
    ];

    $b=[
        "&#9856" => 1,
        "&#9857" => 2,
        "&#9858" => 3,
        "&#9859" => 4,
        "&#9860" => 5,
        "&#9861" => 6
    ];

    $j1=[];

    $j2=[];

    $max1=0;
    $max2=0;
    $min1=7;
    $min2=7; 

    $r1=0;
    $r2=0;

    for($i=0;$i<5;$i++){
        $random=array_rand($dado);
        $x=$dado[$random];
        array_push($j1,$x);

        if($a[$random]>$max1){
            $max1=$a[$random];
        }

        if($a[$random]<$min1){
            $min1=$a[$random];
        }

        $r1=$r1 + $a[$random];
    }

    $r1=$r1-$max1 - $min1;



    for($i=0;$i<5;$i++){
        $random=array_rand($dado);
        $x=$dado[$random];
        array_push($j2,$x);

        if($a[$random]>$max1){
            $max2=$a[$random];
        }

        if($a[$random]<$min1){
            $min2=$a[$random];
        }

        $r2=$r2 + $a[$random];
    }

    $r2=$r2-$max2 - $min2;

    $msg = [
        "Empate",
        "Ha ganado el jugador 1",
        "Ha ganado el jugador 2"
    ];

    function ganador($r1,$r2,$msg){
        if($r1>$r2){
            return $msg[1];
        }
        if($r1<$r2){
            return $msg[2];
        }else{
            return $msg[0];
        }
    }

?>

    <h1>Cinco dados</h1>
    <h3>Jugador 1 </h3> <h4><?php echo $r1 ?> puntos</h4>
    <?php
        for($i=0;$i<5;$i++){
            echo $j1[$i];
        }
    ?>
    <h3>Jugador 2 </h3> <h4><?php echo $r2 ?> puntos</h4>
    <?php
        for($i=0;$i<5;$i++){
            echo $j2[$i];
        }
    ?>
    <h3>Resultado</h3>  <?php echo ganador($r1,$r2,$msg) ?>

</body>
</html>
