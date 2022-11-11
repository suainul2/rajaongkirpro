<?php

namespace Suainul\Rajaongkir;

class Rajaongkir
{
    public function cost()
    {
        return new Cost;
    }
    public function track()
    {
        return new Tracking;
    }
    public function province()
    {
        return new Province;
    }
    public function city()
    {
        return new City;
    }
    public function subdistrict()
    {
        return new Subdistrict;
    }
}