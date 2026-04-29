<?php

$failures = [];

if (PHP_VERSION_ID < 80000) {
    $failures[] = 'PHP 8.0 ou superior e necessario.';
}

if (!function_exists('random_int')) {
    $failures[] = 'A funcao random_int precisa estar disponivel.';
}

if (!file_exists(__DIR__ . '/../projeto_akcit/index.php')) {
    $failures[] = 'Arquivo principal projeto_akcit/index.php nao encontrado.';
}

if (!file_exists(__DIR__ . '/../projeto_akcit/gerador.php')) {
    $failures[] = 'Arquivo de logica projeto_akcit/gerador.php nao encontrado.';
}

if ($failures !== []) {
    echo "test_conf: falhou\n";

    foreach ($failures as $failure) {
        echo "- {$failure}\n";
    }

    exit(1);
}

echo "test_conf: ok\n";
