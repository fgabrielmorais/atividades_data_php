<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 3</title>
</head>
<body>
    
<h3>Crie um programa que receba seis valores: dia, mes e ano inicial (tres variáveis) e dia, mes e ano final (tres variavel) e mostre a diferença entre essas datas.</h3>


<p>Note que posso informar valores inválidos, assegure-se que esses dados sejam pertinentes. Obs.: utilize como ano válido: 1950 a 2049.</p>

<form method="POST">
<label for="dataInicial">Informe uma data inicial</label>
<input type="date" id="dataInicial" name="dataInicial" placeholder="Data de nascimento" />
<br>

<label for="dataFinal">Informe uma data final</label>
<input type="date" id="dataFinal" name="dataFinal" placeholder="Data de nascimento" />
<br>
<input type='submit' name="acao" value="Verificar" />
</form>


</body>
</html>



<?php

if(isset($_POST['acao'])){

    date_default_timezone_set("America/Sao_Paulo");
    
    $dataInicial = $_POST["dataInicial"];
    $dataFinal = $_POST["dataFinal"];
    $dataInicial = new DateTime($dataInicial);
    $dataFinal = new DateTime($dataFinal);

    $anoLimite = new DateTime('01-01-1950'); 
    $anoLimite2 = new DateTime('31-12-2049');

    if($dataInicial >= $anoLimite && $dataFinal <= $anoLimite2){
    $intervalo = $dataInicial->diff($dataFinal);
    echo $intervalo->format("A diferença entre as datas é de: %d dias, %m meses e %y anos");
    }
    else{
        echo "Informe uma data entre 1950 a 2049";
    }
}
else{
    echo "Informe uma data entre 1950 a 2049";
}

?>


</body>
</html>