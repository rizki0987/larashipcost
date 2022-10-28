<?php

namespace ThiccPan\Larashipcost;

use Illuminate\Support\Facades\Http;

class ProvinsiLocationBuilder implements LocationBuilder
{
    protected $id;

    public function setId($idProvinsi): ProvinsiLocationBuilder
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

enum Provinsi: int
{
    case BALI = 1;
    case BANGKA_BELITUNG = 2;
    case BANTEN = 3;
    case BENGKULU = 4;
    case DI_YOGYAKARTA = 5;
    case DKI_JAKARTA = 6;
    case GORONTALO = 7;
    case JAMBI = 8;
    case JAWA_BARAT = 9;
    case JAWA_TENGAH = 10;
    case JAWA_TIMUR = 11;
    case KALIMANTAN_BARAT = 12;
    case KALIMANTAN_SELATAN = 13;
    case KALIMANTAN_TENGAH = 14;
    case KALIMANTAN_TIMUR = 15;
    case KALIMANTAN_UTARA = 16;
    case KEPULAUAN_RIAU = 17;
    case LAMPUNG = 18;
    case MALUKU = 19;
    case MALUKU_UTARA = 20;
    case NANGGROE_ACEH_DARUSSALAM = 21;
    case NUSA_TENGGARA_BARAT = 22;
    case NUSA_TENGGARA_TIMUR = 23;
    case PAPUA = 24;
    case PAPUA_BARAT = 25;
    case RIAU = 26;
    case SULAWESI_BARAT = 27;
    case SULAWESI_SELATAN = 28;
    case SULAWESI_TENGAH = 29;
    case SULAWESI_TENGGARA = 30;
    case SULAWESI_UTARA = 31;
    case SUMATERA_BARAT = 32;
    case SUMATERA_SELATAN = 33;
    case SUMATERA_UTARA = 34;
}
