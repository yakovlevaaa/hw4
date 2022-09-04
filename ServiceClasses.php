<?php
include "ServiceTrait.php";

class GPS implements ServiceInterface
{
    use ServiceTrait;

    public function applyService (RateInterface $rate, &$price)
    {
        $hours = ceil($rate->getTime() / 60);
        $price += $this->price * $hours;
    }
}

class ExtraDriver implements ServiceInterface
{
    use ServiceTrait;

    public function applyService (RateInterface $rate, &$price)
    {
        $price += $this->price;
    }
}
