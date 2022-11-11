<?php

namespace Suainul\Rajaongkir;

use Suainul\Rajaongkir\Services\ApiService;

class Tracking extends ApiService
{
    private $resi,$courier;
    public function __construct()
    {
        parent::__construct();   
    }
    public function search()
    {
        return $this->post("/waybill")->setData([
                "waybill"=>$this->resi,
                "courier"=> $this->courier
        ])->process();
    }

    /**
     * Set the value of resi
     *
     * @return  self
     */ 
    public function setResi($resi)
    {
        $this->resi = $resi;

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