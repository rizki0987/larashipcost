<?php

namespace ThiccPan\Larashipcost;
use ThiccPan\Larashipcost\LocationBuilder;
use Illuminate\Support\Facades\Http;
use ThiccPan\Larashipcost\larashipcostConf as shipcostconfig;

class KotaLocationBuilder implements LocationBuilder
{
  protected $id;

  public function setId(int $id):void
  {
    $this->id = $id;
  }

  public function getKota()
  {
    $response = Http::withHeaders([
      'key' => config('larashipcost.api_key')
      
      ])->get('https://api.rajaongkir.com/starter/city', [
      'id' => $this->id,
      
    ]);

    return $response->body();
  }

  public function getAllKota()
  {
    $response = Http::withHeaders([
      'key' => config('larashipcost.api_key')
      
      ])->get('https://api.rajaongkir.com/starter/city');

      return $response->body();
  }

}

?>