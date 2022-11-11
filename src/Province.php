<?php

namespace Suainul\Rajaongkir;

use Suainul\Rajaongkir\Services\ApiService;

class Province extends ApiService
{
    private array $data = [];
    public function __construct()
    {
        parent::__construct();   
    }
    public function search()
    {
        return $this->get("/province?".http_build_query($this->data))->process();
    }
    
    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData(array $data)
    {
        $this->data = $data+["key" => $this->key];

        return $this;
    }
}