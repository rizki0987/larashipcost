<?php

namespace ThiccPan\Larashipcost;

interface ProviderBuilder
{
    public function setIdProvinsi($idProvinsi): self;

    public function setIdKota($idKota): self;

    public function setDestination($idDestination): self;

    public function setWeight($weight): self;

    public function setCourier($courier): self;

    public function getShippingCost();
}

abstract class Provider
{
    protected $idProvinsi;

    protected $idKota;

    protected $idDestination;

    protected $weight;

    protected $courier;
}
