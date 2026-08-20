# Estrategias de Resposta aos Riscos

Este documento define respostas para os riscos identificados no projeto Gerador de Senhas Seguras.

## Estrategias por risco

| ID | Risco | Estrategia | Acoes principais | Responsavel | Prazo |
| --- | --- | --- | --- | --- | --- |
| R01 | Aleatoriedade inadequada | Mitigar | Manter `random_int()`, revisar alteracoes no gerador e documentar decisao de seguranca | Dev | Imediato |
| R02 | Falhas nas validacoes | Mitigar | Testar limites, manter mensagens claras e sincronizar README com codigo | Dev/QA | Curto prazo |
| R03 | Compatibilidade XAMPP | Mitigar | Documentar PHP/XAMPP, comandos diretos e URL local | Dev | Imediato |
| R04 | Testes insuficientes | Mitigar | Ampliar testes unitarios, validar sintaxe PHP e criar comandos Makefile | Dev/QA | Curto prazo |
| R05 | Falha no copiar senha | Aceitar com mitigacao | Manter campo readonly para copia manual e avaliar fallback se necessario | Dev | Medio prazo |
| R06 | Vazamento de segredos | Evitar/Mitigar | Manter `.env` no `.gitignore`, revisar `git status` e buscar padroes de segredo antes de releases | Dev | Continuo |
| R07 | Exposicao visual da senha | Aceitar com mitigacao | Exibir senha somente apos geracao e orientar uso em ambiente privado | Dev | Continuo |
| R08 | README incompleto | Mitigar | Incluir execucao, testes, curl, arquitetura, riscos e estrutura | Dev | Imediato |
| R09 | Ausencia da tag v1.0.0 | Evitar | Criar e enviar tag `v1.0.0` no GitHub | Dev | Imediato |
| R10 | Expansao de escopo | Aceitar com controle | Registrar novas ideias em backlog e manter MVP simples | PM/Dev | Continuo |

## Estrategia considerada mais importante

A estrategia mais importante para este projeto e **mitigar o risco R01 - Geracao de senha com aleatoriedade inadequada**.

### Justificativa

O valor principal do sistema esta na capacidade de gerar senhas seguras. Se a fonte de aleatoriedade for fraca, todo o objetivo do projeto fica comprometido. Por isso, a decisao tecnica de usar `random_int()` deve ser preservada e revisada sempre que a logica do gerador for alterada.

### Acoes concretas

1. Manter a funcao de geracao em `projeto_akcit/gerador.php`, separada da interface.
2. Usar `random_int()` para selecionar caracteres.
3. Garantir que cada grupo selecionado apareca pelo menos uma vez na senha.
4. Executar `tests/test_gerador.php` apos mudancas.
5. Revisar manualmente sugestoes da IA que alterem a geracao ou validacao.

### Indicadores de sucesso

- Testes do gerador executam com sucesso.
- Senhas possuem o tamanho solicitado.
- Senhas incluem os grupos selecionados.
- Nenhuma funcao aleatoria fraca e introduzida.
- README documenta a decisao de seguranca.

## Plano de acao por horizonte

### Imediato

- Manter `.gitignore` protegendo `.env`, `node_modules/` e `__pycache__/`.
- Executar testes antes de commits.
- Garantir tag `v1.0.0`.
- Documentar riscos e respostas.

### Curto prazo

- Adicionar mais testes para combinacoes de caracteres.
- Criar fallback para copia manual caso `navigator.clipboard` falhe.
- Revisar README apos qualquer mudanca funcional.

### Medio prazo

- Avaliar GitHub Actions para executar testes automaticamente.
- Criar medidor visual simples de forca da senha.
- Adicionar checklist de release.

## Riscos residuais

Mesmo com as respostas propostas, alguns riscos permanecem:

- O botao copiar pode depender de permissoes do navegador.
- O ambiente do avaliador pode ter configuracao diferente do XAMPP local.
- Testes manuais ainda podem ser necessarios para validar a interface visual.

Esses riscos sao aceitaveis para o escopo academico, desde que estejam documentados e monitorados.
