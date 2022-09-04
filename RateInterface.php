<?php

interface RateInterface
{
    public function priceCounter(): int;
    public function addService (ServiceInterface $service): self;
    public function getTime(): int;
    public function getDistance(): int;
}
