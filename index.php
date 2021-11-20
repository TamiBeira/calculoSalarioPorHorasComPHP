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
    
    /*Coleta os valores digitados nos inputs*/
    $horas = $_POST['horas'];
    $minutos = $_POST['minutos'];
    $salarioHora = $_POST['salarioHora'];
    
    /*Converte os minutos digitados no input em decimal*/
    $convertMinutes = $minutos / 60;

    /*Junta as horas e os minutos convertidos*/
    $horasDia = $horas + $convertMinutes;

    /*Dias trabalhados*/
    $diasTrabalhados = 25;

    /*Calcula a carga horária trabalhada no mês*/
    $horaMes = $horasDia * $diasTrabalhados;

    /*Realiza o calculo do salário baseado nas horas trabalhadas e seu salario por hora*/
    $salarioMes = $salarioHora * $horaMes;

    /*Valida se os campos do input estão digitados corretamente*/
    if ($salarioHora == '' || $salarioHora == 0 || $horas == " " || $horas == 0 || $minutos == " "){
        echo '</br>';
        echo '<p class="center red">'.'Digite valores válidos!'.'</p>';
    }else{
        echo '</br>';
        echo '<p class="center blue">'.'Seu salário este mês será de: '. 'R$' .' ' .number_format($salarioMes, 2, ',', '.').'</p>';
    }
}

?>