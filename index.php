<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>


<style>
*{
    text-decoration: none;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}

table{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;

}


td{
    width: 400em;
}

a{
    color: black;
}

a:hover{
    transition: all 400ms;
    color: blue;
    border-bottom: 1px solid red;
}

.nomes td{
    font-weight: italic;
}


</style>
<body>
    



<table>
<tr class="nomes">
    <td><b>Nome:</b></td>
    <td><b>RM:</td>
    <td><b>E-mail:</td>
</tr>



<tr>
    <td>Gabriel Morais Felix</td>
    <td>21088</td>
    <td>gabriel.felix18@etec.sp.gov.br</td>
</tr>

<tr>
    <td colspan="3"><td>
</tr>

<tr class="nomes">
    <td><b>Exercício 1</td>
    <td><b>Exercício 2</td>
    <td><b>Exercício 3</td>
</tr>
<tr>
    <td><a href="minutos.php">Conversão de minutos para dias</a></td>
    <td><a href="dias.php"> Conversão de dias para horas</a></td>
    <td><a href="diferencaDias.php">Diferença entre duas datas</a></td>
</tr>
</table>



</body>
</html>



