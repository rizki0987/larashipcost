# Larashipcost

[![Latest Version on Packagist](https://img.shields.io/packagist/v/thiccpan/larashipcost.svg?style=flat-square)](https://packagist.org/packages/thiccpan/larashipcost)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/thiccpan/larashipcost/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/thiccpan/larashipcost/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/thiccpan/larashipcost.svg?style=flat-square)](https://packagist.org/packages/thiccpan/larashipcost)

Larashipcost adalah package wrapper yang berfungsi untuk mendapatkan perhitungan ongkos kirim jasa kurir menggunakan endpoint dari API [RajaOngkir](https://rajaongkir.com) dan [RatuOngkir](https://ratuongkir.com).

## Instalasi

Untuk menggunakan package:

```bash
composer require thiccpan/larashipcost
```

## Usage
<table>
<tr>
<td> Provider </td> <td> Class </td>
</tr>
<tr>
<td>
Raja Ongkir
</td>
<td>
    
```php
new RajaOngkirProvider();
```
</td>
</tr>
<tr>
<td>
Ratu Ongkir
</td>
<td>
    
```php
new RatuOngkirProvider();
```
</td>
</tr>
</table>


### Sample Usage
```php
$rajaOngkir = new RajaOngkirProvider;
$value = $rajaOngkir
        ->setIdKota(12) // Set Asal Kota berdasarkan ID
        ->setDestination(114) // Set Destinasi berdasarkan ID
        ->setWeight(1700) // Set Berat Barang
        ->setCourier("jne") // Set Kurir Barang
        ->getShippingCost(); // Get Ongkos Kirim
```

## List ID Provinsi [RajaOngkir](https://rajaongkir.com)
| ID  | Provinsi |
| ----------- | ----------- |
| Header      | Title       |
| Paragraph   | Text        |

## List ID Kota [RajaOngkir](https://rajaongkir.com)
| ID  | Kota |
| ----------- | ----------- |
| 1     | Kabupaten Aceh Barat         |
| 2     | Kabupaten Aceh Barat Daya    |
| 3     | Kabupaten Aceh Besar         |
| 4     | Kabupaten Aceh Jaya        |
| 5     | Kabupaten Aceh Selatan    |
| 6     | Kabupaten Aceh Singkil    |
| 7     | Kabupaten Aceh Tamiang        |
| 8     | Kabupaten Aceh Tengah    |
| 9     | Kabupaten Aceh Tenggara    |
| 10    | Kabupaten Aceh Timur       |
| 11    | Kabupaten Aceh Utara    |
| 12    | Kabupaten Agam    |
| 13    | Kabupaten Alor        |
| 14    | Kota Ambon    |
| 15    | Kabupaten Asahan    |
| 16    | Kabupaten Asmat        |
| 17    | Kabupaten Badung    |
| 18    | Kabupaten Balangan    |
| 19    | Kota Balikpapan        |
| 20    | Kota Banda Aceh    |
| 21    | Kota Bandar Lampung    |
| 22    | Kabupaten Bandung        |
| 23    | Kota Bandung    |
| 24    | Kabupaten Bandung Barat   |
| 25    | Kabupaten Banggai       |
| 26    | Kabupaten Banggai Kepulauan       |
| 27    | Kabupaten Bangka       |
| 28    | Kabupaten Bangka Barat       |
| 29    | Kabupaten Bangka Selatan       |
| 30    | Kabupaten Bangka Tengah       |
| 31    | Kabupaten Bangkalan       |
| 32    | Kabupaten Bangli       |
| 33    | Kabupaten Banjar       |
| 34    | Kota Banjar       |
| 35    | Kota Banjarbaru       |
| 36    | Kota Banjarmasin       |
| 37    | Kabupaten Banjarnegara       |
| 38    | Kabupaten Bantaeng       |
| 39    | Kabupaten Bantul       |
| 40    | Kabupaten Banyuasin       |
| 41    | Kabupaten Banyumas       |
| 42    | Kabupaten Banyuwangi       |
| 43    | Kabupaten Barito Kuala       |
| 44    | Kabupaten Barito Selatan       |
| 45    | Kabupaten Barito Timur       |
| 46    | Kabupaten Barito Utara       |
| 47    | Kabupaten Barru       |
| 48    | Kota Batam       |
| 49    | Kabupaten Batang          |
| 50    | Kabupaten Batang Hari          |
| 51    | Kota Batu          |
| 52    | Kabupaten Batu Bara          |
| 53    | Kota Bau-Bau          |
| 54    | Kabupaten Bekasi          |
| 55    | Kota Bekasi          |
| 56    | Kabupaten Belitung          |
| 57    | Kabupaten Belitung Timur          |
| 58    | Kabupaten Belu          |
| 59    | Kabupaten Bener Meriah          |
| 60    | Kabupaten Bengkalis          |
| 61    | Kabupaten Bengkayang          |
| 62    | Kota Bengkulu          |
| 63    | Kabupaten Bengkulu Selatan          |
| 64    | Kabupaten Bengkulu Tengah          |
| 65    | Kabupaten Bengkulu Utara          |
| 66    | Kabupaten Berau          |
| 67    | Kabupaten Biak Numfor          |
| 68    | Kabupaten Bima          |
| 69    | Kota Bima          |
| 70    | Kota Binjai          |
| 71    | Kabupaten Bintan          |
| 72    | Kabupaten Bireuen          |
| 73    | Kota Bitung          |
| 74    | Kabupaten Blitar          |
| 75    | Kota Blitar          |
| 76    | Kabupaten Blora          |
| 77    | Kabupaten Boalemo          |
| 78    | Kabupaten Bogor          |
| 79    | Kota Bogor          |
| 80    | Kabupaten Bojonegoro          |
| 81    | Kabupaten Bolaang Mongondow (Bolmong)          |
| 82    | Kabupaten Bolaang Mongondow Selatan          |
| 83    | Kabupaten Bolaang Mongondow Timur          |
| 84    | Kabupaten Bolaang Mongondow Utara          |
| 85    | Kabupaten Bombana          |
| 86    | Kabupaten Bondowoso          |
| 87    | Kabupaten Bone          |
| 88    | Kabupaten Bone Bolango          |
| 89    | Kota Bontang          |
| 90    | Kabupaten Boven Digoel          |
| 91    | Kabupaten Boyolali          |
| 92    | Kabupaten Brebes          |
| 93    | Kota Bukittinggi          |
| 94    | Kabupaten Buleleng          |
| 95    | Kabupaten Bulukumba          |
| 96    | Kabupaten Bulungan (Bulongan)          |
| 97    | Kabupaten Bungo          |
| 98    | Kabupaten Buol          |
| 99    | Kabupaten Buru          |
| 100   | Kabupaten Buru Selatan          |
| 101   | Kabupaten Buton          |
| 102   | Kabupaten Buton Utara          |
| 103   | Kabupaten Ciamis          |
| 104   | Kabupaten Cianjur          |
| 105   | Kabupaten Cilacap          |
| 106   | Kota Cilegon          |
| 107   | Kota Cimahi          |
| 108   | Kabupaten Cirebon          |
| 109   | Kota Cirebon          |
| 110   | Kabupaten Dairi           |
| 111   | Kabupaten Deiyai (Deliyai)          |
| 112   | Kabupaten Deli Serdang          |
| 113   | Kabupaten Demak          |
| 114   | Kota Denpasar          |
| 115   | Kota Depok          |
| 116   | Kabupaten Dharmasraya          |
| 117   | Kabupaten Dogiyai          |
| 118   | Kabupaten Dompu          |
| 119   | Kabupaten Donggala          |
| 120   | Kota Dumai          |
| 121   | Kabupaten Empat Lawang          |
| 122   | Kabupaten Ende          |
| 123   | Kabupaten Enrekang          |
| 124   | Kabupaten Fakfak          |
| 125   | Kabupaten Flores Timur          |
| 126   | Kabupaten Garut          |
| 127   | Kabupaten Gayo Lues          |
| 128   | Kabupaten Gianyar          |
| 129   | Kabupaten Gorontalo          |
| 130   | Kota Gorontalo          |
| 131   | Kabupaten Gorontalo Utara          |
| 132   | Kabupaten Gowa          |
| 133   | Kabupaten Gresik          |
| 134   | Kabupaten Grobogan          |
| 135   | Kabupaten Gunung Kidul          |
| 136   | Kabupaten Gunung Mas          |
| 137   | Kota Gunungsitoli          |
| 138   | Kabupaten Halmahera Barat          |
| 139   | Kabupaten Halmahera Selatan          |
| 140   | Kabupaten Halmahera Tengah          |
| 141   | Kabupaten Halmahera Timur          |
| 142   | Kabupaten Halmahera Utara          |
| 143   | Kabupaten Hulu Sungai Selatan          |
| 144   | Kabupaten Hulu Sungai Tengah          |
| 145   | Kabupaten Hulu Sungai Utara          |
| 146   | Kabupaten Humbang Hasundutan          |
| 147   | Kabupaten Indragiri Hilir          |
| 148   | Kabupaten Indragiri Hulu          |
| 149   | Kabupaten Indramayu          |
| 150   | Kabupaten Intan Jaya          |

## List ID Provinsi (RatuOngkir)
| ID | Provinsi |
| ----------- | ----------- |
| Header      | Title       |
| Paragraph   | Text        |

## List ID Kota (RatuOngkir)
| ID | Kota |
| ----------- | ----------- |
| Header      | Title       |
| Paragraph   | Text        |

## Return Value (sample)
### Get Shipping Cost
```json
{
    ...
    "results": [
      {
        "code": "jne",
        "name": "Jalur Nugraha Ekakurir (JNE)",
        "costs": [
          {
            "service": "OKE",
            "description": "Ongkos Kirim Ekonomis",
            "cost": [
              {
                "value": 66000,
                "etd": "3-4",
                "note": ""
              }
            ]
          },
          {
            "service": "REG",
            "description": "Layanan Reguler",
            "cost": [
              {
                "value": 72000,
                "etd": "2-3",
                "note": ""
              }
            ]
          }
        ]
      }
    ]
  }
}
```
### Get Provinsi
```json
{
    
}
```

## Credits

- [ThiccPan](https://github.com/ThiccPan)
- [ibrahimss02](https://github.com/ibrahimss02)
- [AlfitoDimasss](https://github.com/AlfitoDimasss)
- [lintangtrisnadi](https://github.com/lintangtrisnadi)
- [rizki0987](https://github.com/rizki0987)
- [joviar27](https://github.com/joviar27)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
