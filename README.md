# Project: ProductService
Sebagai provider data produk dengan menyediakan seluruh data buku yang tersedia serta dapat menambahkan, menghapus dan mengupdate data buku.

Link [Dokumentasi API Product Service](https://documenter.getpostman.com/view/44235161/2sB2j4gWs5)

## End-point: Seluruh Data Buku
### Method: GET
>```
>{{book_url}}/api/products/
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Daftar Buku",
    "data": [
        {
            "id": 1,
            "judul_buku": "It Ends with Us",
            "penulis": "Colleen Hoover",
            "penerbit": "Atria Books",
            "tahun_terbit": "2022",
            "kategori": "Romantis",
            "created_at": "2025-04-30T14:18:20.000000Z",
            "updated_at": "2025-04-30T14:18:20.000000Z"
        },
        {
            "id": 2,
            "judul_buku": "The Midnight Library",
            "penulis": "Matt Haig",
            "penerbit": "Canongate Books",
            "tahun_terbit": "2022",
            "kategori": "Fiksi",
            "created_at": "2025-04-30T14:18:20.000000Z",
            "updated_at": "2025-04-30T14:18:20.000000Z"
        },
        {
            "id": 3,
            "judul_buku": "Atomic Habits",
            "penulis": "James Clear",
            "penerbit": "Avery",
            "tahun_terbit": "2022",
            "kategori": "Pengembangan Diri",
            "created_at": "2025-04-30T14:18:20.000000Z",
            "updated_at": "2025-04-30T14:18:20.000000Z"
        },
        {
            "id": 4,
            "judul_buku": "Spare",
            "penulis": "Prince Harry",
            "penerbit": "Penguin Random House",
            "tahun_terbit": "2023",
            "kategori": "Biografi",
            "created_at": "2025-04-30T14:18:20.000000Z",
            "updated_at": "2025-04-30T14:18:20.000000Z"
        },
        {
            "id": 5,
            "judul_buku": "Fourth Wing",
            "penulis": "Rebecca Yarros",
            "penerbit": "Red Tower Books",
            "tahun_terbit": "2023",
            "kategori": "Fantasi",
            "created_at": "2025-04-30T14:18:20.000000Z",
            "updated_at": "2025-04-30T14:18:20.000000Z"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Menambahkan Data Buku
### Method: POST
>```
>{{book_url}}/api/products/
>```
### Body (**raw**)

```json
{
    "judul_buku": "The Ministry of Time",
        "penulis": "Kaliane Bradley",
        "penerbit": "Atria Books",
        "tahun_terbit": "",
        "kategori": "Fiksi Ilmiah"
}
```

### Response: 201
```json
{
    "status": "Berhasil",
    "message": "Data buku baru telah ditambahkan",
    "data": {
        "judul_buku": "The Ministry of Time",
        "penulis": "Kaliane Bradley",
        "penerbit": "Atria Books",
        "tahun_terbit": "2025",
        "kategori": "Fiksi Ilmiah",
        "updated_at": "2025-05-02T18:55:01.000000Z",
        "created_at": "2025-05-02T18:55:01.000000Z",
        "id": 7
    }
}
```

### Response: 200
```json
{
    "status": "Gagal Menambahkan Buku Baru",
    "message": {
        "tahun_terbit": [
            "The tahun terbit field is required."
        ]
    },
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get Book by ID
### Method: GET
>```
>{{book_url}}/api/products/8
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Buku ditemukan",
    "data": {
        "id": 7,
        "judul_buku": "The Ministry of Time",
        "penulis": "Kaliane Bradley",
        "penerbit": "Atria Books",
        "tahun_terbit": "2025",
        "kategori": "Fiksi Ilmiah",
        "created_at": "2025-05-02T18:55:01.000000Z",
        "updated_at": "2025-05-02T18:55:01.000000Z"
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": "Buku tidak ditemukan",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Update Data
### Method: PUT
>```
>{{book_url}}/api/products/7
>```
### Body (**raw**)

```json
{
        "judul_buku": "Tomorrow, and Tomorrow, and Tomorrow",
        "penulis": "Gabrielle Zevin",
        "penerbit": "Knopf",
        "tahun_terbit": "",
        "kategori": "Fiksi Kontemporer"
}
```

### Response: 200
```json
{
    "status": "Success",
    "message": "Data Buku diperbarui",
    "data": {
        "id": 7,
        "judul_buku": "Tomorrow, and Tomorrow, and Tomorrow",
        "penulis": "Gabrielle Zevin",
        "penerbit": "Knopf",
        "tahun_terbit": "2022",
        "kategori": "Fiksi Kontemporer",
        "created_at": "2025-05-02T18:55:01.000000Z",
        "updated_at": "2025-05-02T18:59:57.000000Z"
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": {
        "tahun_terbit": [
            "The tahun terbit field is required."
        ]
    },
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Delete
### Method: DELETE
>```
>{{book_url}}/api/products/7
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Data Buku berhasil dihapus",
    "data": null
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": "Buku tidak ditemukan",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
