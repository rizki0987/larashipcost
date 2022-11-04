<?php

namespace ThiccPan\Larashipcost;

use Illuminate\Support\Facades\Http;

class ProvinsiLocationBuilder implements LocationBuilder
{
    protected $id;

    public function setId($idProvinsi): self
    {
        $this->id = $idProvinsi;

        return $this;
    }

    public function getProvinsi()
    {
        $response = Http::withHeaders([
            'key' => config('larashipcost.api_key'),

        ])->get('https://api.rajaongkir.com/starter/province', [
            'id' => $this->id,

        ]);

        return $response->body();
    }

    public function getAllProvinsi()
    {
        $response = Http::withHeaders([
            'key' => config('larashipcost.api_key'),

        ])->get('https://api.rajaongkir.com/starter/province');

        return $response->body();
    }

    public function getKey()
    {
        return config('larashipcost.api_key');
    }
}