## Endpoints

* Get informasi gunung : ``` GET api/informasi-gunung ```
``` 
{
  "message": "Informasi Gunung",
  "data": {
    "jumlah_pendaki": 5,
    "kuota_maksimal": "1500",
    "sisa_kuota": 1495,
    "kuota_tiap_jalur": [
      {
        "id": 2,
        "nama": "Celia Toy",
        "kuota": 498
      },
      {
        "id": 4,
        "nama": "Miller Brown MD",
        "kuota": 497
      },
      {
        "id": 5,
        "nama": "Aubrey Leannon",
        "kuota": 500
      }
    ]
  }
}
```
