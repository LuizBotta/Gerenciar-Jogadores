<?php

session_start();
require_once "funcoesBD.php";

if(!empty ($_POST['Nome']) && !empty($_POST ['Nacionalidade']) && 
   !empty ($_POST['Posicao']) && !empty ($_POST['QuantidadeGol'])){
    
    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $posicao = $_POST['posicao'];
    $quantidadeGol = $_POST['QuantidadeGol'];
}

if(isset ($_POST['Nome']) && isset($_POST ['Nacionalidade']) && 
   isset ($_POST['Posicao']) && isset ($_POST['QuantidadeGol'])){
    
    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $posicao = $_POST['posicao'];
    $quantidadeGol = $_POST['QuantidadeGol'];
}

inserirJogador($nome,$nacionalidade,$posicao,$quantidadeGol);


?>