<?php

namespace Suainul\Rajaongkir;

use Suainul\Rajaongkir\Services\ApiService;

class Cost extends ApiService
{
    private $origin,$destination,$weight,$courier;
    public function __construct()
    {
        parent::__construct();   
    }
    public function calc()
    {
        return $this->post("/cost")->setData([
            "origin"=> $this->origin,
            "originType"=> config("rajaongkir.originType"),
            "destination"=> $this->destination,
            "destinationType"=> config("rajaongkir.destinationType"),
            "weight"=> $this->weight,
            "courier"=> $this->courier
        ])->process();
    }

    /**
     * Set the value of origin
     *
     * @return  self
     */ 
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Set the value of destination
     *
     * @return  self
     */ 
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Set the value of courier
     *
     * @return  self
     */ 
    public function setCourier($courier)
    {
        $this->courier = $courier;

        return $this;
    }
}