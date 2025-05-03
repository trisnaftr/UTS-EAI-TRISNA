<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Models\Peminjaman;
use App\Http\Resources\pinjamResources;
use App\Http\Resources\pinjamCollection;
use Carbon\Carbon;


class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return new pinjamCollection($peminjaman, 'Success', 'Data Peminjam ditampilkan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $validator = Validator::make($request->all(), [
        'student_id' => 'required|integer',
        'product_id' => 'required|integer',
        'borrowed_at' => 'required|date_format:d-m-Y',
    ]);

    if ($validator->fails()) {
        return new pinjamResources(null, 'Failed', $validator->errors());
    }

    // Cek Student dari UserService
    try {
        $studentResponse = Http::get(env('USER_SERVICE') . '/api/students/' . $request->student_id);
        if ($studentResponse->failed()) {
            return new pinjamResources(null, 'Failed', 'Data Mahasiswa tidak ditemukan');
        }
    } catch (\Exception $e) {
        return new pinjamResources(null, 'Failed', 'Data Mahasiswa tidak ditemukan');
    }

    // Cek Product dari ProductService
    try {
        $productResponse = Http::get(env('PRODUCT_SERVICE') . '/api/products/' . $request->product_id);
        if ($productResponse->failed()) {
            return new pinjamResources(null, 'Failed', 'Buku tidak tersedia');
        }

        $productData = $productResponse->json('data'); // Simpan data produk

    } catch (\Exception $e) {
        return new pinjamResources(null, 'Failed', 'Buku tidak tersedia');
    }

    // Format tanggal yang sesuai dengan database (Y-m-d)
    $borrowedDate = \Carbon\Carbon::createFromFormat('d-m-Y', $request->borrowed_at)->format('Y-m-d');

    // Buat Peminjaman
    $peminjaman = Peminjaman::create([
        'student_id' => $request->student_id,
        'product_id' => $request->product_id,
        'borrowed_at' => $borrowedDate,
        // Tambahkan field lain jika diperlukan
    ]);

    return new PinjamResources($peminjaman, 'Success', 'Peminjaman berhasil dibuat');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peminjaman = Peminjaman::find($id);
        if ($peminjaman) {
            return new pinjamResources($peminjaman, 'Success', 'Data Peminjaman ditemukan');
        } else {
            return new pinjamResources(null, 'Failed', 'Data Peminjaman tidak ditemukan');
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peminjaman = Peminjaman::find($id);

        if (!$peminjaman) {
            return new PinjamResources(null, 'Failed', 'Data Peminjaman tidak ditemukan');
        }

        $validator = Validator::make($request->all(), [
            'student_id' => 'sometimes|integer',
            'product_id' => 'sometimes|integer',
            'borrowed_at' => 'sometimes|date_format:d-m-Y',
        ]);

        if ($validator->fails()) {
            return new PinjamResources(null, 'Failed', $validator->errors());
        }

        if ($request->has('student_id')) {
            try {
                $studentResponse = Http::get(env('USER_SERVICE') . '/api/students/' . $request->student_id);
                if ($studentResponse->failed()) {
                    return new PinjamResources(null, 'Failed', 'Data Mahasiswa tidak ditemukan');
                }
                $peminjaman->student_id = $request->student_id;
            } catch (\Exception $e) {
                return new PinjamResources(null, 'Failed', 'Data Mahasiswa tidak ditemukan');
            }
        }

        if ($request->has('product_id')) {
            try {
                $productResponse = Http::get(env('PRODUCT_SERVICE') . '/api/products/' . $request->product_id);
                if ($productResponse->failed()) {
                    return new PinjamResources(null, 'Failed', 'Buku tidak tersedia');
                }
                $peminjaman->product_id = $request->product_id;
            } catch (\Exception $e) {
                return new PinjamResources(null, 'Failed', 'Buku tidak tersedia');
            }
        }

        if ($request->has('borrowed_at')) {
            $peminjaman->borrowed_at = Carbon::createFromFormat('d-m-Y', $request->borrowed_at)->format('Y-m-d');
        }

        $peminjaman->save();

        return new PinjamResources($peminjaman, 'Success', 'Data Peminjaman berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peminjaman = Peminjaman::find($id);

        if (!$peminjaman) {
            return new PinjamResources(null, 'Failed', 'Data Peminjaman tidak ditemukan');
        }

        $peminjaman->delete();

        return new PinjamResources(null, 'Success', 'Data Peminjaman berhasil dihapus');
    }

    public function getByYear($year)
    {
        $peminjaman = Peminjaman::whereYear('borrowed_at', $year)->get();

        if ($peminjaman->isEmpty()) {
            return new PinjamCollection([], 'Failed', "Tidak ada peminjaman di tahun $year");
        }

        return new PinjamCollection($peminjaman, 'Success', "Data Peminjaman tahun $year ditemukan");
    }
}
