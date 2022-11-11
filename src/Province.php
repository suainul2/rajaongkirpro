<?php

namespace Suainul\Rajaongkir;

use Suainul\Rajaongkir\Services\ApiService;

class Province extends ApiService
{
    private string $id;
    public function __construct()
    {
        parent::__construct();   
    }
    public function search()
    {
        return $this->get("/province?".http_build_query(["key" => $this->key]))->process();
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }
}