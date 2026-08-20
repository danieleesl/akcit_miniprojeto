# Analise Qualitativa de Riscos

Este documento aprofunda os riscos identificados para o projeto Gerador de Senhas Seguras, considerando impacto, probabilidade, causas, interdependencias e sinais de monitoramento.

## Riscos prioritarios

### R01 - Geracao de senha com aleatoriedade inadequada

**Analise:**  
Este e o risco mais sensivel do projeto, pois a finalidade principal da aplicacao e gerar senhas seguras. Uma escolha inadequada de funcao aleatoria comprometeria diretamente o valor do produto.

**Causas provaveis:**

- Uso de funcoes nao criptograficas, como `rand()` ou `mt_rand()`.
- Falta de revisao tecnica sobre seguranca.
- Aceitacao automatica de sugestoes da IA sem validacao.

**Impactos:**

- Senhas previsiveis.
- Perda de confianca do usuario.
- Necessidade de correcao imediata da logica central.

**Sinais de alerta:**

- Alteracoes futuras substituindo `random_int()`.
- Ausencia de testes que validem tamanho e grupos de caracteres.
- Falta de revisao manual na funcao de geracao.

### R02 - Falhas nas validacoes de entrada

**Analise:**  
As validacoes protegem a aplicacao contra configuracoes impossiveis ou inseguras, como gerar senha sem nenhum grupo de caracteres. Esse risco tem impacto alto porque erros nessa camada afetam diretamente a experiencia do usuario.

**Causas provaveis:**

- Adicao de novos criterios sem testes.
- Mudancas no formulario sem atualizar a logica PHP.
- Falta de testes para limites inferiores e superiores.

**Impactos:**

- Mensagens de erro ausentes ou confusas.
- Senhas geradas fora do criterio escolhido.
- Possibilidade de erro em tempo de execucao.

**Sinais de alerta:**

- Aumento de condicionais no `index.php`.
- Testes nao atualizados apos mudancas de interface.
- Regras de validacao diferentes entre README e codigo.

### R04 - Cobertura de testes insuficiente

**Analise:**  
O projeto possui testes simples em PHP, o que e adequado ao escopo academico. Mesmo assim, a ausencia de um framework de testes e de cobertura automatizada pode deixar lacunas em cenarios de borda.

**Causas provaveis:**

- Tempo reduzido para elaborar uma suite completa.
- Foco inicial na interface visual.
- Falta de CI/CD para executar testes automaticamente.

**Impactos:**

- Regressao sem deteccao.
- Falha em criterios combinados.
- Maior esforco manual de validacao.

**Sinais de alerta:**

- Mudancas no `gerador.php` sem alteracao nos testes.
- Testes executados apenas manualmente.
- Falta de documentacao sobre como testar.

### R06 - Vazamento de segredos no repositorio

**Analise:**  
O projeto nao usa chaves de API, banco de dados ou arquivos de ambiente obrigatorios. Ainda assim, por ser entregue em GitHub publico, e importante prevenir qualquer versionamento acidental de `.env` ou credenciais locais.

**Causas provaveis:**

- Arquivos locais criados durante testes.
- Falta de revisao antes do commit.
- `.gitignore` incompleto.

**Impactos:**

- Exposicao de informacoes privadas.
- Necessidade de rotacionar credenciais.
- Limpeza complexa do historico Git.

**Sinais de alerta:**

- Arquivos `.env` aparecendo no `git status`.
- URLs com usuario e senha.
- Tokens ou chaves no historico de commits.

### R08 - README incompleto ou pouco reproduzivel

**Analise:**  
Em um trabalho academico, a documentacao e parte essencial da avaliacao. Mesmo que o codigo funcione, uma entrega pouco explicada dificulta reproducao e verificacao.

**Causas provaveis:**

- README atualizado depois do codigo, mas sem revisao final.
- Ausencia de comandos testaveis.
- Estrutura de pastas diferente da documentada.

**Impactos:**

- Avaliador nao consegue executar rapidamente.
- Reducao da clareza profissional da entrega.
- Perda de rastreabilidade dos artefatos.

**Sinais de alerta:**

- Links quebrados.
- Comandos que dependem de contexto nao explicado.
- Pastas citadas no README que nao existem.

## Interdependencias

| Risco origem | Risco afetado | Relacao |
| --- | --- | --- |
| R10 - Expansao de escopo | R04 - Testes insuficientes | Mais funcionalidades aumentam casos nao testados |
| R04 - Testes insuficientes | R02 - Falhas nas validacoes | Validacoes podem quebrar sem regressao automatizada |
| R08 - README incompleto | R03 - Compatibilidade XAMPP | Ambiente mal explicado aumenta falhas de execucao |
| R06 - Vazamento de segredos | R08 - Documentacao | Boas instrucoes reduzem uso indevido de arquivos locais |
| R01 - Aleatoriedade inadequada | R07 - Exposicao visual | Ambos afetam confianca do usuario na seguranca |

## Cenario de impacto principal

Um cenario critico seria a evolucao do projeto sem congelamento de escopo. Novas funcionalidades seriam adicionadas rapidamente, os testes simples nao acompanhariam todas as combinacoes e alguma validacao poderia falhar. Isso poderia gerar senha fora do criterio solicitado ou impedir a execucao pelo avaliador. O impacto seria tecnico e academico, pois afetaria tanto a qualidade do produto quanto a clareza da entrega.

## Conclusao da analise

Os riscos mais importantes para este projeto sao os relacionados a seguranca da geracao, validacao de entradas, testes e documentacao. A resposta mais efetiva e manter o escopo controlado, preservar a logica segura com `random_int()`, executar testes antes de commits e manter o README atualizado com comandos reproduziveis.
