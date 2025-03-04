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
|1     | Bali   
|2     | Bangka Belitung
|3     | Banten
|4     | Bengkulu
|5     | DI Yogyakarta
|6     | DKI Jakarta
|7     | Gorontalo
|8     | Jambi
|9     | Jawa Barat
|10    | Jawa Tengah
|11    | Jawa Timur
|12    | Kalimantan Barat
|13    | Kalimantan Selatan
|14    | Kalimantan Tengah
|15    | Kalimantan Timur
|16    | Kalimantan Utara
|17    | Kepulauan Riau
|18    | Lampung
|19    | Maluku
|20    | Maluku Utara
|21    | Nanggroe Aceh Darussalam (NAD)
|22    | Nusa Tenggara Barat (NTB)
|23    | Nusa Tenggara Timur (NTT)
|24    | Papua
|25    | Papua Barat
|26    | Riau
|27    | Sulawesi Barat
|28    | Sulawesi Selatan
|29    | Sulawesi Tengah
|30    | Sulawesi Tenggara
|31    | Sulawesi Utara
|32    | Sumatera Barat
|33    | Sumatera Selatan
|34    | Sumatera Utara

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
| 151   | Kota Jakarta Barat                 |
| 152   | Kota Jakarta Pusat          |
| 153   | Kota Jakarta Selata          |
| 154   | Kota Jakarta Timur          |
| 155   | Kota Jakarta Utara          |
| 156   | Kota Jambi          |
| 157   | Kabupaten Jayapura          |
| 158   | Kota Jayapura          |
| 159   | Kabupaten Jayawijaya          |
| 160   | Kabupaten Jember          |
| 161   | Kabupaten Jembrana          |
| 162   | Kabupaten Jeneponto          |
| 163   | Kabupaten Jepara          |
| 164   | Kabupaten Jombang          |
| 165   | Kabupaten Kaimana          |
| 166   | Kabupaten Kampar          |
| 167   | Kabupaten Kapuas          |
| 168   | Kabupaten Kapuas Hulu          |
| 169   | Kabupaten Karanganyar          |
| 170   | Kabupaten Karangasem          |
| 171   | Kabupaten Karawang          |
| 172   | Kabupaten Karimun          |
| 173   | Kabupaten Karo          |
| 174   | Kabupaten Katingan          |
| 175   | Kabupaten Kaur          |
| 176   | Kabupaten Kayong Utara          |
| 177   | Kabupaten Kebumen          |
| 178   | Kabupaten Kediri          |
| 179   | Kota Kediri          |
| 180   | Kabupaten Keerom          |
| 181   | Kabupaten Kendal          |
| 182   | Kota Kendari          |
| 183   | Kabupaten Kepahiang          |
| 184   | Kabupaten Kepulauan Anambas             |
| 185   | Kabupaten Kepulauan Aru           |
| 186   | Kabupaten Kepulauan Mentawai           |
| 187   | Kabupaten Kepulauan Meranti           |
| 188   | Kabupaten Kepulauan Sangihe           |
| 189   | Kabupaten Kepulauan Seribu           |
| 190   | Kabupaten Kepulauan Siau Tagulandang Biaro          |
| 191   | Kabupaten Kepulauan Sula           |
| 192   | Kabupaten Kepulauan Talaud           |
| 193   | Kabupaten Kepulauan Yapen (Yapen Waropen)           |
| 194   | Kabupaten Kerinci                     |
| 195   | Kabupaten Ketapang          |
| 196   | Kabupaten Klaten          |
| 197   | Kabupaten Klungkung          |
| 198   | Kabupaten Kolaka          |
| 199   | Kabupaten Kolaka Utara          |
| 200   | Kabupaten Konawe          |
| 201   | Kabupaten Konawe Selatan          |
| 202   | Kabupaten Konawe Utara          |
| 203   | Kabupaten Kotabaru          |
| 204   | Kota Kotamobagu          |
| 205   | Kabupaten Kotawaringin Barat          |
| 206   | Kabupaten Kotawaringin Timur          |
| 207   | Kabupaten Kuantan Singingi          |
| 208   | Kabupaten Kubu Raya          |
| 209   | Kabupaten Kudus          |
| 210   | Kabupaten Kulon Progo          |
| 211   | Kabupaten Kuningan          |
| 212   | Kabupaten Kupang          |
| 213   | Kota Kupang          |
| 214   | Kabupaten Kutai Barat          |
| 215   | Kabupaten Kutai Kartanegara          |
| 216   | Kabupaten Kutai Timur          |
| 217   | Kabupaten Labuhan Batu          |
| 218   | Kabupaten Labuhan Batu Selatan          |
| 219   | Kabupaten Labuhan Batu Utara          |
| 220   | Kabupaten Lahat          |
| 221   | Kabupaten Lamandau          |
| 222   | Kabupaten Lamongan          |
| 223   | Kabupaten Lampung Barat          |
| 224   | Kabupaten Lampung Selatan          |
| 225   | Kabupaten Lampung Tengah          |
| 226   | Kabupaten Lampung Timur          |
| 227   | Kabupaten Lampung Utara          |
| 228   | Kabupaten Landak          |
| 229   | Kabupaten Langkat          |
| 230   | Kota Langsa          |
| 231   | Kabupaten Lanny Jaya          |
| 232   | Kabupaten Lebak          |
| 233   | Kabupaten Lebong          |
| 234   | Kabupaten Lembata          |
| 235   | Kota Lhokseumawe          |
| 236   | Kabupaten Lima Puluh Koto/Kota          |
| 237   | Kabupaten Lingga          |
| 238   | Kabupaten Lombok Barat          |
| 239   | Kabupaten Lombok Tengah          |
| 240   | Kabupaten Lombok Timur          |
| 241   | Kabupaten Lombok Utara          |
| 242   | Kota Lubuk Linggau          |
| 243   | Kabupaten Lumajang          |
| 244   | Kabupaten Luwu          |
| 245   | Kabupaten Luwu Timur          |
| 246   | Kabupaten Luwu Utara          |
| 247   | Kabupaten Madiun          |
| 248   | Kota Madiun          |
| 249   | Kabupaten Magelang          |
| 250   | Kota Magelang          |
| 251	|	Kabupaten Magetan	
| 252	|	Kabupaten Majalengka	         |
| 253	|	Kabupaten Majene	         |
| 254	|	Kota Makassar	         |
| 255	|	Kabupaten Malang	         |
| 256	|	Kota Malang	         |
| 257	|	Kabupaten Malinau	         |
| 258	|	Kabupaten Maluku Barat Daya	         |
| 259	|	Kabupaten Maluku Tengah	         |
| 260	|	Kabupaten Maluku Tenggara	         |
| 261	|	Kabupaten Maluku Tenggara Barat	         |
| 262	|	Kabupaten Mamasa	         |
| 263	|	Kabupaten Mamberamo Raya	         |
| 264	|	Kabupaten Mamberamo Tengah	         |
| 265	|	Kabupaten Mamuju	         |
| 266	|	Kabupaten Mamuju Utara	         |
| 267	|	Kota Manado	         |
| 268	|	Kabupaten Mandailing Natal	         |
| 269	|	Kabupaten Manggarai	         |
| 270	|	Kabupaten Manggarai Barat	         |
| 271	|	Kabupaten Manggarai Timur	         |
| 272	|	Kabupaten Manokwari	         |
| 273	|	Kabupaten Manokwari Selatan	         |
| 274	|	Kabupaten Mappi	         |
| 275	|	Kabupaten Maros	         |
| 276	|	Kota Mataram	         |
| 277	|	Kabupaten Maybrat	         |
| 278	|	Kota Medan	         |
| 279	|	Kabupaten Melawi	         |
| 280	|	Kabupaten Merangin	         |
| 281	|	Kabupaten Merauke	         |
| 282	|	Kabupaten Mesuji	         |
| 283	|	Kota Metro	         |
| 284	|	Kabupaten Mimika	         |
| 285	|	Kabupaten Minahasa	         |
| 286	|	Kabupaten Minahasa Selatan	         |
| 287	|	Kabupaten Minahasa Tenggara	         |
| 288	|	Kabupaten Minahasa Utara	         |
| 289	|	Kabupaten Mojokerto	         |
| 290	|	Kota Mojokerto	         |
| 291	|	Kabupaten Morowali	         |
| 292	|	Kabupaten Muara Enim	         |
| 293	|	Kabupaten Muaro Jambi	         |
| 294	|	Kabupaten Muko Muko	         |
| 295	|	Kabupaten Muna	         |
| 296	|	Kabupaten Murung Raya	         |
| 297	|	Kabupaten Musi Banyuasin	         |
| 298	|	Kabupaten Musi Rawas	         |
| 299	|	Kabupaten Nabire	         |
| 300	|	Kabupaten Nagan Raya	         |
| 301	|	Kabupaten Nagekeo	         |
| 302	|	Kabupaten Natuna	         |
| 303	|	Kabupaten Nduga	         |
| 304	|	Kabupaten Ngada	         |
| 305	|	Kabupaten Nganjuk	         |
| 306	|	Kabupaten Ngawi	         |
| 307	|	Kabupaten Nias	         |
| 308	|	Kabupaten Nias Barat	         |
| 309	|	Kabupaten Nias Selatan	         |
| 310	|	Kabupaten Nias Utara	         |
| 311	|	Kabupaten Nunukan	         |
| 312	|	Kabupaten Ogan Ilir	         |
| 313	|	Kabupaten Ogan Komering Ilir	         |
| 314	|	Kabupaten Ogan Komering Ulu	         |
| 315	|	Kabupaten Ogan Komering Ulu Selatan	         |
| 316	|	Kabupaten Ogan Komering Ulu Timur	         |
| 317	|	Kabupaten Pacitan	         |
| 318	|	Kota Padang	         |
| 319	|	Kabupaten Padang Lawas	         |
| 320	|	Kabupaten Padang Lawas Utara	         |
| 321	|	Kota Padang Panjang	         |
| 322	|	Kabupaten Padang Pariaman	         |
| 323	|	Kota Padang Sidempuan	         |
| 324	|	Kota Pagar Alam	         |
| 325	|	Kabupaten Pakpak Bharat	         |
| 326	|	Kota Palangka Raya	         |
| 327	|	Kota Palembang	         |
| 328	|	Kota Palopo	         |
| 329	|	Kota Palu	         |
| 330	|	Kabupaten Pamekasan	         |
| 331	|	Kabupaten Pandeglang	         |
| 332	|	Kabupaten Pangandaran	         |
| 333	|	Kabupaten Pangkajene Kepulauan	         |
| 334	|	Kota Pangkal Pinang	         |
| 335	|	Kabupaten Paniai	         |
| 336	|	Kota Parepare	         |
| 337	|	Kota Pariaman	         |
| 338	|	Kabupaten Parigi Moutong	         |
| 339	|	Kabupaten Pasaman	         |
| 340	|	Kabupaten Pasaman Barat	         |
| 341	|	Kabupaten Paser	         |
| 342	|	Kabupaten Pasuruan	         |
| 343	|	Kota Pasuruan	         |
| 344	|	Kabupaten Pati	         |
| 345	|	Kota Payakumbuh	         |
| 346	|	Kabupaten Pegunungan Arfak	         |
| 347	|	Kabupaten Pegunungan Bintang	         |
| 348	|	Kabupaten Pekalongan	         |
| 349	|	Kota Pekalongan	         |
| 350	|	Kota Pekanbaru	         |
| 351	|	Kabupaten Pelalawan	         |
| 352	|	Kabupaten Pemalang	         |
| 353	|	Kota Pematang Siantar	         |
| 354	|	Kabupaten Penajam Paser Utara	         |
| 355	|	Kabupaten Pesawaran	         |
| 356	|	Kabupaten Pesisir Barat	         |
| 357	|	Kabupaten Pesisir Selatan	         |
| 358	|	Kabupaten Pidie	         |
| 359	|	Kabupaten Pidie Jaya	         |
| 360	|	Kabupaten Pinrang	         |
| 361	|	Kabupaten Pohuwato	         |
| 362	|	Kabupaten Polewali Mandar	         |
| 363	|	Kabupaten Ponorogo	         |
| 364	|	Kabupaten Pontianak	         |
| 365	|	Kota Pontianak	         |
| 366	|	Kabupaten Poso	         |
| 367	|	Kota Prabumulih	         |
| 368	|	Kabupaten Pringsewu	         |
| 369	|	Kabupaten Probolinggo	         |
| 370	|	Kota Probolinggo	         |
| 371	|	Kabupaten Pulang Pisau	         |
| 372	|	Kabupaten Pulau Morotai	         |
| 373	|	Kabupaten Puncak	         |
| 374	|	Kabupaten Puncak Jaya	         |
| 375	|	Kabupaten Purbalingga	         |
| 376	|	Kabupaten Purwakarta	         |
| 377	|	Kabupaten Purworejo	         |
| 378	|	Kabupaten Raja Ampat	         |
| 379	|	Kabupaten Rejang Lebong	         |
| 380	|	Kabupaten Rembang	         |
| 381	|	Kabupaten Rokan Hilir	         |
| 382	|	Kabupaten Rokan Hulu	         |
| 383	|	Kabupaten Rote Ndao	         |
| 384	|	Kota Sabang	         |
| 385	|	Kabupaten Sabu Raijua	         |
| 386	|	Kota Salatiga	         |
| 387	|	Kota Samarinda	         |
| 388	|	Kabupaten Sambas	         |
| 389	|	Kabupaten Samosir	         |
| 390	|	Kabupaten Sampang	         |
| 391	|	Kabupaten Sanggau	         |
| 392	|	Kabupaten Sarmi	         |
| 393	|	Kabupaten Sarolangun	         |
| 394	|	Kota Sawah Lunto	         |
| 395	|	Kabupaten Sekadau	         |
| 396	|	Kabupaten Selayar  Kepulauan Selayar)	         |
| 397	|	Kabupaten Seluma	         |
| 398	|	Kabupaten Semarang	         |
| 399	|	Kota Semarang	         |
| 400	|	Kabupaten Seram Bagian Barat	         |
| 401	|	Kabupaten Seram Bagian Timur	         |
| 402	|	Kabupaten Serang	         |
| 403	|	Kota Serang	         |
| 404	|	Kabupaten Serdang Bedagai	         |
| 405	|	Kabupaten Seruyan	         |
| 406	|	Kabupaten Siak	         |
| 407	|	Kota Sibolga	         |
| 408	|	Kabupaten Sidenreng Rappang/Rapang	         |
| 409	|	Kabupaten Sidoarjo	         |
| 410	|	Kabupaten Sigi	         |
| 411	|	Kabupaten Sijunjung  Sawah Lunto Sijunjung)	         |
| 412	|	Kabupaten Sikka	         |
| 413	|	Kabupaten Simalungun	         |
| 414	|	Kabupaten Simeulue	         |
| 415	|	Kota Singkawang	         |
| 416	|	Kabupaten Sinjai	         |
| 417	|	Kabupaten Sintang	         |
| 418	|	Kabupaten Situbondo	         |
| 419	|	Kabupaten Sleman	         |
| 420	|	Kabupaten Solok	         |
| 421	|	Kota Solok	         |
| 422	|	Kabupaten Solok Selatan	         |
| 423	|	Kabupaten Soppeng	         |
| 424	|	Kabupaten Sorong	         |
| 425	|	Kota Sorong	         |
| 426	|	Kabupaten Sorong Selatan	         |
| 427	|	Kabupaten Sragen	         |
| 428	|	Kabupaten Subang	         |
| 429	|	Kota Subulussalam	         |
| 430	|	Kabupaten Sukabumi	         |
| 431	|	Kota Sukabumi	         |
| 432	|	Kabupaten Sukamara	         |
| 433	|	Kabupaten Sukoharjo	         |
| 434	|	Kabupaten Sumba Barat	         |
| 435	|	Kabupaten Sumba Barat Daya	         |
| 436	|	Kabupaten Sumba Tengah	         |
| 437	|	Kabupaten Sumba Timur	         |
| 438	|	Kabupaten Sumbawa	         |
| 439	|	Kabupaten Sumbawa Barat	         |
| 440	|	Kabupaten Sumedang	         |
| 441	|	Kabupaten Sumenep	         |
| 442	|	Kota Sungaipenuh	         |
| 443	|	Kabupaten Supiori	         |
| 444	|	Kota Surabaya	         |
| 445	|	Kota Surakarta  Solo)	         |
| 446	|	Kabupaten Tabalong	         |
| 447	|	Kabupaten Tabanan	         |
| 448	|	Kabupaten Takalar	         |
| 449	|	Kabupaten Tambrauw	         |
| 450	|	Kabupaten Tana Tidung	         |
| 451	|	Kabupaten Tana Toraja	         |
| 452	|	Kabupaten Tanah Bumbu	         |
| 453	|	Kabupaten Tanah Datar	         |
| 454	|	Kabupaten Tanah Laut	         |
| 455	|	Kabupaten Tangerang	         |
| 456	|	Kota Tangerang	         |
| 457	|	Kota Tangerang Selatan	         |
| 458	|	Kabupaten Tanggamus	         |
| 459	|	Kota Tanjung Balai	         |
| 460	|	Kabupaten Tanjung Jabung Barat	         |
| 461	|	Kabupaten Tanjung Jabung Timur	         |
| 462	|	Kota Tanjung Pinang	         |
| 463	|	Kabupaten Tapanuli Selatan	         |
| 464	|	Kabupaten Tapanuli Tengah	         |
| 465	|	Kabupaten Tapanuli Utara	         |
| 466	|	Kabupaten Tapin	         |
| 467	|	Kota Tarakan	         |
| 468	|	Kabupaten Tasikmalaya	         |
| 469	|	Kota Tasikmalaya	         |
| 470	|	Kota Tebing Tinggi	         |
| 471	|	Kabupaten Tebo	         |
| 472	|	Kabupaten Tegal	         |
| 473	|	Kota Tegal	         |
| 474	|	Kabupaten Teluk Bintuni	         |
| 475	|	Kabupaten Teluk Wondama	         |
| 476	|	Kabupaten Temanggung	         |
| 477	|	Kota Ternate	         |
| 478	|	Kota Tidore Kepulauan	         |
| 479	|	Kabupaten Timor Tengah Selatan	         |
| 480	|	Kabupaten Timor Tengah Utara	         |
| 481	|	Kabupaten Toba Samosir	         |
| 482	|	Kabupaten Tojo Una-Una	         |
| 483	|	Kabupaten Toli-Toli	         |
| 484	|	Kabupaten Tolikara	         |
| 485	|	Kota Tomohon	         |
| 486	|	Kabupaten Toraja Utara	         |
| 487	|	Kabupaten Trenggalek	         |
| 488	|	Kota Tual	         |
| 489	|	Kabupaten Tuban	         |
| 490	|	Kabupaten Tulang Bawang	         |
| 491	|	Kabupaten Tulang Bawang Barat	         |
| 492	|	Kabupaten Tulungagung	         |
| 493	|	Kabupaten Wajo	         |
| 494	|	Kabupaten Wakatobi	         |
| 495	|	Kabupaten Waropen	         |
| 496	|	Kabupaten Way Kanan	         |
| 497	|	Kabupaten Wonogiri	         |
| 498	|	Kabupaten Wonosobo	         |
| 499	|	Kabupaten Yahukimo	         |
| 500	|	Kabupaten Yalimo	         |
| 501	|	Kota Yogyakarta	         |




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
