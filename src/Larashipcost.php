<?php

namespace ThiccPan\Larashipcost;

class Larashipcost
{
    public static function testFunc(): string
    {
        return 'method running';
    }

    public static function enumTest()
    {
        $builder = new ProvinsiLocationBuilder();
        $builder->setId(Provinsi::BALI);
        $builder->getProvinsi();
    }
}
