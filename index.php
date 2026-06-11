<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="../Gerenciar-Jogadores/processamento/processamento.php">
    <input type="text" name="nome" placeholder="Digite o nome">
    <input type="text" name="nacionalidade" placeholder="Digite a nacionalidade">
    <input type="number" name="posicao" placeholder="Digite a posição">
    <input type="number" name="QuantidadeGol" placeholder="Quantidade de gols">
    <input type="submit" value="Cadastrar">
</form>

<?php
    $listaJogadores = listarJogadores();
     while($jogadores = mysqli_fetch_assoc($listaJogadores)){
            echo  $jogadores["nome"] . " " . $jogadores["nacionalidade"] . " " 
            . $jogadores["posicao"] . " " . $jogadores["QuantidadeGol"] . " " ;
        }

?>

    
</body>
</html>