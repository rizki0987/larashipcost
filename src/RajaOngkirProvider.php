<?php

namespace ThiccPan\Larashipcost;

use Illuminate\Support\Facades\Http;

class RajaOngkirProvider extends Provider implements ProviderBuilder, ProvinsiBuilder, KotaBuilder
{
    protected $url = 'https://api.rajaongkir.com/';

    public function setIdProvinsi($idProvinsi): self
    {
        $this->idProvinsi = $idProvinsi;

        return $this;
    }

    public function setIdKota($idKota): self
    {
        $this->idKota = $idKota;

        return $this;
    }

    public function setDestination($idDestination): self
    {
        $this->idDestination = $idDestination;

        return $this;
    }

    public function setWeight($weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function setCourier($courier): self
    {
        $this->courier = $courier;

        return $this;
    }

    public function getShippingCost()
    {
        $response = Http::withHeaders([
            'key' => config('larashipcost.api_key'),

        ])->post($this->url.'starter/cost', [
            'origin' => $this->idKota,
            'destination' => $this->idDestination,
            'weight' => $this->weight,
            'courier' => $this->courier,
        ]);

        return $response->body();
    }

    public function getProvinsi()
    {
        $response = Http::withHeaders([
            'key' => config('larashipcost.api_key'),

        ])->get('https://api.rajaongkir.com/starter/province');

        return $response->body();
    }

    public function getKota()
    {
        $response = Http::withHeaders([
            'key' => config('larashipcost.api_key'),
  
        ])->get('https://api.rajaongkir.com/starter/city');
  
        return $response->body();
    }
}
