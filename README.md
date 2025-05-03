# Project: OrderService
Link [Dokumentasi API Order Service](https://documenter.getpostman.com/view/44235161/2sB2j4gWs3)

## End-point: Seluruh Data Peminjaman Buku
### Method: GET
>```
>{{order_url}}/api/peminjaman/
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Data Peminjam ditampilkan",
    "data": [
        {
            "ID Peminjaman": 1,
            "Nama Mahasiswa": "Trisna Fitri",
            "Judul Buku": "The Midnight Library",
            "Tahun Terbit": "2022",
            "Penulis": "Matt Haig",
            "Penerbit": "Canongate Books",
            "Kategori": "Fiksi",
            "Tanggal Pinjam": "28-04-2025"
        },
        {
            "ID Peminjaman": 2,
            "Nama Mahasiswa": "Leon",
            "Judul Buku": "Atomic Habits",
            "Tahun Terbit": "2022",
            "Penulis": "James Clear",
            "Penerbit": "Avery",
            "Kategori": "Pengembangan Diri",
            "Tanggal Pinjam": "18-07-2024"
        },
        {
            "ID Peminjaman": 3,
            "Nama Mahasiswa": "Trisna Fitri",
            "Judul Buku": "Atomic Habits",
            "Tahun Terbit": "2022",
            "Penulis": "James Clear",
            "Penerbit": "Avery",
            "Kategori": "Pengembangan Diri",
            "Tanggal Pinjam": "30-04-2025"
        },
        {
            "ID Peminjaman": 4,
            "Nama Mahasiswa": "Miki",
            "Judul Buku": "The Midnight Library",
            "Tahun Terbit": "2022",
            "Penulis": "Matt Haig",
            "Penerbit": "Canongate Books",
            "Kategori": "Fiksi",
            "Tanggal Pinjam": "24-04-2025"
        },
        {
            "ID Peminjaman": 6,
            "Nama Mahasiswa": "Trisna Fitri",
            "Judul Buku": "Atomic Habits",
            "Tahun Terbit": "2022",
            "Penulis": "James Clear",
            "Penerbit": "Avery",
            "Kategori": "Pengembangan Diri",
            "Tanggal Pinjam": "15-01-2024"
        },
        {
            "ID Peminjaman": 8,
            "Nama Mahasiswa": "Leon",
            "Judul Buku": "Atomic Habits",
            "Tahun Terbit": "2022",
            "Penulis": "James Clear",
            "Penerbit": "Avery",
            "Kategori": "Pengembangan Diri",
            "Tanggal Pinjam": "15-01-2024"
        },
        {
            "ID Peminjaman": 10,
            "Nama Mahasiswa": "Siti Aminah",
            "Judul Buku": "Fourth Wing",
            "Tahun Terbit": "2023",
            "Penulis": "Rebecca Yarros",
            "Penerbit": "Red Tower Books",
            "Kategori": "Fantasi",
            "Tanggal Pinjam": "20-12-2022"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Menambahkan Data Peminjaman
### Method: POST
>```
>{{order_url}}/api/peminjaman/
>```
### Body (**raw**)

```json
{
    "student_id": 9,
    "product_id": ,
    "borrowed_at": "26-07-2024"
}
```

### Response: 201
```json
{
    "status": "Success",
    "message": "Peminjaman berhasil dibuat",
    "data": {
        "ID Peminjaman": 14,
        "Nama Mahasiswa": "Raka Pratama",
        "Judul Buku": "Fourth Wing",
        "Tahun Terbit": "2023",
        "Penulis": "Rebecca Yarros",
        "Penerbit": "Red Tower Books",
        "Kategori": "Fantasi",
        "Tanggal Pinjam": "26-07-2024"
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": {
        "student_id": [
            "The student id field is required."
        ],
        "product_id": [
            "The product id field is required."
        ],
        "borrowed_at": [
            "The borrowed at field is required."
        ]
    },
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get Peminjaman by ID
### Method: GET
>```
>{{order_url}}/api/peminjaman/20
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Data Peminjaman ditemukan",
    "data": {
        "ID Peminjaman": 1,
        "Nama Mahasiswa": "Trisna Fitri",
        "Judul Buku": "The Midnight Library",
        "Tahun Terbit": "2022",
        "Penulis": "Matt Haig",
        "Penerbit": "Canongate Books",
        "Kategori": "Fiksi",
        "Tanggal Pinjam": "28-04-2025"
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": "Data Peminjaman tidak ditemukan",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get Peminjaman by Tahun
Mendapatkan data peminjaman berdasarkan tahun pinjam
### Method: GET
>```
>undefined
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Data Peminjaman tahun 2024 ditemukan",
    "data": [
        {
            "ID Peminjaman": 2,
            "Nama Mahasiswa": "Leon",
            "Judul Buku": "Atomic Habits",
            "Tahun Terbit": "2022",
            "Penulis": "James Clear",
            "Penerbit": "Avery",
            "Kategori": "Pengembangan Diri",
            "Tanggal Pinjam": "18-07-2024"
        },
        {
            "ID Peminjaman": 6,
            "Nama Mahasiswa": "Trisna Fitri",
            "Judul Buku": "Atomic Habits",
            "Tahun Terbit": "2022",
            "Penulis": "James Clear",
            "Penerbit": "Avery",
            "Kategori": "Pengembangan Diri",
            "Tanggal Pinjam": "15-01-2024"
        },
        {
            "ID Peminjaman": 8,
            "Nama Mahasiswa": "Leon",
            "Judul Buku": "Atomic Habits",
            "Tahun Terbit": "2022",
            "Penulis": "James Clear",
            "Penerbit": "Avery",
            "Kategori": "Pengembangan Diri",
            "Tanggal Pinjam": "15-01-2024"
        },
        {
            "ID Peminjaman": 14,
            "Nama Mahasiswa": "Raka Pratama",
            "Judul Buku": "Fourth Wing",
            "Tahun Terbit": "2023",
            "Penulis": "Rebecca Yarros",
            "Penerbit": "Red Tower Books",
            "Kategori": "Fantasi",
            "Tanggal Pinjam": "26-07-2024"
        }
    ]
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": "Tidak ada peminjaman di tahun 2027",
    "data": []
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Update by ID
### Method: PUT
>```
>{{order_url}}/api/peminjaman/6
>```
### Body (**raw**)

```json
{
    "student_id": 2,
    "product_id": 1,
    "borrowed_at": ""
}
```

### Response: 200
```json
{
    "status": "Success",
    "message": "Data Peminjaman berhasil diperbarui",
    "data": {
        "ID Peminjaman": 6,
        "Nama Mahasiswa": "Leon",
        "Judul Buku": "It Ends with Us",
        "Tahun Terbit": "2022",
        "Penulis": "Colleen Hoover",
        "Penerbit": "Atria Books",
        "Kategori": "Romantis",
        "Tanggal Pinjam": "16-02-2024"
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": {
        "borrowed_at": [
            "The borrowed at field must match the format d-m-Y."
        ]
    },
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Delete
### Method: DELETE
>```
>{{order_url}}/api/peminjaman/14
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Data Peminjaman berhasil dihapus",
    "data": null
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": "Data Peminjaman tidak ditemukan",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
