# Identificacao de Riscos

Projeto: Gerador de Senhas Seguras  
Cenario: Projeto proprio academico com apoio de IA generativa

## 1. Riscos tecnicos

### R01 - Geracao de senha com aleatoriedade inadequada

**Severidade:** Alta  
**Probabilidade:** Baixa

**Descricao:**  
Caso a implementacao utilize uma fonte fraca de aleatoriedade, as senhas geradas podem ser previsiveis.

**Impacto potencial:**

- Reducao da seguranca das senhas.
- Perda de confianca na ferramenta.
- Necessidade de reescrever a logica de geracao.

### R02 - Falhas nas validacoes de entrada

**Severidade:** Alta  
**Probabilidade:** Media

**Descricao:**  
Entradas invalidas, como tamanho abaixo do minimo ou nenhum tipo de caractere selecionado, podem causar erro ou comportamento inesperado.

**Impacto potencial:**

- Erros na aplicacao.
- Senhas fora dos criterios esperados.
- Experiencia ruim para o usuario.

### R03 - Problemas de compatibilidade no ambiente XAMPP

**Severidade:** Media  
**Probabilidade:** Media

**Descricao:**  
O projeto depende do Apache e do PHP instalados via XAMPP. Diferencas de versao ou configuracao podem impedir a execucao.

**Impacto potencial:**

- Avaliador nao consegue executar o projeto.
- Necessidade de ajustes manuais no ambiente.
- Atraso na validacao da entrega.

## 2. Riscos de qualidade

### R04 - Cobertura de testes insuficiente

**Severidade:** Alta  
**Probabilidade:** Media

**Descricao:**  
Os testes existentes cobrem o fluxo principal e algumas validacoes, mas podem nao cobrir todos os casos extremos.

**Impacto potencial:**

- Regressao nao detectada.
- Falha em cenarios de borda.
- Reducao da confiabilidade do projeto.

### R05 - Botao de copiar falhar em alguns navegadores

**Severidade:** Media  
**Probabilidade:** Media

**Descricao:**  
A funcao `navigator.clipboard` pode depender de permissao do navegador ou contexto seguro.

**Impacto potencial:**

- Usuario precisa copiar manualmente a senha.
- Percepcao de falha na interface.
- Necessidade de implementar fallback.

## 3. Riscos de seguranca

### R06 - Vazamento de segredos no repositorio

**Severidade:** Alta  
**Probabilidade:** Baixa

**Descricao:**  
Mesmo um projeto simples pode acidentalmente versionar arquivos `.env`, credenciais ou configuracoes locais.

**Impacto potencial:**

- Exposicao de dados sensiveis.
- Necessidade de limpar historico Git.
- Risco reputacional.

### R07 - Senha gerada ficar exposta no HTML

**Severidade:** Media  
**Probabilidade:** Media

**Descricao:**  
A senha gerada aparece no campo de resultado da pagina. Em ambientes compartilhados, outra pessoa pode visualizar a tela.

**Impacto potencial:**

- Exposicao visual da senha.
- Uso inadequado em computadores compartilhados.
- Necessidade de orientar o usuario.

## 4. Riscos de documentacao e entrega

### R08 - README incompleto ou pouco reproduzivel

**Severidade:** Alta  
**Probabilidade:** Media

**Descricao:**  
Se o README nao explicar como executar, testar e validar, o avaliador pode ter dificuldade para reproduzir a entrega.

**Impacto potencial:**

- Avaliacao prejudicada.
- Dificuldade de manutencao.
- Maior dependencia de explicacoes externas.

### R09 - Ausencia de release/tag obrigatoria

**Severidade:** Alta  
**Probabilidade:** Baixa

**Descricao:**  
A atividade exige uma tag de release `v1.0.0`. A ausencia da tag compromete a submissao.

**Impacto potencial:**

- Entrega considerada incompleta.
- Necessidade de correcao apos prazo.
- Perda de rastreabilidade da versao avaliada.

## 5. Riscos de escopo e cronograma

### R10 - Expansao excessiva do escopo

**Severidade:** Media  
**Probabilidade:** Media

**Descricao:**  
Novas ideias, como medidor de forca, historico, autenticacao ou API, podem ampliar demais o escopo do mini-projeto.

**Impacto potencial:**

- Atraso na entrega.
- Mais bugs por implementacao apressada.
- Documentacao desatualizada.

## Matriz resumida

| ID | Risco | Severidade | Probabilidade | Prioridade |
| --- | --- | --- | --- | --- |
| R01 | Aleatoriedade inadequada | Alta | Baixa | Alta |
| R02 | Falhas nas validacoes | Alta | Media | Alta |
| R03 | Compatibilidade XAMPP | Media | Media | Media |
| R04 | Testes insuficientes | Alta | Media | Alta |
| R05 | Falha no copiar senha | Media | Media | Media |
| R06 | Vazamento de segredos | Alta | Baixa | Alta |
| R07 | Exposicao visual da senha | Media | Media | Media |
| R08 | README incompleto | Alta | Media | Alta |
| R09 | Ausencia da tag v1.0.0 | Alta | Baixa | Alta |
| R10 | Expansao de escopo | Media | Media | Media |
