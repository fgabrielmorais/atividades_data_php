<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 1</title>
</head>
<body>
    
<h3> Crie uma página que receberá um valor inteiro 
    (referentes à minutos) e exiba quantos meses, dias, 
    horas e minutos se passaram.</h3>

<form method="POST">
<label for="minutos">Informe um valor inteiro (referente a minutos)</label>
<input type="number" id="minutos" name="minutos" placeholder="Data de nascimento" />
<input type='submit' name="acao" value="Verificar" />
</form>


</body>
</html>



<?php

if(isset($_POST['acao'])){

    date_default_timezone_set("America/Sao_Paulo");
 
    $minutos = $_POST['minutos'];
   
    $date = new DateTime();
    $datinha = new DateTime();
    $date2 = date_add($datinha,date_interval_create_from_date_string("{$minutos} minutes"));
    
    $intervalo = $date2->diff($date);   
    //maior ou igual a 1h e menor que 24h

    if($minutos >= 60  && $minutos < 1440){
     echo $intervalo->format("%y ano(s), %m mes(es), %d dia(s), %h hora(s), %i minuto(s)"); 
    }

    //maior ou igual a 1 dia e menor que 4 semanas
    else if($minutos >= 1440 && $minutos < 43800){
     echo $intervalo->format("%y ano(s), %m mes(es), %d dia(s), %h hora(s), %i minuto(s)"); 
    }

    //maior ou igual a 1 mês e menor que 1 ano
    else if($minutos >= 43800 && $minutos < 525600){
         echo $intervalo->format("%y ano(s), %m mes(es), %d dia(s), %h hora(s), %i minuto(s)"); 
    }

    //maior ou igual a 1 ano
    else if($minutos >= 525600){
         echo $intervalo->format("%y ano(s), %m mes(es), %d dia(s), %h hora(s), %i minuto(s)"); 
    }

    else{
        echo $intervalo->format("%y ano(s), %m mes(es), %d dia(s), %h hora(s), %i minuto(s)"); 
    }

}
else{
    echo "Informe um valor inteiro (referente a minutos)";
}

?>