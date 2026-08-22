<?php
$failures=[];
if(PHP_VERSION_ID<80000)$failures[]='PHP 8.0 ou superior e necessario.';
if(!function_exists('filter_var'))$failures[]='A funcao filter_var precisa estar disponivel.';
if(!file_exists(__DIR__.'/../projeto_akcit/index.php'))$failures[]='Arquivo principal nao encontrado.';
if(!file_exists(__DIR__.'/../projeto_akcit/eventos.php'))$failures[]='Arquivo de logica de eventos nao encontrado.';
if($failures!==[]){echo "test_conf: falhou\n";foreach($failures as $failure)echo "- {$failure}\n";exit(1);}
echo "test_conf: ok\n";
