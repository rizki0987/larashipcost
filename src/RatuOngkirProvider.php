<?php

namespace ThiccPan\Larashipcost;

class RatuOngkirProvider extends Provider implements ProviderBuilder
{
    protected $url = 'www.ratuongkir.com/';

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
        return $this;
    }
}
