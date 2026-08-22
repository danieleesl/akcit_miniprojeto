# Analise Qualitativa de Riscos

## Escala

Probabilidade e impacto: baixo, medio ou alto. Sao criticos os riscos com impacto alto e probabilidade media ou alta, especialmente quando afetam vagas, pagamentos ou privacidade.

## Analise dos riscos prioritarios

### R01 - Excesso de inscricoes

Duas inscricoes simultaneas podem consumir a ultima vaga. Exige transacao atomica, teste de concorrencia e monitoramento da ocupacao.

### R07 - Exposicao de dados

Participantes, equipe financeira e palestrantes precisam de visoes diferentes. A ausencia de permissoes e auditoria pode violar privacidade e gerar dano reputacional.

### R10 - Ambiguidades convertidas em regras

Prazo de cancelamento, reembolso, lista de espera, reserva de vaga, certificados e notificacoes continuam sem definicao. Implementar suposicoes pode gerar retrabalho e conflitos com stakeholders.

### R02/R03 - Pagamentos e reembolsos

A inscricao depende do estado do pagamento, mas o momento da reserva da vaga nao foi acordado. A regra de reembolso tambem varia conforme o evento e precisa de matriz de decisao validada.

## Interdependencias

| Origem | Efeito |
| --- | --- |
| R10 | Amplia R02, R03, R04 e R06 |
| R09 | Amplia R01 e R08 em periodos de pico |
| R07 | Limita os dados que podem ser exibidos a palestrantes |
| R11 | Pode atrasar confirmacao de inscricoes e ocupar vagas indevidamente |

## Conclusao

A prioridade e validar regras em aberto e projetar controles de concorrencia, permissoes e auditoria antes da implementacao completa.
