<?php

require_once __DIR__ . '/../projeto_akcit/gerador.php';

function assertTrue(bool $condition, string $message): void
{
    if (!$condition) {
        echo "test_gerador: falhou\n";
        echo "- {$message}\n";
        exit(1);
    }
}

$result = generateSecurePassword(16, true, true, true, true);
$password = $result['password'];

assertTrue($result['error'] === '', 'Nao deveria retornar erro para criterios validos.');
assertTrue(strlen($password) === 16, 'A senha gerada deve ter 16 caracteres.');
assertTrue((bool) preg_match('/[A-Z]/', $password), 'A senha deve conter letra maiuscula.');
assertTrue((bool) preg_match('/[a-z]/', $password), 'A senha deve conter letra minuscula.');
assertTrue((bool) preg_match('/[0-9]/', $password), 'A senha deve conter numero.');
assertTrue((bool) preg_match('/[!@#$%^&*()\-_=+\[\]{};:,.<>?]/', $password), 'A senha deve conter caractere especial.');

$invalidLength = generateSecurePassword(3, true, true, true, false);
assertTrue($invalidLength['password'] === '', 'Senha invalida nao deve ser gerada.');
assertTrue($invalidLength['error'] !== '', 'Tamanho invalido deve retornar erro.');

$noGroups = generateSecurePassword(16, false, false, false, false);
assertTrue($noGroups['password'] === '', 'Senha sem grupos selecionados nao deve ser gerada.');
assertTrue($noGroups['error'] !== '', 'Nenhum grupo selecionado deve retornar erro.');

echo "test_gerador: ok\n";
