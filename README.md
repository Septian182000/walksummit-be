## Endpoints

* Get informasi gunung : ``` GET api/informasi-gunung ```
``` 
{
  "message": "Informasi Gunung",
  "data": {
    "jumlah_pendaki": 4,
    "kuota_maksimal": "1500",
    "sisa_kuota": 1496,
    "jumlah_pendaki_tiap_jalur": [
      {
        "jalur_id": 3,
        "jumlah": 3
      },
      {
        "jalur_id": 5,
        "jumlah": 1
      }
    ],
    "kuota_tiap_jalur": [
      {
        "id": 1,
        "nama": "Audie Grimes",
        "kuota": 500
      },
      {
        "id": 4,
        "nama": "Wellington Bergstrom",
        "kuota": 500
      },
      {
        "id": 5,
        "nama": "Abigale Heidenreich",
        "kuota": 500
      }
    ]
  }
}
```
