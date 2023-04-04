<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 3</title>
</head>


<style>
*{
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    text-align: center;
    text-decoration: none;
}


h3{
    text-align: center;
    margin: 0 19 50 20;

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
    
<h3>Crie um programa que receba seis valores: dia, mes e ano inicial (tres variáveis) e dia, mes e ano final (tres variavel) e mostre a diferença entre essas datas.</h3>


<p><i> - Note que posso informar valores inválidos, assegure-se que esses dados sejam pertinentes. Obs.: utilize como ano válido: 1950 a 2049.</i></p>

<form method="POST" class="form">
<label for="dataInicial">Informe uma data inicial</label>
<input type="date" id="dataInicial" name="dataInicial" class="inputForm" placeholder="Data de nascimento" /><br>
<br>

<label for="dataFinal">Informe uma data final</label>
<input type="date" id="dataFinal" name="dataFinal" class="inputForm" placeholder="Data de nascimento" /><br>
<br>
<input type='submit' name="acao" value="Verificar" class="button" />
</form>

<hr>

</body>
</html>



<?php

if(isset($_POST['acao'])){

    date_default_timezone_set("America/Sao_Paulo");
    
    $dataInicial = $_POST["dataInicial"];
    $dataFinal = $_POST["dataFinal"];
    $dataInicial = new DateTime($dataInicial);
    $dataFinal = new DateTime($dataFinal);

    $anoLimite1950 = new DateTime('01-01-1950'); 
    $anoLimite2049 = new DateTime('31-12-2049');

    if($dataInicial >= $anoLimite1950 && $dataInicial <= $anoLimite2049 &&  $dataFinal <= $anoLimite2049 && $dataFinal >= $anoLimite1950){
    $intervalo = $dataInicial->diff($dataFinal);
    echo $intervalo->format("A diferença entre as datas é de: %d dia(s), %m mês(es) e %y ano(s)");
    }
    else{
        echo "Informe uma data entre os anos 1950 a 2049";
    }
}
else{
    echo "Informe uma data entre os anos 1950 a 2049";
}

?>



<a href="index.php"><p class="pReturn">Voltar para a página inicial</p></a>

</body>
</html>