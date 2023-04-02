<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 1</title>
</head>


<style>
*{
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    text-align: center;
    text-decoration: none;
}


h3{
    text-align: center;
    margin: 0 20 50 20;

}

.form{
    text-align: center;
}

.form label{
    
}

.inputForm{
    transition: all 100ms;
    margin-top: 20px;
    height: 2em;
    width: 10em;
    border: 1px solid ;
    border-radius: 5px;
}

.inputForm:hover{
    transition: all 100ms;
    height: 3em;
    width: 15em;
}

.button{
    transition: all 300ms;
    margin-top: 20px;
    height: 3em;
    width: 10em;
    border: 1px solid;
    background-color: white;
    border-radius: 20px;
}


.button:hover{
    transition: all 300ms;
    background-color: red;
    color: white;
    
}
hr{
    margin-top: 20px;
    width: 25em;
}


.pReturn{
    color: blue;
    margin-top: 20px;
}
</style>


<body>
    
<h3> Crie uma página que receberá um valor inteiro 
    (referentes à minutos) e exiba quantos meses, dias, 
    horas e minutos se passaram.</h3>

<form method="POST" class="form">
<label for="minutos">Informe um valor inteiro (referente a minutos)</label><br>
<input type="number" id="minutos" name="minutos" placeholder="Exemplo: 20" class="inputForm"/><br>
<input type='submit' name="acao" value="Verificar" class="button"/>
</form>

<hr>





<?php

if(isset($_POST['acao'])){

    date_default_timezone_set("America/Sao_Paulo");
 

    $minutos = $_POST['minutos'];
    $minutos = intval($minutos);


    if($minutos >= 0){
    $date = new DateTime();
    $datinha = new DateTime();
    $datinha = date_add($datinha,date_interval_create_from_date_string("{$minutos} minutes"));
    
    $intervalo = $datinha->diff($date);   
   
    //maior ou igual a 1h e menor que 24h
    if($minutos >= 60  && $minutos < 1440){
     echo $intervalo->format("%h hora(s), %i minuto(s)"); 
    }

    //maior ou igual a 1 dia e menor que 4 semanas
    else if($minutos >= 1440 && $minutos < 43800){
     echo $intervalo->format("%d dia(s), %h hora(s), %i minuto(s)"); 
    }

    //maior ou igual a 1 mês e menor que 1 ano
    else if($minutos >= 43800 && $minutos < 525600){
         echo $intervalo->format("%m mês(es), %d dia(s), %h hora(s), %i minuto(s)"); 
    }

    //maior ou igual a 1 ano
    else if($minutos >= 525600){
         echo $intervalo->format("%y ano(s), %m mês(es), %d dia(s), %h hora(s), %i minuto(s)"); 
    }

    //valor menor que 60
    else{
        echo $intervalo->format("%i minuto(s)"); 
    }



}

else{
    echo "Informe um valor maior que 0";
}

}
else{
    echo "Informe um valor inteiro (referente a minutos)";
}

?>


<a href="index.php"><p class="pReturn">Voltar para a página inicial</p></a>

</body>
</html>