<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 2</title>
</head>
<body>
    
<h3>Crie uma página que receba um valor referente a dias e mostre quantas horas, minutos e segundos se passaram</h3>



<form method="POST">
<label for="dias">Informe o número de dias:</label>
<input type="number" id="dias" name="dias" placeholder="Data de nascimento" />
<input type='submit' name="acao" value="Verificar" />
</form>


</body>
</html>



<?php

if(isset($_POST['acao'])){

    date_default_timezone_set("America/Sao_Paulo");
 
    $dias = $_POST['dias'];
    $horas = $dias * 24;


    $date = new DateTime();
    $datinha = new DateTime();
    $datinha = date_add($datinha,date_interval_create_from_date_string("{$horas} hours"));
    $intervalo = $date->diff($datinha);   

    $horas = $intervalo->days * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;

   
    echo "Quantidade de horas: " . $horas . "<br>";
    echo "Quantidade de minutos: " . $minutos . "<br>";
    echo "Quantidade de segundos: " . $segundos . "<br>";
    echo $intervalo->format("Se passaram %y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos");
    
    
}
else{
    echo "Informe o número de dias";
}

?>