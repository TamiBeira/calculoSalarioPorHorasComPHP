<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <main>
            <form action="" method="post">
                <input type="number" name="salarioHora" placeholder="Salário por hora" step="0.010"/>
                <input type="number" name="horas" class="horas" min="1" max="24" placeholder="Hr"> :
                <input type="number" name="minutos" class="horas" min="0" max="60" placeholder="Min">
                <input type="submit" name="acao" value="Calcular">
            </form>
        </main>
    </div><!--container-->
</body>
</html>


<?php

if(isset($_POST['acao'])){
    $horas = $_POST['horas'];
    $minutos = $_POST['minutos'];
    $salarioHora = $_POST['salarioHora'];
    
    $convertMinutes = $minutos / 60;
    $horasDia = $horas + $convertMinutes;
    $diasTrabalhados = 25;
    $horaMes = $horasDia * $diasTrabalhados;
    $salarioMes = $salarioHora * $horaMes;

    if ($salarioHora == '' || $salarioHora == 0 || $horas == " " || $horas == 0 || $minutos == " "){
        echo '</br>';
        echo '<p class="center red">'.'Digite valores válidos!'.'</p>';
    }else{
        echo '</br>';
        echo '<p class="center blue">'.'Seu salário este mês será de: '. 'R$' .' ' .number_format($salarioMes, 2, ',', '.').'</p>';
    }
}

?>