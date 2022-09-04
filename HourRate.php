<?php
class HourRate extends AbstractRate
{
    protected $pricePerKM = 0;
    protected $pricePerMIN = 200 / 60;

    public function __construct (int $time, int $distance)
    {
        $hours = ceil($time / 60);
        $this->time = $hours * 60;
    }
}
