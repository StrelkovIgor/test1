<?php

//Данный пример был реаизован по тесовому заданию и несет архитектурное решение
//Реализация роутов и вызова методов контроллера пропущено

$request = new \http\Client\Requestst();
$controller = new SettingsController();


//Отправка подтверждения
$controller->send();

//Изменение
$controller->change($request);