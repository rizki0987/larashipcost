<?php

namespace ThiccPan\Larashipcost;

use Illuminate\Support\Facades\Http;

class ProvinsiLocationBuilder implements LocationBuilder
{
    protected $id;
    protected $api = "74992b910fdb480105a52aeb658e876c";

    public function setId($idProvinsi): ProvinsiLocationBuilder
    {
        $this->id = $idProvinsi;
        return $this;
    }

    public function setIdFromEnum($case): self {
        $this->id = $case->value;
        return $this;
    }

    public function getProvinsi()
    {
        $response = Http::withHeaders([
            'key' => $this->api,

        ])->get('https://api.rajaongkir.com/starter/province', [
            'id' => $this->id,

        ]);

        return $response->body();
    }

    public function getAllProvinsi()
    {
        $response = Http::withHeaders([
            'key' => $this->api,

        ])->get('https://api.rajaongkir.com/starter/province');

        return $response->body();
    }

    public function getKey()
    {
        return $this->api;
    }
}
