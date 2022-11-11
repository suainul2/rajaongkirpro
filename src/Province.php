<?php

namespace Suainul\Rajaongkir;

use Suainul\Rajaongkir\Services\ApiService;

class Province extends ApiService
{
    public function __construct()
    {
        parent::__construct();   
    }
    public function search()
    {
        return $this->get("/province?".http_build_query(["key" => $this->key]))->process();
    }
}