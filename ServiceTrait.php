<?php
trait ServiceTrait
{
    public function __construct(int $price)
    {
        $this->price = $price;
    }
}
