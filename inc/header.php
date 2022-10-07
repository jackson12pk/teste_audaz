<?php

date_default_timezone_set('America/Sao_Paulo');
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teste Audaz - Tarifa VT</title>
        <link href="http://<?=$_SERVER['HTTP_HOST'];?>/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">    
        <link href="http://<?=$_SERVER['HTTP_HOST'];?>/assets/css/style.css" rel="stylesheet">    
    </head>
    <body>
        <div class="loading-geral">
            <div class="spinner"></div>
            <div class="spinner"></div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container justify-content-between d-flex">
                <a class="navbar-brand" href="http://<?=$_SERVER['HTTP_HOST'];?>">
                    AudazTec - Teste
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://<?=$_SERVER['HTTP_HOST'];?>">Cadastrar Tarifa</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="http://<?=$_SERVER['HTTP_HOST'];?>/cadastroOperadora.php">Cadastrar Operadora</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="home">
        