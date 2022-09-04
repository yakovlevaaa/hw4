<?php
abstract class AbstractRate implements RateInterface
{
    protected $pricePerKM;
    protected $pricePerMIN;
    protected $time;
    protected $distance;

    /** @var ServiceInterface[] */
    protected $services = [];

    public function __construct (int $time, int $distance)
    {
        $this->time = $time;
        $this->distance = $distance;
    }

    public function priceCounter(): int
    {
        $price = $this->time * $this->pricePerMIN + $this->distance * $this->pricePerKM;

        if ($this->services) {
            foreach ($this->services as $service) {
                $service->applyService($this, $price);
            }
        }
        return $price;

    }

    public function addService (ServiceInterface $service): RateInterface
    {
        array_push($this->services, $service);
        return $this;
    }

    public function getTime(): int
    {
        return $this->time;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}
