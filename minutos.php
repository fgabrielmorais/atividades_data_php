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

    $minutos = $_POST['minutos'];



    
    $datatime1 = new DateTime('2015/04/15 23:'. $minutos.':00');
    // $dataAtual = date('d/m/y');
    $datatime2 = new DateTime('2015/04/16 00:00:00');

    $data1  = $datatime1->format('Y-m-d H:'. $minutos . ':s');
    $data2  = $datatime2->format('Y-m-d H:i:s');
    

    $diff = $datatime1->diff($datatime2);
    $horas = $diff->i + ($diff->days * 60);
    
    echo "A diferença de horas entre {$data1} e {$data2} é {$horas} minutos";







// // $data_user = new DateTime('H:i:s');
// $dataAtual = date("i");

// // echo $dataAtual . 'tempo';

// echo 'Minuto atual: ' . $dataAtual;

// // $intervalo = $data_user->diff($dataAtual);

// // echo $intervalo->format("%y anos, %m meses, %d dias");

}
else{
    echo "Informe sua data de nascimento";
}

?>