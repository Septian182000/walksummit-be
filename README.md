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

* Cari grup : ``` Get api/cari-grub/{id} ```
```
// ketika grup ditemukan
{
    "message": "grup ditemukan",
    "data": {
        "id": 1,
        "koordinator": "Dr. Arlie Hirthe Sr.",
        "status": 0,
        "jalur": "Miller Brown MD"
    }
}

// ketika grup tidak ditemukan 
{
    "message": "grup tidak ditemukan"
}
```

* Cari pelanggan : ``` Get api/cari-pelanggan/{id} ```
```
// ketika pelanggan ditemukan 
{
    "message": "pelanggan ditemukan",
    "data": {
        "id": 2,
        "grup_id": 6,
        "nik": "1111111111111111",
        "nama": "Mrs. Daphne Tromp",
        "alamat": "16210 Buckridge Row Apt. 342\nNickolasmouth, LA 45912-5139",
        "no_telp": "+13645203096",
        "no_telp_orgtua": "+13642281079",
        "checkout": 0,
        "jenis_kelamin": "L",
        "created_at": "2022-06-01T08:22:48.000000Z",
        "updated_at": "2022-06-01T08:22:48.000000Z"
    }
}

// ketika pelanggan tidak ditemukan
{
    "message": "pelanggan tidak ditemukan"
}
```

* Detail grup : ``` Get api/detail-grup/{id} ```
```
// ketika grup ditemukan
{
    "message": "grup ditemukan",
    "data": {
        "id": "4",
        "pelanggan": [
            {
                "id": 1,
                "grup_id": 4,
                "nik": "1111111111111111",
                "nama": "Prof. Gia Nicolas",
                "alamat": "98692 Marta Roads Apt. 935\nLake Brandystad, NV 57698-2500",
                "no_telp": "+16674150864",
                "no_telp_orgtua": "+13464612673",
                "checkout": 0,
                "jenis_kelamin": "L",
                "created_at": "2022-06-01T08:22:48.000000Z",
                "updated_at": "2022-06-01T08:22:48.000000Z"
            }
        ]
    }
}

// ketika detail grup tidak ditemukan 
{
    "message": "grup tidak ditemukan"
}
```
