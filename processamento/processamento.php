<?php

session_start();
require_once "funcoesBD.php";

if(!empty ($_POST['nome']) && !empty($_POST ['nacionalidade']) && 
   !empty ($_POST['posicao']) && !empty ($_POST['QuantidadeGol'])){
    
    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $posicao = $_POST['posicao'];
    $quantidadeGol = $_POST['QuantidadeGol'];

    inserirJogador($nome,$nacionalidade,$posicao,$quantidadeGol);
    header("Location: ../index.php");
    exit;

}

if(isset ($_POST['nome']) && isset($_POST ['nacionalidade']) && 
   isset ($_POST['posicao']) && isset ($_POST['QuantidadeGol'])){
    
    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $posicao = $_POST['posicao'];
    $quantidadeGol = $_POST['QuantidadeGol'];

    inserirJogador($nome,$nacionalidade,$posicao,$quantidadeGol);
    
    header("Location: ../index.php");
    exit;
}
?>