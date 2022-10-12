<?php

namespace ThiccPan\Larashipcost;

use Illuminate\Support\Facades\Http;

class KotaLocationBuilder implements LocationBuilder
{
    protected $id;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getKota()
    {
        $response = Http::withHeaders([
            'key' => config('larashipcost.api_key'),

        ])->get('https://api.rajaongkir.com/starter/city', [
            'id' => $this->id,

        ]);

        dd($response->body());
    }

    public function getAllKota()
    {
    }
}
