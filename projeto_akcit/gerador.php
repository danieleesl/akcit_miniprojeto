<?php

const PASSWORD_MIN_LENGTH = 4;
const PASSWORD_MAX_LENGTH = 128;

function getRandomCharacter(string $characters): string
{
    return $characters[random_int(0, strlen($characters) - 1)];
}

function shuffleSecurely(array $characters): string
{
    for ($i = count($characters) - 1; $i > 0; $i--) {
        $j = random_int(0, $i);
        [$characters[$i], $characters[$j]] = [$characters[$j], $characters[$i]];
    }

    return implode('', $characters);
}

function getCharacterGroups(bool $useUppercase, bool $useLowercase, bool $useNumbers, bool $useSymbols): array
{
    $groups = [];

    if ($useUppercase) {
        $groups['uppercase'] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    if ($useLowercase) {
        $groups['lowercase'] = 'abcdefghijklmnopqrstuvwxyz';
    }

    if ($useNumbers) {
        $groups['numbers'] = '0123456789';
    }

    if ($useSymbols) {
        $groups['symbols'] = '!@#$%^&*()-_=+[]{};:,.<>?';
    }

    return $groups;
}

function validatePasswordCriteria(int $length, array $groups): string
{
    if ($length < PASSWORD_MIN_LENGTH || $length > PASSWORD_MAX_LENGTH) {
        return 'Escolha um tamanho entre 4 e 128 caracteres.';
    }

    if (count($groups) === 0) {
        return 'Selecione pelo menos um tipo de caractere.';
    }

    if ($length < count($groups)) {
        return 'O tamanho precisa ser maior ou igual ao numero de tipos selecionados.';
    }

    return '';
}

function generateSecurePassword(
    int $length,
    bool $useUppercase,
    bool $useLowercase,
    bool $useNumbers,
    bool $useSymbols
): array {
    $groups = getCharacterGroups($useUppercase, $useLowercase, $useNumbers, $useSymbols);
    $error = validatePasswordCriteria($length, $groups);

    if ($error !== '') {
        return [
            'password' => '',
            'error' => $error,
        ];
    }

    $allCharacters = implode('', $groups);
    $passwordCharacters = [];

    foreach ($groups as $group) {
        $passwordCharacters[] = getRandomCharacter($group);
    }

    while (count($passwordCharacters) < $length) {
        $passwordCharacters[] = getRandomCharacter($allCharacters);
    }

    return [
        'password' => shuffleSecurely($passwordCharacters),
        'error' => '',
    ];
}
