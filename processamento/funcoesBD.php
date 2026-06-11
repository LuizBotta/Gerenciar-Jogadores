<?php
    function conectarBD(){
        $conexao = mysqli_connect("localhost","root","","gerenciar-jogadores");
        return($conexao);
    }

    function inserirJogador($nome,$nacionalidade,$posicao,$QuantidadeGol){
        $conexao = conectarBD();
        $inserir = "INSERT INTO jogador(nome,nacionalidade,posicao,QuantidadeGol)
                    VALUES ('$nome','$nacionalidade','$posicao','$QuantidadeGol')";
    
        mysqli_query($conexao, $inserir);
    }
?>