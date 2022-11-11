<?php

namespace Suainul\Rajaongkir\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class ApiService
{
    private Client $client;
    private string $method;
    protected string $key;
    protected string $url;
    protected array $data = [];
    public function __construct()
    {
        $this->client = new Client();
        $this->key = config("rajaongkir.key");
    }
    protected function process()
    {
        try {
            $response = $this->client->request($this->method, config("rajaongkir.api") . $this->url, [
                'headers' => [
                   "Content-Type" => "application/json",
                   "key" => $this->key
                ],
                'connect_timeout' => 5,
                'json' => $this->data,
            ]);
            return $response;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
        }
    }
    protected function post(string $url)
    {
        $this->url = $url;
        $this->method = 'POST';
        return $this;
    }
    protected function get(string $url)
    {
        $this->url = $url;
        $this->method = 'GET';
        return $this;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }
}