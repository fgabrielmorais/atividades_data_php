<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 2</title>
</head>
<style>
*{
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    text-align: center;
    text-decoration: none;
}


h3{
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
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
    
<h3>Crie uma página que receba um valor referente a dias e mostre quantas horas, minutos e segundos se passaram</h3>



<form method="POST" class="form">
<label for="dias">Informe o número de dias:</label><br>
<input type="number" id="dias" name="dias" class="inputForm" placeholder="Exemplo: 10" /><br>
<input type='submit' name="acao" value="Verificar" class="button"/>
</form>

<hr>


<?php

if(isset($_POST['acao'])){

    date_default_timezone_set("America/Sao_Paulo");
 
    $dias = $_POST['dias'];
    $dias = intval($dias);



    if($dias >= 0){

    $horas = $dias * 24;

    $date = new DateTime();
    $dataAcrescental = new DateTime();
    $dataAcrescental = date_add($dataAcrescental,date_interval_create_from_date_string("{$horas} hours"));
    $intervalo = $date->diff($dataAcrescental);   

    $horas = $intervalo->days * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;

   
    echo "Quantidade de horas: " . $horas . "<br>";
    echo "Quantidade de minutos: " . $minutos . "<br>";
    echo "Quantidade de segundos: " . $segundos . "<br>";
    
    
}
else{
    echo "Informe um valor maior que 0";
}
}
else{
    echo "Informe o número de dias";
}

?>

<a href="index.php"><p class="pReturn">Voltar para a página inicial</p></a>
</body>
</html>

