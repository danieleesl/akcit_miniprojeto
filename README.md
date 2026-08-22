# Sistema de Gestao de Eventos

Projeto academico baseado no caso da empresa Eventos, que organiza congressos, workshops e eventos corporativos. A proposta centraliza eventos, inscricoes, vagas, pagamentos, cancelamentos, reembolsos e certificados.

## MVP executavel

O prototipo em PHP permite consultar eventos, visualizar disponibilidade, enviar uma inscricao e entrar em lista de espera quando um evento esta lotado. Fluxos financeiros, cancelamentos e certificados permanecem no escopo documentado, mas dependem da validacao das regras em aberto.

## Stakeholders

Participantes, organizadores, equipe financeira, palestrantes e equipe de TI.

## Como executar

1. Inicie o Apache no XAMPP.
2. Acesse `http://localhost/projeto/projeto_akcit/`.

## Testes

```powershell
C:\xampp\php\php.exe tests\test_conf.php
C:\xampp\php\php.exe tests\test_eventos.php
```

Ou use `make test`. Para validar sintaxe, use `make lint`.

## Artefatos

- [Contexto do projeto](docs/project_management.md)
- [Identificacao de riscos](docs/risks/identification.md)
- [Analise qualitativa](docs/risks/analysis.md)
- [Respostas aos riscos](docs/risks/response.md)
- [Comunicacao com stakeholders](docs/comunicacao-stakeholders.md)

## Regras ainda pendentes de validacao

Prazo de cancelamento; situacoes de reembolso; funcionamento da lista de espera; momento de reserva da vaga; criterio de emissao de certificado; canais de comprovantes e notificacoes; dados visiveis aos palestrantes; e metas nao funcionais.

## Estrutura

```text
README.md
docs/
  project_management.md
  comunicacao-stakeholders.md
  risks/
projeto_akcit/
  index.php
  eventos.php
tests/
  test_conf.php
  test_eventos.php
```

## Uso de IA generativa

A IA apoiou a analise, estruturacao e revisao dos artefatos. As sugestoes devem ser validadas pelos stakeholders antes de transformar lacunas em regras definitivas.
