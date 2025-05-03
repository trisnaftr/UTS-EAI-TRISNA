# Project: UserService
Sebagai provider data user dengan menyediakan seluruh data mahasiswa yang telah mendaftarkan diri. Dapat menambahkan, menghapus dan mengupdate data diri mahasiswa.

Link [Dokumentasi API UserService](https://documenter.getpostman.com/view/44235161/2sB2j4gWnb)

## End-point: Seluruh Daftar Mahasiswa
Menampilkan seluruh data mahasiswa yang telah terdaftar
### Method: GET
>```
>{{student_url}}/api/students/
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "List of students",
    "data": [
        {
            "id": 1,
            "nama": "Trisna Fitri",
            "nim": "1204220099",
            "email": "trisna@example.com",
            "angkatan": "2022",
            "telepon": "081234567890",
            "created_at": "2025-04-29T18:16:14.000000Z",
            "updated_at": "2025-04-29T18:16:14.000000Z"
        },
        {
            "id": 2,
            "nama": "Leon",
            "nim": "1204230088",
            "email": "leon@example.com",
            "angkatan": "2023",
            "telepon": "085678912345",
            "created_at": "2025-04-29T18:16:14.000000Z",
            "updated_at": "2025-04-29T18:16:14.000000Z"
        },
        {
            "id": 3,
            "nama": "Miki",
            "nim": "1204240011",
            "email": "miki@example.com",
            "angkatan": "2024",
            "telepon": "081234567892",
            "created_at": "2025-04-29T18:16:14.000000Z",
            "updated_at": "2025-04-29T18:16:14.000000Z"
        },
        {
            "id": 4,
            "nama": "Siti Aminah",
            "nim": "1204210086",
            "email": "sitiam@example.com",
            "angkatan": "2021",
            "telepon": "081234567894",
            "created_at": "2025-04-29T18:16:14.000000Z",
            "updated_at": "2025-04-29T18:16:14.000000Z"
        },
        {
            "id": 6,
            "nama": "Rafi Syeghani",
            "nim": "1204220047",
            "email": "rafisyeghani@gmail.com",
            "angkatan": "2022",
            "telepon": "081234567899",
            "created_at": "2025-04-29T18:41:35.000000Z",
            "updated_at": "2025-04-29T18:41:35.000000Z"
        },
        {
            "id": 8,
            "nama": "Arifa",
            "nim": "1204220065",
            "email": "arifa@gmail.com",
            "angkatan": "2024",
            "telepon": "081234567898",
            "created_at": "2025-05-02T18:29:18.000000Z",
            "updated_at": "2025-05-02T18:29:18.000000Z"
        },
        {
            "id": 9,
            "nama": "Raka Pratama",
            "nim": "240123457",
            "email": "raka.pratama@gmail.com",
            "angkatan": "2024",
            "telepon": "081234567899",
            "created_at": "2025-05-02T18:30:52.000000Z",
            "updated_at": "2025-05-02T18:30:52.000000Z"
        },
        {
            "id": 10,
            "nama": "Dewi Lestari",
            "nim": "240123458",
            "email": "dewi.lestari@gmail.com",
            "angkatan": "2024",
            "telepon": "081234567900",
            "created_at": "2025-05-02T18:31:11.000000Z",
            "updated_at": "2025-05-02T18:31:11.000000Z"
        },
        {
            "id": 11,
            "nama": "Bayu Nugroho",
            "nim": "240123459",
            "email": "bayu.nugroho@gmail.com",
            "angkatan": "2024",
            "telepon": "081234567901",
            "created_at": "2025-05-02T18:31:26.000000Z",
            "updated_at": "2025-05-02T18:31:26.000000Z"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Menambahkan Data Mahasiswa
Menambahkan dan mendaftarkan data mahasiswa
### Method: POST
>```
>{{student_url}}/api/students/
>```
### Body (**raw**)

```json
{
        "nama": "Bayu Nugroho",
        "nim": "",
        "email": "bayu.nugroho@gmail.com",
        "angkatan": "2024",
        "telepon": "081234567901"
}
```

### Response: 201
```json
{
    "status": "Berhasil",
    "message": "Data Mahasiswa telah ditambahkan",
    "data": {
        "nama": "Arifa",
        "nim": "1204220065",
        "email": "arifa@gmail.com",
        "angkatan": "2024",
        "telepon": "081234567898",
        "updated_at": "2025-05-02T18:29:18.000000Z",
        "created_at": "2025-05-02T18:29:18.000000Z",
        "id": 8
    }
}
```

### Response: 200
```json
{
    "status": "Gagal Menambahkan",
    "message": {
        "nim": [
            "The nim field is required."
        ]
    },
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get student by ID
Mendapatkan dan mencari data mahasiswa berdasarkan ID
### Method: GET
>```
>{{student_url}}/api/students/2
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Data mahasiswa ditemukan",
    "data": {
        "id": 2,
        "nama": "Leon",
        "nim": "1204230088",
        "email": "leon@example.com",
        "angkatan": "2023",
        "telepon": "085678912345",
        "created_at": "2025-04-29T18:16:14.000000Z",
        "updated_at": "2025-04-29T18:16:14.000000Z"
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": "Data mahasiswa tidak ditemukan",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Update Data
Mengupdate data mahasiswa berdasarkan ID dari data yang telah terdaftar
### Method: PUT
>```
>{{student_url}}/api/students/6
>```
### Body (**raw**)

```json
{
        "nama": "Intan Permata",
        "nim": "240123460",
        "email": "intan.permata@gmail.com",
        "angkatan": "",
        "telepon": "081234567902"
}
```

### Response: 200
```json
{
    "status": "Success",
    "message": "Data mahasiswa ditemukan",
    "data": {
        "id": 6,
        "nama": "Intan Permata",
        "nim": "240123460",
        "email": "intan.permata@gmail.com",
        "angkatan": "2024",
        "telepon": "081234567902",
        "created_at": "2025-04-29T18:41:35.000000Z",
        "updated_at": "2025-05-02T18:36:13.000000Z"
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": {
        "angkatan": [
            "The angkatan field is required."
        ]
    },
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Delete
Menghapus data mahasiswa yang sudah terdaftar
### Method: DELETE
>```
>{{student_url}}/api/students/11
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Data mahasiswa berhasil dihapus",
    "data": null
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": "Data mahasiswa tidak ditemukan",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
