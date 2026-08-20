# Comunicacao para Stakeholders

## Status do projeto

Projeto: Gerador de Senhas Seguras  
Status: MVP funcional, documentado e versionado  
Publico: avaliador academico, orientador e interessados no uso da ferramenta

## Resumo executivo

O projeto entrega uma aplicacao web simples em PHP para gerar senhas seguras com criterios definidos pelo usuario. A versao atual permite configurar tamanho, letras maiusculas, letras minusculas, numeros e caracteres especiais. A logica de geracao foi separada da interface, permitindo testes simples e maior facilidade de manutencao.

Durante a revisao de riscos, os pontos mais importantes identificados foram seguranca da aleatoriedade, validacao de entradas, qualidade dos testes, clareza da documentacao e controle de arquivos sensiveis no repositorio.

## Principais riscos em linguagem acessivel

### 1. Seguranca da senha gerada

Se a aplicacao usar uma forma fraca de sorteio, a senha pode ser menos segura. Para reduzir esse risco, a implementacao usa `random_int()`, uma funcao adequada para geracao aleatoria segura em PHP.

### 2. Entrada invalida do usuario

O usuario pode escolher um tamanho invalido ou nao selecionar nenhum tipo de caractere. A aplicacao trata esses casos com mensagens de erro.

### 3. Dificuldade de execucao pelo avaliador

Como o projeto roda localmente com XAMPP, e importante documentar a URL, comandos de teste e requisitos. O README foi atualizado para facilitar essa reproducao.

### 4. Falta de testes suficientes

O projeto possui testes simples, mas novas funcionalidades podem exigir mais cobertura. A recomendacao e executar os testes sempre que houver alteracao na logica.

### 5. Vazamento de arquivos sensiveis

Mesmo sem usar chaves de API, o repositorio precisa evitar arquivos locais ou `.env`. O `.gitignore` foi revisado para isso.

## Decisoes recomendadas

| Decisao | Recomendacao | Motivo |
| --- | --- | --- |
| Escopo do MVP | Manter simples | Reduz risco de atraso e bugs |
| Geracao aleatoria | Manter `random_int()` | Preserva seguranca |
| Testes | Executar antes de commits | Evita regressao |
| Documentacao | Atualizar junto com o codigo | Facilita avaliacao |
| Seguranca do repositorio | Revisar antes de push | Evita vazamento de dados |

## Plano de comunicacao

| Evento | Frequencia | Objetivo |
| --- | --- | --- |
| Revisao de requisitos | A cada nova funcionalidade | Evitar expansao de escopo |
| Execucao de testes | Antes de commits e releases | Validar comportamento |
| Revisao de README | Antes de entrega | Garantir reproducibilidade |
| Revisao de seguranca | Antes de tags/releases | Evitar segredos no historico |

## Mensagem final para stakeholders

O projeto esta adequado ao escopo do mini-projeto, mas deve manter foco em seguranca, simplicidade e documentacao. A principal recomendacao e nao ampliar o escopo antes de estabilizar testes e validacoes. A entrega atual e reproduzivel e possui artefatos que demonstram preocupacao com qualidade, riscos e comunicacao.
