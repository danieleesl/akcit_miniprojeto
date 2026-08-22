# Contexto do Projeto para Gestao de Riscos

## Projeto

Sistema de Gestao de Eventos para uma empresa que organiza congressos, workshops e eventos corporativos.

## Contexto e objetivo

Atualmente, inscricoes, vagas, pagamentos, cancelamentos e certificados sao controlados por formularios on-line e planilhas. O projeto pretende centralizar essas atividades, melhorar a experiencia dos participantes e dar maior controle aos organizadores.

## Stakeholders

- Participantes: consultar eventos, inscrever-se, acompanhar inscricoes, cancelar participacao e emitir certificados.
- Organizadores: criar eventos, controlar vagas e inscricoes e gerenciar participantes.
- Equipe financeira: confirmar pagamentos e controlar reembolsos.
- Palestrantes: consultar programacao e participantes de suas atividades.
- Equipe de TI: desenvolver, operar e manter o sistema.

## Escopo inicial

Catalogo de eventos, inscricao, controle de vagas, lista de espera, acompanhamento de inscricoes, pagamentos, cancelamentos, reembolsos, comprovantes, notificacoes e certificados.

## Premissas e restricoes

- O primeiro incremento sera um MVP web em PHP 8 e XAMPP.
- Dados pessoais e financeiros exigem controle de acesso, privacidade e rastreabilidade.
- Workshops no mesmo horario nao devem admitir inscricoes conflitantes.
- As regras em aberto nao serao implementadas como definitivas antes de validacao com os stakeholders.

## Questoes em aberto

- Prazo limite de cancelamento e condicoes de reembolso.
- Funcionamento e ordem da lista de espera.
- Momento exato da reserva da vaga em eventos pagos.
- Criterio para emissao de certificado e confirmacao de presenca.
- Canais de comprovantes e notificacoes.
- Informacoes de participantes visiveis aos palestrantes.
- Metas mensuraveis de seguranca, desempenho, disponibilidade, acessibilidade e privacidade.

## Criterios de sucesso

Reducao de controles manuais, ocupacao de vagas consistente, pagamentos rastreaveis, comunicacoes registradas e satisfacao dos participantes e organizadores.
