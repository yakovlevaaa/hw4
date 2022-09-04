<?php
include "RateInterface.php";
include "ServiceInterface.php";
include "AbstractRate.php";
include "BasicRate.php";
include "HourRate.php";
include "StudentRate.php";
include "ServiceClasses.php";


/** @var RateInterface $rate */

$rate = new BasicRate(60, 5);
$rate->addService(new GPS(15));
$rate->addService(new ExtraDriver(100));
echo 'Стоимость Вашей поездки по тарифу "Базовый" с доп. услугами "GPS" и "Доп. водитель" составляет ' .
    "<b>" . $rate->priceCounter() . "</b>". ' руб.' . "<br>";

$rate = new StudentRate(100, 5);
$rate->addService(new GPS(15));
echo 'Стоимость Вашей поездки по тарифу "Студенческий" с доп. услугой "GPS" составляет ' .
    "<b>" . $rate->priceCounter() . "</b>". ' руб.' . "<br>";

$rate = new HourRate(220, 5);
echo 'Стоимость Вашей поездки по тарифу "Почасовой" составляет ' .
    "<b>" . $rate->priceCounter() . "</b>". ' руб.' . "<br>";
