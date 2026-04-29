<?php
require_once __DIR__ . '/gerador.php';

$password = '';
$error = '';

$length = isset($_POST['length']) ? (int) $_POST['length'] : 16;
$useUppercase = isset($_POST['uppercase']) || $_SERVER['REQUEST_METHOD'] !== 'POST';
$useLowercase = isset($_POST['lowercase']) || $_SERVER['REQUEST_METHOD'] !== 'POST';
$useNumbers = isset($_POST['numbers']) || $_SERVER['REQUEST_METHOD'] !== 'POST';
$useSymbols = isset($_POST['symbols']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = generateSecurePassword($length, $useUppercase, $useLowercase, $useNumbers, $useSymbols);
    $password = $result['password'];
    $error = $result['error'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas Seguras</title>
    <style>
        :root {
            color-scheme: light;
            --background: #f4f7fb;
            --surface: #ffffff;
            --text: #172033;
            --muted: #65728a;
            --primary: #1769e0;
            --primary-dark: #0f55b8;
            --border: #d8e0ed;
            --danger: #b42318;
            --success-bg: #eaf7ef;
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            display: grid;
            place-items: center;
            padding: 32px 16px;
            background: var(--background);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
        }

        main {
            width: min(100%, 560px);
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 28px;
            box-shadow: 0 16px 40px rgba(23, 32, 51, 0.08);
        }

        h1 {
            margin: 0 0 8px;
            font-size: clamp(1.7rem, 5vw, 2.3rem);
            line-height: 1.1;
        }

        p {
            margin: 0 0 24px;
            color: var(--muted);
            line-height: 1.5;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
        }

        input[type="number"],
        input[type="text"] {
            width: 100%;
            min-height: 44px;
            border: 1px solid var(--border);
            border-radius: 6px;
            padding: 10px 12px;
            color: var(--text);
            font-size: 1rem;
        }

        .field {
            margin-bottom: 20px;
        }

        .options {
            display: grid;
            gap: 12px;
            margin-bottom: 22px;
        }

        .option {
            display: flex;
            align-items: center;
            gap: 10px;
            min-height: 42px;
            padding: 10px 12px;
            border: 1px solid var(--border);
            border-radius: 6px;
            font-weight: 600;
        }

        .option input {
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }

        button {
            width: 100%;
            min-height: 46px;
            border: 0;
            border-radius: 6px;
            background: var(--primary);
            color: #ffffff;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 700;
        }

        button:hover {
            background: var(--primary-dark);
        }

        .result,
        .error {
            margin-top: 22px;
            padding: 14px;
            border-radius: 6px;
        }

        .result {
            background: var(--success-bg);
            border: 1px solid #b8dfc4;
        }

        .error {
            color: var(--danger);
            background: #fff1f0;
            border: 1px solid #ffccc7;
            font-weight: 700;
        }

        .password-row {
            display: flex;
            gap: 10px;
        }

        .copy-button {
            width: auto;
            min-width: 88px;
            padding: 0 14px;
        }

        @media (max-width: 480px) {
            main {
                padding: 22px;
            }

            .password-row {
                flex-direction: column;
            }

            .copy-button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <main>
        <h1>Gerador de senhas seguras</h1>
        <p>Defina os criterios e gere uma senha aleatoria com caracteres fortes.</p>

        <form method="post">
            <div class="field">
                <label for="length">Tamanho da senha</label>
                <input id="length" name="length" type="number" min="4" max="128" value="<?php echo htmlspecialchars((string) $length); ?>" required>
            </div>

            <div class="options" aria-label="Tipos de caracteres">
                <label class="option">
                    <input type="checkbox" name="uppercase" <?php echo $useUppercase ? 'checked' : ''; ?>>
                    Letras maiusculas
                </label>

                <label class="option">
                    <input type="checkbox" name="lowercase" <?php echo $useLowercase ? 'checked' : ''; ?>>
                    Letras minusculas
                </label>

                <label class="option">
                    <input type="checkbox" name="numbers" <?php echo $useNumbers ? 'checked' : ''; ?>>
                    Numeros
                </label>

                <label class="option">
                    <input type="checkbox" name="symbols" <?php echo $useSymbols ? 'checked' : ''; ?>>
                    Caracteres especiais
                </label>
            </div>

            <button type="submit">Gerar senha</button>
        </form>

        <?php if ($error !== ''): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <?php if ($password !== ''): ?>
            <section class="result" aria-label="Senha gerada">
                <label for="generated-password">Senha gerada</label>
                <div class="password-row">
                    <input id="generated-password" type="text" value="<?php echo htmlspecialchars($password); ?>" readonly>
                    <button class="copy-button" type="button" onclick="copyPassword()">Copiar</button>
                </div>
            </section>
        <?php endif; ?>
    </main>

    <script>
        function copyPassword() {
            const field = document.getElementById('generated-password');

            if (!field) {
                return;
            }

            navigator.clipboard.writeText(field.value);
        }
    </script>
</body>
</html>
