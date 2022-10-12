<?php 

namespace ThiccPan\Larashipcost;
use ThiccPan\Larashipcost\LocationBuilder;
use Illuminate\Support\Facades\Http;

class ProvinsiLocationBuilder implements LocationBuilder
{
  protected $id;

  public function setId(int $id):void
  {
    $this->id = $id;
  }

  public function getProvinsi()
  {
    $response = Http::withHeaders([
      'key' => config('larashipcost.api_key')
      
      ])->get('https://api.rajaongkir.com/starter/province', [
      'id' => $this->id,
      
    ]);

    return $response->body();
  }

  public function getAllProvinsi()
  {
    
  }

  public function getKey()
  {
    return config('larashipcost.api_key');
  }
}
