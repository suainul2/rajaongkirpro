<?php

namespace Suainul\Rajaongkir;

use Suainul\Rajaongkir\Services\ApiService;

class Subdistrict extends ApiService
{
    public function __construct()
    {
        parent::__construct();   
    }
    public function search($cityId,$subdistrictId = "")
    {
        return $this->get("/subdistrict?".http_build_query(["id"=> $subdistrictId,"city" =>$cityId, "key" => $this->key]))->process();
    }
}