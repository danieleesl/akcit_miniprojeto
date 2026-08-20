# Contexto do Projeto para Gestao de Riscos

## Projeto

Gerador de Senhas Seguras, uma aplicacao web simples em PHP que permite gerar senhas aleatorias conforme criterios definidos pelo usuario.

## Cenario utilizado

Este trabalho utiliza um projeto proprio desenvolvido durante a disciplina: um gerador de senhas seguras com interface web, documentacao, testes automatizados simples, Makefile, README, LICENSE, `.gitignore`, artefatos em `docs/` e tag de release `v1.0.0`.

## Objetivo do produto

Disponibilizar uma ferramenta simples, local e reproduzivel para gerar senhas seguras, permitindo configurar:

- Tamanho da senha.
- Inclusao de letras maiusculas.
- Inclusao de letras minusculas.
- Inclusao de numeros.
- Inclusao de caracteres especiais.

## Status atual

O projeto possui uma primeira versao funcional, com:

- Interface web em PHP.
- Logica separada em `projeto_akcit/gerador.php`.
- Validacoes de entrada.
- Testes em `tests/`.
- Documentacao no `README.md`.
- Fluxo da aplicacao em `docs/fluxo-aplicacao.svg`.
- Repositorio GitHub organizado para avaliacao.

## Equipe considerada no cenario

Para fins da atividade de gestao de riscos, considera-se uma equipe pequena:

- 1 pessoa desenvolvedora responsavel pela implementacao.
- 1 pessoa avaliadora/orientadora.
- Apoio de IA generativa para documentacao, revisao, organizacao e identificacao de riscos.

## Premissas

- O projeto sera executado localmente com XAMPP/Apache.
- O PHP do XAMPP estara disponivel em `C:\xampp\php\php.exe`.
- O avaliador tera acesso ao GitHub e podera executar os comandos descritos no README.
- O projeto nao depende de banco de dados, API externa ou credenciais.

## Restricoes

- Escopo academico e tempo limitado.
- Ambiente principal de execucao em Windows/XAMPP.
- Testes simples, sem framework externo.
- Sem pipeline de CI/CD configurado nesta versao.

## Dependencias criticas

- XAMPP/Apache para servir a aplicacao web.
- PHP 8.0 ou superior.
- Navegador moderno com suporte a JavaScript para copiar a senha.
- GitHub para entrega e rastreabilidade da versao.

## Principais preocupacoes de gestao

- Garantir que a senha seja gerada de forma segura.
- Evitar erros em criterios invalidos.
- Manter documentacao suficiente para reproducao.
- Evitar vazamento de informacoes sensiveis.
- Garantir que a entrega esteja versionada e validavel pelo avaliador.
