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

    public function setIdFromEnum($case): self
    {
        $this->id = $case->value;

        return $this;
    }

    public function getProvinsi()
    {
        $response = Http::withHeaders([
            'key' => $this->getKey(),

        ])->get('https://api.rajaongkir.com/starter/province', [
            'id' => $this->id,

        ]);

        return $response->body();
    }

    public function getAllProvinsi()
    {
        $response = Http::withHeaders([
            'key' => $this->getKey(),

        ])->get('https://api.rajaongkir.com/starter/province');

        return $response->body();
    }

    private function getKey()
    {
        return config('larashipcost.api_key');
    }
}
