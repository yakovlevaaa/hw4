<?php
interface ServiceInterface
{
    public function applyService (RateInterface $rate, &$price);
}
