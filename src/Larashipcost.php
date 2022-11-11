<?php

namespace ThiccPan\Larashipcost;

use Illuminate\Support\Facades\Http;

class Larashipcost implements InterfaceOngkirProvider, InterfaceProvinsiProvider
{
    protected $id;

    public function setId($id): self {
        $this->id = $id;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    // OVERRIDE
    public static function testFunc(): string
    {
        return 'method running pakai interface';
    }

    // OVERRIDE
    public function getAllProvinsi()
    {
        
    }

    // OVERRIDE
    public function getProvinsi($id)
    {
        $response = Http::withHeaders([
            'key' => $this->getKey(),

        ])->get('https://api.rajaongkir.com/starter/province', [
            'id' => $id,

        ]);

        return $response->body();
    }

    private function getKey()
    {
        return config('larashipcost.api_key');
    }
}
