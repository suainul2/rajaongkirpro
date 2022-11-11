<?php

namespace Suainul\Rajaongkir;

use Suainul\Rajaongkir\Services\ApiService;

class City extends ApiService
{
    public function __construct()
    {
        parent::__construct();   
    }
    public function search($provinceId = "")
    {
        return $this->get("/city?".http_build_query(["province" =>$provinceId, "key" => $this->key]))->process();
    }
}