<?php
const EVENT_STATUS_AVAILABLE = 'Disponivel';
const EVENT_STATUS_WAITLIST = 'Lista de espera';
function getEvents(): array { return [
1=>['id'=>1,'title'=>'Congresso de Inovacao','date'=>'15/09/2026','time'=>'09:00','capacity'=>120,'registered'=>86,'price'=>150.00],
2=>['id'=>2,'title'=>'Workshop de IA Generativa','date'=>'16/09/2026','time'=>'14:00','capacity'=>30,'registered'=>30,'price'=>0.00],
3=>['id'=>3,'title'=>'Seminario de Gestao de Projetos','date'=>'18/09/2026','time'=>'19:00','capacity'=>80,'registered'=>42,'price'=>75.00],
]; }
function eventAvailability(array $event): string { return $event['registered'] < $event['capacity'] ? EVENT_STATUS_AVAILABLE : EVENT_STATUS_WAITLIST; }
function validateRegistration(string $name,string $email,int $eventId,array $events): array {
$errors=[]; if(trim($name)==='')$errors[]='Informe o nome do participante.';
if(!filter_var($email,FILTER_VALIDATE_EMAIL))$errors[]='Informe um e-mail valido.';
if(!isset($events[$eventId]))$errors[]='Selecione um evento valido.'; return $errors; }
function registerParticipant(string $name,string $email,int $eventId,array $events): array {
$errors=validateRegistration($name,$email,$eventId,$events);
if($errors!==[])return ['success'=>false,'errors'=>$errors,'message'=>''];
$event=$events[$eventId]; $waitlist=eventAvailability($event)===EVENT_STATUS_WAITLIST;
return ['success'=>true,'errors'=>[],'waitlist'=>$waitlist,'event'=>$event,'message'=>$waitlist?'Evento lotado. Solicitacao registrada na lista de espera.':'Inscricao realizada. Um comprovante deve ser enviado ao participante.']; }
