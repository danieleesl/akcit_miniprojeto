# Gerador de Senhas Seguras

Aplicacao web simples em PHP para gerar senhas aleatorias e seguras com base nos criterios definidos pelo usuario.

## Recursos

- Definicao do tamanho da senha.
- Inclusao opcional de letras maiusculas.
- Inclusao opcional de letras minusculas.
- Inclusao opcional de numeros.
- Inclusao opcional de caracteres especiais.
- Validacao dos criterios informados.
- Geracao segura usando `random_int()`.
- Botao para copiar a senha gerada.

## Requisitos funcionais

- RF01: O sistema deve permitir que o usuario informe o tamanho da senha.
- RF02: O sistema deve permitir que o usuario escolha se a senha tera letras maiusculas.
- RF03: O sistema deve permitir que o usuario escolha se a senha tera letras minusculas.
- RF04: O sistema deve permitir que o usuario escolha se a senha tera numeros.
- RF05: O sistema deve permitir que o usuario escolha se a senha tera caracteres especiais.
- RF06: O sistema deve validar se pelo menos um tipo de caractere foi selecionado.
- RF07: O sistema deve validar se o tamanho da senha esta entre 4 e 128 caracteres.
- RF08: O sistema deve gerar uma senha aleatoria de acordo com os criterios escolhidos.
- RF09: O sistema deve garantir que a senha gerada contenha pelo menos um caractere de cada tipo selecionado.
- RF10: O sistema deve exibir mensagens de erro quando os criterios informados forem invalidos.
- RF11: O sistema deve permitir que o usuario copie a senha gerada.

## Tecnologias

- OpenAI Codex como assistente de IA no desenvolvimento
- PHP
- HTML
- CSS
- JavaScript
- XAMPP para execucao local

## Como executar

1. Coloque o projeto dentro da pasta `htdocs` do XAMPP.
2. Inicie o Apache pelo painel do XAMPP.
3. Acesse no navegador:

```text
http://localhost/projeto/projeto_akcit/
```

## Como testar

Com Make instalado, execute pela raiz do projeto:

```powershell
make test
```

Ou execute os arquivos de teste diretamente com o PHP do XAMPP:

```powershell
C:\xampp\php\php.exe tests\test_conf.php
C:\xampp\php\php.exe tests\test_gerador.php
```

Para validar a sintaxe dos arquivos PHP com Make:

```powershell
make lint
```

## Arquitetura

```mermaid
flowchart LR
    A[index.php] --> B[Interface HTML/CSS]
    A --> C[gerador.php]
    C --> D[Validacao dos criterios]
    C --> E[Geracao segura da senha]
    B --> F[Botao copiar com JavaScript]
```

## Fluxo da aplicacao

![Fluxo da aplicacao](docs/fluxo-aplicacao.svg)

[Abrir imagem do fluxo](docs/fluxo-aplicacao.svg)

## Estrutura atual

```text
PROJETO/
|-- README.md
|-- docs/
|   `-- fluxo-aplicacao.svg
|-- projeto_akcit/
|   |-- gerador.php
|   `-- index.php
|-- tests/
|   |-- test_conf.php
|   `-- test_gerador.php
|-- .gitignore
|-- Makefile
`-- requeriments.txt
```

## Regras de validacao

- O tamanho da senha deve estar entre 4 e 128 caracteres.
- Pelo menos um tipo de caractere deve ser selecionado.
- O tamanho da senha deve ser maior ou igual a quantidade de tipos de caracteres selecionados.

## Observacoes de seguranca

A geracao da senha usa `random_int()`, uma funcao adequada para valores aleatorios seguros em PHP. A senha gerada garante pelo menos um caractere de cada tipo selecionado pelo usuario.
