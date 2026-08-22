<?php
require_once __DIR__.'/../projeto_akcit/eventos.php';
function assertTrue(bool $condition,string $message):void{if(!$condition){echo "test_eventos: falhou\n- {$message}\n";exit(1);}}
$events=getEvents();
assertTrue(count($events)>=3,'O catalogo deve conter eventos.');
assertTrue(eventAvailability($events[1])===EVENT_STATUS_AVAILABLE,'Evento com vagas deve estar disponivel.');
assertTrue(eventAvailability($events[2])===EVENT_STATUS_WAITLIST,'Evento lotado deve indicar lista de espera.');
$valid=registerParticipant('Ana Silva','ana@example.com',1,$events);
assertTrue($valid['success']&&!$valid['waitlist'],'Uma inscricao valida deve ser aceita.');
$waitlist=registerParticipant('Bruno Lima','bruno@example.com',2,$events);
assertTrue($waitlist['success']&&$waitlist['waitlist'],'Evento lotado deve registrar lista de espera.');
$invalid=registerParticipant('','email-invalido',99,$events);
assertTrue(!$invalid['success']&&count($invalid['errors'])===3,'Dados invalidos devem ser rejeitados.');
echo "test_eventos: ok\n";
