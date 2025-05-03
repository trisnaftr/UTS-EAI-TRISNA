<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Http;

class pinjamResources extends JsonResource
{
    protected $status;
    protected $message;

    public function __construct($resource, $status = 'Success', $message = '')
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }

    public function toArray($request)
    {
        if ($this->resource === null) {
            return [
                'status'  => $this->status,
                'message' => $this->message,
                'data'    => null
            ];
        }

        // Default values to prevent undefined variable issues
        $student_name  = 'Unknown Student';
        $product_name  = 'Unknown Product';
        $product_year  = 'Unknown';
        $penerbit      = 'Unknown';
        $penulis       = 'Unknown';
        $kategori      = 'Unknown';

        // Ambil data student dari USER_SERVICE
        try {
            $studentResponse = Http::get(env('USER_SERVICE') . '/api/students/' . $this->student_id);
            if ($studentResponse->successful()) {
                $student = $studentResponse->json('data');
                $student_name = $student['nama'] ?? $student_name;
            }
        } catch (\Exception $e) {
            $student_name = 'Service Unavailable';
        }

        // Ambil data product dari PRODUCT_SERVICE
        try {
            $productResponse = Http::get(env('PRODUCT_SERVICE') . '/api/products/' . $this->product_id);
            if ($productResponse->successful()) {
                $product = $productResponse->json('data');
                $product_name  = $product['judul_buku']    ?? $product_name;
                $product_year  = $product['tahun_terbit']  ?? $product_year;
                $penerbit      = $product['penerbit']      ?? $penerbit;
                $penulis       = $product['penulis']       ?? $penulis;
                $kategori      = $product['kategori']      ?? $kategori;
            }
        } catch (\Exception $e) {
            $product_name = 'Service Unavailable';
        }

        return [
            'status'  => $this->status,
            'message' => $this->message,
            'data'    => [
                'ID Peminjaman'  => $this->id,
                'Nama Mahasiswa' => $student_name,
                'Judul Buku'     => $product_name,
                'Tahun Terbit'   => $product_year,
                'Penulis'        => $penulis,
                'Penerbit'       => $penerbit,
                'Kategori'       => $kategori,
                'Tanggal Pinjam' => \Carbon\Carbon::parse($this->borrowed_at)->format('d-m-Y'),
            ],
        ];
    }
}
