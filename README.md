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

## Testes com curl

Com o Apache do XAMPP iniciado, o avaliador pode copiar e executar os comandos abaixo no PowerShell:

```powershell
curl.exe http://localhost/projeto/projeto_akcit/
```

Gerar senha com 16 caracteres, incluindo maiusculas, minusculas, numeros e caracteres especiais:

```powershell
curl.exe -X POST http://localhost/projeto/projeto_akcit/ -d "length=16&uppercase=on&lowercase=on&numbers=on&symbols=on"
```

Gerar senha com 12 caracteres, incluindo apenas letras e numeros:

```powershell
curl.exe -X POST http://localhost/projeto/projeto_akcit/ -d "length=12&uppercase=on&lowercase=on&numbers=on"
```

Testar validacao de tamanho invalido:

```powershell
curl.exe -X POST http://localhost/projeto/projeto_akcit/ -d "length=3&uppercase=on&lowercase=on"
```

Testar validacao sem nenhum tipo de caractere selecionado:

```powershell
curl.exe -X POST http://localhost/projeto/projeto_akcit/ -d "length=16"
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

## Gestao de riscos e comunicacao

Este projeto tambem inclui artefatos de gestao de riscos elaborados como parte da atividade academica sobre uso de IA generativa em projetos de software.

- [Contexto do projeto](docs/project_management.md)
- [Identificacao de riscos](docs/risks/identification.md)
- [Analise qualitativa de riscos](docs/risks/analysis.md)
- [Estrategias de resposta aos riscos](docs/risks/response.md)
- [Comunicacao para stakeholders](docs/comunicacao-stakeholders.md)

### Resumo dos principais riscos

- Uso inadequado de aleatoriedade na geracao de senhas.
- Falhas nas validacoes de entrada.
- Cobertura de testes insuficiente para casos extremos.
- Dificuldade de reproducao em ambientes XAMPP diferentes.
- Vazamento acidental de arquivos sensiveis no repositorio.
- Expansao excessiva do escopo do mini-projeto.

### Estrategia de resposta prioritaria

A resposta mais importante e mitigar o risco de geracao insegura de senhas. Para isso, a logica utiliza `random_int()`, fica separada em `projeto_akcit/gerador.php` e possui testes que verificam tamanho e presenca dos grupos de caracteres selecionados.

### Apoio da IA generativa

O OpenAI Codex foi utilizado como assistente de IA para apoiar a estruturacao do projeto, revisao do codigo, criacao de testes, organizacao do repositorio, elaboracao da documentacao e construcao dos artefatos de gestao de riscos. As sugestoes foram revisadas e validadas manualmente antes de serem incorporadas.

## Estrutura atual

```text
PROJETO/
|-- README.md
|-- docs/
|   |-- comunicacao-stakeholders.md
|   |-- fluxo-aplicacao.svg
|   |-- project_management.md
|   `-- risks/
|       |-- analysis.md
|       |-- identification.md
|       `-- response.md
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
