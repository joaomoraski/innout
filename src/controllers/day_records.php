<?php
session_start(); //inicia a sessão
requireValidSession(); // verifica

$date = (new DateTime())->getTimeStamp();
$today = strftime('%d de %B de %Y', $date);

loadTemplateView('day_records', ['today' => $today]);
